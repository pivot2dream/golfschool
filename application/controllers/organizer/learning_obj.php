<?php
//**************************************************************************************************************************************************
//for this to work, this controller must recieve $this->uri->segment(4) (as day and event encoded) and $this->uri->segment(5) as session id encoded
//**************************************************************************************************************************************************
class Learning_obj extends CI_Controller
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
		$this->data['page_title'] = 'Session Learning Objectives';
		//////////////////////////////

		$this->data['breadcrumber'] = array(
			'manage events' => 'index.php/organizer/manage_events/members_area',
			'event schedule & sessions' => 'index.php/organizer/calendar_view/members_area/'.$this->uri->segment(4),
			'Add or Edit Learning Objectives for Session' => 'javascript:void(0)',
		);



		$this->load->vars($this->data);
		////////////////////////////////
	}

	function members_area()
		{   ///////////////////////////////
		    ///////////////////////////////////////////////////////////////////////////
			//returns query safe primary key for session
			//////////////////////////////////////////////////////////////////////////

			$data['decoded_session_val'] = substr($this->uri->segment(5), 2, -3);

			////////////////////////////////////////////////////////////////////////////////
			//returns a local varibale for current session id
			/////////////////////////////////////////////////////////////////////////////////

			$session_id_ref = substr($this->uri->segment(5), 2, -3);

			////////////////////////////////////////////////////////////////////////////////

			$data['encoded_url_ref'] = $this->uri->segment(4) . '/' . $this->uri->segment(5);

			//////////////////////////////////////////////////////////////////////////////
			//returns path of 2 url segments as L13Jajs+xBr~GHejrjlG50A0~Jtp5Uw3N4Pw0W5Pi0uw2ycWvnPUV0YAbFBUMyM3kiVpSh6FgkpGd+QHB08ycg==/ce470dx5
			///////////////////////////////////////////////////////////////////////////////

			$two_part_url_reference = $this->uri->segment(4) . '/' . $this->uri->segment(5);

			/////////////////////////////////////////////////////////////////////////////
			$secure_event_id_to_explode = $this->login_prove_and_common->decode_common($this->uri->segment(4));
			$secure_event_exploded = explode('***',$secure_event_id_to_explode);
        	$secure_event_id = $secure_event_exploded[0];

			///////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////
			$this->load->model('organizer/learning_obj_model');
			///////////////////////////////////////////////////////////////////////////
			$data['grey_title_params'] = $this->learning_obj_model->get_session_html_func($session_id_ref,$secure_event_id);


			///////////////////////////////////////////////////////////////////////////
			//below passes 1)company id, 2)full name (including company for ref) 3)sender (learning obj creator) type 4)id of user who created learning obj 5) the id of the session for ref.
			//////////////////////////////////////////////////////////////////////////
			if($this->input->post('submit_new_obj'))
				{
				$this->learning_obj_model->add_learning_obj($this->session->userdata('company_o_id') , $this->session->userdata('first_o') . ' '.$this->session->userdata('last_o') .' with '. $this->session->userdata('company_o_name'),'1',$this->session->userdata('id_o'), $session_id_ref,$two_part_url_reference);
			    }
			/////////////////////////////////////////////////////////////////////////////
			//below edits a specific learning objective on primary key of learning objective
			//////////////////////////////////////////////////////////////////////////////
			$data['show_success'] = 'false';
			if($this->input->post('edit_on'))
				{
				$data['show_success'] = $this->learning_obj_model->edit_learning_obj($this->session->userdata('company_o_id') , $this->session->userdata('first_o') . ' '.$this->session->userdata('last_o') .' with '. $this->session->userdata('company_o_name'),$this->input->post('edit_on'),$this->input->post('edited_text'),$two_part_url_reference);
			    }


            $data['loop_obj'] = $this->learning_obj_model->get_learning_objs($session_id_ref);


			////////////////////////////


	    	$this->load->view('organizer/header_org', $data);
			$this->load->view('organizer/learning_obj', $data);
			$this->load->view('organizer/footer_org');
		}


		function unset_learning_obj()
			{
			$this->load->model('organizer/learning_obj_model');
			$this->learning_obj_model->unset_learning_obj_do($this->input->post('learning_obj'));
			echo $this->input->post('learning_obj');
			}





}
