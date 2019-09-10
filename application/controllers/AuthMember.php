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
    <link href="'.base_url().'lib/@fortawesome/fontawesome-free/css/all.min.css">

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

	public function orders()
	{
		// Page Required Parameter 
		$pageData['title'] 		= "Orders";
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
    <link href="'.base_url().'lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="'.base_url().'lib/prismjs/themes/prism-vs.css" rel="stylesheet">
    <link href="'.base_url().'lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="'.base_url().'lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="'.base_url().'lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="'.base_url().'assets/css/daterangepicker.css" rel="stylesheet">
    <link href="'.base_url().'assets/css/app.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="'.base_url().'assets/css/dashforge.css">
		<link rel="stylesheet" href="'.base_url().'assets/css/dashforge.demo.css">
		';

		// Load JS
		$pageData['pageFooter'] ='
		<script src="'.base_url().'lib/jquery/jquery.min.js"></script>
    <script src="'.base_url().'lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="'.base_url().'lib/feather-icons/feather.min.js"></script>
    <script src="'.base_url().'lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="'.base_url().'lib/prismjs/prism.js"></script>
    <script src="'.base_url().'lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="'.base_url().'lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="'.base_url().'lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="'.base_url().'lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="'.base_url().'lib/select2/js/select2.min.js"></script>
    <script src="'.base_url().'assets/js/moment.min.js"></script>
    <script src="'.base_url().'assets/js/daterangepicker.min.js"></script>

    <script src="'.base_url().'assets/js/dashforge.js"></script>
    <script>
    (function($) {

        "use strict"

        var Defaults = $.fn.select2.amd.require("select2/defaults");

        $.extend(Defaults.defaults, {
          searchInputPlaceholder: ""
        });

        var SearchDropdown = $.fn.select2.amd.require("select2/dropdown/search");

        var _renderSearchDropdown = SearchDropdown.prototype.render;

        SearchDropdown.prototype.render = function(decorated) {

          // invoke parent method
          var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

          this.$search.attr("placeholder", this.options.get("searchInputPlaceholder"));

          return $rendered;
        };

      })(window.jQuery);

    	$("#example1").DataTable();
			$(".dataTables_length select").select2({ minimumResultsForSearch: Infinity });
			$(".select2.selectp").select2();

			$("#mr-btn").click(function(){
				$(".mr-filter").toggleClass("hide");
			});
		</script>
		';

    // load view
		$this->load->view('_userAuth/includes/headerView', $pageData);
		$this->load->view('_userAuth/ordersView', $pageData);
		$this->load->view('_userAuth/includes/footerView');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */