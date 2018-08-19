<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('2/M_profil');
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("Dashboard"));
		}
	}

	public function index()
	{
		$user = $this->session->userdata('user');
		$where = array('user_id' => $user );
		$data['itsme'] = $this->M_profil->myprofil('m_user',$where)->row_array();
		$data['content'] ="2/a1_dashboard";
		$this->load->view('Home_admin',$data);
	}

}