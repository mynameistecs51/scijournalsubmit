<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="section-title-header text-center">
				<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s"> สถานะ ชำระค่าลงทะเบียน </h1>
				<p class="wow fadeInDown" data-wow-delay="0.2s"> <!-- ข้อความ --> </p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="content col-12 table-responsive">
				<div class="pb-5 no-padding" id="button-tolls"></div>

				<table id="tableData" class="display table table-bordered table-sm text-sm font-weight-light" width="100%" cellspacing="0" style="font-size:13px; border: 1px solid black;">
					<thead class="bg-light">
						<tr class="text-center">
							<th>ที่</th>
							<th>ชื่อหัวหน้าทีม</th>
							<th>ชื่อบทความ</th>
							<th>สถานะบทความ</th>
							<th>สาขาที่เข้าร่วม</th>
							<th>สังกัด</th>
							<th>เบอร์โทร</th>
							<th>สถานะ</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; ?>
						<?php foreach ($team as $rowpay): ?>
							<!-- ไม่แสดง user ที่เป็น admin or staff -->
							<?php if($rowpay->user_group != 3 && $rowpay->user_group != 1): ?>
								<tr id='<?php echo 'trrow'.$rowpay->pay_id; ?>' data-id='<?php echo $rowpay->pay_id; ?>'>
									<td><?php echo $i++; ?></td>
									<td><?php echo $rowpay->user_prefixname.' '.$rowpay->user_name.' '.$rowpay->user_lastname; ?></td>
									<td><?php echo $rowpay->regis_projectnameThai; ?></td>
									<td>
										<?php
										echo $statusdoc = (!empty($rowpay->createRegis))?"<i class='text-success'>ส่งบทความแล้ว</i>":"<i class='text-danger'>ยังไม่ส่งบทความ</i>";
										?>
									</td>
									<td><?php echo $title = ($rowpay->title_name != '')?$rowpay->title_name.'<u><b>('.$rowpay->walkin.')</b></u>': $rowpay->walkin; ?></td>
									<td><?php echo $rowpay->user_department; ?></td>
									<td><?php echo $rowpay->user_mobile; ?></td>
									<td>
										<?php
										switch ($rowpay->pay_status) {
											case 'SUCCESS':
											echo '<i class="text-success success" id="success'.$rowpay->pay_id.'" data-id="'.$rowpay->pay_id.'" data-container="body" data-toggle="popover" data-placement="left" data-title="'.$rowpay->regis_projectnameThai.' " data-content="" data-img="'.$rowpay->pay_file.'">ตรวจสอบแล้ว</i>';
											break;
											case 'WAIT':
											echo '<i class="text-warning wait" id="wait'.$rowpay->pay_id.'" data-id="'.$rowpay->pay_id.'" data-container="body" data-toggle="popover" data-placement="left" title="'.$rowpay->regis_projectnameThai.'" data-content="" data-img="'.$rowpay->pay_file.'">รอตรวจสอบ</i>';
											break;
											case 'NONE':
											echo "<i class='text-danger'>รอชำระค่าลงทะเบียน</i>";
											break;
											default:
											null;
											break;
										}
										echo $datepay = ($rowpay->createPay !=null)?"<br>".date_format(date_create($rowpay->createPay),'d/m/Y'):'';
										?>
									</td>
								</tr>
							<?php endif; ?>
						<?php endforeach; ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- Modal show Start -->
<div class="div_modal">  </div>
<!-- Modal show End -->
