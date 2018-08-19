<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('Login');
		$this->load->model('mod_registrasi');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['role'] = $this->mod_registrasi->tampil_role()->result();
		$this->load->view('Dashboard',$data);
	}

	public function pr_login()
	{
		$user = $this->input->post('in_user');
		$password = $this->input->post('in_password');
		$where = array(
			'user_id'       => $user,
			'user_password' => $password
			);
		$where2 = array(
			'user_id'	=> $user
			);
		$cek = $this->Login->cek_login("m_user",$where)->num_rows();
		$role = $this->Login->cek_role($where2)->row_array();
		if($cek > 0){
			$data_session = array(
				'user' => $user,
				'status' => "login"
			);
			if($role['m_role_id']=='1'){
				$this->session->set_userdata($data_session);	
				redirect(base_url('1/C_dashboard/index'));
			}else if($role['m_role_id']=='2'){
				
				if($role['is_verified']=='0' && $role['d_sekolah_id']=='0'){
					echo "<script>alert('UserID Anda Belum di Verifikasi,Mohon Hubungi CS')</script>";
					echo "<script>window.location=history.go(-1)</script>";
				}else if($role['is_verified']=='1' && $role['d_sekolah_id']=='0'){
					$this->session->set_userdata($data_session);
					redirect(base_url('2/C_starter/index'));
				}else if($role['d_sekolah_id']!='0'){
					$this->session->set_userdata($data_session);
					redirect(base_url('2/C_dashboard/index'));
				}else{
					redirect(base_url('Dashboard/index'));	
				}
			}else{
				redirect(base_url('Dashboard/index'));
			}
			
		}else{
			echo "<script>alert('periksa kembali user dan password anda')</script>";
			echo "<script>window.location=history.go(-1)</script>";
		}
		
	}

	public function pr_logout(){
		$this->session->sess_destroy();
		redirect(base_url('Dashboard'));
	}

	public function menu1()
	{
		$this->load->view('menu1');
	}
}
