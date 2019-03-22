<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regisjournal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->layout = 'backoffice/regisjournal/';
		$this->load->model('authen_model');
		$this->load->model('crud_model');
		$this->load->model('regisjournal_model');
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
		$dataRegis = $this->regisjournal_model->getRegis($this->data['dataLogin']);
		if (empty($dataRegis)) {
			$this->regis();
		} else {
			redirect('index.php/regisjournal/edit', 'refresh');
		}
	}

	public function regis()
	{
		$dataRegis = $this->regisjournal_model->getRegis($this->data['dataLogin']);
		if (empty($dataRegis)) {
			$this->data['title'] = $this->authen_model->getGroup();
			$this->app->render('Registor Journal@UDRU', $this->layout . 'index', $this->data, true);
		} else {
			redirect('index.php/regisjournal/edit', 'refresh');
		}
	}

	public function addRegis()
	{

		$fileupload = (!empty($_FILES['userfile']['name'])) ? $this->_upload_files('userfile') : null;

		if ($_POST) {
			$data = array(
				'regis_prenamehead'     => $this->input->post('prefixnamehead'),
				'regis_namehead'        => $this->input->post('namehead'),
				'regis_lastnamehead'    => $this->input->post('lastnamehead'),
				// 'regis_prenameteam'     => $this->input->post('prefixnameteam'),
				// 'regis_nameteam'        => $this->input->post('nameteam'),
				// 'regis_lastnameteam'    => $this->input->post('lastnameteam'),
				'regis_prenameadvisor'  => $this->input->post('prefixnameadvisor'),
				'regis_projectnameThai' => $this->input->post('nameprojectThai'),
				'regis_projectnameEng'  => $this->input->post('nameprojectEng'),
				'regis_nameadvisor'     => $this->input->post('nameadvisor'),
				'regis_lastnameadvisor' => $this->input->post('lastnameadvisor'),
				'title_id'              => $this->input->post('titleselect'),
				'regis_file'            => $fileupload['file_name'],
				'regis_status'          => "SUCCESS",
				'user_id'               => $this->input->post('user_id'),
			);
			$this->crud_model->Insert('regisjournal', $data);
		}
		redirect('index.php/payment/', 'refresh');
	}

