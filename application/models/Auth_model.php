<?php

class auth_model extends ci_model {

	function validiate()
	{	//echo $_POST['usid'].$_POST['pass'];
		$_POST['usid']=strtolower($_POST['usid']);
		$this->db->where('usid', $_POST['usid']);
		$this->db->where('pass', $_POST['pass']);
		$query = $this->db->get('members');
		return $query->result();
	}

	function check()
	{
		$_POST['usid']=strtolower($_POST['usid']);
		$this->db->where('usid',$_POST['usid']);
		$query=$this->db->get('members');
		if($query->result()== array()) return FALSE;
		else return True;
	}

	function ins()
	{
		$_POST['usid']=strtolower($_POST['usid']);
		$_POST['lname']=ucfirst($_POST['fname']);
		$_POST['fname']=ucfirst($_POST['fname']);
		$data=$_POST;
		str_replace(".","_",$data['usid']);
		unset($data['passcon']);
		unset($data['action']);
		$data['doj']=time();
		$insert = $this->db->insert('members', $data);
		return $insert;
	}
}