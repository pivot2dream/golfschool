<?php

class Contactus extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('login_prove_and_common');
		$this->data['is_user_mode'] = $this->login_prove_and_common->is_logged_in_special('o');

		///////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//***the following will be used to extend data passed to views, regardless of the controller function called***
		//***primary functionality will apply to page title, breadcrumb menu, and notifications accross all controllers***
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$this->data['page_title'] = "Precision Golf School";
		//////////////////////////////
		$this->data['breadcrumber'] = array(
			'My Calendar' => '#'
		);
		//////////////////////////////
		$this->load->vars($this->data);
		////////////////////////////////
	}

	public function sendit(){
		if($this->input->post('submit'))  {
	    $to = 'precisiongolfschool@gmail.com' .','.'chateauconcept@gmail.com';
	    $from = "donotreply@precisiongolfschool.net";
	    $subject = "PGS Contact form Submission";
	    $return_email = $this->input->post('return_email');
	    $thing_name = $this->input->post('namer');
	    $thing_message = $this->input->post('message');
	    $message = "<div style=\"display:block;\">'
	    . 'FROM:' . $thing_name . '<br>'
	    . 'RETURN EMAIL:' . $return_email . '<br>'
	    . $thing_message . '</div>";
	    $headers = "MIME-Version: 1.0 \r\n";
	    $headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
	    $headers  .= "From: $from\r\n";
	    mail($to, $subject, $message, $headers);
	    echo "Message has been sent....!";  
	 	}else{
	    	echo "Add an email address"; 
		}
	}

	public function index(){
		$data['add_state'] = true;
		$this->load->model('membership_model');
		$all_pros = $this->membership_model->get_all_golf_pros();	
		$data['golf_pros'] = $all_pros;
 		$this->load->view('organizer/header_org', $data);
 		$this->load->view('organizer/contactus', $data);
	    //$this->load->view('organizer/admin_top', $data);
		//$this->load->view('organizer/booking_admin', $data);
		$this->load->view('organizer/footer_org');
	}
}