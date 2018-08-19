<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('mod_registrasi');
	}

	public function index()
	{
		
	}

	public function registrasi_baru_admin()
	{
		$nip      = $this->input->post('in_userid');
		$nama     = $this->input->post('in_nama');
		$email    = $this->input->post('in_email');
		$password = $this->input->post('in_password');
		$isadmin = 1;
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d h:i:sa');

		$data1 = array(
			'user_id'       => $nip,
			'user_nama'     => $nama, 
			'user_email'    => $email,
			'user_password' => $password,
			'is_admin'      => $isadmin,
			'created_date'  => $date
		);
		$this->mod_registrasi->registrasi_admin($data1,'m_user');
		redirect('dashboard/index/open');
	}
}

/* End of file Registrasi.php */
/* Location: ./application/controllers/Registrasi.php */