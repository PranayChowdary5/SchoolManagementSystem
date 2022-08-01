





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
       <h2 class="centered">ENTER ASSESMENT MARKS</a></h2>
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form  method="post" action="assesmentprocess.php" onsubmit=" ="multipart/form-data">
             <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Roll</label>
                <input class="form-control" id="roll" name="roll" type="text" placeholder="Roll no." required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>CA</label>
                <input class="form-control" id="ca" name="ca" type="text" placeholder="CA" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>enter marks</label>
                <input class="form-control" id="marks" name="marks" type="text" placeholder="ENTER MARKS" required="required" data-validation-required-message="Please enter your name.">
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

          


          <?php include('footer.php');?>