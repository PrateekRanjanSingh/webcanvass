<?php

/**
* 
*/
class ext extends ci_controller
{
	
	function about()
	{
		if($this->session->userdata('is_logged_in') != TRUE) redirect('/'); 
		$this->load->view('ext_view',array('load'=>'about'));
	}

	function add()
	{
		if($this->session->userdata('is_logged_in') != TRUE) redirect('/');
		$this->load->view('ext_view',array('load'=>'add'));
	}
}