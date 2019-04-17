<!-- Start Timeline -->
<?php echo $this->app->timeline($dataLogin); ?>
<!-- End Timeline -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="section-title-header mx-auto">
				<h1 class="section-title wow fadeInUp text-center" data-wow-delay="0.2s"> <i class="text-danger"><!-- <u>แก้ไข</u> --> </i> ชำระค่าลงทะเบียนบทความ </h1>
				<div class="row">
					<div class="col-19 mx-auto text-center">
						<!-- <p>
							<h4 >1. ยินดี เป็นเจ้าภาพร่วมการประชุมวิชาการ (ค่าลงทะเบียนเจ้าภาพร่วม 40,000 บาท)</h4>

							1.1 โดยนำเสนอแบบรายละเอียดได้ 10 เรื่อง และนำเสนอแบบโปสเตอร์ได้ 15 เรื่อง
						</p> -->
						<p>

							<h4>
								ค่าลงทะเบียน (สำหรับหน่วยงานภายนอก) 300 บาท/คน
							<!-- </h4><h4> -->
							โดยชำระค่าลงทะเบียนที่งานประชุมวิชาการฯ
							</h4>
							การนำเสนอแบบบรรยาย ( ไม่เกิน 3 คน ต่อเรื่อง )   / <!-- <br> -->
							การนำเสนอแบบโปสเตอร์ ( ไม่เกิน 3 คน ต่อเรื่อง )

						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-md-10 mx-auto">
			<div class="row">

				Start porject name Header
				<div class="col-12 bg-light">
					<div class="form-row">
						<div class="col-md-12 mb-3 p-1">
							<label for="projectname"> ชื่อโปรเจ็ค </label>
							<input type="text" class="form-control" id="projectname" name="projectname" value="<?php echo $datateam['regis_projectnameThai']; ?>" disabled>
							<div class="invalid-feedback">
								กรุณากรอกข้อมูล คำนำหน้าชื่อ!
							</div>
						</div>
					</div>
				</div>
				End project name Hader

				upload img payment  layout Left
				<div class="col-md-4 bg-white ml-auto p-2">
					<form class="needs-validation" novalidate enctype="multipart/form-data" accept-charset="utf-8">
						<input type="hidden" name="regis_id" value="<?php echo $datateam['regis_id']; ?>">
						<input type="hidden" name="user_id" value="<?php echo $dataLogin; ?>">
						<div class="form-row">
							<div class="col-md-12 mb-3">
								<?php
								$image = (!empty($datateam['pay_file']))? $datateam['pay_file'] : 'no-image.jpg';
								?>
								<img id="blah" src="<?php echo base_url('assets/files_payment/'.$image); ?>" class="img-fluid img-thumbnail img-responsive mx-auto col-md-12" alt="" />
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12 mb-3">
								<input type='file' name="userfile" class="form-control form-control-sm" id="imgInp" onchange="readURL(this);" accept="image/*" required/>
								<div class="invalid-feedback">
									กรุณากรอกข้อมูล  ไฟล์หลักฐานการโอนเงิน!
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="nambank"> ธนาคารที่โอน</label>
								<input type="text" class="form-control form-control-sm" id="nambank" name="nambank" value="<?php echo $datateam['pay_bank']; ?>" required>
								<div class="invalid-feedback">
									กรุณากรอกข้อมูล ชื่อธนาคารที่โอน!
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="timesend"> เวลาโอน </label>
								<input type="time" class="form-control form-control-sm" id="timesend" name="timesend" value="<?php echo $datateam['pay_time']; ?>" required>
								<div class="invalid-feedback">
									กรุณากรอกข้อมูล เวลาโอน!
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-12 mx-auto d-flex">
								<button type="reset" class="btn btn-secondary col-1" data-dismiss="modal">ยกเลิก <i class="fa fa-times-circle"></i></button>
								<button type="submit" class="btn btn-success col-1">บันทึก <i class="fa fa-check-circle"></i></button>
							</div>
						</div>
					</form>
				</div>
				End upload img payment

				Start Detail project layout right
				<div class="col-md-8 bg-light mx-auto p-2">
					<div class="form-row">
						<div class="col-md-12">
							<label> <b><u> หัวหน้าทีม </u></b> <?php echo $datateam['title_group'].$dataLogin; ?></label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3 mb-3">
							<label for="prefixnamehead" > คำนำหน้าชื่อ </label>
							<input type="text" class="form-control-plaintext " id="prefixnamehead" name="prefixnamehead" value="<?php echo $datateam['regis_prenamehead']; ?>" disabled required>
							<div class="invalid-feedback">
								กรุณากรอกข้อมูล คำนำหน้าชื่อ!
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<input type="text" class="form-control-plaintext" id="namehead" name="namehead" value="<?php echo $datateam['regis_namehead']; ?>" disabled required>
							<div class="invalid-feedback">
								กรุณากรอกข้อมูล ชื่อ!
							</div>
						</div>
						<div class="col-md-5 mb-3">
							<input type="text" class="form-control-plaintext" id="lastnamehead" name="lastnamehead" value="<?php echo $datateam['regis_lastnamehead']; ?>" disabled required>
							<div class="invalid-feedback">
								กรุณากรอกข้อมูล นามสกุล!
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-12">
							<label> <b><u> ผู้ร่วมพัฒนา </u></b>
								<small class="text-danger"></small>
							</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3 mb-3">
							<input type="text" class="form-control-plaintext" id="prefixnameteam" name="prefixnameteam" value="<?php //echo $datateam['regis_prenameteam']; ?>" disabled required>
							<div class="invalid-feedback">
								กรุณากรอกข้อมูล คำนำหน้าชื่อ!
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<input type="text" class="form-control-plaintext" id="nameteam" name="nameteam" value="<?php //echo $datateam['regis_nameteam']; ?>" disabled required>
							<div class="invalid-feedback">
								กรุณากรอกข้อมูล ชื่อ!
							</div>
						</div>
						<div class="col-md-5 mb-3">
							<input type="text" class="form-control-plaintext" id="lastnameteam" name="lastnameteam" value="<?php //echo $datateam['regis_lastnameteam']; ?>" disabled required>
							<div class="invalid-feedback">
								กรุณากรอกข้อมูล นามสกุล!
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12">
							<label> <b><u> อาจารย์ที่ปรึกษา </u></b> </label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3 mb-3">
							<input type="text" class="form-control-plaintext" id="prefixnameadvisor" name="prefixnameadvisor" value="<?php echo $datateam['regis_prenameadvisor']; ?>" disabled required>
							<div class="invalid-feedback">
								กรุณากรอกข้อมูล คำนำหน้าชื่อ!
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<input type="text" class="form-control-plaintext" id="nameadvisor" name="nameadvisor" value="<?php echo $datateam['regis_nameadvisor']; ?>" disabled required>
							<div class="invalid-feedback">
								กรุณากรอกข้อมูล ชื่อ!
							</div>
						</div>
						<div class="col-md-5 mb-3">
							<input type="text" class="form-control-plaintext" id="lastnameadvisor" name="lastnameadvisor" value="<?php echo $datateam['regis_lastnameadvisor']; ?>" disabled required>
							<div class="invalid-feedback">
								กรุณากรอกข้อมูล นามสกุล!
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="department"> <b><u>สนใจเข้าร่วม</u></b> <i><?php echo $datateam['regis_walkin']; ?></i> </label>
							<input type="text" class="form-control-plaintext" id="department" name="department" value="<?php  echo  'สาขา'.$datateam['title_name']; ?>" disabled required>
						</div>
						<div class="col-md-6 mb-3">
							<label for="department"> <b><u>สถานบัน</u></b> </label>
							<input type="text" class="form-control-plaintext" id="department" name="department" value="<?php echo $datateam['user_department']; ?>" disabled required>
						</div>
					</div>

				</div>
				end Detail project
			</div>
		</div>
	</div> -->
</div>
<!-- End Container -->

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