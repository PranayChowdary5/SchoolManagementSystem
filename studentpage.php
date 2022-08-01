<?php include('config.php');?>
<br>
<br>
 <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <!-- <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2> -->

      <!-- Icon Divider -->
      <<!-- div class="divider-custom">
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
            <img class="img-fluid" src="img/portfolio/result.png" alt="" style="height: 270px;">
            <a href="result.php"><h2 class="centered">Results</a></h2></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
           
            <img class="img-fluid" src="img/portfolio/asses3.png" alt=""style="height: 240px;width: 700px;s">
            <a href="continuous.php"><h2 class="centered">Continuous assessment</h2></a>
          </div>
        </div>

        <!-- Portfolio Item 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
           
            <img class="img-fluid" src="img/portfolio/asses.png" alt="" style="height: 240px;">
            <a href="updatedetail.php"><h2 class="centered">Update Details</h2></a>
          </div>
        </div>

        <!-- Portfolio Item 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
            
            <img class="img-fluid" src="img/portfolio/asses.png" alt=""style="height: 240px;">
            <a href="studentdetail.php"><h2 class="centered">show Details</h2></a>
          </div>
        </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
  </section>




<?php include('footer.php');?>