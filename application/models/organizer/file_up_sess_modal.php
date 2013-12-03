<?php

class File_up_sess_modal extends CI_Model {

	function get_my_event($secure_event_id)
		{
		$this->db->where('event_id', $secure_event_id);
		$query = $this->db->get('booking_master');

		if($query->num_rows != 0)
		{
		return $query->result();
		}
		}





	function get_session_html_func($id_passed,$booking_id)
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

                $this->db->where('event_id', $booking_id);
				$query = $this->db->get('booking_master');

				foreach($query->result() as $line)
					{$event_booked_name = $line->event_name;}

                ////////////////////////////////////////////////////////////////
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
                $html_result.="<h3><span style='color:#5EA5CE;'>session name:</span> ".$line->name_sess."</h3>";
                $html_result.= "<h4><span style='color:#5EA5CE;'>in event:</span> ".$event_booked_name."</h4>";
                $html_result.="<h4><span style='color:#5EA5CE;'>on day: </span>".$main_date."</h4>";
                $html_result.="<h4><span style='color:#5EA5CE;'>time: </span>".$main_start_time." <i class='icon-arrow-right'></i> ".$main_end_time ."</h4>";

                ////////////////////////////////////////////////////////////
                ///create temporary session data to track the session name and event name
                //////////////////////////////////////////////////////////
                  $data = array(
					        	'temp_archive_info_sess_name' => '<b>session:</b> ' . $line->name_sess . ' in <b>event:</b> '. $event_booked_name,

							);
				$this->session->set_userdata($data);

                }





				return $html_result;


		}
		///////////////////////////////////////////////
		//this function deletes a single learning objective
		///////////////////////////////////////////////
		function unset_file_obj_do($id)
			{
			$this->db->delete('session_files', array('ID_auth_f' => $id),1);
			}




        ///////////////////////////////////////////////////////////////////////////
		//below passes 1)company id, 2)full name (including company for ref) 3)sender (learning obj creator) type 4)id of user who created learning obj 5) the id of the session for ref 6)url reference
		//////////////////////////////////////////////////////////////////////////
		function add_file_obj($comp_id,$full_name,$sender_type,$sender_id,$session_id,$two_part_url_reference, $pass_uploaded_info)
			{
			$new_file_obj = array(
						'file_name_f' => $pass_uploaded_info['file_name'],
						'file_ext_f	' => $pass_uploaded_info['file_ext'],
						'file_desc_f' => $this->input->post('description'),
						'session_id_f' => $session_id,
						'company_id_f' => $comp_id,
						'author_id_f' => $sender_id,
						'author_type_f' => '1',
						'author_name_f' => $full_name

					);




					$insert = $this->db->insert('session_files', $new_file_obj);

			$new_learning_action_recorded = array(
						'company_id_delt' => $comp_id,
						'author_delt' => '1',
						'user_id_delt' => $this->session->userdata('id_o'),
						//////////////////////////////////
						//change above to two for ce-go
						/////////////////////////////////
						'name_and_comapny_name_delt	' => $full_name,
						'action_delt' => 'added a <i>file of reference</i> to ',
						'thing_delt' => $this->session->userdata('temp_archive_info_sess_name') . ' called <b>'.$pass_uploaded_info['file_name'].'</b>.',
						'link_delt' => 'file_up_sess/members_area/' . $two_part_url_reference
					);

					$insert = $this->db->insert('actions_log', $new_learning_action_recorded);


					return $insert;
			}

		function get_file_objs($session_id)
			{
		       $this->db->where('session_id_f', $session_id);
							$this->db->order_by("ID_auth_f", "desc");
							$query = $this->db->get('session_files');

				return $query->result();
			}
		function edit_learning_obj($comp_id,$full_name,$learning_obj_id,$text,$two_part_url_reference)
			{
            $data = array('description_e' => $text,'status_e' => 'pending');

			$this->db->where('ID_auth_e', $learning_obj_id);

			$query = $this->db->update('learning_obj', $data);
			///////////////////////////////////////////////////////////////////////////
			$new_learning_action_recorded = array(
									'company_id_delt' => $comp_id,
									'author_delt' => '1',
									'user_id_delt' => $this->session->userdata('id_o'),
									//////////////////////////////////
									//change above to two for ce-go
									/////////////////////////////////
									'name_and_comapny_name_delt	' => $full_name,
									'action_delt' => 'edited a <i>learning objective</i> from ',
									'thing_delt' => $this->session->userdata('temp_archive_info_sess_name') . ' with <b>Learning Objective ID of #LSES' . $learning_obj_id.'</b>. Note: When someone in your company edits a learning objective, the status will automatically be reset to <i>pending approval</i> status, and will need to be reviewed.',
									'link_delt' => 'learning_obj/members_area/' . $two_part_url_reference
								);

								$insert = $this->db->insert('actions_log', $new_learning_action_recorded);


					return $insert;








			return 'added';
			}




}


