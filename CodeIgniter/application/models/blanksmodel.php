<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blanksmodel extends CI_Model {

	public function getFillblanks()
	{
		$this->db->select("blanksid, question, answer, description");
		$this->db->from("fill_in_the_blanks");
		
		$query = $this->db->get();
		
		return $query->result();
		
		$num_data_returned = $query->num_rows;
		
		if ($num_data_returned < 1) {
		  echo "There is no data in the database";
		  exit();	
		}
	}
}

