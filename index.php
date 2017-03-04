<?php
  include 'header.php';


// creating contacts variable, saves contacts in an array
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
 ?>

<h1>Contacts</h1>
<h3>Current Contacts: <?= count($contacts); ?></h3>

<table class="table table-hover table-repsonsive">
  <thead>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Title</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zip Code</th>
    <th>Phone Number</th>
    <th>Notes</th>
  </thead>

  <!-- show contacts on page. when you click on a contact, it'll take you to the edit page for the ID -->
  <tbody>
    <?php foreach ($contacts as $contact) :?>
      <tr>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['id']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['first_name']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['last_name']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['title']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['address']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['city']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['state']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['zipcode']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['phone']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['notes']; ?></a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>
