<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {
	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function cek_role($role){
		$query="SELECT rl.* FROM m_user us 
			LEFT JOIN d_user_role rl ON us.m_user_id = rl.m_user_id
			WHERE user_id='$role[user_id]'";
		return $this->db->query($query);
	}

}