<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{

	public function getMenuRole($level, $group)
	{
		$sql = "
		SELECT *
		FROM menu
		INNER JOIN menu_config mc ON mc.menu_id = menu.menu_id
		INNER JOIN user_group ug ON ug.usergroup_id = mc.usergroup_id
		WHERE menu.menu_level = '$level'
		";
		$sql .= ($group != null) ? "AND mc.usergroup_id='$group'" : "";
		$sql .= "
		AND menu.menu_status = 'ON'
		AND mc.menuconf_status = 'ON'
		ORDER BY menu.menu_id
		";
		$query    = $this->db->query($sql);
		$num_rows = $query->num_rows();
		$result   = $query->result();
		$data     = array(
			'num_rows' => $num_rows,
			'result'   => $result,
		);
		return $data;
	}

	public function showMenuON($groupID)
	{
		$sql = "
		SELECT *
		FROM menu
		INNER JOIN menu_config mc ON mc.menu_id = menu.menu_id
		INNER JOIN user_group ug ON ug.usergroup_id = mc.usergroup_id
		";
		if(isset($groupID)){
			$sql .= "WHERE ug.usergroup_id = '$groupID' ";
		}
		$sql .= " AND mc.menuconf_status = 'ON' ";
		return $this->db->query($sql)->result_array();
	}

	public function accessRights($data)
	{
		if(!empty($data['idSelect'])){
			$this->db->where('menu_id',$data['idSelect']);
		}
		$this->db->where('usergroup_id',$data['group']);
		$data = $this->db->update('menu_config', array('menuconf_status' => $data['status']));
		return $data;

	}

	public function setMenuID($groupID='')
	{
		$sql = "
		SELECT
		-- menu.*,
		mc.*
		FROM menu
		INNER JOIN menu_config mc ON mc.menu_id = menu.menu_id
		INNER JOIN user_group ug ON ug.usergroup_id = mc.usergroup_id
		";
		if(!empty($groupID)){
			$sql .= "WHERE ug.usergroup_id = '$groupID' ";
		}
    // $sql .= " AND mc.menuconf_status = 'ON' ";
		return $this->db->query($sql)->result();
	}


	public function timeline($user_id)
	{
		$sql = "
		SELECT
		u.user_id,
		(CASE
		WHEN	u.user_status = 0 THEN 'นักวิจัย/นักวิชาการ'
		WHEN	u.user_status = 1 THEN 'อาจารย์'
		WHEN	u.user_status = 2 THEN 'นศ.ปริญญาตรี'
		WHEN	u.user_status = 3 THEN 'นศ.ปริญญาโท'
		WHEN	u.user_status = 4 THEN 'นศ.ปริญญาเอก'
		ELSE 'NULL'
		END) AS user_status,
		u.dt_create AS createUser,
		rj.regis_id,
		rj.regis_status,
		rj.dt_create AS createRegis,
		pay.pay_id,
		pay.pay_status,
		pay.dt_create AS createPay
		FROM
		user u
		LEFT JOIN regisjournal rj ON rj.user_id = u.user_id
		LEFT JOIN payment pay ON pay.regis_id =  rj.regis_id
		WHERE u.user_id = $user_id
		";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getGroupAll()
	{
		$this->db->select('usergroup_id,usergroup_name,usergroup_status');
		$this->db->where('usergroup_id <> 3');
		return $this->db->get('user_group')->result();
	}

}

/* End of file Menu_model.php */
/* Location: ./application/models/Menu_model.php */
