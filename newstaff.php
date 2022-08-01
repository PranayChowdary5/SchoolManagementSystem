





<?php include('config.php');?>  
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
       <h2 class="centered">New Staff Details</a></h2>
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form  method="post" action="staffdetailprocess.php" onsubmit=" ="multipart/form-data">

            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Id</label>
                <input class="form-control" id="id" name="id" type="text" placeholder="Staff Id" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>



<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone</label>
                <input class="form-control" id="phone" name="phone" type="text" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>

              <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Address</label>
                <input class="form-control" id="address" name="address" type="text" placeholder="Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

              <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Date of Birth</label>
                <input class="form-control" id="dob" name="dob" type="Date" placeholder="Date of Birth" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>





           

            
            <br>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Submit</label>
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton" name ="submit">Submit</button>
            
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <!-- <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton" name ="submit">Submit</button>
            </div> -->
          <!-- </form> -->
        <!-- </div> -->
      <!-- </div>

         </div>

  </section> -->
<?php include('footer.php');?>