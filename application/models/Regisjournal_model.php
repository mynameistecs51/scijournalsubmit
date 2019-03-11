<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regisjournal_model extends CI_Model {

	public function getRegis($userID)
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
		rj.regis_file,
		(CASE
		WHEN rj.regis_walkin = 1 THEN 'บรรยาย'
		WHEN rj.regis_walkin = 2 THEN 'โปสเตอร์'
		WHEN rj.regis_walkin = 3 THEN 'เข้าร่วมไม่นำเสนอ'
		END)  AS walkin,
		t.title_id,
		t.title_group,
		t.title_name
		FROM user u
		INNER JOIN user_group ug ON u.user_group = ug.usergroup_id
		INNER JOIN regisjournal rj ON rj.user_id = u.user_id
		INNER JOIN title t ON t.title_id = rj.title_id
		WHERE u.user_id = $userID
		";
		$query = $this->db->query($sql);
		return $query->result();
	}

}

/* End of file Regisjournal_model.php */
/* Location: ./application/models/Regisjournal_model.php */