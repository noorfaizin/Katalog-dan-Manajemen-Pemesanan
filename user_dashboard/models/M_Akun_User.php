<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Akun_User extends CI_Model{
	
	function nonaktif($data, $username){
		$this->db->where('username',$username);
		$this->db->update('users', $data);
		return TRUE;
	}
}