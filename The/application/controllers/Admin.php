<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('mod_admin');
		$this->load->model('data_sekolah');
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("dashboard"));
		}
	}

	public function index()
	{
		$us = $this->session->userdata('user');
		$where = array('user_id' => $us );
		$data['itsme'] = $this->mod_admin->myprofil('m_user',$where)->row_array();
		$data['content'] ="admin/dashboard_admin";
		$this->load->view('home',$data);
	}

	public function sekolah()
	{
		$us                   = $this->session->userdata('user');
		$where                = array('user_id' => $us );
		$data['itsme']        = $this->mod_admin->myprofil('m_user',$where)->row_array();
		$data['content']      = "admin/a1_sekolah";
		$data['list_sekolah'] = $this->data_sekolah->tampil_sekolah()->result();
		$data['provinsi']     = $this->data_sekolah->tampil_provinsi()->result();
		$data['kota']         = $this->data_sekolah->tampil_kota()->result();
		$data['kecamatan']    = $this->data_sekolah->tampil_kecamatan()->result();
		$data['kelurahan']    = $this->data_sekolah->tampil_kelurahan()->result();
		$this->load->view('home', $data);
	}

	public function tambah_sekolah()
	{
		$us = $this->session->userdata('user');
		$where = array('user_id' => $us );
		$data['itsme'] = $this->mod_admin->myprofil('m_user',$where)->row_array();
		$created_by = $this->mod_admin->myprofil('m_user',$where)->row_array();

		$nama_sekolah = $this->input->post('in_nama_sekolah');
		$id_sekolah   = $this->input->post('in_id_sekolah');
		$alamat       = $this->input->post('in_alamat');
		$no_telp      = $this->input->post('in_no_telp');
		$provinsi     = $this->input->post('in_provinsi');
		$kota         = $this->input->post('in_kota');
		$kecamatan    = $this->input->post('in_kecamatan');
		$kelurahan    = $this->input->post('in_kelurahan');
		$created_by   = $this->input->post('in_created_by');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d h:i:sa');
		$data = array(
			'sekolah_nama'    => $nama_sekolah,
			'sekolah_id'      => $id_sekolah,
			'sekolah_alamat'  => $alamat, 
			'sekolah_no_telp' => $no_telp, 
			'm_provinsi_id'   => $provinsi, 
			'm_kota_id'       => $kota,
			'm_kecamatan_id'  => $kecamatan,
			'm_kelurahan_id'  => $kelurahan,
			'created_date'    => $date, 
			'created_by'      => $created_by['user_nama'] 
		);
		$this->data_sekolah->tambah_sekolah($data,'d_sekolah');
		redirect('admin/sekolah');
	}

	public function hapus_sekolah($d_sekolah_id){
		$where = array('d_sekolah_id' => $d_sekolah_id );
		$this->data_sekolah->hapus_sekolah($where,'d_sekolah');
		redirect('admin/sekolah');
	}

	public function tampil_modal($d_sekolah_id){
		$us = $this->session->userdata('user');
		$where = array('user_id' => $us );
		$data['itsme'] = $this->mod_admin->myprofil('m_user',$where)->row_array();

		$where = array('d_sekolah_id' => $d_sekolah_id );
		$data['edit'] = $this->data_sekolah->edit_sekolah('d_sekolah',$where)->row_array();
		$data['list_sekolah'] = $this->data_sekolah->tampil_sekolah()->result();
		$data['provinsi']     = $this->data_sekolah->tampil_provinsi()->result();
		$data['kota']         = $this->data_sekolah->tampil_kota()->result();
		$data['kecamatan']    = $this->data_sekolah->tampil_kecamatan()->result();
		$data['kelurahan']    = $this->data_sekolah->tampil_kelurahan()->result();
		$this->load->view('admin/edit_data_sekolah',$data);
	}

	public function update_sekolah(){
		$us = $this->session->userdata('user');
		$where = array('user_id' => $us );
		$data['itsme'] = $this->mod_admin->myprofil('m_user',$where)->row_array();
		$updated_by = $this->mod_admin->myprofil('m_user',$where)->row_array();

		$id  	      = $this->input->post('in_id');
		$nama_sekolah = $this->input->post('in_nama_sekolah');
		$id_sekolah   = $this->input->post('in_id_sekolah');
		$alamat       = $this->input->post('in_alamat');
		$no_telp      = $this->input->post('in_no_telp');
		$provinsi     = $this->input->post('in_provinsi');
		$kota         = $this->input->post('in_kota');
		$kecamatan    = $this->input->post('in_kecamatan');
		$kelurahan    = $this->input->post('in_kelurahan');
		$updated_by   = $this->input->post('in_updated_by');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d h:i:sa');
		$where_sekolah = array (
			'd_sekolah_id' => $id 
		);
		$data_sekolah = array(
			'sekolah_nama'    => $nama_sekolah,
			'sekolah_id'      => $id_sekolah,
			'sekolah_alamat'  => $alamat, 
			'sekolah_no_telp' => $no_telp, 
			'm_provinsi_id'   => $provinsi, 
			'm_kota_id'       => $kota,
			'm_kecamatan_id'  => $kecamatan,
			'm_kelurahan_id'  => $kelurahan,
			'updated_date'    => $date, 
			'updated_by'      => $updated_by['user_nama'] 
		);
		$this->data_sekolah->update_sekolah($where_sekolah,$data_sekolah,'d_sekolah');
		redirect('admin/sekolah');
	}
}