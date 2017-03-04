<?php

include 'database.php';


//provide fields to insert, double quotes allow you to make new line breaks
//  field names / column names
$stmt = $db->prepare("INSERT INTO contacts
  (first_name, last_name, title, address, city, state, zipcode, phone, notes)
  VALUES
  (:first_name, :last_name, :title, :address, :city, :state, :zipcode, :phone, :notes)
");


//tell mySQL which values to replace those with
$stmt->execute(array(
  ':first_name' => $_POST['first_name'],
  ':last_name' => $_POST['last_name'],
  ':title' => $_POST['title'],
  ':address' => $_POST['address'],
  ':city' => $_POST['city'],
  ':state' => $_POST['state'],
  ':zipcode' => $_POST['zipcode'],
  ':phone' => $_POST['phone'],
  ':notes' => $_POST['notes'],
));

//get last inserted id into database to set as new ID
$id = $db->lastInsertId();


  //redirecting
header('Location: http://localhost:8080/index.php?id=' . $id . '&created=true');
?>
