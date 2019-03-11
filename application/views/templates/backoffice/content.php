<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> <?php echo $this->app->getTitle(); ?> </title>
	<meta name="description" content="Sufee Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" href="apple-icon.png">
	<link rel="shortcut icon" href="favicon.ico">

	<?php $this->load->view('templates/backoffice/_css');  ?>


	<script src="<?php echo base_url(); ?>assets_backoffice/js/vendor/jquery-2.1.4.min.js"></script>
	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>

</head>

<body>
	<?php $this->load->view('templates/backoffice/leftMenu'); ?>

	<div id="right-panel" class="right-panel">
		<?php $this->load->view('templates/backoffice/topMenu'); ?>

		<div class="row-fluid mt-3">

			<?php echo $this->app->getLayout(); ?>

		</div>
	</div>

	<?php $this->load->view('templates/backoffice/_js'); ?>
</body>
</html>