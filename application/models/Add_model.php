<?php
/**
* 
*/
class add_model extends ci_model
{
	
	function topic($topic,$details,$usid)
	{
		$data=array('topic'=>$topic,'details'=>$details,'usid'=>$usid,'date'=>time());
		$this->db->insert('topic',$data);
	}

	function reply($topic, $reply, $usid)
	{
		$data=array('topic'=>$topic,'reply'=>$reply,'usid'=>$usid,'date'=>time());
		$this->db->insert('reply',$data);
	}
	
	function delete($table, $time)
	{
		$this->db->where('date', $time);
   		$this->db->delete($table);
	}
}