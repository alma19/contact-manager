<?php

  include 'header.php';

  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

 ?>

<div class="row">
  <a href="javascript:deleteContact('/delete.php?id=<?= $contact['id']; ?>')" class="btn btn-danger btn-xs pull-right btn-delete">Delete Contact</a>

<h1>
    <div>
    Edit Contact
  </div>
</div>
</h1>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

  <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <label for="contact_title"><h4>Title</h4></label>
    <input class="form-control" type="text" name="title" id="contact_title" value="<?= $contact['title']; ?>" />
  </div>

  <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
    <label for="contact_first_name"><h4>First Name</h4></label>
    <input class="form-control" type="text" name="first_name" id="contact_first_name" value="<?= $contact['first_name']; ?>" />
  </div>

  <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
    <label for="contact_last_name"><h4>Last Name</h4></label>
    <input class="form-control" type="text" name="last_name" id="contact_last_name" value="<?= $contact['last_name']; ?>" />
  </div>


  <div class="form-group col-lg-12 col-md-12">
    <label for="contact_address"><h4>Address</h4></label>
    <input class="form-control" type="text" name="address" id="contact_address" value="<?= $contact['address']; ?>" />
  </div>

  <div class="form-group col-lg-7 col-md-7">
    <label for="contact_city"><h4>City</h4></label>
    <input class="form-control" type="text" name="city" id="contact_city" value="<?= $contact['city']; ?>" />
  </div>

  <div class="form-group col-lg-2 col-md-2">
    <label for="contact_state"><h4>State</h4></label>
    <select name="state" id="contact_state" value="<?= $contact['state']; ?>" class="form-control">
      <option value="AL">Alabama</option>
      <option value="AK">Alaska</option>
      <option value="AZ">Arizona</option>
      <option value="AR">Arkansas</option>
      <option value="CA">California</option>
      <option value="CO">Colorado</option>
      <option value="CT">Conneticut</option>
      <option value="DE">Delaware</option>
      <option value="FL">Florida</option>
      <option value="GA">Georgia</option>
      <option value="HI">Hawaii</option>
      <option value="ID">Idaho</option>
      <option value="IL">Illinois</option>
      <option value="IN">Indiana</option>
      <option value="IA">Iowa</option>
      <option value="KS">Kansas</option>
      <option value="KY">Kentucky</option>
      <option value="LA">Louisiana</option>
      <option value="ME">Maine</option>
      <option value="MD">Maryland</option>
      <option value="MA">Massachusetts</option>
      <option value="MI">Michigan</option>
      <option value="MN">Minnesota</option>
      <option value="MS">Mississippi</option>
      <option value="MO">Missouri</option>
      <option value="MT">Montana</option>
      <option value="NE">Nebraska</option>
      <option value="NV">Nevada</option>
      <option value="NH">New Hampshire</option>
      <option value="NJ">New Jersey</option>
      <option value="NM">New Mexico</option>
      <option value="NY">New York</option>
      <option value="NC">North Carolina</option>
      <option value="ND">North Dakota</option>
      <option value="OH">Ohio</option>
      <option value="OK">Oklahoma</option>
      <option value="OR">Oregon</option>
      <option value="PA">Pennsylvania</option>
      <option value="RI">Rhode Island</option>
      <option value="SC">South Carolina</option>
      <option value="SD">South Dakota</option>
      <option value="TN">Tennessee</option>
      <option value="TX">Texas</option>
      <option value="UT">Utah</option>
      <option value="VT">Vermont</option>
      <option value="VA">Virginia</option>
      <option value="WA">Washington</option>
      <option value="WV">West Virginia</option>
      <option value="WI">Wisconsin</option>
      <option value="WY">Wyoming</option>
    </select>
  </div>

  <div class="form-group col-lg-2 col-md-2">
    <label for="contact_zipcode"><h4>Zip Code</h4></label>
    <input class="form-control" type="text" name="zipcode" id="contact_zipcode" value="<?= $contact['zipcode']; ?>" />
  </div>

  <div class="form-group col-lg-12 col-md-12">
    <label for="contact_phone"><h4>Phone Number</h4></label>
    <input class="form-control" type="text" name="phone" id="contact_phone" value="<?= $contact['phone']; ?>" />
  </div>

  <div class="form-group col-lg-12 col-md-12">
    <label for="contact_notes"><h4>Notes</h4></label>
    <textarea class="form-control" name="notes" id="contact_notes"><?=$contact['notes'];?></textarea>
  </div>

  <button class="btn btn-primary">Save Contact</button>
</form>

<?php include 'footer.php'; ?>
