<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthMember extends CI_Controller {

	public function index()
	{
		// Page Required Parameter 
		$pageData['title'] 		= "Dashboard";
		$pageData['userRoleID'] = "1000270120";
		if($pageData['userRoleID'] == "1000270120"){
			$pageData['userRole'] = "Administrator";
		}else{
			$pageData['userRole'] = "Member";
		}
		$pageData['userName'] = "Rohit Kanade";

		// Load CSS
		$pageData['pageHeader'] ='
		<!-- vendor css -->
    <link href="'.base_url().'lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="'.base_url().'lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="'.base_url().'lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="'.base_url().'assets/css/dashforge.css">
    <link rel="stylesheet" href="'.base_url().'assets/css/dashforge.dashboard.css">
		';

		// Load JS
		$pageData['pageFooter'] ='
		<script src="'.base_url().'lib/jquery/jquery.min.js"></script>
    <script src="'.base_url().'lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="'.base_url().'lib/feather-icons/feather.min.js"></script>
    <script src="'.base_url().'lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="'.base_url().'lib/jquery.flot/jquery.flot.js"></script>
    <script src="'.base_url().'lib/jquery.flot/jquery.flot.stack.js"></script>
    <script src="'.base_url().'lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="'.base_url().'lib/chart.js/Chart.bundle.min.js"></script>
    <script src="'.base_url().'lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="'.base_url().'lib/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="'.base_url().'assets/js/dashforge.js"></script>
    <script src="'.base_url().'assets/js/dashforge.sampledata.js"></script>

    <!-- append theme customizer -->
    <script src="'.base_url().'lib/js-cookie/js.cookie.js"></script>
    <script src="'.base_url().'assets/js/dashforge.settings.js"></script>

		';

    // load view
		$this->load->view('_userAuth/includes/headerView', $pageData);
		$this->load->view('_userAuth/dashboardView', $pageData);
		$this->load->view('_userAuth/includes/footerView');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */