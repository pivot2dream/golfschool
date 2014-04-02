<?php

class Booking_admin_model extends CI_Model {

	function get_my_event($secure_event_id)
	{
	$this->db->where('event_id', $secure_event_id);
	$query = $this->db->get('booking_master');

	if($query->num_rows != 0)
		{
		return $query->result();
		}
	}

	function fetch_appointment_model()
	{
		$this->db->where('ID_auth_bm', $this->input->post('appt_id'));
		$this->db->join('accounts_a', 'accounts_a.ID_auth_a = booking_master.cust_id_bm');
		$query = $this->db->get('booking_master');
		return json_encode($query->result_array());

		//if($query->num_rows != 0)
		//{
		    //return json_encode($query->result_array());
		//}    
	}

	function fetch_appointment_model_group()
	{
		$this->db->where('ID_auth_bm', $this->input->post('appt_id'));
		//$this->db->join('accounts_a', 'accounts_a.ID_auth_a = booking_master.cust_id_bm');
		$query = $this->db->get('booking_master');
		return json_encode($query->result_array());

		//if($query->num_rows != 0)
		//{
		    //return json_encode($query->result_array());
		//}    
	}

	function fetch_email_list ($inst_id, $plan_id) {
		if ($inst_id != 'all') {
			$this->db->where('trainer_id_bm', $inst_id);
		}
		if ($plan_id != 'all') {
			$this->db->where('appointment_type_id', $plan_id);
		}
		//$this->db->select('DISTINCT appointment_email');
		//$this->db->distinct('appointment_email');
		$this->db->distinct();
		$this->db->select("appointment_email");
		$ignore = array('', 'na', 'not applicable');

        $this->db->where_not_in('appointment_email', $ignore);
		$query = $this->db->get('booking_master');
		return $query->result(); 
        
	}


	//this function simply returns whether or not the email has been indexed	
	function ask_if_golfer_model()
	{   
		$stack = array();
		$this->db->where('email_name_c', $this->input->post('e_sub'));
		$query = $this->db->get('accounts_c');

		if($query->num_rows != 0)
		{
			$id = $first_result = $query->first_row()->ID_auth_c;
			$this->db->where('authority_a', $id);
		    $query_inside = $this->db->get('accounts_a');
		    //returns email id, and then list of accounts under email
		    array_push($stack, $id, $query_inside->result_array());
		    return json_encode($stack);
			//return $first_result('ID_auth_c');
		} else {
			return 'false';
		}
	}	

	function create_golfer_model() {
		if ($this->input->post('skip_email_create'))
		{
			$foreign_key_for_accounts_a = $this->input->post('skip_email_create');

		} else {
			
			$data = array(
				'email_name_c' => $this->input->post('create_new_email')
				);
			$insert = $this->db->insert('accounts_c', $data);
			$foreign_key_for_accounts_a = mysql_insert_id();
			//cool we added an email to accounts_c
	    }
		
		$data = array(
			'full_name_a' => $this->input->post('create_full_name'),
			'age_a' => $this->input->post('create_age'),
			'gender_a' => $this->input->post('create_gender'),
			'phone_a' => $this->input->post('create_phone'),
			'authority_a' => $foreign_key_for_accounts_a
			);
		$insert = $this->db->insert('accounts_a', $data);
		return mysql_insert_id();
	}

	function get_static_assets()
	{
		$this->db->where('ID_auth_t', $this->session->userdata('id_op'));
		$query = $this->db->get('accounts_t');

		if($query->num_rows != 0)
		{
		return $query->result();
		}
	}	
	function update_static_assets()
	{
        $start_saved = date("H:i", strtotime($this->input->post('start-time')));
        $end_saved = date("H:i", strtotime($this->input->post('end-time')));
		$data = array(
			'default_start_lessons' => $start_saved,
			'default_end_lessons' => $end_saved,
			'default_incriment' => $this->input->post('inc')
			);

		$this->db->where('ID_auth_t', $this->session->userdata('id_o'));
		$query = $this->db->update('accounts_t', $data);
		return 'added';


	}	


   

