<!--====  Modal ====-->
<div class="col-12 modal fade mt-5 " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-lg">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					<div class="icon">
						<i class="lni-lock"></i> เข้าสู่ระบบ
					</div>
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="login-item">
								<form>
									<div class="form-group row">
										<label for="email" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="email" placeholder="Email" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
										</div>
									</div>
									<div class="form-group row">
										<p> ยังไม่ได้เป็นสมาชิก ? <a href="<?php echo base_url('index.php/authen/regis'); ?>"> ลงทะเบียนที่นี่</a></p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก <i class="lni-cross-circle"></i></button>
										<button type="submit" class="btn btn-success">เข้สู่ระบบ <i class="lni-check-mark-circle"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
	<!--====  End of Modal  ====-->