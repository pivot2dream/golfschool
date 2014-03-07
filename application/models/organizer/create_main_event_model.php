<?php

class Create_main_event_model extends CI_Model {


	function query_dates_for_report($end_date, $start_date, $download_trigger){
    $trainer_id_bm = $this->session->userdata('id_o');
    //$today = date('Y-m-d');  
    //$query = $this->db->query(
        //"SELECT * FROM booking_master WHERE trainer_id_bm = {$trainer_id_bm} AND start_bm <= '{$start_date}'
        //AND end_bm >= '{$end_date}' ORDER BY start_bm DESC");
    $query = $this->db->query(
        "SELECT * FROM booking_master LEFT JOIN accounts_a
		ON booking_master.cust_id_bm=accounts_a.ID_auth_a WHERE trainer_id_bm = {$trainer_id_bm} AND start_bm <= '{$start_date}'
        AND end_bm >= '{$end_date}' ORDER BY start_bm DESC");

    //$query = $this->db->query("SELECT * FROM `booking_master` WHERE `trainer_id_bm` ='$user_id_query' AND ('$start_check' BETWEEN `start_bm` AND `end_bm` AND `trainer_id_bm` ='$user_id_query')
	        //OR ('$end_check' BETWEEN `start_bm` AND `end_bm` AND `trainer_id_bm` ='$user_id_query') LIMIT 5");
    if ($download_trigger == true) {
    	$this->load->dbutil();
    	$this->load->helper('download');
        
        
    	$data = $this->dbutil->csv_from_result($query, ',');
        
    	force_download('golf_appointments.csv', $data); 
	}
    
    return $query->result();



	}
    
    function update_paid_model(){
    	$id = $this->input->post('data_id');
    	$is_paid = $this->input->post('is_paid');
    	$data = array('paid' => $is_paid);
		$this->db->where('ID_auth_bm', $id);
		$query = $this->db->update('booking_master', $data);
    }

    function unset_model(){
    	$id = $this->input->post('data_id');
    	return $this->db->delete('booking_master', array('ID_auth_bm' => $id)); 
    }

	function create_event()
			{
			$start_submit = new DateTime($this->input->post('start_date'));
			$start_date_var=$start_submit->format('Y-m-d H:i:s');
			//////////////////////////////////////////////////////////////////////////////
			$end_submit = new DateTime($this->input->post('end_date'));
			$end_date_var=$end_submit->format('Y-m-d H:i:s');
			//////////////////////////////////////////////////////////////////////////////

				$new_event_insert_data = array(
					'event_name' => $this->input->post('event_name'),
					'event_notes' => $this->input->post('event_desc'),
					'start_event' => $start_date_var,
					'end_event' => $end_date_var,
					'address_event' => $this->input->post('event_addy'),
					'event_zip' => $this->input->post('event_zip'),
					'staff_member_id' => $this->session->userdata('id_o'),
					'company_id' => $this->session->userdata('company_o_id')



				);

				$insert = $this->db->insert('booking_master', $new_event_insert_data);
				/////////////////////////////////////////////////////////////////////////////

				return mysql_insert_id();
			}
	function create_days_in_event($booking_id)
			{
			$start_submit = new DateTime($this->input->post('start_date'));
			//////////////////////////////////////////////////////////////////////////////
			$end_submit = new DateTime($this->input->post('end_date'));
			//////////////////////////////////////////////////////////////////////////////
			//calculate the diff between the two dates to create interval for second query
			//////////////////////////////////////////////////////////////////////////////
			$interval = $start_submit->diff($end_submit)->days;
            $interval+=1;
			//////////////////////////////////////////////////////////////////////////////
			for($i=1;$i<=$interval;$i++){
				$new_days_insert_data = array(
										'day_delt' => $i,
										'booking_id_delt' => $booking_id
									);

				$insert = $this->db->insert('event_link_day', $new_days_insert_data);
			    }


			    return $interval;
			}

	function create_log_of_created_event($comp_id,$full_name,$one_part_url_reference)
		{
		/////////////////////////////////////////////////////////////////////////////
						$new_learning_action_recorded = array(
											'company_id_delt' => $comp_id,
											'author_delt' => '1',
											'user_id_delt' => $this->session->userdata('id_o'),
											//////////////////////////////////
											//change above to two for ce-go
											/////////////////////////////////
											'name_and_comapny_name_delt	' => $full_name,
											'action_delt' => 'created a <i>new event</i> entitled ',
											'thing_delt' => '<b>' .$this->input->post('event_name') . '</b> starting on ' . $this->input->post('start_date'),
											'link_delt' => 'calendar_view/members_area/' . $one_part_url_reference
										);

								$insert = $this->db->insert('actions_log', $new_learning_action_recorded);
		}

}