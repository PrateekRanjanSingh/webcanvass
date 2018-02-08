<?php

/**
* 
*/
class data_model extends ci_model
{
	function topic($usid)
	{

		if($usid==NULL)
		{	$this->db->order_by('id',"desc"); 
			$query = $this->db->get('topic');
		}
		else
		{
			$this->db->where('usid', $usid);
			$this->db->order_by('id',"desc");
			$query = $this->db->get('topic');
		}
		$data=array();
		foreach ($query->result() as $a) {
			$data[]=(array)$a;
		}

		$data=$this->add_info($data);
		return $data;
	}

	function reply($topic)
	{
		if($topic==NULL)
		{
			//$this->db->order_by('id',"desc");
			$query = $this->db->get('reply');
			
			
		}

		else{

			
			$this->db->where('topic',$topic);
			//$this->db->order_by('id',"desc");
			$query=$this->db->get('reply');

		}
		$data=array();
		foreach ($query->result() as $a) {
			$data[]=(array)$a;
		}
		$data=$this->add_info($data);
		
		
		return $data;
	}
	
	function add_info($data)
	{	
		$c=array();
		foreach ($data as $a) {
			$this->db->select('fname, lname,email,image,doj,gender');
			$this->db->where('usid',$a['usid']);
			$q = $this->db->get('members');
			$q=$q->result();
			if($q!=array())
			$c[]=array_merge($a,(array)$q[0]);
		}
		return $c;
	}

	function mem_list()
	{
		$this->db->select('lname, fname,usid,image' );
		$this->db->order_by('fname');
		$data=$this->db->get('members')->result();
		$a=array();
		foreach ($data as $key) $a[]=(array)$key;
		
		return $a;
	}

}