	function no_time_just_current_day($current_day_info)
		{
		$current_day_unix_stamp_exploded = explode(' ',$current_day_info[0][0][5]);
    	return $current_day_unix_stamp_exploded[0];
		}
    function create_new_appointment_model(){

		$iteration_holder = $this->input->post('iteration_holder');
        
        $end_transformed = new DateTime($this->input->post('end_bm'));
        $start_transformed = new DateTime($this->input->post('start_bm'));
        $human_transformed_just_date = new DateTime($this->input->post('start_bm'));
        $start_check = $start_transformed->format('Y-m-d H:i:s');
        $end_check = $end_transformed->format('Y-m-d H:i:s');
        $just_human_date = $human_transformed_just_date->format('M d, Y');

        if (!defined('PHP_VERSION_ID')) {
	    	$version = explode('.', PHP_VERSION);
			define('PHP_VERSION_ID', ($version[0] * 10000 + $version[1] * 100 + $version[2]));
		}

    	for ($i = 1; $i <= $iteration_holder; $i++) 
        {
    	//////////////////////////////////////////////////////////////////////////////

		$new_session_insert_data = array(
			//replace this first value with track
			'start_bm' => $start_check,
			'end_bm' => $end_check,
			'trainer_id_bm' => $this->input->post('trainer_id_bm'),
			'cust_id_bm' => $this->input->post('cust_id_bm'),
			'trainer_name_bm' => $this->input->post('trainer_name_bm'),
			'cust_name_bm' => $this->input->post('cust_name_bm'),
			'human_date' => $just_human_date,
			'start_readable' => $this->input->post('start_readable'),
			'end_readable' => $this->input->post('end_readable'),
			'appointment_type_id' => $this->input->post('appointment_type_id'),
			'appointment_type_name' => $this->input->post('appointment_type_name'),
			'appointment_min' => $this->input->post('appointment_min'),
			'appointment_price_desc' => $this->input->post('appointment_price_desc'),
			'literal_price' => $this->input->post('appointment_literal_price'),
			'appointment_type_flag' => $this->input->post('appointment_type_flag'),
			'appointment_email' => $this->input->post('appointment_email')

		);

		$insert = $this->db->insert('booking_master', $new_session_insert_data);
		/////////////////////////////////////////////////////////////////////////////
		if (PHP_VERSION_ID > 40429) {
	    	$end_transformed->modify('+1 week');
        	$start_transformed->modify('+1 week');
        	$human_transformed_just_date->modify('+1 week');
    	} else {
			$end_transformed = $end_transformed->modify('+1 week');
        	$start_transformed = $start_transformed->modify('+1 week');
        	 $human_transformed_just_date = $human_transformed_just_date->modify('+1 week');
    	}
		//$end_transformed = $end_transformed->modify('+1 week');
        //$start_transformed = $start_transformed->modify('+1 week');
        //$human_transformed_just_date = $human_transformed_just_date->modify('+1 week');
		$start_check = $start_transformed->format('Y-m-d H:i:s');
        $end_check = $end_transformed->format('Y-m-d H:i:s');
        $just_human_date = $human_transformed_just_date->format('M d, Y');
		}
    }

	function create_session()
				{

				$end_submit = new DateTime($this->input->post('end_submit'));
				$end_submit = $end_submit->modify('-1 second');
				$end_date_var=$end_submit->format('Y-m-d H:i:s');
				//////////////////////////////////////////////////////////////////////////////

					$new_session_insert_data = array(
						//replace this first value with track
						'track_sess	' => $this->input->post('track_to_insert_val'),
						'start_sess' => $this->input->post('start_submit'),
						'end_sess' => $end_date_var,
						'booking_id_sess' => $this->input->post('booking_ref'),
						'user_created_id_sess' => $this->session->userdata('id_o'),
						'name_sess' => $this->input->post('session_name'),
						'type_sbl_sess' => $this->input->post('type_options'),
						'location_sess' => $this->input->post('location'),
						//'presenter_sess' => '1,2,3',
						'desc_sess' => $this->input->post('desc_sess'),
						'company_id_sess' => $this->session->userdata('company_o_id')



					);

					$insert = $this->db->insert('sessions', $new_session_insert_data);
					/////////////////////////////////////////////////////////////////////////////

					//return mysql_insert_id();

					$session_id = mysql_insert_id();

					///////////////////////////////////////////////////////////////////////
					//loop through each checked presenter and add to database
					//////////////////////////////////////////////////////////////////////

					$aDoor = $this->input->post('presenter_check');

					if(!empty($aDoor)){
					$N = count($aDoor);


					    for($i=0; $i < $N; $i++)
					    {

					      $new_presenter_insert_data= array('presenter_id_jp' => $aDoor[$i],'session_id_jp' => $session_id);

					      $insert = $this->db->insert('presenter_session_join', $new_presenter_insert_data);
					    }

					  }

					}

