<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authen_model extends CI_Model {

  public function CheckValidLogin($email='',$password ='')
  {
    $sql = "
    SELECT
    u.user_id,
    u.user_email,
    u.user_password,
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
    ug.usergroup_name
    FROM user u
    INNER JOIN user_group ug ON u.user_group = ug.usergroup_id
    WHERE u.user_email = '".$email."'
    AND u.user_password = '".$password."'
    ";

    $query = $this->db->query($sql);

    if($query->num_rows() > 0){
      return $query->result_array();
    }else{
      return $query->num_rows();
    }
  }

  public function getGroup()
  {
    $query = $this->db->get('title');
    return $query->result();
  }

}

/* End of file Authen_model.php */
/* Location: ./application/models/Authen_model.php */