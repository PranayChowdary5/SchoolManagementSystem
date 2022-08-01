





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
       <h2 class="centered">New College Details</a></h2>
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form  method="post" action="collegedetailsprocess.php" onsubmit="return reverify()">

            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Id</label>
                <input class="form-control" id="roll" name="id" type="text" placeholder="Id" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Password</label>
                <input class="form-control" id="roll" name="password" type="password" placeholder="Password" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>College Name</label>
                <input class="form-control" id="roll" name="name" type="text" placeholder="College Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>



<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>College Code</label>
                <input class="form-control" id="email" name="code" type="text" placeholder="College Code" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>

              <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>College Address</label>
                <input class="form-control" id="email" name="address" type="text" placeholder="College Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

              <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Courses offered</label>
                <input class="form-control" id="email" name="courses" type="text" placeholder="Courses Offered" required="required" data-validation-required-message="Please enter your email address.">
                 
               
                <p class="help-block text-danger"></p>
              </div>





            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Branches</label>
                <input class="form-control" id="email" name="branch" type="text" placeholder="Branches" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Number of Faculty </label>
                <input class="form-control" id="pass" name="faculty" type="text" placeholder="Number Of Faculty" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name of Director</label>
                <input class="form-control" id="pass" name="director" type="text" placeholder="Name Of Director" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name of  Registrar</label>
                <input class="form-control" id="pass" name="registrar" type="text" placeholder="Name Of Registrar" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
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
    </form>
  </div>
</div>

  <!-- </section> -->
  <?php include('footer.php');?>