	function session_conflict_check()
		{

		$user_id_query = $this->input->post('edit_trigger');

		$iteration_holder = $this->input->post('iteration_holder');
        
        $end_transformed = new DateTime($this->input->post('end_time'));
        $start_transformed = new DateTime($this->input->post('start_time'));
        $start_check = $start_transformed->format('Y-m-d H:i:s');
        $end_check = $end_transformed->format('Y-m-d H:i:s');


		//$end_submit = $end_submit->modify('-1 second');
		//$end_date_var=$end_submit->format('Y-m-d H:i:s');
		$dateUnavailable = 'false';

		if (!defined('PHP_VERSION_ID')) {
	    	$version = explode('.', PHP_VERSION);
			define('PHP_VERSION_ID', ($version[0] * 10000 + $version[1] * 100 + $version[2]));
		}

        for ($i = 1; $i <= $iteration_holder; $i++) 
        {
	        $query = $this->db->query("SELECT * FROM `booking_master` WHERE `trainer_id_bm` ='$user_id_query' AND ('$start_check' BETWEEN `start_bm` AND `end_bm` AND `trainer_id_bm` ='$user_id_query')
	        OR ('$end_check' BETWEEN `start_bm` AND `end_bm` AND `trainer_id_bm` ='$user_id_query')
	        OR ('$start_check' <= `start_bm` AND '$end_check' >= `end_bm` AND `trainer_id_bm` ='$user_id_query')
	         LIMIT 5");

			
			if ($query->num_rows != 0)
			{
			  //echo $row['type_dtdm'];
			  $dateUnavailable = 'true';
			  return $dateUnavailable;
			}

		    if (PHP_VERSION_ID > 40429) {
		    	$end_transformed->modify('+1 week');
            	$start_transformed->modify('+1 week');
        	} else {
				$end_transformed = $end_transformed->modify('+1 week');
            	$start_transformed = $start_transformed->modify('+1 week');
        	}

			$start_check = $start_transformed->format('Y-m-d H:i:s');
            $end_check = $end_transformed->format('Y-m-d H:i:s');
            
            //$end_transformed = $end_transformed->modify('+1 week');
            //$start_transformed = $start_transformed->modify('+1 week');
			//$start_check = $start_transformed->format('Y-m-d H:i:s');
            //$end_check = $end_transformed->format('Y-m-d H:i:s');

			
		}	
		return $dateUnavailable;
		//return mysql_error();
		}

	function build_array_booked_dates($second_start_check_part, $second_finish_check_part, $user_id)
		{
			$query = $this->db->query("SELECT * FROM `booking_master` WHERE `start_bm` BETWEEN '$second_start_check_part' AND '$second_finish_check_part' AND `trainer_id_bm` ='$user_id' AND `trainer_id_bm` ='$user_id'") or die('Error Selecting array to database' . mysql_error());
			return $query->result();
			//end build the array of booked dates
		}
	function update_tracks()
			{

			$data = array('number_of_tracks_delt' => $this->input->post('track_add_submit'));

			$this->db->where('day_delt', $this->input->post('day_num'));
			$this->db->where('booking_id_delt', $this->input->post('booking_num'));
			$query = $this->db->update('event_link_day', $data);
			return 'added';


			}
	/////////////////////////////////////////////////////////////////////////////////////////////
	//grab the json track title array, and then change the correct title index for a given day id
	/////////////////////////////////////////////////////////////////////////////////////////////
	function update_track_title_in()
		{
		$this->db->select('track_names_delt');
		$this->db->where('ID_auth_delt', $this->input->post('title_day'));
		$query = $this->db->get('event_link_day');
		foreach($query->result() as $line)
		{
		$json_track_array = json_decode($line->track_names_delt, true);
		}

		//////////////////////////////////////
		//insert the new title into the correct position
		/////////////////////////////////////
		$json_track_array[$this->input->post('title_num')] = $this->input->post('new_title');
		$send_me_json = json_encode($json_track_array);


		$data = array('track_names_delt' => $send_me_json);

		$this->db->where('ID_auth_delt', $this->input->post('title_day'));
		$query = $this->db->update('event_link_day', $data);
		return 'added';


		}



	function get_session_html_func($id_passed)
		{

			//////////////////////////////////////////////////////////////////////////
			//start below function handles turning full timestamp into human readable format
			/////////////////////////////////////////////////////////////////////////
			function make_full_date_time_human($date_thrown)
					{
				    $date_echoed = new DateTime($date_thrown);
				    $date_echoed = $date_echoed->modify('+1 second');
					$insert_date_echoed = $date_echoed->format('m-d-Y g:i A');
					return($insert_date_echoed);
					}
			//////////////////////////////////////////////////////////////////////////
			//end the function that handles turning full timestamp into human readable format
			/////////////////////////////////////////////////////////////////////////

				$this->db->where('ID_auth_sess', $id_passed);
				$query = $this->db->get('sessions');
				$html_result="";
				foreach($query->result() as $line)
				{
				//$date_echoed = new DateTime($line->start_sess);
				//$insert_date_echoed = $date_echoed->format('m-d-Y g:i A');
                ////////////////////////////////////////////////////////////////////////////////////////////////////////
				$main_date_start = explode(' ',make_full_date_time_human($line->start_sess));
				$main_date_end = explode(' ',make_full_date_time_human($line->end_sess));
                $main_date = $main_date_start[0];
                $main_start_time = $main_date_start[1] . ' ' .$main_date_start[2];
                $main_end_time = $main_date_end[1] . ' ' .$main_date_end[2];
                //////////////////////////////////////////////////////////////////////////////////////////////////////////////
                $html_result.="<h3>".$line->name_sess."</h3>";
                $html_result.="<b>".$main_date."</b><br>";
                $html_result.=$main_start_time." <i class='icon-arrow-right'></i> ".$main_end_time;


				if($line->type_sbl_sess=="S"){$ind_type="Session";}
				if($line->type_sbl_sess=="B"){$ind_type="Break";}
				if($line->type_sbl_sess=="L"){$ind_type="Lunch";}
				$html_result.="<br><b>Type:</b><br>".$ind_type;
				$html_result.="<br><b>Specific Location:</b><br>".$line->location_sess;
				$html_result.="<br><b>Description:</b><br>".$line->desc_sess;
				}

                $html_result.="<br><b>Presenters:</b><br>";
				$this->db->select('*');
				$this->db->from('presenter_session_join');
				$this->db->join('presenters', 'presenters.presenter_id_pp = presenter_session_join.presenter_id_jp');
				$this->db->where('session_id_jp',$id_passed);
				$query_2 = $this->db->get();
				foreach($query_2->result() as $line_2)
					{
					$profile_pic_ref = 'img/org_presenter_pics/'. $line_2->presenter_id_pp .'.jpg';

                    if(file_exists($profile_pic_ref)) {
                    $html_result.="<img src='". base_url() ."img/org_presenter_pics/". $line_2->presenter_id_pp.".jpg?r=". rand() ."' style='width:20px;height:20px;'/>";
                    } else {
                    $html_result.="<img src='". base_url() ."img/avatar-profile.png' style='width:20px;'/>";
                    }

					$html_result.=$line_2->presenter_name_pp."<br>";
					}



				return $html_result;


		}
		///////////////////////////////////////////////
		//this function deletes a single booked session
		///////////////////////////////////////////////
		function destroy_session($id)
			{
			$this->db->delete('sessions', array('ID_auth_sess' => $id),1);
			}


		function quick_create_presenter()
			{


			//////////////////////////////////////////////////////////////////////////////

				$new_session_insert_data = array(

					'presenter_name_pp' => $this->input->post('name'),
					'company_id_pp' => $this->input->post('comp')




				);

				$insert = $this->db->insert('presenters', $new_session_insert_data);
				/////////////////////////////////////////////////////////////////////////////

				return mysql_insert_id();
				}




}


