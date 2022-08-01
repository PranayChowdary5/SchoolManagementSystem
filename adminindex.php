<?php include('config.php');?><br><br><br><br><br>
<section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <!-- <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2> -->

      <!-- Icon Divider -->
      <!-- div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div> -->

      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Portfolio Item 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
           <!--  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div> -->
            <img class="img-fluid" src="img/portfolio/college.png" alt=""style="height: 250px;">
            <a href="collegedetails.php"><h1 style="text-align: center;" class="centered">New College</a></h1></a>
          </div>
        </div>

        <!-- Portfolio Item 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
           
            <img class="img-fluid" src="img/portfolio/college.png" alt=""style="height: 250px;">
            <a href="existingcollegedetailslogin.php"><h1 style="text-align: center;" class="centered">Existing College</h1></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
           <!--  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div> -->
            <img class="img-fluid" src="img/portfolio/result.png" alt=""style="height: 250px;">
            <a href="semestermarks.php"><h1 style="text-align: center;" class="centered">Semester Marks</a></h1></a>
          </div>
        </div>

        


          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
  </section>
<?php include('footer.php');?>