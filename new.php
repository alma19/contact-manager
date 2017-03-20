<?php

  include 'header.php';

?>


<h1>
  <div>
    New Contact
  </div>
</h1>


<!-- new contact input forms  -->
<form method="POST" action="/create.php">
  <div class="form-group col-lg-2 col-md-2">
    <label for="contact_title">Title</label>
    <input class="form-control" type="text" name="title" id="contact_title" value="" placeholder="Title" />
  </div>

  <div class="form-group col-lg-5 col-md-5">
    <label for="contact_first_name">First Name</label>
    <input class="form-control" type="text" name="first_name" id="contact_first_name" value="" placeholder="First Name" />
  </div>

  <div class="form-group col-lg-5 col-md-5">
    <label for="contact_last_name">Last Name</label>
    <input class="form-control" type="text" name="last_name" id="contact_last_name" value=""  placeholder="Last Name"/>
  </div>


  <div class="form-group col-lg-12">
    <label for="contact_address">Address</label>
    <input class="form-control" type="text" name="address" id="contact_address" value="" placeholder="Address" />
  </div>

  <div class="form-group col-lg-7 col-lg-7">
    <label for="contact_city">City</label>
    <input class="form-control" type="text" name="city" id="contact_city" value="" placeholder="City" />
  </div>

  <div class="form-group col-lg-2 col-md-2">
    <label for="contact_state">State</label>
    <select name="state" id="contact_state" value="" class="form-control">
      <option value="" selected>Select State</option>
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
    <label for="contact_zipcode">Zip Code</label>
    <input class="form-control" type="text" name="zipcode" id="contact_zipcode" value="" placeholder="Zip Code" />
  </div>

  <div class="form-group col-lg-12">
    <label for="contact_phone">Phone Number</label>
    <input class="form-control" type="text" name="phone" id="contact_phone" value="" placeholder="Phone Number" />
  </div>

  <div class="form-group col-lg-12">
    <label for="contact_notes">Notes</label>
    <textarea class="form-control" name="notes" id="contact_notes" placeholder="Notes"></textarea>
  </div>

  <button class="btn btn-sm">Create New Contact</button>

</form>

<?php include 'footer.php' ?>
