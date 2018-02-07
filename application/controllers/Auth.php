<?php

class auth extends ci_controller {
	
	function index()
	{
		if($this->session->userdata('is_logged_in') == TRUE) redirect('/'); 
		$this->form_validation->set_rules('usid', 'Username', 'required|min_length[4]');
		$this->form_validation->set_rules('pass', 'Password', 'required|min_length[7]');
		$this->form_validation->set_error_delimiters('', '<br>');
		
		if($this->form_validation->run() == FALSE) 
			{
				$as['msg']=validation_errors();
				$this->load->view('login_view',$as);
			}
		else{
			$this->load->model('auth_model');
			$d=$this->auth_model->validiate();
			if($d!=array())
			{	$data=(array)$d[0];
				$data["is_logged_in"]=TRUE;
				
				$this->session->set_userdata($data);
				redirect('/');
			}

			else
			{
				$as['msg']='Incorrect Usename/Password';
				$this->load->view('login_view',$as);
			}
		}		
	}



	function new()
	{	if(isset($is_logged_in) && $is_logged_in == TRUE) redirect('/'); 
		$this->load->model('auth_model');
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('usid', 'Username', 'required|min_length[4]');
		$this->form_validation->set_rules('pass', 'Password', 'required|min_length[7]');
		$this->form_validation->set_rules('passcon', 'Password Confirm', 'required|matches[pass]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_error_delimiters('', '<br>');
		$_POST['image']=$this->image();
		if($this->form_validation->run() == FALSE) 
			{
				$error['msg']=validation_errors();
				$this->load->view('login_view',$error);
			}
		else if($this->auth_model->check()==TRUE)
			{
				$error['msg']= "Username Exists";
				$this->load->view('login_view', $error);
			}
		else if(!$this->auth_model->ins())
			{
				$as['msg']='Unknown Error';
				$this->load->view('login_view',$as);
			}
		else
			{
				$as['msg']='Successfully Registered';
				$this->load->view('login_view',$as);
			}
		
	}




	function image()
        {	$dir = base_url()."data/uploads/";
			$a=array();

			if (is_dir($dir)){
			  if ($dh = opendir($dir)){
			    while (($file = readdir($dh)) !== false){
			      if(preg_match("/.png$/",$file))
			      	$a[]= $file;
			    }
			    closedir($dh);
			    $random_key=array_rand($a);
				$b=$a[$random_key];
				return $b;  
			  }
			}

        }


	function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}