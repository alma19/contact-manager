<?php
  include 'header.php';


// creating contacts variable, saves contacts in an array
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
 ?>

<h1>Contacts</h1>
<h3>Current Contacts: <?= count($contacts); ?></h3>

<table class="table table-hover">
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

  <tbody>
    <?php foreach ($contacts as $contact) :?>
      <tr>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['id']; ?></a></td>
        <td><?= $contact['first_name']; ?></td>
        <td><?= $contact['last_name']; ?></td>
        <td><?= $contact['title']; ?></td>
        <td><?= $contact['address']; ?></td>
        <td><?= $contact['city']; ?></td>
        <td><?= $contact['state']; ?></td>
        <td><?= $contact['zipcode']; ?></td>
        <td><?= $contact['phone']; ?></td>
        <td><?= $contact['notes']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>
