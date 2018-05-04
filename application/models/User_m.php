<?php
class User_m extends CI_Model{
	function gets(){}
	function get(){}

	public  function add($data){
		$this->db->add("User",$data);
	}
	function edit(){}
	function del(){}
}