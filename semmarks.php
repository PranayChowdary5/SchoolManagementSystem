<?php include('config.php');?>





<?php include('header.php');?>
  <!-- Masthead -->


      <!-- Contact Section Heading -->


      <!-- Icon Divider -->
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
       <h2 class="centered">Marks Details</a></h2>
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form  method="post" action="process1.php" onsubmit="return reverify()">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Roll No</label>
                <input class="form-control" id="roll" name="roll" type="text" placeholder="Roll No." required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>




            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>thery 1</label>
                <input class="form-control" id="email" type="text" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Theory 2</label>
                <input class="form-control" id="pass" name="pass" type="text" placeholder="Password" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Theory 3</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Practical 1</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Practical 2</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton" name ="submit">Login</button>
            </div>
          </form>
        </div>
      </div>

    </div>
     <?php include('footer.php');?>
  </section>