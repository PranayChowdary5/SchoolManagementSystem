
<?php include('config.php');?>
<script type="text/javascript">
 function reverify(){
    var id=document.getElementById('id').value;
    var pass=document.getElementById('pass').value;
    var err=true;
    if(id==""){
      err=false;
      alert('What is your id??');
    }
    if(pass==""){
      err=false;
      alert('What is your password??');
    }
    return err;
  }
    </script>
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
       <h2 class="centered">Existing Staff Details</a></h2>
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form method="post" action="exsistingstaffdetails.php" onsubmit="return reverify()">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Staff Id</label>
                <input class="form-control" name="id" id="id" type="text" placeholder="Staff Id" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
           
         
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Login</button>
            </div>
          </form>
        </div>
      </div>

    </div>
     <?php include('footer.php');?>
  </section>s