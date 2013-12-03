<?php

class Presenters extends CI_Controller
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
		$this->data['page_title'] = 'My Event Presenters';
		//////////////////////////////
		$this->data['breadcrumber'] = array(
			'presenters' => 'index.php/organizer/presenters/members_area'
		);
		//////////////////////////////
		$this->load->vars($this->data);
		////////////////////////////////
	}

	function members_area()
	{      $this->load->model('organizer/presenter_model');

        ///////////////////////////////////////////
	    //create a new presenter from scratch
	    ///////////////////////////////////////

	    if($this->input->post('name'))
	    	{
	    	$this->presenter_model->create_presenter();
	    	}
	    ////////////////////////////////
	    //update an existing presenter
	    ////////////////////////////////
	      $switcher_ind = 'no';

	      if($this->input->post('on_me_e'))
			    	{
			    	$switcher_ind = $this->presenter_model->update_presenters();
			    	$data['picture_error']=$this->login_prove_and_common->upload_picture($this->input->post('on_me_e'),'img/org_presenter_pics/');
	    	}

        $data['update_event_happened'] = $switcher_ind;
	    ///////////////////////////////

	   $data['presenters_list'] = $this->presenter_model->get_presenters();

		//////////////////////////////
		$data['show_success'] = 'false';
	    $this->load->view('organizer/header_org', $data);
		$this->load->view('organizer/presenters', $data);
		$this->load->view('organizer/footer_org');
	}

	function unset_presenter()
	{
     $this->load->model('organizer/presenter_model');
     $this->presenter_model->remove_presenter();
    }




}
