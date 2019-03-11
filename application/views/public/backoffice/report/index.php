 <div class="container">

  <div class="row">
    <div class="col-md-12">
      <?php if($this->uri->segment(2) == 'health'):?>
        <div class="col-lg-3 col-md-6">
          <div class="social-box facebook">
            <i class="fa fa-heart" aria-hidden="true"></i>
            <?php
            $counthealth = array();
            foreach ($paper as $rowhealth) {
              if($rowhealth->user_group != 3 ){
                array_push($counthealth, $rowhealth->user_name );
              }
            } ?>
            <strong><span class="count"><?php echo count($counthealth); ?></span> PAPER </strong>
            <p class="h6 pb-4">วิทยาศาสตร์สุขภาพ</p>
          </div>
          <!--/social-box-->
        </div><!--/.col-->
      <?php endif; ?>

      <?php if($this->uri->segment(2) == 'life'):?>
        <div class="col-lg-3 col-md-6">
          <div class="social-box google-plus">
            <i class="fa fa-warning"></i>
            <?php
            $countLift = array();
            foreach ($paper as $rowlift) {
              if($rowlift->user_group != 3 ){
                array_push($countLift, $rowlift->user_name );
              }
            } ?>
            <strong><span class="count"><?php echo count($countLift); ?></span> PAPER </strong>
            <p class="h6 pb-4">วิทยาศาสตร์ชีวภาพ</p>
          </div>
          <!--/social-box-->
        </div><!--/.col-->
      <?php endif; ?>

      <?php if($this->uri->segment(2) == 'physical'):?>
        <div class="col-lg-3 col-md-6">
          <div class="social-box linkedin">
            <i class="fa fa-universal-access"></i>
            <?php
            $countphysical = array();
            foreach ($paper as $rowphysical) {
              if($rowphysical->user_group != 3 ){
                array_push($countphysical, $rowphysical->user_name );
              }
            }?>
            <strong><span class="count"><?php echo count($countphysical); ?></span> PAPER </strong>
            <p class="h6 pb-4">วิททยาศาสตร์กายภาพ</p>
          </div>
          <!--/social-box-->
        </div><!--/.col-->
      <?php endif; ?>

      <?php if($this->uri->segment(2) == 'csit'):?>
        <div class="col-lg-3 col-md-6">
          <div class="social-box twitter">
            <i class="fa fa-wifi"></i>
            <?php
            $countCSIT = array();
            foreach ($paper as $rowcsit) {
              if($rowcsit->user_group != 3 ){
                array_push($countCSIT, $rowcsit->user_name );
              }
            } ?>
            <strong><span class="count"><?php echo $countUser =count($countCSIT); ?></span> PAPER </strong>
            <p class="h6 pb-4">วิทยาการคอมฯและเทคโนโลยีสารสนเทศ  </p>
          </div>
          <!--/social-box-->
        </div><!--/.col-->
      <?php endif; ?>

      <?php if($this->uri->segment(2) == 'match'):?>
        <div class="col-lg-3 col-md-6">
          <div class="social-box twitter">
            	<i class="fa fa-bar-chart" aria-hidden="true"></i>
            <?php
            $countCSIT = array();
            foreach ($paper as $rowcsit) {
              if($rowcsit->user_group != 3 ){
                array_push($countCSIT, $rowcsit->user_name );
              }
            } ?>
            <strong><span class="count"><?php echo $countUser =count($countCSIT); ?></span> PAPER </strong>
            <p class="h6 pb-4">คณิตศาสตร์และสถิติ  </p>
          </div>
          <!--/social-box-->
        </div><!--/.col-->
      <?php endif; ?>

    </div>
  </div>

  <div class="row bg-white">
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
            <?php foreach ($paper as $rowpay): ?>
              <!-- ไม่แสดง user ที่เป็น admin or staff -->
              <?php if($rowpay->user_group != 3 && $rowpay->user_group != 1): ?>
                <tr id='<?php echo 'trrow'.$rowpay->pay_id; ?>' data-id='<?php echo $rowpay->pay_id; ?>'>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $rowpay->user_prefixname.' '.$rowpay->user_name.' '.$rowpay->user_lastname; ?></td>
                  <td><?php echo $rowpay->regis_projectnameThai; ?></td>
                  <td>
                    <?php
                    echo $statusdoc = (!empty($rowpay->createRegis))?"<i class='text-success'>ลงทะเบียนแล้ว</i>":"<i class='text-danger'>ยังไม่ลงทะเบียน</i>";
                    ?>
                  </td>
                  <td><?php echo $rowpay->title_name.'('.$rowpay->walkin.')'; ?></td>
                  <td><?php echo $rowpay->user_department; ?></td>
                  <td><?php echo $rowpay->user_mobile; ?></td>
                  <td>
                    <?php
                    switch ($rowpay->pay_status) {
                      case 'SUCCESS':
                      echo "<i class='text-success'>ตรวจสอบแล้ว</i>";
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