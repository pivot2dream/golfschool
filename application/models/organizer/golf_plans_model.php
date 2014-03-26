<?php

class Golf_plans_model extends CI_Model {

	function get_all_golf_plans() 
	{
		//$query = $this->db->get('accounts_t');
		//flag for selecting only active users
		$query = $this->db->get_where('golf_programs', array('live' => 'yes','instructor_id' => $this->session->userdata('id_op')));
		if($query->num_rows != 0)
		{
			return $query->result();
		}
	}

	function get_group_dates($id_passed) 
	{
		//$query = $this->db->get('accounts_t');
		//flag for selecting only active users
		$query = $this->db->get_where('booking_master', array('appointment_type_id' => $id_passed));
		if($query->num_rows != 0)
		{
			return $query->result();
		}
	}

	function get_a_golf_plan($id_passed) 
	{
		//$query = $this->db->get('accounts_t');
		//flag for selecting only active users
		$query = $this->db->get_where('golf_programs', array('ID_auth_dp' => $id_passed));
		if($query->num_rows != 0)
		{
			return $query->result();
		}
	}

	function edit_members_group_plan() {
		$data = array('group_clients' => $this->input->post('master_group_json'));
		$this->db->where('ID_auth_dp', $this->input->post('plan_id'));
		$query = $this->db->update('golf_programs', $data);
		if($this->input->post('tracker_action') == 'add'){
			$this->db->set('current_booked', 'current_booked+1', FALSE);
		}
		if($this->input->post('tracker_action') == 'subtract'){
			$this->db->set('current_booked', 'current_booked-1', FALSE);
		}
		$this->db->where('ID_auth_dp', $this->input->post('plan_id'));
		$this->db->update('golf_programs');
		return $query;
	}

	function r_plan_model() {
		$data = array('live' => 'no');
		$this->db->where('ID_auth_dp', $this->input->post('id_pass'));
		$query = $this->db->update('golf_programs', $data);
		return true;
	}

	function create_plan()
	{

		$new_member_insert_data = array(
			'name' => $this->input->post('plan_name'),
			'price_description' => $this->input->post('price_info'),
			'short_desc' => $this->input->post('expanded_info'),
			'long_description' => $this->input->post('expanded_info_2'),
			'duration_multiplier' => $this->input->post('plan_duration'),
			'live' => $this->input->post('live'),
			'instructor_id' => $this->input->post('instructor_id'),
			'current_booked' => $this->input->post('current_booked'),
			'cap' => $this->input->post('cap')
			
		);

		$insert = $this->db->insert('golf_programs', $new_member_insert_data);
		 return mysql_insert_id();
	}

	function edit_plan()
	{
        
			$update_plan_data = array(
			'name' => $this->input->post('plan_name'),
			'price_description' => $this->input->post('price_info'),
			'short_desc' => $this->input->post('expanded_info'),
			'long_description' => $this->input->post('expanded_info_2'),
			'duration_multiplier' => $this->input->post('plan_duration')
		);

		

		$this->db->where('ID_auth_dp', $this->input->post('id_name'));
		$insert = $this->db->update('golf_programs', $update_plan_data);
		return $insert;
	}
}