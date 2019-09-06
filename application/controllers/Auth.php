<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('loginView');
	}

	public function signin()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('loginView');
    }
    else
    {
      redirect('auth/userVerification');
    }
	}

	public function signup()
	{
		$this->load->view('registerView');
	}

	public function userVerification()
	{
		$userValid= ture;

		if($userValid){
			redirect('authMember');
		}else{
			redirect('auth/signin');
		}
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */