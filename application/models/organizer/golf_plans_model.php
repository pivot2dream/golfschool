<?php

class Golf_plans_model extends CI_Model {

	function get_all_golf_plans() 
	{
		//$query = $this->db->get('accounts_t');
		//flag for selecting only active users
		$query = $this->db->get_where('golf_programs', array('live' => 'yes'));
		if($query->num_rows != 0)
		{
			return $query->result();
		}
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
			'live' => 'yes'
		);

		$insert = $this->db->insert('golf_programs', $new_member_insert_data);
		return $insert;
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