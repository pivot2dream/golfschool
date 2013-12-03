<?php

class Presenter_model extends CI_Model {



	function create_presenter()
				{


				//////////////////////////////////////////////////////////////////////////////

					$new_session_insert_data = array(
						//replace this first value with track
						'presenter_name_pp' => $this->input->post('name'),
						'presenter_title_pp' => $this->input->post('title'),
						'presenter_bio_pp' => $this->input->post('bio'),
						'company_id_pp' => $this->session->userdata('company_o_id')




					);

					$insert = $this->db->insert('presenters', $new_session_insert_data);
					/////////////////////////////////////////////////////////////////////////////

					return mysql_insert_id();
					}

	function get_presenters()
		{
		$this->db->where('company_id_pp', $this->session->userdata('company_o_id'));

						$this->db->order_by('presenter_name_pp', 'asc');
						$query = $this->db->get('presenters');

						if($query->num_rows != 0)
						{
						return $query->result();
				        }
		}


	function update_presenters()
		{


		$data = array(
			'presenter_name_pp' => $this->input->post('name_e'),
			'presenter_title_pp' => $this->input->post('title_e'),
			'presenter_bio_pp' => $this->input->post('bio_e')

		);

		$this->db->where('presenter_id_pp', $this->input->post('on_me_e'));
		$query = $this->db->update('presenters', $data);
		return 'added';


		}

	function remove_presenter()
	{
    $this->db->delete('presenters', array('presenter_id_pp' => $this->input->post('presenter')),1);
	}




}


