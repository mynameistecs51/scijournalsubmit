 <!-- Left Panel -->

 <aside id="left-panel" class="left-panel">
 	<nav class="navbar navbar-expand-sm navbar-default">

 		<div class="navbar-header">
 			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
 				<i class="fa fa-bars"></i>
 			</button>
 			<a class="navbar-brand" href="<?php echo base_url(); ?>"> <i class="fa fa-home fa-2x" aria-hidden="true"> </i> กลับหน้าหลัก</a>
 		</div>

 		<div id="main-menu" class="main-menu collapse navbar-collapse">
 			<ul class="nav navbar-nav">


 				<?php if(empty($dataLogin)): ?>
 					<h3 class="menu-title">ลงทะเบียนบทความ</h3><!-- /.menu-title -->
 					<li>
 						<a href="<?php echo base_url('index.php/welcome/#login'); ?>"> <i class="menu-icon fa fa-sign-in" aria-hidden="true"></i> เข้าสู่ระบบ</a>
 					</li>
 					<li>
 						<a href="<?php echo base_url('index.php/authen/regis') ?>"><i class="menu-icon fa fa-sign-in" aria-hidden="true"></i> ลงทะเบียน</a>
 					</li>
 					<?php else: ?>
 						<?php echo $this->app->getMenuRole(base_url(),$sessiondata['user_group']); ?>
 						<li>
 							<a href="<?php echo base_url('index.php/authen/logOut'); ?>"> <i class="menu-icon fa fa-sign-out" aria-hidden="true"></i> ออกจากระบบ</a>
 						</li>
            <!-- <li>
              <a href="<?php //echo base_url('index.php/payment/'); ?>"> <i class="menu-icon fa fa-credit-card" aria-hidden="true"></i> ชำระค่าลงทะเบียน
              </a>
            </li> -->
          <?php endif; ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
  </aside><!-- /#left-panel -->

    <!-- Left Panel -->