<?php

  include 'header.php';

  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

 ?>

<div class="row">
  <a href="javascript:deleteContact('/delete.php?id=<?= $contact['id']; ?>')" class="btn btn-xs pull-right btn-delete">Delete Contact</a>

<h1>
    <div class="page-btn">
    Edit Contact
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

  <!-- automatically pulls up whichever state was originally selected -->
  <div class="form-group col-lg-2 col-md-2">
    <label for="contact_state"><h4>State</h4></label>
    <select name="state" id="contact_state" value="<?= $contact['state']; ?>" class="form-control">
      <option value="AL"<?= ($contact['state'] == 'AL') ? ' selected' : '' ?>>Alabama</option>
       <option value="AK"<?= ($contact['state'] == 'AK') ? ' selected' : '' ?>>Alaska</option>
       <option value="AZ"<?= ($contact['state'] == 'AZ') ? ' selected' : '' ?>>Arizona</option>
       <option value="AR"<?= ($contact['state'] == 'AR') ? ' selected' : '' ?>>Arkansas</option>
       <option value="CA"<?= ($contact['state'] == 'CA') ? ' selected' : '' ?>>California</option>
       <option value="CO"<?= ($contact['state'] == 'CO') ? ' selected' : '' ?>>Colorado</option>
       <option value="CT"<?= ($contact['state'] == 'CT') ? ' selected' : '' ?>>Connecticut</option>
       <option value="DE"<?= ($contact['state'] == 'DE') ? ' selected' : '' ?>>Delaware</option>
       <option value="FL"<?= ($contact['state'] == 'FL') ? ' selected' : '' ?>>Florida</option>
       <option value="GA"<?= ($contact['state'] == 'GA') ? ' selected' : '' ?>>Georgia</option>
       <option value="HI"<?= ($contact['state'] == 'HI') ? ' selected' : '' ?>>Hawaii</option>
       <option value="ID"<?= ($contact['state'] == 'ID') ? ' selected' : '' ?>>Idaho</option>
       <option value="IL"<?= ($contact['state'] == 'IL') ? ' selected' : '' ?>>Illinois</option>
       <option value="IN"<?= ($contact['state'] == 'IN') ? ' selected' : '' ?>>Indiana</option>
       <option value="IA"<?= ($contact['state'] == 'IA') ? ' selected' : '' ?>>Iowa</option>
       <option value="KS"<?= ($contact['state'] == 'KS') ? ' selected' : '' ?>>Kansas</option>
       <option value="KY"<?= ($contact['state'] == 'KY') ? ' selected' : '' ?>>Kentucky</option>
       <option value="LA"<?= ($contact['state'] == 'LA') ? ' selected' : '' ?>>Louisiana</option>
       <option value="ME"<?= ($contact['state'] == 'ME') ? ' selected' : '' ?>>Maine</option>
       <option value="MD"<?= ($contact['state'] == 'MD') ? ' selected' : '' ?>>Maryland</option>
       <option value="MA"<?= ($contact['state'] == 'MA') ? ' selected' : '' ?>>Massachusetts</option>
       <option value="MI"<?= ($contact['state'] == 'MI') ? ' selected' : '' ?>>Michigan</option>
       <option value="MN"<?= ($contact['state'] == 'MN') ? ' selected' : '' ?>>Minnesota</option>
       <option value="MS"<?= ($contact['state'] == 'MS') ? ' selected' : '' ?>>Mississippi</option>
       <option value="MO"<?= ($contact['state'] == 'MO') ? ' selected' : '' ?>>Missouri</option>
       <option value="MT"<?= ($contact['state'] == 'MT') ? ' selected' : '' ?>>Montana</option>
       <option value="NE"<?= ($contact['state'] == 'NE') ? ' selected' : '' ?>>Nebraska</option>
       <option value="NV"<?= ($contact['state'] == 'NV') ? ' selected' : '' ?>>Nevada</option>
       <option value="NH"<?= ($contact['state'] == 'NH') ? ' selected' : '' ?>>New Hampshire</option>
       <option value="NJ"<?= ($contact['state'] == 'NJ') ? ' selected' : '' ?>>New Jersey</option>
       <option value="NM"<?= ($contact['state'] == 'NM') ? ' selected' : '' ?>>New Mexico</option>
       <option value="NY"<?= ($contact['state'] == 'NY') ? ' selected' : '' ?>>New York</option>
       <option value="NC"<?= ($contact['state'] == 'NC') ? ' selected' : '' ?>>North Carolina</option>
       <option value="ND"<?= ($contact['state'] == 'ND') ? ' selected' : '' ?>>North Dakota</option>
       <option value="OH"<?= ($contact['state'] == 'OH') ? ' selected' : '' ?>>Ohio</option>
       <option value="OK"<?= ($contact['state'] == 'OK') ? ' selected' : '' ?>>Oklahoma</option>
       <option value="OR"<?= ($contact['state'] == 'OR') ? ' selected' : '' ?>>Oregon</option>
       <option value="PA"<?= ($contact['state'] == 'PA') ? ' selected' : '' ?>>Pennsylvania</option>
       <option value="RI"<?= ($contact['state'] == 'RI') ? ' selected' : '' ?>>Rhode Island</option>
       <option value="SC"<?= ($contact['state'] == 'SC') ? ' selected' : '' ?>>South Carolina</option>
       <option value="SD"<?= ($contact['state'] == 'SD') ? ' selected' : '' ?>>South Dakota</option>
       <option value="TN"<?= ($contact['state'] == 'TN') ? ' selected' : '' ?>>Tennessee</option>
       <option value="TX"<?= ($contact['state'] == 'TX') ? ' selected' : '' ?>>Texas</option>
       <option value="UT"<?= ($contact['state'] == 'UT') ? ' selected' : '' ?>>Utah</option>
       <option value="VT"<?= ($contact['state'] == 'VT') ? ' selected' : '' ?>>Vermont</option>
       <option value="VA"<?= ($contact['state'] == 'VA') ? ' selected' : '' ?>>Virginia</option>
       <option value="WA"<?= ($contact['state'] == 'WA') ? ' selected' : '' ?>>Washington</option>
       <option value="WV"<?= ($contact['state'] == 'WV') ? ' selected' : '' ?>>West Virginia</option>
       <option value="WI"<?= ($contact['state'] == 'WI') ? ' selected' : '' ?>>Wisconsin</option>
       <option value="WY"<?= ($contact['state'] == 'WY') ? ' selected' : '' ?>>Wyoming</option>
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

  <button class="btn btn-sm page-btn">Save Contact</button>
</form>

<?php include 'footer.php'; ?>
