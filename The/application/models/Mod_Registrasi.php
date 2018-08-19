<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_Registrasi extends CI_Model {

	function tampil_role()
		{
			$akses="SELECT * FROM m_role WHERE m_role_id IN ('3','4','5','6','7')";
			return $this->db->query($akses);
		}

	function registrasi_admin($data1,$table)
		{
			$this->db->insert($table,$data1);
			$last_id = $this->db->insert_id();
			
			$query ="INSERT INTO d_user_role (m_user_id,m_role_id) VALUES ('$last_id','2')";
			return $this->db->query($query);
		}

}

/* End of file Mod_Registrasi.php */
/* Location: ./application/models/Mod_Registrasi.php */