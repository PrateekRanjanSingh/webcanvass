<?php

class auth_model extends ci_model {

	function validiate()
	{	//echo $_POST['usid'].$_POST['pass'];
		$this->db->where('usid', $_POST['usid']);
		$this->db->where('pass', $_POST['pass']);
		$query = $this->db->get('members');
		return $query->result();
	}

	function check()
	{
		$this->db->where('usid',$_POST['usid']);
		$query=$this->db->get('members');
		if($query->result()== array()) return FALSE;
		else return True;
	}

	function ins()
	{

		$data=$_POST;
		str_replace(".","_",$data['usid']);
		unset($data['passcon']);
		unset($data['action']);
		$data['doj']=time();
		$insert = $this->db->insert('members', $data);
		return $insert;
	}
}