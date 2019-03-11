<!--==============================
=            TimeLine            =
===============================-->

<?php echo $this->app->timeline($dataLogin); ?>

<!--====  End of TimeLine  ====-->


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="section-title-header text-center">
				<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s"> <u class="text-danger"><i>แก้ไข</i></u> ลงทะเบียนบทความ </h1>
				<p class="wow fadeInDown" data-wow-delay="0.2s"> <!-- ข้อความ --> </p>
			</div>
		</div>
	</div>

	<?php //if (!empty($uploadError)) : ?>
	<?php if (!empty($_SESSION['message'])) : ?>
		<div class="row">
			<div class="col-md-10 mx-auto">
				<div class="alert alert-danger alert-dismissible fade show col-sm-12" role="alert">
					<div class="d-flex justify-content-center">
						<label> <?php echo $_SESSION['message'];?> </label>
					</div>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="row">
		<div class="col-md-10 mx-auto">

			<form class="needs-validation" novalidate enctype="multipart/form-data" accept-charset="utf-8">
				<input type="hidden" name="user_id" value="<?php echo $dataLogin; ?>" >
				<input type="hidden" name="regis_id" value="<?php echo $dataRegis['regis_id']; ?>">
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<label> <b> หัวหน้าโครงการ </b> </label>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-2 mb-3">
						<label for="prefixnamehead"> คำนำหน้าชื่อ </label>
						<input type="text" class="form-control form-control-sm" id="prefixnamehead" name="prefixnamehead" value="<?php echo $dataRegis['regis_prenamehead']; ?>" disabled required>
						<div class="invalid-feedback">
							กรุณากรอกข้อมูล คำนำหน้าชื่อ!
						</div>
					</div>
					<div class="col-md-5 mb-3">
						<label for="namehead"> ชื่อ</label>
						<input type="text" class="form-control form-control-sm" id="namehead" name="namehead" value="<?php echo $dataRegis['regis_namehead']; ?>" disabled required>
						<div class="invalid-feedback">
							กรุณากรอกข้อมูล ชื่อ!
						</div>
					</div>
					<div class="col-md-5 mb-3">
						<label for="lastnamehead"> นามสกุล </label>
						<input type="text" class="form-control form-control-sm" id="lastnamehead" name="lastnamehead" value="<?php echo $dataRegis['regis_lastnamehead']; ?>" disabled required>
						<div class="invalid-feedback">
							กรุณากรอกข้อมูล นามสกุล!
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<label> <b> ผู้ร่วมพัฒนา </b>
							<!-- <small class="text-danger"><i> ( ใส่ชื่อผู้ร่วมพัฒนาได้ 1 คนเท่านั้น ) </i></small> -->
						</label>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-2 mb-3">
						<label for="prefixnameteam"> คำนำหน้าชื่อ </label>
						<input type="text" class="form-control form-control-sm" id="prefixnameteam" name="prefixnameteam" value="<?php echo $dataRegis['regis_prenameteam']; ?>">
						<div class="invalid-feedback">
							กรุณากรอกข้อมูล คำนำหน้าชื่อ!
						</div>
					</div>
					<div class="col-md-5 mb-3">
						<label for="nameteam"> ชื่อ</label>
						<input type="text" class="form-control form-control-sm" id="nameteam" name="nameteam" value="<?php echo $dataRegis['regis_nameteam']; ?>">
						<div class="invalid-feedback">
							กรุณากรอกข้อมูล ชื่อ!
						</div>
					</div>
					<div class="col-md-5 mb-3">
						<label for="lastnameteam"> นามสกุล </label>
						<input type="text" class="form-control form-control-sm" id="lastnameteam" name="lastnameteam" value="<?php echo $dataRegis['regis_lastnameteam']; ?>">
						<div class="invalid-feedback">
							กรุณากรอกข้อมูล นามสกุล!
						</div>
					</div>
					<!-- <div class="col-md-2 mb-3">
						<label>&nbsp; </label>
						<input type="button" name="test" class="form-control form-control-sm">
						<span class="btn btn-primary float-right col-12" > <i class="fa fa-plus"></i></span>
					</div> -->
				</div>
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<label> <b> อาจารย์ที่ปรึกษา </b> </label>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-2 mb-3">
						<label for="prefixnameadvisor"> คำนำหน้าชื่อ </label>
						<input type="text" class="form-control form-control-sm" id="prefixnameadvisor" name="prefixnameadvisor" value="<?php echo $dataRegis['regis_prenameadvisor']; ?>">
						<div class="invalid-feedback">
							กรุณากรอกข้อมูล คำนำหน้าชื่อ!
						</div>
					</div>
					<div class="col-md-5 mb-3">
						<label for="nameadvisor"> ชื่อ</label>
						<input type="text" class="form-control form-control-sm" id="nameadvisor" name="nameadvisor" value="<?php echo $dataRegis['regis_nameadvisor']; ?>">
						<div class="invalid-feedback">
							กรุณากรอกข้อมูล ชื่อ!
						</div>
					</div>
					<div class="col-md-5 mb-3">
						<label for="lastnameadvisor"> นามสกุล </label>
						<input type="text" class="form-control form-control-sm" id="lastnameadvisor" name="lastnameadvisor" value="<?php echo $dataRegis['regis_lastnameadvisor']; ?>">
						<div class="invalid-feedback">
							กรุณากรอกข้อมูล นามสกุล!
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-12 mb-3">
						<label><b> ข้อมูลงานวิจัย </b> </label>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<label for="nameprojectThai"> ชื่อโปรเจ็ค <i>(ภาษาไทย)</i> </label>
						<input type="text" class="form-control form-control-sm" id="nameprojectThai" name="nameprojectThai" value="<?php echo $dataRegis['regis_projectnameThai']; ?>" required>
						<div class="invalid-feedback">
							กรุณากรอกข้อมูล ชื่อโปรเจ็ค!
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<label for="nameprojectEng"> ชื่อโปรเจ็ค <i>(ภาษาอังกฤษ)</i> </label>
						<input type="text" class="form-control form-control-sm" id="nameprojectEng" name="nameprojectEng" value="<?php echo $dataRegis['regis_projectnameEng']; ?>" required>
						<div class="invalid-feedback">
							กรุณากรอกข้อมูล ชื่อโปรเจ็ค!
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-12 mb-3">
						<label for="userfile"> ไฟล์ อัพโหลด</label>
						<input type="file" name="userfile" class="form-control-file form-control form-control-sm" id="userfile"  title="file upload .doc .docx .pdf"aria-describedby="filetexthelp" accept="application/msword, application/pdf">
						<small id="filetexthelp" class="form-text text-danger">
							อัพโหลดไฟล์ .doc .docx .pdf เท่านั้น
						</small>
						<div class="invalid-feedback">
							กรุณากรอกข้อมูล ไฟล์ที่อัพโหลด
						</div>
					</div>
				</div>


				<div class="form-row">
					<div class="col-md-12 mb-3">
						<label><b> มีความประสงค์เข้าร่วมประชุม </b> </label>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label for="walkin"> เข้าร่วมประชุมและนำเสนอผลงานวิจัย / ผลงานวิชาการ </label>
						<div class="input-group">
							<div class="form-check form-check-inline">
								<?php $checkoral = ($dataRegis['regis_walkin'] == 'บรรยาย')? "checked":""; ?>
								<input class="form-check-input" type="radio" name="walkin" id="walkinoral" value="1" <?php echo $checkoral; ?> >
								<label class="form-check-label" for="walkinoral"> ภาคบรรยาย </label>
							</div>
							<div class="form-check form-check-inline">
								<?php $checkposter = ($dataRegis['regis_walkin'] == 'โปสเตอร์')? "checked":""; ?>
								<input class="form-check-input" type="radio" name="walkin" id="walkinposter" value="2" <?php echo $checkposter; ?> >
								<label class="form-check-label" for="walkinposter"> ภาคนิทรรศการ(โปสเตอร์) </label>
							</div>
							<div class="form-check form-check-inline">
								<?php $checknotpresent = ($dataRegis['regis_walkin'] == 'เข้าร่วมไม่นำเสนอ')? "checked":""; ?>
								<input class="form-check-input" type="radio" name="walkin" id="walkinnotpresention" value="3" <?php echo $checknotpresent; ?> >
								<label class="form-check-label" for="walkinnotpresention"> เข้าร่วมประชุมวิชาการไม่นำเสนอผลงาน </label>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<label for="group"> เข้าร่วมในกลุ่มสาขา </label>
						<select name="titleselect" class="custom-select ">
							<option disabled> --- กรุณาเลือกหัวข้อที่จะนำเสนอ ---</option>
							<?php foreach ($title as $fieldTitle): ?>

								<?php $checktitle = ($fieldTitle->title_id == $dataRegis['title_id'])? 'selected':''; ?>
								<option value="<?php echo $fieldTitle->title_id; ?>" <?php echo $checktitle; ?>>
									<?php echo $fieldTitle->title_name; ?>
								</option>

							<?php endforeach ?>
						</select>
						<div class="invalid-feedback">
							กรุณากรอกข้อมูล สาขาที่จะเข้าร่วม.
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="reset" class="btn btn-secondary col-1" data-dismiss="modal">ยกเลิก <i class="fa fa-times-circle"></i></button>
					<button type="submit" class="btn btn-success col-1">บันทึก <i class="fa fa-check-circle"></i></button>
				</div>
			</form>

		</div>
	</div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
	'use strict';
	window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    	form.addEventListener('submit', function(event) {
    		if (form.checkValidity() === false) {
    			event.preventDefault();
    			event.stopPropagation();
    		}
    		form.classList.add('was-validated');
    	}, false);
    });
  }, false);
})();
</script>


