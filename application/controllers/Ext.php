<?php

/**
* 
*/
class ext extends ci_controller
{
	
	function about()
	{
		$this->load->view('ext_view',array('load'=>'about'));
	}

	function add()
	{
		$this->load->view('ext_view',array('load'=>'add'));
	}
}