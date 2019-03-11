 <!-- Header-->
 <header id="header" class="header" style="padding-bottom: 0px;">

 	<div class="header-menu">

 		<div class="col-sm-6 ">
 			<a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>

 			<div class="header-left">
 				<?php
 				// echo  anchor(base_url('index.php/welcome/backoffice'),'<i class="fa fa-home fa-2x" aria-hidden="true"></i>');
 				//
 				?>

 			</div>
 		</div>

 		<div class="col-sm-6">
 			<div class="user-area dropdown float-right">
 				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 					<?php echo $user = empty($dataLogin)?'' : '<i class="fa fa-user"></i> '.$sessiondata['user_name'];
 					?>
 					<!-- <img class="user-avatar rounded-circle" src="<?php echo base_url();?>assets_backoffice/images/admin.jpg" alt="User Avatar"> -->
 				</a>

 				<div class="user-menu dropdown-menu">
 					<!-- <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

 					<a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

 					<a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a> -->

 					<a class="nav-link" href="<?php echo base_url('index.php/authen/logout'); ?>"><i class="fa fa-power -off"></i>Logout</a>
 				</div>
 			</div>
 			<!-- <div class="user-area dropdown float-right">
 				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 					<?php
 					echo $user = empty($dataLogin)?'' : '<i class="fa fa-user"></i> '.$sessiondata['mem_name'];
 					?>
 				</a>

 				<div class="user-menu dropdown-menu bg-secondary" style="margin-top: 0px;">
 					<a class="nav-link" href="<?php echo base_url('index.php/authen/logout'); ?>"><i class="fa fa-power-off"></i>  Logout</a>
 				</div>
 			</div> -->

 			<div class="language-select dropdown" id="language-select">
 				<a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
 					<i class="flag-icon flag-icon-us"></i>
 				</a>
 				<div class="dropdown-menu" aria-labelledby="language" >
 					<div class="dropdown-item">
 						<span class="flag-icon flag-icon-fr"></span>
 					</div>
 					<div class="dropdown-item">
 						<i class="flag-icon flag-icon-es"></i>
 					</div>
 					<div class="dropdown-item">
 						<i class="flag-icon flag-icon-us"></i>
 					</div>
 					<div class="dropdown-item">
 						<i class="flag-icon flag-icon-it"></i>
 					</div>
 				</div>
 			</div>

 		</div>
 	</div>

 </header><!-- /header -->