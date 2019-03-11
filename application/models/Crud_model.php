<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_model extends CI_Model
{

	public function Insert($table, $data)
	{
		$userID = $this->session->userdata('user_id');

		if (!empty($data)) {
			$data['dt_create']  = date('Y-m-d H:i:s');
			$data['created_by'] = !empty($userID)?$this->session->userdata('user_id'):'0';
			$this->db->insert($table, $this->security->xss_clean($data));
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function Update($table, $field, $id, $data)
	{
		if(!empty($id)){
			$data['dt_create']  = date('Y-m-d H:i:s');
			$data['created_by'] = $this->session->userdata('user_id');
			$this->db->where($field, $id);
			$this->db->update($table, $this->security->xss_clean($data));
			return $id;
		}else{
			return false;
		}
	}

	public function Delete($table, $field, $id = null)
	{
		if (!empty($id)) {
			$this->db->where($field, $id);
			$this->db->delete($table);
			return true;
		} else {
			return false;
		}
	}

}

/* End of file Crud_model.php */
/* Location: ./application/models/Crud_model.php */
