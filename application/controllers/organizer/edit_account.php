<?php

class Edit_account extends CI_Controller
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
		$this->data['page_title'] = 'My Account';
		//////////////////////////////
		$this->data['breadcrumber'] = array(
			'edit account info' => 'index.php/organizer/edit_account/members_area'
		);
		//////////////////////////////
		$this->load->vars($this->data);
		////////////////////////////////
	}

	function members_area()
	{   ///////////////////////////////
	    //update profile picture
	    //////////////////////////////

		$data['picture_error']="";
         if($this->input->post('submit_pictures'))
	    	{
         $data['picture_error']=$this->login_prove_and_common->upload_picture($this->session->userdata('id_o'),'img/org_profile_pics/');
		    }

		//////////////////////////////
		//update company and personal info
		////////////////////////////
		$this->load->model('organizer/edit_account_model');
		///////////////////////////////////

		if($this->input->post('submit_fields'))
			{
		        $this->edit_account_model->update_account();
		    }


		$data['show_success'] = 'false';

        $data['my_account'] = $this->edit_account_model->get_my_account();
        $data['my_company'] = $this->edit_account_model->get_my_company();
	    $this->load->view('organizer/header_org', $data);
		$this->load->view('organizer/edit_account.php', $data);
		$this->load->view('organizer/footer_org');
	}





}
