<?php

class Membership_model extends CI_Model {

	function validate()
	{
		$this->db->where('email_name_t', $this->input->post('username'));
		$this->db->where('Password_auth_t', md5($this->input->post('password')));
		$this->db->where('god_paid_t', $this->input->post('yes'));
		//$this->db->join('company_o', 'company_o.ID_auth_l = accounts_o.company_o_id');
		$query = $this->db->get('accounts_t');

		if($query->num_rows == 1)
		{
		foreach($query->result() as $row){
	        $data = array(
	        	'id_o' => $row->ID_auth_t,
	        	'first_o' => $row->first_name_t,
	        	'last_o' => $row->last_name_t,
				'email_o' => $row->email_name_t,
				'company_o' => 'Precision Golf School',
				'img_o' => $row->loc_1_t,
				'id_op' => $row->ID_auth_t,
	        	'first_op' => $row->first_name_t,
	        	'last_op' => $row->last_name_t,
				'email_op' => $row->email_name_t,
				'company_op' => 'Precision Golf School',
				'img_op' => $row->loc_1_t,
				'is_logged_in_o' => true
			);
			$this->session->set_userdata($data);
			return true;
		}
		}

	}

	function get_all_golf_pros() 
	{
		//$query = $this->db->get('accounts_t');
		//flag for selecting only active users
		$query = $this->db->get_where('accounts_t', array('god_paid_t' => 'yes'));
		if($query->num_rows != 0)
		{
			return $query->result();
		}
	}

	function r_pro_model() {
		$data = array('god_paid_t' => 'no');
		$this->db->where('ID_auth_t', $this->input->post('id_pass'));
		$query = $this->db->update('accounts_t', $data);
		return true;
	}

	function create_pro($picture_name_passed)
	{   


		$new_member_insert_data = array(
			'first_name_t' => $this->input->post('first_name'),
			'last_name_t' => $this->input->post('last_name'),
			'email_name_t' => $this->input->post('email_address'),
			'Username_auth_t' => 'golf instructor',
			'Password_auth_t' => md5($this->input->post('password')),
			'notes_t' => $this->input->post('expanded_info'),
			'loc_1_t' => $picture_name_passed
		);

		$insert = $this->db->insert('accounts_t', $new_member_insert_data);
		return $insert;
	}

	function edit_pro($do_not_update_password, $picture_name_passed)
	{ 
        if ($do_not_update_password) {
		$new_member_insert_data = array(
			'first_name_t' => $this->input->post('first_name'),
			'last_name_t' => $this->input->post('last_name'),
			'email_name_t' => $this->input->post('email_address'),
			'address_shipping_t' => $this->input->post('title'),
			'Username_auth_t' => 'golf instructor',
			'notes_t' => $this->input->post('expanded_info'),
			'loc_1_t' => $picture_name_passed
		);
		} else {
			$new_member_insert_data = array(
			'first_name_t' => $this->input->post('first_name'),
			'last_name_t' => $this->input->post('last_name'),
			'email_name_t' => $this->input->post('email_address'),
			'address_shipping_t' => $this->input->post('title'),
			'Username_auth_t' => 'golf instructor',
			'Password_auth_t' => md5($this->input->post('password')),
			'notes_t' => $this->input->post('expanded_info'),
			'loc_1_t' => $picture_name_passed
		);

		}

		$this->db->where('ID_auth_t', $this->input->post('id_name'));
		$insert = $this->db->update('accounts_t', $new_member_insert_data);
		return $insert;
		//return md5($this->input->post('password'));
	}
}