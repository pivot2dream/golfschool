<?php

class Calendar_view_model extends CI_Model {

	function get_my_event($secure_event_id)
		{
		$this->db->where('event_id', $secure_event_id);
		$query = $this->db->get('booking_master');

		if($query->num_rows != 0)
		{
		return $query->result();
		}
		}


   //////////////////////////////////////////////////////////////////////////////////////////////////////////
   //the following function returns [0]date shown of link [1]day of link [2]id of day [3]id of event booking [4]number of tracks [5]unix time
   //assuming both params are passed returns specific info for specific day.
   /////////////////////////////////////////////////////////////////////////////////////////////////////////
   function get_current_day_info ($day_to_show_num,$links_array)
			{
			$prev_indexed=array();

			foreach($links_array as $day_item){

            if($day_item[1]==$day_to_show_num)

            $prev_indexed[]=array($day_item);


			}
            return $prev_indexed;

			}

	function no_time_just_current_day($current_day_info)
		{
		$current_day_unix_stamp_exploded = explode(' ',$current_day_info[0][0][5]);
    	return $current_day_unix_stamp_exploded[0];
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

		$start_check= $this->input->post('start_time');

		$end_check= $this->input->post('end_time');
        /////////////////////////////////////////////////////////////////////////
		//this will need to be added to the conflict query once tracks are added;
		/////////////////////////////////////////////////////////////////////////
		$track_ref= $this->input->post('track_ref');

		$query = $this->db->query("SELECT * FROM `sessions` WHERE `booking_id_sess` ='$user_id_query' AND ('$start_check' BETWEEN `start_sess` AND `end_sess` AND `booking_id_sess` ='$user_id_query' AND `track_sess`='$track_ref')
		OR ('$end_check' BETWEEN `start_sess` AND `end_sess` AND `booking_id_sess` ='$user_id_query' AND `track_sess`='$track_ref') LIMIT 5");

		//$result_check = mysql_query("SELECT * FROM `booking_master` WHERE `trainer_id_bm` ='$user_id_query' AND ('$start_check' BETWEEN `start_bm` AND `end_bm` AND `trainer_id_bm` ='$user_id_query')
		//OR ('$end_check' BETWEEN `start_bm` AND `end_bm` AND `trainer_id_bm` ='$user_id_query') LIMIT 5") or die('Error Selecting array to database' . mysql_error());

		$dateUnavailable = 'false';
		if($query->num_rows != 0)
			{
			//echo $row['type_dtdm'];
			$dateUnavailable = 'true';
			}

		return $dateUnavailable;
		//return mysql_error();
		}

	function build_array_booked_dates($current_day, $event_id)
		{
			//Build the array of booked dates

			$create_start_check = explode(' ',$current_day);
			$first_start_check_part = $create_start_check[0];
			$second_start_check_part = $first_start_check_part . ' 03:00:00';

			$create_start_check = explode(' ',$current_day);
			$first_finish_check_part = $create_start_check[0];
			$second_finish_check_part = $first_finish_check_part . ' 22:50:00';

			//echo $second_finish_check_part;
			//echo $second_start_check_part;

			$query = $this->db->query("SELECT * FROM `sessions` WHERE `start_sess` BETWEEN '$second_start_check_part' AND '$second_finish_check_part' AND `booking_id_sess` ='$event_id'") or die('Error Selecting array to database' . mysql_error());

			//$prev_indexed=array();
			//while($row = mysql_fetch_assoc($result_prev_array)){
			//$prev_indexed[]=array(stripslashes($row['ID_auth_bm']),stripslashes($row['start_bm']),stripslashes($row['end_bm']),stripslashes($row['cust_name_bm']));
			//}

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


