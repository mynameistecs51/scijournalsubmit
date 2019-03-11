<div class="container">

  <div class="row">
    <div class="col-md-12">
      config role
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
            <?php foreach ($userAll as $rowuser): ?>
              <tr id='<?php echo 'trrow'.$rowuser->user_id; ?>' data-id='<?php echo $rowuser->user_id; ?>'>
                <td><?php echo $i++; ?></td>
                <td><?php echo $rowuser->user_prefixname.' '.$rowuser->user_name.' '.$rowuser->user_lastname; ?></td>
                <td><?php echo $rowuser->regis_projectnameThai; ?></td>
                <td>
                  <?php
                  echo $statusdoc = (!empty($rowuser->createRegis))?"<i class='text-success'>ลงทะเบียนแล้ว</i>":"<i class='text-danger'>ยังไม่ลงทะเบียน</i>";
                  ?>
                </td>
                <td><?php echo $rowuser->title_name.'('.$rowuser->walkin.')'; ?></td>
                <td><?php echo $rowuser->user_department; ?></td>
                <td><?php echo $rowuser->user_mobile; ?></td>
                <td>
                  <?php
                  switch ($rowuser->usergroup_name) {
                    case 'ADMIN':
                    echo '<i class="text-success admin" id="admin'.$rowuser->user_id.'" data-id="'.$rowuser->user_id.'" data-group="'.$rowuser->user_group.'" data-container="body" data-toggle="popover" data-placement="left" title="'.$rowuser->user_name.' '.$rowuser->user_lastname.'" data-content="" >ADMIN</i>';
                    break;
                    case 'USER':
                    echo '<i class="text-warning user" id="user'.$rowuser->user_id.'" data-id="'.$rowuser->user_id.'" data-group="'.$rowuser->user_group.'" data-container="body" data-toggle="popover" data-placement="left" title="'.$rowuser->user_name.' '.$rowuser->user_lastname.'" data-content="" >USER</i>';
                    break;
                    case 'SUPER USER':
                    echo "<i class='text-danger'>ผู้ดูแลระบบ</i>";
                    break;
                    default:
                    null;
                    break;
                  }
                  ?>
                </td>
              </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
