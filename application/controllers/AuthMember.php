<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthMember extends CI_Controller {

	public function index()
	{
		// Page Required Parameter 
		$pageData['title'] 		= "Dashboard";
		$pageData['userRole'] = "1000270120";

    // load view
		$this->load->view('_userAuth/includes/headerView', $pageData);
		$this->load->view('_userAuth/dashboardView', $pageData);
		$this->load->view('_userAuth/includes/footerView');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */