<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="section-title-header text-center">
        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s"> แก้ไขข้อมูลส่วนตัว </h1>
        <p class="wow fadeInDown" data-wow-delay="0.2s"> <!-- ข้อความ --> </p>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-10 mx-auto">
      <form class="needs-validation mt-5 mb-5" novalidate>
        <input type="hidden" name="user_id" value="<?php echo $me['user_id']; ?>">
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="email"> E-mail</label>
            <div class="input-group">
              <input type="email" class="form-control" id="email" name="email" value="<?php echo $me['user_email']; ?>" placeholder="yourmail@mail.com" required>
              <div class="invalid-feedback">
                กรุณากรอกข้อมูล E-mail.
              </div>
            </div>
          </div>
          <!-- <div class="col-md-6 mb-3">
            <label for="password"> Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
              <div class="invalid-feedback">
                กรุณากรอกข้อมูลรหัสผ่าน.
              </div>
            </div>
          </div> -->
        </div>
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label> <b>รายละเอียดผู้เข้าร่วมประชุม <i class="text-danger"> ( *** กรอกข้อมูลเป็นภาษาไทย *** ) </i> </b> </label>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-2 mb-3">
            <label for="prefixname"> คำนำหน้าชื่อ </label>
            <input type="text" class="form-control" id="prefixname" name="prefixname" value="<?php echo $me['user_prefixname']; ?>" required>
            <div class="valid-feedback">
              กรุณากรอกข้อมู คำนำหน้าชื่อ!
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <label for="name"> ชื่อ</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $me['user_name']; ?> " required>
            <div class="valid-feedback">
              กรุณากรอกข้อมู ชื่อ!
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <label for="lastname"> นามสกุล </label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $me['user_lastname']; ?>" required>
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
                <?php $checkF = ($me['user_gender'] == 0)? 'checked':'';?>
                <input class="form-check-input" type="radio" name="gender" id="genderwoman" value="0" <?php echo $checkF; ?> >
                <label class="form-check-label" for="genderwoman"> หญิง </label>
              </div>
              <div class="form-check form-check-inline">
                <?php $checkM = ($me['user_gender'] == 1)? 'checked':'';?>
                <input class="form-check-input" type="radio" name="gender" id="genderman" value="1" <?php echo $checkM ?>>
                <label class="form-check-label" for="genderman"> ชาย </label>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="position"> ตำแหน่ง </label>
            <input type="text" class="form-control" id="position" name="position" value="<?php echo $me['user_position']; ?>" >
          </div>
          <div class="col-md-7 mb-3">
            <label for="department">หน่วยงาน</label>
            <input type="text" class="form-control" id="department" name="department" value="<?php echo $me['user_department']; ?>" placeholder="มหาวิทยาลัยต้นสังกัด" required>
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
                <?php $checkresearcher = ($me['user_status'] == 0)? 'checked':'';?>
                <input class="form-check-input" type="radio" name="status" id="statusresearcher" value="0" <?php echo $checkresearcher; ?>>
                <label class="form-check-label" for="statusresearcher"> นักวิจัย/นักวิชาการ </label>
              </div>
              <div class="form-check form-check-inline">
                <?php $checkteacher = ($me['user_status'] == 1)? 'checked':'';?>
                <input class="form-check-input" type="radio" name="status" id="teacher" value="1" <?php echo $checkteacher; ?>>
                <label class="form-check-label" for="teacher"> อาจารย์ </label>
              </div>
              <div class="form-check form-check-inline">
                <?php $checkbacherlor = ($me['user_status'] == 2)? 'checked':'';?>
                <input class="form-check-input" type="radio" name="status" id="bachelordegree" value="2" <?php echo $checkbacherlor; ?>>
                <label class="form-check-label" for="bachelordegree"> นศ.ปริญญาตรี </label>
              </div>
              <div class="form-check form-check-inline">
                <?php $checkmaster = ($me['user_status'] == 3)? 'checked':'';?>
                <input class="form-check-input" type="radio" name="status" id="masterdegree" value="3" <?php echo $checkmaster; ?>>
                <label class="form-check-label" for="masterdegree"> นศ.ปริญญาโท </label>
              </div>
              <div class="form-check form-check-inline">
                <?php $checkdoctor = ($me['user_status'] == 4)? 'checked':'';?>
                <input class="form-check-input" type="radio" name="status" id="doctordegree" value="4" <?php echo $checkdoctor; ?>>
                <label class="form-check-label" for="doctordegree"> นศ.ปริญญาเอก </label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="address">ที่อยู่ (ที่สามารถติดต่อได้) </label>
            <textarea name="address" id="address" class="form-control" required><?php echo $me['user_address']; ?></textarea>
            <div class="invalid-feedback">
              กรุณากรอกข้อมูล ที่อยู่ที่สามารถติดต่อได้.
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="telephone"> โทรศัพท์</label>
            <input type="tel" class="form-control" name="telephone" placeholder="042 000 000" value="<?php echo $me['user_telephone']; ?>">
          </div>
          <div class="col-md-6 mb-3">
            <label for="mobile"> โทรศัพท์</label>
            <input type="tel" class="form-control" name="mobile" placeholder="081 111 1111" value="<?php echo $me['user_mobile']; ?>" required>
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