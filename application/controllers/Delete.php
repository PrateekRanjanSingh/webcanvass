<?php
/**
* 
*/
class delete extends ci_controller
{
	
	function index()
	{
		$this->load->model('add_model');
		if(isset($_GET['table']) && isset($_GET['time']))
		{
			$this->add_model->delete($_GET['table'],$_GET['time']);
			redirect($_SERVER['HTTP_REFERER']);
		}
		else
			$this->load->view('errors\index');
		
	}
}