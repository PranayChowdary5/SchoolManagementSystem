





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
       <h2 class="centered">Marks Details</a></h2>
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form  method="post" action="mprocess.php" onsubmit="return reverify()">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Sem</label>
                <input list="sem" class="form-control" name="sem" placeholder="Semester">
                <p class="help-block text-danger"></p>
                <datalist id="sem">
                     <option value="Sem1">
                     <option value="Sem2">
    
                </datalist>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Roll No</label>
                <input class="form-control" id="rollno" name="rollno" type="text" placeholder="Roll Number" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>



<div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Theory 1</label>
                <input class="form-control" id="th1" name="th1" type="number" placeholder="Theory 1" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Theory 2</label>
                <input class="form-control" id="th2" name="th2" type="number" placeholder="Theory 2" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Theory 3</label>
                <input class="form-control" id="th3" name="th3" type="number" placeholder="Theory 3" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Practical 1</label>
                <input class="form-control" id="pr1" name="pr1" type="number" placeholder="Practical 1" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Practical 2</label>
                <input class="form-control" id="pr2" name="pr2" type="number" placeholder="Practical 2" required="required" data-validation-required-message="Please enter your phone number.">
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
    
  </section

   <?php include('footer.php');?>