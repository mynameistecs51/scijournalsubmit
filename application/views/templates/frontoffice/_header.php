 <!-- Header Area wrapper Starts -->
 <header id="header-wrap">
 	<!-- Navbar Start -->
 	<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
 		<div class="container col-11">
 			<!-- Brand and toggle get grouped for better mobile display -->
 			<div class="navbar-header">
 				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
 					<span class="navbar-toggler-icon"></span>
 					<span class="icon-menu"></span>
 					<span class="icon-menu"></span>
 					<span class="icon-menu"></span>
 				</button>
 				<a href="<?php echo base_url(); ?>" class="navbar-brand"><img src="<?php echo base_url();?>assets/img/logo_head.png" alt=""></a>
 			</div>
 			<div class="collapse navbar-collapse" id="main-navbar">
 				<ul class="navbar-nav mr-auto w-100 justify-content-end">
 					<li class="nav-item active">
 						<a class="nav-link" href="<?php echo base_url('index.php/welcome/index#header-wrap'); ?>">
 							หน้าหลัก
 						</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#about">
 							เกี่ยวกับ
 						</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#schedules">
 							กำหนดการ
 						</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="#speaker">
 							Speakers
 						</a>
 					</li>
 					<!-- <li class="nav-item">
 						<a class="nav-link" href="#gallery">
 							Gallery
 						</a>
 					</li> -->
 					<!-- <li class="nav-item">
 						<a class="nav-link" href="#countdown">
 							countdown
 						</a>
 					</li> -->
 				<!-- 	<li class="nav-item">
 						<a class="nav-link" href="#sponsors">
 							Sponsors
 						</a>
 					</li> -->
 					<!-- <li class="nav-item">
            <a class="nav-link" href="#pricing">
              pricing
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link">
              Contact
            </a>
          </li> -->
          <?php if(empty($dataLogin)):?>
          	<li class="nav-item">
          		<a class="nav-link login" href="#login">
          			เข้าสู่ระบบ
          		</a>
          	</li>
          	<?php else: ?>
          		<li class="nav-item">
          			<a class="nav-link" href="<?php echo base_url('index.php/regisjournal/regis'); ?>">
          				ส่งบทความ
          			</a>
          		</li>
          		<li class="nav-item">
          			<a class="nav-link" href="<?php echo base_url('index.php/authen/logout'); ?>">
          				ออกจากระบบ
          			</a>
          		</li>
          	<?php endif; ?>
          </ul>
        </div>
      </div>

      <!-- Mobile Menu Start -->
      <ul class="mobile-menu">
      	<li>
      		<a class="page-scrool" href="#header-wrap">Home</a>
      	</li>
      	<li>
      		<a class="page-scrool" href="#about">About</a>
      	</li>
      	<li>
      		<a class="page-scroll" href="#schedules">schedules</a>
      	</li>
      	<li>
      		<a class="page-scroll" href="#speaker">Speakers</a>
      	</li>
      <!-- 	<li>
      		<a class="page-scroll" href="#gallery">Gallery</a>
      	</li> -->
      	<!-- <li>
      		<a class="page-scroll" href="#countdown">countdown</a>
      	</li> -->
      	<!-- <li>
      		<a class="page-scroll" href="#sponsors">Sponsors</a>
      	</li> -->
      	<!-- <li> -->
      		<!-- <a class="page-scroll" href="#pricing">pricing</a> -->
      		<!-- </li> -->
      		<li>
      			<a class="page-scroll login" href="#login"> เข้าสู่ระบบ </a>
      		</li>
      	</ul>
      	<!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->

      <!-- Main Carousel Section Start -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">
      	<ol class="carousel-indicators">
      		<li data-target="#main-slide" data-slide-to="0" class="active"></li>
      		<li data-target="#main-slide" data-slide-to="1"></li>
      		<li data-target="#main-slide" data-slide-to="2"></li>
      	</ol>
      	<div class="carousel-inner fadeInUp wow" data-wow-delay=".6s">
      		<div class="carousel-item active">
      			<img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/slider/slide6.jpg" alt="First slide">
      		</div>
      		<div class="carousel-item ">
      			<img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/slider/slide7.jpg" alt="First slide">
      		</div>
      		<!-- <div class="carousel-item ">
      			<img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/slider/slide1.jpg" alt="First slide">
      		    			<div class="carousel-caption d-md-block">
      		    				<p class="fadeInUp wow" data-wow-delay=".6s">คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานีี</p>
      		    				<h1 class="wow fadeInDown heading" data-wow-delay=".4s">การประชุมวิชาการนำเสนอผลงานนักศึกษา	ระดับปริญญาตรี ประจำปี 2562
      		    				</h1>
      		    				<a href="#login" class="fadeInLeft wow btn btn-common btn-lg" data-wow-delay=".6s">เข้าร่วม</a>
      		    				<a href="#schedules" class="fadeInRight wow btn btn-border btn-lg" data-wow-delay=".6s">กำหนดการ</a>
      		    			</div>
      		    		</div> -->
    		<!-- <div class="carousel-item">
    			<img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/slider/slide2.jpg" alt="Second slide">
    			<div class="carousel-caption d-md-block">
    				<p class="fadeInUp wow" data-wow-delay=".6s">คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานีี</p>
    				<h1 class="wow fadeInDown heading" data-wow-delay=".4s">การประชุมวิชาการนำเสนอผลงานนักศึกษา	ระดับปริญญาตรี ประจำปี 2562
    				</h1>
    				<a href="#login" class="fadeInLeft wow btn btn-common btn-lg" data-wow-delay=".6s">เข้าร่วม</a>
    				<a href="#schedules" class="fadeInRight wow btn btn-border btn-lg" data-wow-delay=".6s">กำหนดการ</a>
    			</div>
    		</div> -->
    		<!-- <div class="carousel-item">
    			<img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/slider/slide3.jpg" alt="Third slide">
    			<div class="carousel-caption d-md-block">
    				<p class="fadeInUp wow" data-wow-delay=".6s">คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานีี</p>
    				<h1 class="wow fadeInDown heading" data-wow-delay=".4s">การประชุมวิชาการนำเสนอผลงานนักศึกษา	ระดับปริญญาตรี ประจำปี 2562
    				</h1>
    				<a href="#login" class="fadeInLeft wow btn btn-common btn-lg" data-wow-delay=".6s">เข้าร่วม</a>
    				<a href="#schedules" class="fadeInRight wow btn btn-border btn-lg" data-wow-delay=".6s">กำหนดการ</a>
    			</div>
    		</div> -->
    	</div>
    	<a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
    		<span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
    		<span class="sr-only">Previous</span>
    	</a>
    	<a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
    		<span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
    		<span class="sr-only">Next</span>
    	</a>
    </div>
    <!-- Main Carousel Section End -->

  </header>
  <!-- Header Area wrapper End -->