//-- แก้ไข การลงทะเบียนบทความ -- //
	public function edit()
	{
		$dataRegis = $this->regisjournal_model->getRegis($this->data['dataLogin']);
		foreach ($dataRegis as $fieldRegis) {
			$this->data['dataRegis'] = array(
				'user_department'       => $fieldRegis->user_department,
				'regis_id'              => $fieldRegis->regis_id,
				'regis_prenamehead'     => $fieldRegis->regis_prenamehead,
				'regis_namehead'        => $fieldRegis->regis_namehead,
				'regis_lastnamehead'    => $fieldRegis->regis_lastnamehead,
				// 'regis_prenameteam'     => $fieldRegis->regis_prenameteam,
				// 'regis_nameteam'        => $fieldRegis->regis_nameteam,
				// 'regis_lastnameteam'    => $fieldRegis->regis_lastnameteam,
				'regis_prenameadvisor'  => $fieldRegis->regis_prenameadvisor,
				'regis_projectnameThai' => $fieldRegis->regis_projectnameThai,
				'regis_projectnameEng'  => $fieldRegis->regis_projectnameEng,
				'regis_nameadvisor'     => $fieldRegis->regis_nameadvisor,
				'regis_lastnameadvisor' => $fieldRegis->regis_lastnameadvisor,
				// 'regis_walkin'          => $fieldRegis->walkin,
				'title_id'              => $fieldRegis->title_id,
				'title_name'            => $fieldRegis->title_name,
				'title_group'           => $fieldRegis->title_group,
			);
		}
		$this->data['title'] = $this->authen_model->getGroup();
		$this->app->render("Edit Regisjournal", $this->layout . 'edit', $this->data, true);
	}

	public function saveEdit()
	{
		$dataRegis = $this->regisjournal_model->getRegis($this->data['dataLogin']);
		foreach ($dataRegis as $fieldRegis) {
			$this->data['dataRegis'] = array(
				'user_department'       => $fieldRegis->user_department,
				'regis_id'              => $fieldRegis->regis_id,
				'regis_prenamehead'     => $fieldRegis->regis_prenamehead,
				'regis_namehead'        => $fieldRegis->regis_namehead,
				'regis_lastnamehead'    => $fieldRegis->regis_lastnamehead,
				// 'regis_prenameteam'     => $fieldRegis->regis_prenameteam,
				// 'regis_nameteam'        => $fieldRegis->regis_nameteam,
				// 'regis_lastnameteam'    => $fieldRegis->regis_lastnameteam,
				'regis_prenameadvisor'  => $fieldRegis->regis_prenameadvisor,
				'regis_projectnameThai' => $fieldRegis->regis_projectnameThai,
				'regis_projectnameEng'  => $fieldRegis->regis_projectnameEng,
				'regis_nameadvisor'     => $fieldRegis->regis_nameadvisor,
				'regis_lastnameadvisor' => $fieldRegis->regis_lastnameadvisor,
				// 'regis_walkin'          => $fieldRegis->walkin,
				'regis_file'						=> $fieldRegis->regis_file,
				'title_id'              => $fieldRegis->title_id,
				'title_name'            => $fieldRegis->title_name,
				'title_group'           => $fieldRegis->title_group,
			);
		}

		$fileupdate = (!empty($_FILES['userfile']['name'])) ? $this->_upload_files('userfile') : '';

		if (empty($fileupdate)) {
			$dataupdate = array(
				// 'regis_id'              => $this->input->post('regis_id'),
				// 'regis_prenameteam'     => $this->input->post('prefixnameteam'),
				// 'regis_nameteam'        => $this->input->post('nameteam'),
				// 'regis_lastnameteam'    => $this->input->post('lastnameteam'),
				'regis_prenameadvisor'  => $this->input->post('prefixnameadvisor'),
				'regis_nameadvisor'     => $this->input->post('nameadvisor'),
				'regis_lastnameadvisor' => $this->input->post('lastnameadvisor'),
				'regis_projectnameThai' => $this->input->post('nameprojectThai'),
				'regis_projectnameEng'  => $this->input->post('nameprojectEng'),
				// 'regis_walkin'          => $this->input->post('walkin'),
				'title_id'              => $this->input->post('titleselect'),
				'regis_status'          => 'SUCCESS',
			);
			$this->crud_model->Update('regisjournal', 'regis_id', $this->input->post('regis_id'), $dataupdate);
		} elseif(empty($fileupdate['uploadError'])) {

			if($this->data['dataRegis']['regis_file'] != ''){
			//ลบไฟล์เดิม ก่อนอัพเดทไฟล์ใหม่
				unlink($_SERVER['$DOCUMENT_ROOT'].'assets/files_journal/' . $this->data['dataRegis']['regis_file']);
			}

			$dataupdate = array(
				// 'regis_prenameteam'     => $this->input->post('prefixnameteam'),
				// 'regis_nameteam'        => $this->input->post('nameteam'),
				// 'regis_lastnameteam'    => $this->input->post('lastnameteam'),
				'regis_prenameadvisor'  => $this->input->post('prefixnameadvisor'),
				'regis_nameadvisor'     => $this->input->post('nameadvisor'),
				'regis_lastnameadvisor' => $this->input->post('lastnameadvisor'),
				'regis_projectnameThai' => $this->input->post('nameprojectThai'),
				'regis_projectnameEng'  => $this->input->post('nameprojectEng'),
				// 'regis_walkin'          => $this->input->post('walkin'),
				'title_id'              => $this->input->post('titleselect'),
				'regis_file'            => $fileupdate['file_name'],
				'regis_status'          => 'SUCCESS',
			);
			$this->crud_model->update('regisjournal', 'regis_id', $this->input->post('regis_id'), $dataupdate);

		}
		$this->data['uploadError'] = (!empty($fileupdate['uploadError'])) ? $this->session->set_flashdata('message', '!!  ไฟล์อัพโหลดเกิดข้อผิดพลาด !!') : '';
		redirect('index.php/payment/', 'refresh');
	}

	private function _upload_files($field)
	{
		$file_name               = date('dmy_His');
		$config['upload_path']   = $_SERVER['$DOCUMENT_ROOT'].'assets/files_journal';
		$config['allowed_types'] = 'pdf|doc|docx|txt';
		// $config['max_size']      = '0';
		$config['remove_spaces'] = true;
		$config['file_name']     = $file_name;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$files = array();
		if ($this->upload->do_upload($field)) {

			$files_uploaded = $this->upload->data();
			return $files_uploaded;

		} else {
			// return array('uploadError' => $this->upload->display_errors());
			return array('uploadError' => 'ไฟล์อัพโหลดเกิดข้อผิดพลาด');
			// $this->session->set_flashdata('message', '!!  ไฟล์อัพโหลดเกิดข้อผิดพลาด !!');
			// return $uploadError;

		}
		// return $this->data['uploadstatus'];
		// return $files_uploaded;
	}

}

/* End of file Regisjournal.php */
/* Location: ./application/controllers/Regisjournal.php */
