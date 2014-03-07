<?php

class General_modal extends CI_Model {

	function update_html($html_held, $what_to_update, $id_update)
		{
			if ($what_to_update=="news") {
			$data = array('news_html' => $html_held);

			$this->db->where('ID_auth_bm', 250);

			$query = $this->db->update('golf_static_assets', $data);
			}

			if ($what_to_update=="about") {
			$data = array('about_school' => $html_held);

			$this->db->where('ID_auth_bm', 250);

			$query = $this->db->update('golf_static_assets', $data);
			}

			return $query;
			
		}

	function get_news() 
	{
		//$query = $this->db->get('accounts_t');
		//flag for selecting only active users
		$query = $this->db->get_where('golf_static_assets', array('ID_auth_bm' => 250));
		if($query->num_rows != 0)
		{
			return $query->result();
		}
	}	

}