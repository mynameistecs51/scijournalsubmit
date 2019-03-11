<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datame_model extends CI_Model {

	function getuser($id='')
	{
		$sql = "
		SELECT
		user_id,
		user_email,
		user_prefixname,
		user_name,
		user_lastname,
		user_position,
		user_gender,
		user_department,
		user_status,
		user_address,
		user_telephone,
		user_mobile,
		user_group
		dt_create
		FROM user
		";
		if(!empty($id)){
			$sql .=" WHERE user.user_id = '$id' ";
		}else{
			$sql .=" WHERE 1=1 AND user.user_group <> 3";
		}

		$query = $this->db->query($sql);
		return $query->result();
	}

}

/* End of file Datame_model.php */
/* Location: ./application/models/Datame_model.php */