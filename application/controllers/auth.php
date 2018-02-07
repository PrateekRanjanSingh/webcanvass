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
		else if($this->do_upload()==FALSE)
			{
				$error['msg']= $this->upload->display_errors();
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




	function do_upload()
        {	if(isset($is_logged_in) && $is_logged_in == TRUE) redirect('/'); 
        		$name=$_POST['usid'].'_'.time().'.jpg';
                $config['upload_path']          = 'data/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['file_name']			= $name;
                $_POST['image']=$name;

                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('image')) return FALSE;
                else return TRUE;
        }


    function crop()
        {
        	$config['image_library'] = 'gd2';
			$config['source_image'] = "C:\MAMP\htdocs\OSP\data\upload\shubhxz_1517589656.jpg";
			$config['new_image'] = 'C:\MAMP\htdocs\OSP\data\upload\15317589656.jpg';
			//$config['create_thumb'] = TRUE;
			//$config['maintain_ratio'] = FALSE;
			$config['x_axis']       = 5;
			$config['y_axis']       = 5;

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();
			$this->image_lib->crop();
			echo $this->image_lib->display_errors();
		}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}