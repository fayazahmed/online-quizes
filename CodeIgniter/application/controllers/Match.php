<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Match extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function matchdisplay()
	{
		$this->load->model('matchmodel');
		$this->data['questions'] = $this->matchmodel->getMatch();
		$this->load->view('match_quiz', $this->data);
	}
	
		public function matchresultdisplay()
	{
		$this->data['checks'] = array(
		     'ques1' => $this->input->post('ans1'),
		     'ques2' => $this->input->post('ans2'),
			 'ques3' => $this->input->post('ans3'),
			 'ques4' => $this->input->post('ans4'),
		     'ques5' => $this->input->post('ans5'),
			 'ques6' => $this->input->post('ans6'),
			 'ques7' => $this->input->post('ans7'),
			 'ques8' => $this->input->post('ans8'),
			 'ques9' => $this->input->post('ans9'),
			 'ques10' => $this->input->post('ans10'),
			 'ques11' => $this->input->post('ans11'),
		     'ques12' => $this->input->post('ans12'),
			 'ques13' => $this->input->post('ans13'),
			 'ques14' => $this->input->post('ans14'),
		     'ques15' => $this->input->post('ans15'),
			 'ques16' => $this->input->post('ans16'),
			 'ques17' => $this->input->post('ans17'),
			 'ques18' => $this->input->post('ans18'),
			 'ques19' => $this->input->post('ans19'),
			 'ques20' => $this->input->post('ans20'),

		);

        $this->load->model('matchmodel');
		$this->data['results'] = $this->matchmodel->getMatch();
		$this->load->view('match_result_display', $this->data);
	}
}

