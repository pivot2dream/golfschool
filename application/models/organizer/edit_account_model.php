<?php

class Edit_account_model extends CI_Model {

	function get_my_account()
		{
			$this->db->where('ID_auth_o', $this->session->userdata('id_o'));
			$query = $this->db->get('accounts_o');

			if($query->num_rows != 0)
			{
			return $query->result();
			}
		}

	function get_my_company()
	{
		$this->db->where('ID_auth_l', $this->session->userdata('company_o_id'));
		$query = $this->db->get('company_o');

		if($query->num_rows != 0)
		{
		return $query->result();
		}
		}

	function update_account()
	{
		$data = array(  'first_name_o' => $this->input->post('first_name'),
						'last_name_o' => $this->input->post('last_name'),
						'email_name_o' => $this->input->post('email_name'),
						'phone_o' => $this->input->post('phone_name'),
						'address_shipping_o' => $this->input->post('address_name'),
						'zip_o' => $this->input->post('zip_name')


					);

					$this->db->where('ID_auth_o', $this->session->userdata('id_o'));

					$query = $this->db->update('accounts_o', $data);
		///////////////////////////////////////////////////////////////////////////////////

		$data = array(
								'company_name_l' => $this->input->post('company_name'),
								'phone_l' => $this->input->post('company_phone'),
								'addy_l' => $this->input->post('company_address'),
								'zip_l' => $this->input->post('company_zip')


							);

							$this->db->where('ID_auth_l', $this->session->userdata('company_o_id'));

					$query = $this->db->update('company_o', $data);
		////////////////////////////////////////////////////////
		$data = array(

			        	'first_o' => $this->input->post('first_name'),
			        	'last_o' => $this->input->post('last_name'),
						'company_o_name' => $this->input->post('company_name')

					);
			$this->session->set_userdata($data);



			return 'added';
		}



}