<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fillblanks extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function blanksdisplay()
	{
		$this->load->model('blanksmodel');
		$this->data['questions'] = $this->blanksmodel->getFillblanks();
		$this->load->view('blanks_quiz', $this->data);
	}
	
		public function blanksresultdisplay()
	{
		
		$this->data['checks'] = array(
		     'ques1' => $this->input->post('quizid1'),
		     'ques2' => $this->input->post('quizid2'),
			 'ques3' => $this->input->post('quizid3'),
			 'ques4' => $this->input->post('quizid4'),
		     'ques5' => $this->input->post('quizid5'),
			 'ques6' => $this->input->post('quizid6'),
			 'ques7' => $this->input->post('quizid7'),
			 'ques8' => $this->input->post('quizid8'),
			 'ques9' => $this->input->post('quizid9'),
			 'ques10' => $this->input->post('quizid10'),

		);

        $this->load->model('blanksmodel');
		$this->data['results'] = $this->blanksmodel->getFillblanks();
		$this->load->view('blanks_result_display', $this->data);
	}
}

