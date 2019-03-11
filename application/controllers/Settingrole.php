<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settingrole extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('settingrole_model');
		$this->load->model('menu_model');
		$this->load->model('crud_model');
		$this->layout = 'backoffice/settingRole/';
		$userID = $this->session->userdata('user_id');

		if (!empty($userID)) {
			if ($this->session->userdata('user_group') == 3){
				$this->data['dataLogin']   = $this->session->userdata('user_id');
				$this->data['sessiondata'] = $this->session->userdata();
			}else{
				redirect('index.php/regisjournal','refresh');
			}
		} else {
			redirect('index.php/welcome', 'refresh');
		}
	}

	public function index()
	{
		$this->data['group'] = $this->getGroupAll();
		$this->data['menu']  = $this->getMenuAll();
		$this->app->render('Setting Role', $this->layout.'index', $this->data, true);

	}

	public function role()
	{
		$this->data['userAll'] = $this->settingrole_model->getUserAll();
		$this->app->render('Config role', $this->layout.'configrole', $this->data, true);
	}

	public function getGroupAll()
	{
		return $this->menu_model->getGroupAll();
	}

	public function getMenuAll()
	{
		$menuLevel1 =$this->menu_model->getMenuRole('1',3);
		$menuLevel2 =$this->menu_model->getMenuRole('2',3);
		$menu = "";
		foreach ($menuLevel1['result'] as $mlevel1) {
      // $active =  $this->uri->segment(1) == $mlevel1->menu_url ? 'active': '';
      // $icon =  $mlevel1->menu_icon != ''? $mlevel1->menu_icon : '';

			if($mlevel1->menu_url !== '#'){
				$menu .='<li class="col-12 ้">';
				$menu .='<label class="h5"><input type="checkbox" name="menuID[]" id="menu'.$mlevel1->menu_id.'" value="'.$mlevel1->menu_id.'"> '.$mlevel1->menu_name.'</label>';
				$menu .='</li>';
			}else{
				$menu .='<li class="col-12">';
				$menu .= '<label class="h5"><input type="checkbox" name="menuID[]" class="menuhead" id="menu'.$mlevel1->menu_id.'" value="'.$mlevel1->menu_id.'"> '.$mlevel1->menu_name.'</label>';

				foreach ($menuLevel2['result'] as $mlevel2)
				{
					if($mlevel1->menu_id == $mlevel2->menu_parent)
					{
						$menu .='<li class="list-inline-item ml-5">';
						$menu .='<label class="h5"><input type="checkbox" name="menuID[]" class="parent'.$mlevel2->menu_parent.'" data-menuhead="'.$mlevel2->menu_parent.'" id="menu'.$mlevel2->menu_id.'" value="'.$mlevel2->menu_id.'"> '.$mlevel2->menu_name.'</label>';
						$menu .="</li>";
					}
					$menu .=' </li>';
				}
//------- end foreach ----------//
			}
  //---------- end else ----------//
		}
		return $menu;
	}

	public function getDataSelect()
	{
		if($_POST){
			$post = $this->app->get_post($this->input->post());
			$dataConfigMenu = $this->menu_model->showMenuON($post['idSelect']);
			echo json_encode($dataConfigMenu);
		}
	}

	public function accessRights() //สิทธิ์การเข้าถึง
	{
		if ($_POST) {
      // $post = $this->app->get_post($this->input->post());
			$data = $this->menu_model->accessRights($_POST);
			echo json_encode($data);
		}
	}

	public function updateRole()
	{
		$data = array(
			'user_group' => $this->input->post('valRole'),
		);
		$update = $this->crud_model->Update('user', 'user_id', $this->input->post('idRole'), $data);
		echo json_encode($update);
	}

	public function submit()
	{
		if ($_POST) {
			$getMenuSelect = $this->menu_model->setMenuID($this->input->post('group'));
			$post = $this->app->get_post($this->input->post());
			$data = array();

			foreach ($getMenuSelect as $key =>  $value) {
				array_push($data  , $value->menu_id );
			}
			$pushData = !empty($post['menuID'])?array_diff($post['menuID'],$data) : redirect('index.php/settingrole','refresh');

			if(empty($pushData)){
				for ($numPost=0; $numPost < count($post['menuID']); $numPost++) {
					$dataPost[$numPost] = array(
						'idSelect' => $post['menuID'][$numPost],
						'group' => $post['group'],
						'status' => "ON"
					);
					$this->menu_model->accessRights($dataPost[$numPost]);
				}
				redirect('index.php/settingrole','refresh');

			}else{
				$id = null;
				$updateAgen = array();

				for ($i=0; $i < count($pushData); $i++) {
					$dataInsert[$i] = array(
						'menu_id' =>  $pushData[key($pushData)+$i],
						'usergroup_id' => $post['group'],
						'menuconf_status' => "ON",
					);
					$this->crud_model->Insert('menu_config',$dataInsert[$i]);
					array_push($updateAgen, $dataInsert[$i]['menu_id']);

				}
				$DataupdateAgen = (array_diff($post['menuID'],$updateAgen ));
				echo "<pre>";
				for ($DupdateAgen=0; $DupdateAgen < count($DataupdateAgen); $DupdateAgen++) {
					$dataUpdate[$DupdateAgen] = array(
						'idSelect' => $DataupdateAgen[$DupdateAgen],
						'group' => $post['group'],
						'status' => "ON",
					);
					$this->menu_model->accessRights( $dataUpdate[$DupdateAgen]);
				}
				redirect('index.php/settingrole','refresh');
			}
		}
	}
}



/* End of file SettingRole.php */
/* Location: ./application/controllers/SettingRole.php */
