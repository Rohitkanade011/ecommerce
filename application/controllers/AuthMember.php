<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthMember extends CI_Controller {

	public function index()
	{
		$this->load->view('_userAuth/dashboardView');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */