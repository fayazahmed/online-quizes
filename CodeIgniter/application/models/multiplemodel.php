<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class multiplemodel extends CI_Model {

	public function getMultiple()
	{
		$this->db->select("multiplechoiceid, question, choice1, choice2, choice3, answer, description");
		$this->db->from("multiple_choice");
		
		$query = $this->db->get();
		
		return $query->result();
		
		$num_data_returned = $query->num_rows;
		
		if ($num_data_returned < 1) {
		  echo "There is no data in the database";
		  exit();	
		}
	}
}

