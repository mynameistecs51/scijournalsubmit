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
		(CASE
		WHEN user_walkin = 1 THEN 'บรรยาย'
		WHEN user_walkin = 2 THEN 'โปสเตอร์'
		WHEN user_walkin = 3 THEN 'เข้าร่วมไม่นำเสนอ'
		END)  AS walkin,
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

	public function detailMe($userID=null)
	{
		$sql = "
		SELECT
		u.user_id,
		u.user_email,
		u.user_prefixname,
		u.user_name,
		u.user_lastname,
		u.user_position,
		u.user_gender,
		u.user_department,
		u.user_status,
		u.user_address,
		u.user_telephone,
		u.user_mobile,
		u.user_group,
		u.dt_create AS createUser,
		(CASE
		WHEN u.user_walkin = 1 THEN 'บรรยาย'
		WHEN u.user_walkin = 2 THEN 'โปสเตอร์'
		WHEN u.user_walkin = 3 THEN 'เข้าร่วมไม่นำเสนอ'
		END)  AS walkin,
		ug.usergroup_id,
		ug.usergroup_name,
		rj.regis_id,
		rj.regis_prenamehead,
		rj.regis_namehead,
		rj.regis_lastnamehead,
		rj.regis_prenameteam,
		rj.regis_nameteam,
		rj.regis_lastnameteam,
		rj.regis_prenameadvisor,
		rj.regis_projectnameThai,
		rj.regis_projectnameEng,
		rj.regis_nameadvisor,
		rj.regis_lastnameadvisor,
		rj.dt_create AS createRegis,
		pay.pay_id,
		pay.pay_bank,
		pay.pay_status,
		pay.pay_time,
		pay.pay_file,
		pay.dt_create AS createPay,
		t.title_id,
		t.title_group,
		t.title_name
		FROM user u
		INNER JOIN user_group ug ON u.user_group = ug.usergroup_id
		LEFT JOIN regisjournal rj ON rj.user_id = u.user_id
		LEFT JOIN title t ON t.title_id = rj.title_id
		LEFT JOIN payment pay ON pay.regis_id = rj.regis_id
		";
		if(!empty($userID)){
			$sql .= "WHERE u.user_id = '$userID'";
		}
		$sql ."

		ORDER BY u.user_id ASC
		";
		$query = $this->db->query($sql);
		return $query->result();
	}

}

/* End of file Datame_model.php */
/* Location: ./application/models/Datame_model.php */