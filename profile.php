
<?php
  include('config.php');?>
  <?php
if(isset($_SESSION['ums'])){

  $id=$_SESSION['ums']['id'];
  #get users name and phone using the above id
  $qryStr="SELECT * FROM faculty WHERE id='2'";
  $exec=mysqli_query($conn,$qryStr) or die(mysqli_error($conn));

  #check if executed and get resources of the table
  $count=mysqli_num_rows($exec);
  if($count==1){
    $row=mysqli_fetch_array($exec);
    }
  else{
    die("Something wents wrong :/");
}
} ?>




<?php include('header.php');?>
  
      <div class="divider-custom">


   <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div style="background-color:white;
      color:black;
      width: 30%;
      height: 400px;
      float: left;" >

</div>
        <div class="col-lg-8 mx-auto"><br><br><br><br>
       <h2 class="centered">New Faculty Details</a></h2>
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form  method="post" action="f_process.php" onsubmit=" ="multipart/form-data">

            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Id</label>
                <input class="form-control" id="roll" name="id" value="<?php echo $row['id'] ?>" 
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" id="roll" name="name" value="<?php echo $row['name'] ?>" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>



<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>E mail</label>
                <input class="form-control" id="email" name="email" value="<?php echo $row['email'] ?> "type="email" placeholder="E-mail" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>

              <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Password </label>
                <input class="form-control" id="email" name="pass" value="<?php echo $row['pass'] ?>" type="password" placeholder="Password" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

              <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Date of Birth</label>
                <input class="form-control" id="email" name="dob" value="<?php echo $row['dob'] ?>"  placeholder="Date of Birth" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>





            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone</label>
                <input class="form-control" id="email" name="phone" value="<?php echo $row['phone'] ?>" type="number" placeholder="Phone No." required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Fathers name</label>
                <input class="form-control" id="pass" name="fname" value="<?php echo $row['fname'] ?>" type="text" placeholder="Father's Name" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Mothers name</label>
                <input class="form-control" id="pass" name="mname" value="<?php echo $row['mname'] ?> "type="text" placeholder="Mothers Name" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Address</label>
                <input class="form-control" id="pass" name="address" value="<?php echo $row['address'] ?>">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Degree</label>
                <input class="form-control" id="pass" name="degree" value="<?php echo $row['degree'] ?>" type="text" placeholder="Degree" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton" name ="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>

    </div>
     

  }
}
  <!-- </section> -->
  <?php include('footer.php');?>