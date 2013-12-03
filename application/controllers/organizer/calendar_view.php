<?php

class Calendar_view extends CI_Controller
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
		$this->data['page_title'] = "My Event's Schedule & Manager";
		//////////////////////////////
		$this->data['breadcrumber'] = array(
			'manage events' => 'index.php/organizer/manage_events/members_area',
			'event schedule & sessions' => 'javascript:void(0)',
		);
		//////////////////////////////
		$this->load->vars($this->data);
		////////////////////////////////
	}

	function members_area()
	{   //this function recieves an id for a day, and the id of the booking in question
	    /////////////////////////////////////////////////////////////////////////////////
	    $secure_event_id_to_explode = $this->login_prove_and_common->decode_common($this->uri->segment(4));
	    $secure_event_exploded = explode('***',$secure_event_id_to_explode);
        $secure_event_id = $secure_event_exploded[0];
        $day_to_show_num = $secure_event_exploded[1];

	    $this->load->model('organizer/calendar_view_model');


	    //if posted, Delete the session posted in question
		if($this->input->post('remove_sess_me'))
			{
			$this->calendar_view_model->destroy_session($this->input->post('remove_sess_me'));
		}

	    //if the session modal has been submitted, add a new session to database
	    if($this->input->post('end_submit'))
	    	{
	    	$this->calendar_view_model->create_session();
	    	}

	    //if the number of tracks have been submitted to update, then update
			    if($this->input->post('track_add_submit'))
			    	{
			    	$this->calendar_view_model->update_tracks();
	    	}
	    //query the list of presenters, based off of the company session id, and return them
	    $this->load->model('organizer/presenter_model');
        $data['master_presenter_list'] = $this->presenter_model->get_presenters();


		//this returns basic information about the event such as the name of the event and start and end dates.
		$data['events_passed'] = $this->calendar_view_model->get_my_event($secure_event_id);
		foreach($data['events_passed'] as $event_passed){
		$pass_start_date = $event_passed->start_event;
		}
		//echo $pass_start_date;
        //$data['links_passed'] = $this->calendar_view_model->get_my_links($secure_event_id);
        //print_r ($this->login_prove_and_common->get_my_event_day_links($secure_event_id));

        //generate and display all links
        $data['day_links_passed'] = $this->login_prove_and_common->get_my_event_day_links($secure_event_id);

        //return array with all basic information for day displayed, this gets the result out of the above query
		$current_day_result = $this->calendar_view_model->get_current_day_info($day_to_show_num,$data['day_links_passed']);

		//get a list of all the bookings for the specific day, pass in timestamp of current day from above line
		$data['find_bookings_result'] = $this->calendar_view_model->build_array_booked_dates($current_day_result[0][0][5],$secure_event_id);
        //print_r($find_bookings_result);

        $data['current_day_info'] = $current_day_result;
        //print_r($current_day_result);

        //returns json array of track names
        $data['track_names_shown_array'] = json_decode($current_day_result[0][0][6]);
        //print_r(json_decode($current_day_result[0][0][6]));

        $data['current_day_without_time'] = $this->calendar_view_model->no_time_just_current_day($current_day_result);


        //print_r($current_day_result);
        //foreach($current_day_result as $day_result)
        	//{
        	//$data['current_day_info']=$day_result;
        	//}
        //$data['current_day_info']

        //print_r($data['current_day_info']);

        $data['this_day_number_passed'] = $day_to_show_num;
	    $this->load->view('organizer/header_org', $data);
		$this->load->view('organizer/calendar_view', $data);
		$this->load->view('organizer/footer_org');
	}

    //////////////////////////////////////////////////////////////////////////////////////////////////////////
    //the following function checks for session event conflicts
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
	function check_session_conflict()
		{   $this->load->model('organizer/calendar_view_model');
			$query_conflict = $this->calendar_view_model->session_conflict_check();
			echo $query_conflict;

		}

		function update_track_title()
			{
			$this->load->model('organizer/calendar_view_model');
			$title_result = $this->calendar_view_model->update_track_title_in();
			print_r($title_result);
			echo 'xx';
			}

		function get_session_html()
			{
			$this->load->model('organizer/calendar_view_model');
			$html_result = $this->calendar_view_model->get_session_html_func($this->input->post('passed'));
			echo $html_result;

			}

		function quick_create_presenter_pass()
			{
			$this->load->model('organizer/calendar_view_model');
			$html_result = $this->calendar_view_model->quick_create_presenter();
			echo $html_result;
			}





}
