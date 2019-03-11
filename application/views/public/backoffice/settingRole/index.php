<div class="content"  style="margin-top: 5px;padding: 20px 20px 20px 20px;">
	<h5>กำหนดสิทธิ์การใช้งาน </h5>
	<hr>
	<!-- <form action="<?php //echo base_url().$this->layout.'submit'; ?>" method="post" accept-charset="utf-8"> -->
		<form accept-charset="utf-8">
			<div class="form-group">
				<label for="group" > เลือกกลุ่มผู้ใช้งาน </label>
				<select class="form-control" id="group" name="group" required oninvalid="this.setCustomValidity('กรุณาเลือกกลุ่มผุ้ใช้งาน')" oninput="setCustomValidity('')">
					<option value='' disabled selected> ---- เลือก ----- </option>
					option
					<?php foreach ($group as $keyGroup => $rowGroup): ?>
						<option value="<?php echo $rowGroup->usergroup_id ;?>"><?php echo $rowGroup->usergroup_name;?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group ">
				<h6 class="font-weight-bold">จัดการเมนู</h6>
				<div class="col-12 manageMenu">

					<?php echo $menu; ?>

					<!-- <div class="form-row"> -->
						<div class="form-group">
							<div class="col-12 row">
								<div class="mx-auto text-center" style="width: 100vh;">
									<button type="reset" class="btn btn-secondary col-1" data-dismiss="modal">ยกเลิก <i class="fa fa-times-circle"></i></button>
									<button type="submit" class="btn btn-success col-1">บันทึก <i class="fa fa-check-circle"></i></button>
								</div>
							</div>
						</div>
						<!-- /.col-12 -->
					</div>
				</div>

			</form>
		</div>
		<!-- /.col-11 -->
