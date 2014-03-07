<?php

class Login_prove_and_common extends CI_Model {

	function is_logged_in($user_spec)
		{   
			$is_logged_in = $this->session->userdata('is_logged_in_'.$user_spec);
			if(!isset($is_logged_in) || $is_logged_in != true)
			{
				redirect('login');
				//echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';
				//die();
				//$this->load->view('login_form');
			}
		}

	function is_logged_in_special($user_spec)
		{   
			$is_logged_in = $this->session->userdata('is_logged_in_'.$user_spec);
			if(!isset($is_logged_in) || $is_logged_in != true)
			{
				return "user_mode";
				//echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';
				//die();
				//$this->load->view('login_form');
			} else {
				return "admin_mode";
			}
		}	
	//this function changes unix timestamp into human readable format (but only month day and year)
	function human_time_custom($date_echoed)
		{
		$date_echoed = new DateTime($date_echoed);
		$insert_date_echoed = $date_echoed->format('m-d-Y');
		$insert_date_echoed=explode(' ',$insert_date_echoed);
		$date_c = $insert_date_echoed[0];
		return $date_c;
		}

	function human_time_custom_full($date_echoed)
		{
		$date_echoed = new DateTime($date_echoed);
		$insert_date_echoed = $date_echoed->format('m-d-Y g:i:A');
		return $insert_date_echoed;
		}

	//these two functions below create url safe encoding mechanisms
	function encode_common($temp_secure)
		{
		$temp_secure = $this->encrypt->encode($temp_secure);
		$secure_event_id = str_replace("/", "~", $temp_secure);
		return $secure_event_id;
		}

	function decode_common($temp_secure)
		{
		$temp_secure = str_replace("~", "/", $temp_secure);
		$unsecure_event_id = $this->encrypt->decode($temp_secure);
		return $unsecure_event_id;
		}
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
    //the following function returns [0]date shown of link [1]day of link [2]id of day [3]id of event booking [4]number of tracks [5] day with h:i:s [6] track names
    //can be reused for all link representations of days within an event.
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
	function get_my_event_day_links ($secure_event_id)
		{
		$start_date = '';

		//get the start date listed from the event

		$this->db->where('event_id', $secure_event_id);

				$query = $this->db->get('booking_master');

				if($query->num_rows != 0)
				{
				$start_date_query = $query->result();
				foreach($start_date_query as $theresult){
				$start_date = $theresult->start_event;

				}
				}
				//////////////////////////////////////////////////
				$prev_indexed=array();
				$start_date_object = new DateTime($start_date);

		$this->db->where('booking_id_delt', $secure_event_id);

				$this->db->order_by('day_delt', 'asc');
				$query = $this->db->get('event_link_day');

				if($query->num_rows != 0)
				{
				$link_items_query = $query->result();
				foreach($link_items_query as $item){

				$start_date_sent = $start_date_object->format('Y-m-d H:i:s');
				$start_date_object_displayed = $this->login_prove_and_common->human_time_custom($start_date_sent);
				$prev_indexed[]=array($start_date_object_displayed,$item->day_delt,$item->ID_auth_delt,$secure_event_id,$item->number_of_tracks_delt,$start_date_sent,$item->track_names_delt);
				$start_date_object = $start_date_object->modify('+1 day');

				}
				return $prev_indexed;
			}
		}












	function upload_picture($cust_path,$uploaddir)
		{
		if (basename($_FILES[$cust_path]['type'])!=""){

			//$uploaddir = 'img/org_profile_pics/';
			$ext = basename($_FILES[$cust_path]['type']);
			//echo $ext;
			$uploadfile = $uploaddir . basename($_FILES[$cust_path]['name']);

			$file_image = basename($_FILES[$cust_path]['name']);
			//echo basename($_FILES[$cust_path]['error']);
			$max_width = 280;
			$max_height = 375;
			$dir = $uploaddir;
			$dh = opendir($dir);
			//$dh_2 = opendir($dir);
			$tracker = 0;

			//if (empty($_FILES)){echo 'why';}
			//print_r($_FILES);

			if($_FILES[$cust_path]['size'] > 5242880){ return('<div class="alert">your picture is too big</div>');}
			else{




					//move_uploaded_file($_FILES[$cust_path]['tmp_name'], $uploadfile);


											 list($width, $height) = @getimagesize($_FILES[$cust_path]['tmp_name']);

											 $old_width = $width;
											 $old_height = $height;

											 		if($width>$max_width||$height>$max_height)
											 		{
											 			$ratioh = $max_height/$height;
											 			$ratiow = $max_width/$width;
											 			$ratio = min($ratioh, $ratiow);
											 			// New dimensions
											 			$width = intval($ratio*$width);
											 			$height = intval($ratio*$height);


								 					}

													if($height<$max_height)
																			{


																				// New dimensions
																				$width = intval($max_height*($width / $height));
																				$height = $max_height;

																				if($width>$max_width){

																				$height = intval($max_width*($height / $width));
																				$width = $max_width;

																				}


													}
			$newHeight = $height;
			$newWidth = $width;


					//this is a test
					  switch ($_FILES[$cust_path]["type"])
					    {
					        // If image doesn't need to be converted
					        case "image/jpeg":
					            $img = imagecreatefromjpeg($_FILES[$cust_path]["tmp_name"]);
					            // I did put the .jpg extension because MIME type can be JPEG and extension can be something else and this helps you put the image in web page safely.
					            break;


					        // PNG for example
					        case "image/png":
					            $img = imagecreatefrompng($_FILES[$cust_path]["tmp_name"]);
					            break;


					        case "image/gif":
					            $img = imagecreatefromgif($_FILES[$cust_path]["tmp_name"]);
					            break;


					        default:
					            // Unsupported MIME type
					            break;
					    }

			$tmp_img = imagecreatetruecolor($newWidth, $newHeight);
			//resize the image
			imagecopyresized( $tmp_img, $img, 0, 0, 0, 0,$newWidth,$newHeight, $old_width, $old_height );
					    // Create the image
					    imagejpeg($tmp_img, $uploaddir . $cust_path . ".jpg"); // Notice that the resulting file name will be something like image.png.jpg which doesn't make any problem at all.

			//echo
					    // Unload the image object from server RAM.
					    // This can also be automatically done when php engine reaches end of page.
					    // But it's a long story to tell you how this helps server.
		    imagedestroy($img);
		    imagedestroy($tmp_img);







		closedir($dh);}
		}
		}

}