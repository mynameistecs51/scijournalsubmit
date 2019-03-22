<!-- Start Regis -->
<!-- <section id="regis" class="section-padding"> -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title-header text-center">
					<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s"> ลงทะเบียนที่นี่ </h1>
					<p class="wow fadeInDown text-danger" data-wow-delay="0.2s"> ( *** เฉพาะหัวหน้าทีม *** ) </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-10 mx-auto">
				<form class="needs-validation mt-5 mb-5" novalidate>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="email"> E-mail</label>
							<div class="input-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="yourmail@mail.com" required>
								<div class="invalid-feedback">
									กรุณากรอกข้อมูล E-mail.
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="password"> Password</label>
							<div class="input-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
								<div class="invalid-feedback">
									กรุณากรอกข้อมูลรหัสผ่าน.
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<label> <b>รายละเอียดผู้เข้าร่วมประชุม <i class="text-danger"> ( *** กรอกข้อมูลเป็นภาษาไทย *** ) </i> </b> </label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2 mb-3">
							<label for="prefixname"> คำนำหน้าชื่อ </label>
							<input type="text" class="form-control" id="prefixname" name="prefixname" required>
							<div class="valid-feedback">
								กรุณากรอกข้อมู คำนำหน้าชื่อ!
							</div>
						</div>
						<div class="col-md-5 mb-3">
							<label for="name"> ชื่อ</label>
							<input type="text" class="form-control" id="name" name="name" required>
							<div class="valid-feedback">
								กรุณากรอกข้อมู ชื่อ!
							</div>
						</div>
						<div class="col-md-5 mb-3">
							<label for="lastname"> นามสกุล </label>
							<input type="text" class="form-control" id="lastname" name="lastname" required>
							<div class="valid-feedback">
								กรุณากรอกข้อมู นามสกุล!
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2 mb-3">
							<label for="gender"> เพศ </label>
							<div class="input-group">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="genderwoman" value="0">
									<label class="form-check-label" for="genderwoman"> หญิง </label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="genderman" value="1" checked>
									<label class="form-check-label" for="genderman"> ชาย </label>
								</div>
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="position"> ตำแหน่ง </label>
							<input type="text" class="form-control" id="position" name="position">
							<!-- <div class="valid-feedback">
								กรุณากรอกข้อมู นามสกุล!
							</div> -->
						</div>
						<div class="col-md-7 mb-3">
							<label for="department">หน่วยงาน</label>
							<input type="text" class="form-control" id="department" name="department" placeholder="มหาวิทยาลัยต้นสังกัด" required>
							<div class="invalid-feedback">
								กรุณากรอกข้อมูล หน่ายงาน.
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<label for="status"> สถานภาพ </label>
							<div class="input-group">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="statusresearcher" value="0" checked>
									<label class="form-check-label" for="statusresearcher"> นักวิจัย/นักวิชาการ </label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="teacher" value="1">
									<label class="form-check-label" for="teacher"> อาจารย์ </label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="bachelordegree" value="2">
									<label class="form-check-label" for="bachelordegree"> นศ.ปริญญาตรี </label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="masterdegree" value="3">
									<label class="form-check-label" for="masterdegree"> นศ.ปริญญาโท </label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="doctordegree" value="4">
									<label class="form-check-label" for="doctordegree"> นศ.ปริญญาเอก </label>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<label for="address">ที่อยู่ (ที่สามารถติดต่อได้) </label>
							<textarea name="address" id="address" class="form-control"></textarea>
							<div class="invalid-feedback">
								กรุณากรอกข้อมูล ที่อยู่ที่สามารถติดต่อได้.
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-5 mb-3">
						<label for="walkin"> เข้าร่วมประชุมและนำเสนอผลงานวิจัย / ผลงานวิชาการ </label>
						<div class="input-group">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="walkin" id="walkinoral" value="1" checked>
								<label class="form-check-label" for="walkinoral"> ภาคบรรยาย </label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="walkin" id="walkinposter" value="2">
								<label class="form-check-label" for="walkinposter"> ภาคนิทรรศการ(โปสเตอร์) </label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="walkin" id="walkinnotpresention" value="3">
								<label class="form-check-label" for="walkinnotpresention"> เข้าร่วมประชุมวิชาการไม่นำเสนอผลงาน </label>
							</div>
						</div>
					</div>
						<div class="col-md-3 mb-3">
							<label for="telephone"> โทรศัพท์</label>
							<input type="tel" class="form-control" name="telephone" placeholder="042 000 000">
						</div>
						<div class="col-md-4 mb-3">
							<label for="mobile"> มือถือ</label>
							<input type="tel" class="form-control" name="mobile" placeholder="081 111 1111">
							<div class="invalid-feedback">
								กรุณากรอกข้อมูล มือถือ.
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
	<!-- </section> -->

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
