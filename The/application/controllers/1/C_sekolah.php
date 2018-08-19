<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_sekolah extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('1/M_profil');
		$this->load->model('1/M_sekolah');
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("dashboard"));
		}
	}

	public function index()
	{
		$us                   = $this->session->userdata('user');
		$where                = array('user_id' => $us );
		$data['itsme']        = $this->M_profil->myprofil('m_user',$where)->row_array();
		$data['content']      = "1/b1_sekolah";
		$data['list_sekolah'] = $this->M_sekolah->tampil_sekolah()->result();
		$data['provinsi']     = $this->M_sekolah->tampil_provinsi()->result();
		$data['kota']         = $this->M_sekolah->tampil_kota()->result();
		$data['kecamatan']    = $this->M_sekolah->tampil_kecamatan()->result();
		$data['kelurahan']    = $this->M_sekolah->tampil_kelurahan()->result();
		$this->load->view('home', $data);
	}

	public function tambah_sekolah()
	{
		$us = $this->session->userdata('user');
		$where = array('user_id' => $us );
		$data['itsme'] = $this->M_profil->myprofil('m_user',$where)->row_array();
		$created_by = $this->M_profil->myprofil('m_user',$where)->row_array();

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
		$this->M_sekolah->tambah_sekolah($data,'d_sekolah');
		redirect('1/C_sekolah');
	}

	public function hapus_sekolah($d_sekolah_id){
		$where = array('d_sekolah_id' => $d_sekolah_id );
		$this->M_sekolah->hapus_sekolah($where,'d_sekolah');
		redirect('1/C_sekolah');
	}

	public function tampil_modal($d_sekolah_id){
		$us = $this->session->userdata('user');
		$where = array('user_id' => $us );
		$data['itsme'] = $this->M_profil->myprofil('m_user',$where)->row_array();

		$where = array('d_sekolah_id' => $d_sekolah_id );
		$data['edit'] = $this->M_sekolah->edit_sekolah('d_sekolah',$where)->row_array();
		$data['list_sekolah'] = $this->M_sekolah->tampil_sekolah()->result();
		$data['provinsi']     = $this->M_sekolah->tampil_provinsi()->result();
		$data['kota']         = $this->M_sekolah->tampil_kota()->result();
		$data['kecamatan']    = $this->M_sekolah->tampil_kecamatan()->result();
		$data['kelurahan']    = $this->M_sekolah->tampil_kelurahan()->result();
		$this->load->view('admin/edit_M_sekolah',$data);
	}

	public function update_sekolah(){
		$us = $this->session->userdata('user');
		$where = array('user_id' => $us );
		$data['itsme'] = $this->M_profil->myprofil('m_user',$where)->row_array();
		$updated_by = $this->M_profil->myprofil('m_user',$where)->row_array();

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
		$M_sekolah = array(
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
		$this->M_sekolah->update_sekolah($where_sekolah,$M_sekolah,'d_sekolah');
		redirect('1/C_sekolah');
	}
}

/* End of file C_sekolah.php */
/* Location: ./application/controllers/1/C_sekolah.php */