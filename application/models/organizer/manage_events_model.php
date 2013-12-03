<?php

class Manage_events_model extends CI_Model {

	function get_my_events()
	{
		$this->db->where('company_id', $this->session->userdata('company_o_id'));
		$query = $this->db->get('booking_master');

		if($query->num_rows != 0)
		{
		return $query->result();
		}
		}



}