<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_Admin extends CI_Model {
	
	function myprofil($table,$where){		
		return $this->db->get($table,$where);
	}

}