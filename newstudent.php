





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
       <h2 class="centered">New Students Details</a></h2>
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form  method="post" action="sprocess.php" onsubmit=" ="multipart/form-data">

            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Roll</label>
                <input class="form-control" id="roll" name="Roll" type="text" placeholder="Roll No." required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>


             <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" id="roll" name="Name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>e\Email</label>
                <input class="form-control" id="roll" name="Email" type="Email" placeholder="E-mail" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
 




              <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Password </label>
                <input class="form-control" id="Password" name="Password" type="password" placeholder="Password" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
    

              <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Stream</label>
                <input class="form-control" id="email" name="Stream" type="text" placeholder="Stream" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>





            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Course</label>
                <input class="form-control" id="text" name="Course" type="text" placeholder="Course" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Sem</label>
                <input class="form-control" id="pass" name="Sem" type="text" placeholder="Sem" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Attendance</label>
                <input class="form-control" id="pass" name="Attendance" type="text" placeholder="Attendance" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Address</label>
                <input class="form-control" id="Address" name="Address" type="text" placeholder="Address" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Fees</label>
                <input class="form-control" id="pass" name="Fees" type="text" placeholder="Fee" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            
            <br>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Submit</label>
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton" name ="submit">Submit</button>
            
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </form>
        </div>

        </form>
      </div>
    </div>



          
<?php include('footer.php');?>