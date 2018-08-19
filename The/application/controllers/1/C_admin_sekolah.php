<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin_sekolah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('1/M_profil');
		$this->load->model('1/M_admin_sekolah');
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("dashboard"));
		}
	}

	public function index()
	{
		$user = $this->session->userdata('user');
		$where = array('user_id' => $user );
		$data['itsme'] = $this->M_profil->myprofil('m_user',$where)->row_array();
		$data['a_s'] = $this->M_admin_sekolah->all_admin()->result();
		$data['content'] ="1/c1_admin_sekolah";
		$this->load->view('Home',$data);
	}

	public function verifikasi_admin_sekolah($d_user_role_id){
		$where = array('d_user_role_id' => $d_user_role_id );
		$this->M_admin_sekolah->verifikasi_admin_sekolah($where);
		redirect('1/C_admin_sekolah');
	}

}

/* End of file Admin_sekolah.php */
/* Location: ./application/controllers/1/Admin_sekolah.php */