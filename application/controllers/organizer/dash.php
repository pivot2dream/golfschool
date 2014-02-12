<?php

class Dash extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_prove_and_common');
		$this->login_prove_and_common->is_logged_in('o');

		///////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//***the following will be used to extend data passed to views, regardless of the controller function called***
		//***primary functionality will apply to page title, breadcrumb menu, and notifications accross all controllers***
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$this->data['page_title'] = "Add the foods you can't eat, and we'll offer you choices";
		//////////////////////////////
			$this->data['breadcrumber'] = array(
			'Manage Staff' => 'index.php/organizer/dash/add_admin'
		);
		//////////////////////////////
		$this->load->vars($this->data);
		////////////////////////////////
	}

	function members_area()
	{
	    //$this->load->model('organizer/dash_model');

	    //$data['temp_subs'] = $this->dash_model->temp_subs();

		//if($this->input->post('add_item')){
			//if($this->input->post('add_item')!='no')
			//{
		    //$this->dash_model->add_food_to_peron($this->input->post('add_item'),$this->session->userdata('id_o'));	
		    //echo 'dddddddd';
			//}
		//}

		//$my_no_foods_array = $this->dash_model->get_my_no_foods($this->session->userdata('id_o'));
		//$data['my_no_foods_array'] = $my_no_foods_array;
		 //print_r($my_no_foods_array);

	    //if($this->input->post('search_rec')){
	    //$data['activity_array'] = $this->dash_model->search_log($this->input->post('search_rec'));	
	    //echo $this->input->post('search_rec');
		//}else{
		//$data['activity_array'] = $this->dash_model->results_log();

		//}
		

		//$dropdown_array = $this->dash_model->food_dropdown();
		//$data['dropdown_array'] = $dropdown_array;
		//print_r($dropdown_array);


		$data['show_success'] = 'false';
	    $this->load->view('organizer/header_org', $data);
		$this->load->view('organizer/admin_dash', $data);
		$this->load->view('organizer/footer_org');
	}

	

	function add_admin()
	{   $data['add_state'] = true;
		$this->load->library('form_validation');

		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		//$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		//$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		//$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

		$this->load->model('membership_model');


		if($this->form_validation->run() == FALSE)
		{   $data['golf_pros'] = $this->membership_model->get_all_golf_pros();
			$data['show_success'] = 'false';
			$this->load->view('organizer/header_org', $data);
			$this->load->view('organizer/signup_form_admin', $data);
			$this->load->view('organizer/footer_org');
		}

		else
		{   $config['upload_path'] = './img'; //core folder (if you like upload to application folder use APPPATH)
			$config['allowed_types'] = 'gif|jpg|png'; //allowed MIME types
			$config['encrypt_name'] = TRUE; //creates uniuque filename this is mainly for security reason

			$this->load->library('upload', $config);
            $posted_picture = $this->input->post('picture_name');
            if (!$this->upload->do_upload()) {
			//if (!$this->upload->do_upload('picture_name')) { //picture_upload is upload field name set in HTML eg. name="upload_field"
			    $error = array('error' => $this->upload->display_errors());
			    $picture_name_passed = "thumb-3-temp.jpg";
			    //$picture_name_passed = $error;
			}else{
			    //print_r($this->upload->data()); // this is array of uploaded file consist of filename, filepath etc. print it out
			     // this is how you get for example "file name" of file
			    $picture_name_passed = $this->upload->data();
			    $picture_name_passed = $picture_name_passed['file_name'];
			}
			

			if($query = $this->membership_model->create_pro($picture_name_passed))
			{   $data['golf_pros'] = $this->membership_model->get_all_golf_pros();
				$data['show_success'] = 'true';
				$this->load->view('organizer/header_org', $data);
	    		//$this->load->view('organizer/admin_top', $data); 
				$this->load->view('organizer/signup_form_admin', $data);
				$this->load->view('organizer/footer_org');
			}
			else
			{
				$this->load->view('signup_form');
			}
		}	
	}

	function edit_admin()
	{   $data['add_state'] = true;
		$this->load->library('form_validation');

		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		//$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		if(($this->input->post('password')=="")&&($this->input->post('password')==""))
			{
				//just trying to update preliminary ino but not password
				$do_not_update_password=true;
			} else {
				$do_not_update_password=false;
				$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
				$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		}

		$this->load->model('membership_model');


		if($this->form_validation->run() == FALSE)
		{   $data['add_state'] = true;
			$data['golf_pros'] = $this->membership_model->get_all_golf_pros();
			$data['show_success'] = 'false';
			$this->load->view('organizer/header_org', $data);
	    	//$this->load->view('organizer/admin_top', $data); 
			$this->load->view('organizer/signup_form_admin', $data);
			$this->load->view('organizer/footer_org');
		}

		else
		{   
			$config['upload_path'] = './img'; //core folder (if you like upload to application folder use APPPATH)
			$config['allowed_types'] = 'gif|jpg|png'; //allowed MIME types
			$config['encrypt_name'] = TRUE; //creates uniuque filename this is mainly for security reason

			$this->load->library('upload', $config);
            $posted_picture = $this->input->post('picture_name');
            if (!$this->upload->do_upload()) {
			//if (!$this->upload->do_upload('picture_name')) { //picture_upload is upload field name set in HTML eg. name="upload_field"
			    $error = array('error' => $this->upload->display_errors());
			    $picture_name_passed = "thumb-3-temp.jpg";
			    //$picture_name_passed = $error;
			}else{
			    //print_r($this->upload->data()); // this is array of uploaded file consist of filename, filepath etc. print it out
			     // this is how you get for example "file name" of file
			    $picture_name_passed = $this->upload->data();
			    $picture_name_passed = $picture_name_passed['file_name'];
			}
			

			if($query = $this->membership_model->edit_pro($do_not_update_password, $picture_name_passed))
			{   $data['golf_pros'] = $this->membership_model->get_all_golf_pros();
				$data['show_success'] = 'true';
				$data['query_result'] = $query;
				$data['query_result_2'] = $this->input->post('password');
				$this->load->view('organizer/header_org', $data);
				$this->load->view('organizer/signup_form_admin', $data);
				$this->load->view('organizer/footer_org');
			}
			else
			{
				$this->load->view('signup_form');
			}
		}	
	}

	function r_pro() {
		$this->load->model('membership_model');
		if($query = $this->membership_model->r_pro_model()){
			return 'removal worked';
		} else {
			return 'removal failed';
		}
	}

}
