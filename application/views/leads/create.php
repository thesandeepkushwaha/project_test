<h2 class="text-center"><?php echo $title; ?></h2>
<div class="container">
<?php echo validation_errors(); ?>
 
<?php echo form_open('leads/create'); ?>
<form>
  <div class="form-group">
    <label for="uname">Name</label>
    <input type="input" class="form-control"  name="uname" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="phone_no">Phone No</label>
    <input type="input" class="form-control"  name="phone_no" placeholder="Enter Phone No">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="input" class="form-control"  name="email" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="input" class="form-control"  name="address"  placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="input" class="form-control"  name="city" placeholder="Enter City">
  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control"  name="date">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>    
</div>
