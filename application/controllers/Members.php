<?php

class members extends ci_controller {
	
	/*function index()
	{
		$this->load->model('data_model');
		$data=$this->data_model->topic(NULL);
		
		for($i=0; $i<count($data);$i++)
			$data[$i]['reply']=$this->data_model->reply($data[$i]['topic']);

		$mem=$this->data_model->mem_list();
		$this->load->view('home_view',array('data'=>$data, 'mem_list'=>$mem));

	}
*/
	function index()
	{
		if(!($this->session->userdata('is_logged_in') == TRUE)) redirect('/');
		
		$this->load->model('data_model');
		if(!isset($_GET['mem']))
		{
			$info=$this->data_model->mem_list();
			//print_r($info);
			$this->load->view('ext_view',array('load'=>'Members','mems'=>$info));
		}

		else
		{
			$u[0]=array('usid'=>$_GET['mem']);
			$u=$this->data_model->add_info($u);

			if($u==array()) print_r("User not found");
			else 
			{
				$data=$this->data_model->topic($u[0]['usid']);
			
				for($i=0; $i<count($data);$i++)
					$data[$i]['reply']=$this->data_model->reply($data[$i]['topic']);

				$mem=$this->data_model->mem_list();
				$this->load->view('member_view',array('data'=>$data, 'mem_list'=>$mem, 'info'=>$u[0]));
			}
		}
	}
}
