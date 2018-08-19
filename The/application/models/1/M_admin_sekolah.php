<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin_sekolah extends CI_Model {

	function all_admin(){
		$query="SELECT
		url.d_user_role_id,
		us.user_nama,
		us.user_password,
		rl.role_nama,
		sk.sekolah_nama,
		(CASE
			WHEN url.is_verified='0' THEN 'NOT VERIFIED'
			WHEN url.is_verified='1' THEN 'VERIFIED'
			ELSE ''
		END) AS status
		FROM d_user_role url 
		LEFT JOIN m_user us ON url.m_user_id = us.m_user_id 
		LEFT JOIN m_role rl ON url.m_role_id = rl.m_role_id
		LEFT JOIN d_sekolah sk ON url.d_sekolah_id = sk.d_sekolah_id
		WHERE us.m_user_id !='1'
		";
		return $this->db->query($query);
	}

	function verifikasi_admin_sekolah($where){
		$query="UPDATE d_user_role SET is_verified='1' WHERE d_user_role_id='$where[d_user_role_id]'";
		$this->db->query($query);
	}

}

/* End of file M_admin_sekolah.php */
/* Location: ./application/models/1/M_admin_sekolah.php */