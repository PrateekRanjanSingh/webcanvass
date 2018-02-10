<?php

class add extends ci_controller {
	
	function index()
	{
		if(!($this->session->userdata('is_logged_in') == TRUE)) redirect('/');
		$this->load->model('data_model');
		$this->load->view('add_view');
		
		
	}

	function topic(){
		$this->load->model('add_model');
		if(isset($_POST['topic']) && isset($_POST['details']) && isset($_POST['usid']))
		{
			$this->add_model->topic($_POST['topic'],$_POST['details'],$_POST['usid']);
			redirect('/');
		}
		else
			$this->load->view('errors\index');
	}

	function reply(){
		$this->load->model('add_model');
		if(isset($_POST['topic']) && isset($_POST['reply']) && isset($_POST['usid']))
		{
			$this->add_model->reply($_POST['topic'],$_POST['reply'],$_POST['usid']);
			redirect($_SERVER['HTTP_REFERER']);
		}
		else
			$this->load->view('errors\index');
	}
}
