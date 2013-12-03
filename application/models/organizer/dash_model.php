<?php

class Dash_model extends CI_Model {

	function results_log()
		{

		//$this->db->where('company_id_delt', $this->session->userdata('company_o_id'));
		//$this->db->order_by("time_delt", "desc");
		//$query = $this->db->get('actions_log');
        $this->db->order_by("auto", "random");
		$query = $this->db->get('recipes_pro_new', 10);
		


		return $query->result();


		}

		function search_log($search_item)
		{

		$this->db->select('*');
		$this->db->from('recipes_pro_new');
		$this->db->like('Name',$search_item);
		$this->db->limit(10);
		$query = $users = $this->db->get();
		


		return $query->result();

			
		}

		function temp_subs()
		{

		//$this->db->where('company_id_delt', $this->session->userdata('company_o_id'));
		//$this->db->order_by("time_delt", "desc");
		//$query = $this->db->get('actions_log');
        $this->db->order_by("auto", "random");
		$query = $this->db->get('booking_master', 50);
		


		return $query->result();


		}



		function food_dropdown()
		{
		$this->db->select('*');
		$this->db->from('foods_t');
		$this->db->join('category_t', 'foods_t.type_f = category_t.ID_auth_cat');
		$query = $this->db->get(); 

		return $query->result();
		}

		function add_food_to_person($food_id,$user_id)
		{
		$query = $this->db->select('*')->where('food_id', $food_id)->where('person_id', $user_id)->get('person_food_join');
		if($query->num_rows() == 0)
			{

			$data = array( 'food_id' => $food_id,
						'person_id' => $user_id
			);

			$query = $this->db->insert('person_food_join', $data);
			}
		}

		function get_my_no_foods($my_id)
		{
		$this->db->select('*');    
		$this->db->from('person_food_join');
		$this->db->where('person_id', $my_id);
		$this->db->join('foods_t', 'person_food_join.food_id = foods_t.ID_auth_f');
		$this->db->join('category_t', 'category_t.ID_auth_cat = foods_t.type_f');
		
		$query = $this->db->get();
		return $query->result();
		}

		function add_sub_item_func()
		{
			
			$data = array( 'orig_food_id' => $this->input->post('orig_food_id'),
				'food_sub' => $this->input->post('food_sub'),
				'where_find_sub' => $this->input->post('where_find'),
				'good_sub' => $this->input->post('good_sub'),
				'original_ratio_sub' => $this->input->post('original_ratio'),
				'copy_ratio_sub' => $this->input->post('copy_ratio')

						
			);

			$query = $this->db->insert('booking_master', $data);
			//return $query->result();
			
		}


}