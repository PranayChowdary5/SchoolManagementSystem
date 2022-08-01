<?php include('config.php');?>
<script type="text/javascript">
 function reverify(){
    var password=document.getElementById('sem').value;
    var err=true;
    if(password==""){
      err=false;
      alert('What is your password??');
    }
    return err;
  }
    </script>




<?php include('config.php');?>
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
       <h2 class="centered">View Result</a></h2>
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form  method="post" action="processresult.php" onsubmit="return reverify()">
           <!--  <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div> -->
            
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
           <!--  <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div> -->
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