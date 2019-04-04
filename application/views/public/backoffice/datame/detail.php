<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="section-title-header text-center">
				<h1 class="section-title wow fadeInUp" data-wow-delay="0.2s"> รายละเอียด </h1>
				<p class="wow fadeInDown" data-wow-delay="0.2s"> <!-- ข้อความ --> </p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-8 mx-auto mt-3  bg-white p-5">
    	<!--=================================
    	=            Detail Data            =
    	==================================-->
    	<div class="form-group row">
    		<label for="headteam" class="col-sm-3 float-right col-form-label col-form-label-sm"> ชื่อสกุล </label>
    		<div class="col-sm-8">
    			<input type="text" class="form-control form-control-sm" id="headteam" name="headteam" value="<?php echo $datateam['user_prefixname']." ".$datateam['user_name']." ".$datateam['user_lastname']; ?>" disabled>
    		</div>
    	</div>
    	<div class="form-group row">
    		<label for="advisor" class="col-sm-3 float-right col-form-label col-form-label-sm">อาจารย์ที่ปรึกษา</label>
    		<div class="col-sm-8">
    			<input type="email" class="form-control form-control-sm" id="advisor" name="advisor" value="<?php echo $datateam['user_prefixname']." ".$datateam['user_name']." ".$datateam['user_lastname']; ?>" disabled>
    		</div>
    	</div>
    	<div class="form-group row">
    		<label for="walkin" class="col-sm-3 float-right col-form-label col-form-label-sm">สนใจเข้าร่วม</label>
    		<div class="col-sm-8">
    			<input type="email" class="form-control form-control-sm" id="walkin" name="walkin" value="<?php echo $datateam['regis_walkin']." ".$datateam['title_name']; ?>" disabled>
    		</div>
    	</div>
    	<div class="form-group row">
    		<label for="payment" class="col-sm-3 float-right col-form-label col-form-label-sm">สถานะชำระเงิน</label>
    		<div class="col-sm-8">
    			<?php
    			switch ($datateam['pay_status']) {
    				case 'SUCCESS':
    				echo '<i class="text-success success">ตรวจสอบแล้ว</i>';
    				break;
    				case 'WAIT':
    				echo '<i class="text-warning wait">รอตรวจสอบ</i>';
    				break;
    				case 'NONE':
    				echo '<i class="text-danger">รอชำระค่าลงทะเบียน</i>';
    				break;
    				default:
    				null;
    				break;
    			}
    			?>
    		</div>
    	</div>
    	<div class="form-group row">
    		<label for="statusApcept" class="col-sm-3 float-right col-form-label col-form-label-sm">สถานะการตอบรับ</label>
    		<div class="col-sm-8">
    			<i class="text-danger">ประกาศผลวันที่ 29 เมษายน 2562</i>
    			<?php
    			// switch ($datateam['pay_status']) {
    			// 	case 'SUCCESS':
    			// 	echo '<i class="text-success success">ตรวจสอบแล้ว</i>';
    			// 	break;
    			// 	case 'WAIT':
    			// 	echo '<i class="text-warning wait">รอตรวจสอบ</i>';
    			// 	break;
    			// 	case 'NONE':
    			// 	echo '<i class="text-danger">รอชำระค่าลงทะเบียน</i>';
    			// 	break;
    			// 	default:
    			// 	null;
    			// 	break;
    			// }
    			?>
    		</div>
    	</div>
    	<div class="form-group row">
    		<label for="department" class="col-sm-3 float-right col-form-label col-form-label-sm">สถานบัน</label>
    		<div class="col-sm-8">
    			<input type="email" class="form-control form-control-sm" id="department" name="department" value="<?php echo  $datateam['user_department']; ?>" disabled>
    		</div>
    	</div>
    </div>

    <!--====  End of Detail Data  ====-->

  </div>
</div>
</div>