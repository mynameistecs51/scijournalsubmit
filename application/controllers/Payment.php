<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->layout = 'backoffice/payment/';
		$this->load->model('payment_model');
		$this->load->model('crud_model');
		$userID = $this->session->userdata('user_id');

		if (!empty($userID)) {
			$this->data['dataLogin']   = $this->session->userdata('user_id');
			$this->data['sessiondata'] = $this->session->userdata();
		} else {
			redirect('index.php/welcome/#login', 'refresh');
		}
	}

	public function index()
	{

		$team = $this->payment_model->getRegiser($this->data['dataLogin']);
		if(empty($team[0]->pay_id)){
			$this->pay();
		}else{
			redirect('index.php/payment/editPayment','refresh');
		}
	}

	public function pay()
	{
		$team = $this->payment_model->getRegiser($this->data['dataLogin']);
		foreach ($team as $fieldteam) {
			$this->data['datateam'] = array(
				'user_department'				=> $fieldteam->user_department,
				'regis_id'							=> $fieldteam->regis_id,
				'regis_prenamehead'     => $fieldteam->regis_prenamehead,
				'regis_namehead'        => $fieldteam->regis_namehead,
				'regis_lastnamehead'    => $fieldteam->regis_lastnamehead,
				'regis_prenameteam'     => $fieldteam->regis_prenameteam,
				'regis_nameteam'        => $fieldteam->regis_nameteam,
				'regis_lastnameteam'    => $fieldteam->regis_lastnameteam,
				'regis_prenameadvisor'  => $fieldteam->regis_prenameadvisor,
				'regis_projectnameThai' => $fieldteam->regis_projectnameThai,
				'regis_projectnameEng'  => $fieldteam->regis_projectnameEng,
				'regis_nameadvisor'     => $fieldteam->regis_nameadvisor,
				'regis_lastnameadvisor' => $fieldteam->regis_lastnameadvisor,
				'regis_walkin'          => $fieldteam->walkin,
				'title_name'            => $fieldteam->title_name,
				'title_group'           => $fieldteam->title_group,
				'pay_id'								=> $fieldteam->pay_id,
				'pay_file'							=> $fieldteam->pay_file,
				'pay_bank'							=> $fieldteam->pay_bank,
				'pay_time'							=> $fieldteam->pay_time,
			);
		}

		$this->app->render('ชำระค่าลงทะเบียน', $this->layout . 'index', $this->data, true);
	}

	public function addPyment()
	{
		$filepayment = (!empty($_FILES['userfile'])) ? $this->_upload_files('userfile') : '';
		$data = array(
			'pay_bank' => $this->input->post('nambank'),
			'pay_time' => $this->input->post('timesend'),
			'pay_file' => $filepayment['file_name'],
			'pay_detail' => $this->input->post('detail'),
      'pay_status' => 'WAIT', // status wait รอตรวจสอบ
      'regis_id' => $this->input->post('regis_id'),
      'user_id' => $this->input->post('user_id'),
    );
		$this->crud_model->Insert('payment', $data);
		redirect('index.php/payment','refresh');

	}

	public function editPayment()
	{
		$team = $this->payment_model->getRegiser($this->data['dataLogin']);
		foreach ($team as $fieldteam) {
			$this->data['datateam'] = array(
				'user_department'				=> $fieldteam->user_department,
				'regis_id'							=> $fieldteam->regis_id,
				'regis_prenamehead'     => $fieldteam->regis_prenamehead,
				'regis_namehead'        => $fieldteam->regis_namehead,
				'regis_lastnamehead'    => $fieldteam->regis_lastnamehead,
				'regis_prenameteam'     => $fieldteam->regis_prenameteam,
				'regis_nameteam'        => $fieldteam->regis_nameteam,
				'regis_lastnameteam'    => $fieldteam->regis_lastnameteam,
				'regis_prenameadvisor'  => $fieldteam->regis_prenameadvisor,
				'regis_projectnameThai' => $fieldteam->regis_projectnameThai,
				'regis_projectnameEng'  => $fieldteam->regis_projectnameEng,
				'regis_nameadvisor'     => $fieldteam->regis_nameadvisor,
				'regis_lastnameadvisor' => $fieldteam->regis_lastnameadvisor,
				'regis_walkin'          => $fieldteam->walkin,
				'title_name'            => $fieldteam->title_name,
				'title_group'           => $fieldteam->title_group,
				'pay_id'								=> $fieldteam->pay_id,
				'pay_file'							=> $fieldteam->pay_file,
				'pay_bank'							=> $fieldteam->pay_bank,
				'pay_time'							=> $fieldteam->pay_time,
			);
		}

		$this->app->render('Edit data Payment', $this->layout.'edit', $this->data, true);
	}

	public function saveEdit()
	{

		$filepayment = (!empty($_FILES['userfile'])) ? $this->_upload_files('userfile') : '';
		if(empty($filepayment)){
			$data = array(
				'pay_bank' => $this->input->post('nambank'),
				'pay_time' => $this->input->post('timesend'),
				'pay_detail' => $this->input->post('detail'),
				'pay_status' => 'WAIT',
				'regis_id' => $this->input->post('regis_id'),
				'user_id' => $this->input->post('user_id'),
			);
			$this->crud_model->Update('payment', 'pay_id', $this->input->post('pay_id'), $data);

		}elseif(empty($filepayment['uploadError'])){

			$team = $this->payment_model->getRegiser($this->data['dataLogin']);
			foreach ($team as $fieldteam) {
				$datateam = array(
					'user_department'				=> $fieldteam->user_department,
					'regis_id'							=> $fieldteam->regis_id,
					'regis_prenamehead'     => $fieldteam->regis_prenamehead,
					'regis_namehead'        => $fieldteam->regis_namehead,
					'regis_lastnamehead'    => $fieldteam->regis_lastnamehead,
					'regis_prenameteam'     => $fieldteam->regis_prenameteam,
					'regis_nameteam'        => $fieldteam->regis_nameteam,
					'regis_lastnameteam'    => $fieldteam->regis_lastnameteam,
					'regis_prenameadvisor'  => $fieldteam->regis_prenameadvisor,
					'regis_projectnameThai' => $fieldteam->regis_projectnameThai,
					'regis_projectnameEng'  => $fieldteam->regis_projectnameEng,
					'regis_nameadvisor'     => $fieldteam->regis_nameadvisor,
					'regis_lastnameadvisor' => $fieldteam->regis_lastnameadvisor,
					'regis_walkin'          => $fieldteam->walkin,
					'title_name'            => $fieldteam->title_name,
					'title_group'           => $fieldteam->title_group,
					'pay_file'							=> $fieldteam->pay_file,
					'pay_bank'							=> $fieldteam->pay_bank,
					'pay_time'							=> $fieldteam->pay_time,
				);
			}

			if($datateam['pay_file'] != ''){
			//ลบไฟล์เดิม ก่อนอัพเดทไฟล์ใหม่
				unlink($_SERVER['$DOCUMENT_ROOT'].'assets/files_payment/' . $datateam['pay_file']);
			}
			$data = array(
				'pay_bank' => $this->input->post('nambank'),
				'pay_time' => $this->input->post('timesend'),
				'pay_file' => $filepayment['file_name'],
				'pay_detail' => $this->input->post('detail'),
				'pay_status' => 'WAIT',
				'regis_id' => $this->input->post('regis_id'),
				'user_id' => $this->input->post('user_id'),
			);
			$this->crud_model->Update('payment', 'pay_id', $this->input->post('pay_id'), $data);

		}

		redirect('index.php/payment/editPayment','refresh');
	}

	private function _upload_files($field)
	{
		$file_name               = date('dmy_His');
		$config['upload_path']   = $_SERVER['$DOCUMENT_ROOT'].'assets/files_payment/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['remove_spaces'] = true;
		$config['file_name']     = $file_name;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$files = array();
		if ($this->upload->do_upload($field)) {
			$files_uploaded = $this->upload->data();
			return $files_uploaded;
		} else {
			print_r($this->upload->display_errors());
			return array('uploadError' => 'ไฟล์อัพโหลดเกิดข้อผิดพลาด');
		}
	}

	public function getpaymentAll()
	{
		$this->data['team'] = $this->payment_model->getRegiser();

		echo json_encode($this->data['team']);
	}

	public function checkpayment()
	{
		$this->data['team'] = $this->payment_model->getRegiser();

		$this->app->render('Check payment', $this->layout.'checkpayment', $this->data, true);
	}

	public function getPaymentID()
	{
		$dataPayment = $this->payment_model->getRegiser($this->input->post('userID'));
		// echo json_encode($this->input->post('userID'));
		echo json_encode($dataPayment);
	}

	public function updateStatusPayment()
	{
		$id = $this->input->post('confcheck');
		$status = $this->input->post('confstatus');

		if( $id != null && $status == "SUCCESS"){
			$data = array(
				'pay_status' => 'SUCCESS'
			);
			$update = $this->crud_model->Update('payment', 'pay_id', $id, $data);
			echo json_encode($update);
		}elseif( $id != null && $status == "WAIT"){
			$data = array(
				'pay_status' => 'WAIT'
			);
			$update = $this->crud_model->Update('payment', 'pay_id', $id, $data);
			echo json_encode($update);
		}

	}

}

/* End of file Payment.php */
/* Location: ./application/controllers/Payment.php */
