
<div class="container">
 
 </form>
 <div class="form-group">
     <label for="uname">Name</label>
     <input type="input" class="form-control"  name="uname" placeholder="Enter Name" value="<?php echo $news_item['uname'] ?>" readonly>
   </div>
   <div class="form-group">
     <label for="phone_no">Phone No</label>
     <input type="input" class="form-control"  name="phone_no" placeholder="Enter Phone No" value="<?php echo $news_item['phone_no'] ?>" readonly>
   </div>
   <div class="form-group">
     <label for="email">Email</label>
     <input type="input" class="form-control"  name="email" placeholder="Enter Email" value="<?php echo $news_item['email'] ?>" readonly>
   </div>
   <div class="form-group">
     <label for="address">Address</label>
     <input type="input" class="form-control"  name="address"  placeholder="Enter Address" value="<?php echo $news_item['address'] ?>" readonly>
   </div>
   <div class="form-group">
     <label for="city">City</label>
     <input type="input" class="form-control"  name="city" placeholder="Enter City" value="<?php 
       $cities =  $this->db->get_where('city', array('id' => $news_item['city']));
       if($cities->num_rows() > 0){
         foreach($cities->result() as $city){
           echo $city->name;
         }
       }
     ?>" readonly>
   </div>
   <div class="form-group">
     <label for="date">Date</label>
     <input type="date" class="form-control"  name="date" value="<?php echo $news_item['date'] ?>" readonly>
   </div>
 </form> 
 </div>
 
 
 