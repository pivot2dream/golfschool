<?php

class File_up_sess extends CI_Controller
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
		$this->data['page_title'] = 'Session Files Upload and Approve';
		//////////////////////////////
		$this->data['breadcrumber'] = array(
			'manage events' => 'index.php/organizer/manage_events/members_area',
			'event schedule & sessions' => 'index.php/organizer/calendar_view/members_area/'.$this->uri->segment(4),
			'Session Files Upload and Approve' => 'javascript:void(0)',
		);
		//////////////////////////////
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
			$this->load->model('organizer/file_up_sess_modal');
			///////////////////////////////////////////////////////////////////////////

			$this->load->model('organizer/learning_obj_model');
			$data['grey_title_params'] = $this->learning_obj_model->get_session_html_func($session_id_ref,$secure_event_id);
			////////////////////////////

            $data['upload_error']='nope';
            $data['upload_success_data']='nope';
			if($this->input->post('submit_file_but'))
					{
						//////////////////////////////////////////////////////////////
                        if(!is_dir('./session_upload/' . $session_id_ref))
							{
					    mkdir('./session_upload/' . $session_id_ref, 0777);
							}
						//////////////////////////////////////////////////////////////////
						$config['upload_path'] = './session_upload/'.$session_id_ref.'/';
						$config['allowed_types'] = '|gif|jpg|png|pdf|doc|docx|wmv|xls|psd|csv';
						$config['max_size']	= '50000000000';


						$this->load->library('upload', $config);

						if ( ! $this->upload->do_upload())
						{
							$data['upload_error']=$this->upload->display_errors();

							//echo $this->upload->display_errors();
							//$this->load->view('upload_form', $error);
						}
						else
						{
							//$data = array('upload_data' => $this->upload->data());
                            $pass_uploaded_info = $this->upload->data();
                            $data['upload_success_data'] = $pass_uploaded_info;
							///////////////////////////////////////////////////////////////////////////
							//below passes 1)company id, 2)full name (including company for ref) 3)sender (learning obj creator) type 4)id of user who created learning obj 5) the id of the session for ref.
							//////////////////////////////////////////////////////////////////////////
							$this->file_up_sess_modal->add_file_obj($this->session->userdata('company_o_id') , $this->session->userdata('first_o') . ' '.$this->session->userdata('last_o') .' with '. $this->session->userdata('company_o_name'),'1',$this->session->userdata('id_o'), $session_id_ref,$two_part_url_reference, $pass_uploaded_info);
                            //print_r($pass_uploaded_info);
                            //echo $pass_uploaded_info['file_name'];


						}
					}
		/////////////////////////////////////////////////////////
		//get uploaded file information and return it to the page
		/////////////////////////////////////////////////////////
        $data['files_results_loop']=$this->file_up_sess_modal->get_file_objs($session_id_ref);
		////////////////////////////////////
		$data['show_success'] = 'false';
	    $this->load->view('organizer/header_org', $data);
		$this->load->view('organizer/file_up_sess', $data);
		$this->load->view('organizer/footer_org');
	}

	function unset_file_obj()
				{
				$this->load->model('organizer/file_up_sess_modal');
				$this->file_up_sess_modal->unset_file_obj_do($this->input->post('file_obj'));
				echo $this->input->post('file_obj');
				echo 'no';
			}





}
