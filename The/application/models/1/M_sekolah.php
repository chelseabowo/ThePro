<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sekolah extends CI_Model {

	function tampil_sekolah($special = false)
	{
		$master_data_sekolah='SELECT 
		sk.d_sekolah_id,
		sk.sekolah_id,
		sk.sekolah_nama,
		sk.sekolah_alamat,
		sk.sekolah_no_telp,
		pro.provinsi_nama,
		kt.kota_nama,
		kc.kecamatan_nama,
		kl.kelurahan_nama
		FROM d_sekolah sk
		LEFT JOIN m_provinsi pro ON sk.m_provinsi_id = pro.m_provinsi_id
		LEFT JOIN m_kota kt ON sk.m_kota_id = kt.m_kota_id
		LEFT JOIN m_kecamatan kc ON sk.m_kecamatan_id = kc.m_kecamatan_id
		LEFT JOIN m_kelurahan kl ON sk.m_kelurahan_id = kl.m_kelurahan_id
		';
		return $this->db->query($master_data_sekolah);
	}

	function tampil_provinsi(){
		return $this->db->get('m_provinsi');
	}

	function tampil_kota(){
		$view_data_kota = 'SELECT 
		pro.m_provinsi_id,
		kt.m_kota_id,
		kt.kota_nama
		FROM m_kota kt
		INNER JOIN m_provinsi pro ON kt.m_provinsi_id = pro.m_provinsi_id
		';
		return $this->db->query($view_data_kota);
	}

	function tampil_kecamatan(){
		$view_data_kecamtan = 'SELECT
		kt.m_kota_id,
		kc.m_kecamatan_id,
		kc.kecamatan_nama
		FROM m_kecamatan kc
		INNER JOIN m_kota kt ON kc.m_kota_id = kt.m_kota_id
		';
		return $this->db->query($view_data_kecamtan);
	}

	function tampil_kelurahan(){
		$view_data_kelurahan = 'SELECT
		kc.m_kecamatan_id,
		kl.m_kelurahan_id,
		kl.kelurahan_nama
		FROM m_kelurahan kl
		INNER JOIN m_kecamatan kc ON kl.m_kecamatan_id = kc.m_kecamatan_id
		';
		return $this->db->query($view_data_kelurahan);
	}

	function tambah_sekolah($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function hapus_sekolah($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_sekolah($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	function update_sekolah($where_sekolah,$data_sekolah,$table)
	{
		$this->db->where($where_sekolah);
		$this->db->update($table, $data_sekolah);
	}

}

/* End of file M_sekolah.php */
/* Location: ./application/models/1/M_sekolah.php */