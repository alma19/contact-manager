<?php
  include 'header.php';


// creating contacts variable, saves contacts in an array
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
 ?>

 
 <?php if (array_key_exists('updated', $_GET)) : ?>
 <div class="alert alert-success">
   <p><strong>Your contact has been updated!</strong></p>
 </div>
 <?php endif; ?>

 <?php if (array_key_exists('created', $_GET)) : ?>
 <div class="alert alert-info">
   <p><strong>Your contact has been created!</strong></p>
 </div>
 <?php endif; ?>

 <?php if (array_key_exists('deleted', $_GET)) : ?>
 <div class="alert alert-danger">
   <p><strong>Your contact has been deleted!</strong></p>
 </div>
 <?php endif; ?>

<h1>Contacts</h1>
<h3><span class="text-muted">Current Contacts: <?= count($contacts); ?></span></h3>

<table class="table table-hover table-repsonsive table-bordered table-striped">
  <thead>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City</th>
    <th>State</th>
    <th>Actions</th>
  </thead>

  <!-- show contacts on page. when you click on a contact, it'll take you to the edit page for the ID -->
  <tbody>
    <?php foreach ($contacts as $contact) :?>
      <tr>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['id']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['first_name']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['last_name']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['city']; ?></a></td>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['state']; ?></a></td>
        <!-- i stole the idea of using the edit and delete symbols from alexis so shoutout 2 her  -->
        <td>
          <a href="/edit.php?id=<?=$contact['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
          <a href="javascript:deleteContact('/delete.php?id=<?= $contact['id']; ?>')"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>
