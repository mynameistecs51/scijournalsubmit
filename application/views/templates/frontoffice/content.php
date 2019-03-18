<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Sciende Udru Journal</title>

	<?php $this->load->view('templates/frontoffice/_css'); ?>

</head>
<body>

	<?php $this->load->view('templates/frontoffice/_header'); ?>

	<?php echo $this->app->getLayout(); ?>

	<!-- Modal show Start -->
	<div class="div_modal">  </div>
	<!-- Modal show End -->

	<?php $this->load->view('templates/frontoffice/_js'); ?>
</body>
</html>