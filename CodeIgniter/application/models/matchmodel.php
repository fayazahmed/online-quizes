<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class matchmodel extends CI_Model {

	public function getMatch()
	{
		$this->db->select("matchid, question, answer, description");
		$this->db->from("match_images");
		
		$query = $this->db->get();
		
		return $query->result();
		
		$num_data_returned = $query->num_rows;
		
		if ($num_data_returned < 1) {
		  echo "There is no data in the database";
		  exit();	
		}
	}
}

