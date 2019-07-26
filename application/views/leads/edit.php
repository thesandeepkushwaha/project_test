<h2 class="text-center"><?php echo $title; ?></h2>
<div class="container">
<?php echo validation_errors(); ?>
 
<?php echo form_open('leads/edit/'.$news_item['sno']); ?>
  <div class="form-group">
    <label for="uname">Name</label>
    <input type="input" class="form-control"  name="uname" placeholder="Enter Name" value="<?php echo $news_item['uname'] ?>">
  </div>
  <div class="form-group">
    <label for="phone_no">Phone No</label>
    <input type="input" class="form-control"  name="phone_no" placeholder="Enter Phone No" value="<?php echo $news_item['phone_no'] ?>">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="input" class="form-control"  name="email" placeholder="Enter Email" value="<?php echo $news_item['email'] ?>">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="input" class="form-control"  name="address"  placeholder="Enter Address" value="<?php echo $news_item['address'] ?>">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="input" class="form-control"  name="city" placeholder="Enter City" value="<?php echo $news_item['city'] ?>">
  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control"  name="date" value="<?php echo $news_item['date'] ?>">
  </div>
  <input type="submit" class="btn btn-primary" value="Edit news item"></button>
</form> 
</div>
