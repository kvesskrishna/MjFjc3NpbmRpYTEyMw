<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trainers extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		//$this->load->database();
	 }

	 function index()
	 {
	   $this->load->view('trainers');  
	 }
     function getTrainers()
	 {
		$query = $this->db->query("SELECT * FROM trainers;");
		echo json_encode($query->result());
	 }
	 function addTrainer()
	 {
		 $tName = $this->input->post('name');
		   $tId = $this->input->post('id');
		   $tContact = $this->input->post('mobile');
		   $tEmail = $this->input->post('emailid');
		   $tCourse = $this->input->post('course');
		   $tExp = $this->input->post('exp');
		   $tOther = $this->input->post('other');
		   $data  = array(
					'name'=>$tName,
					'id'=>$tId,
					'mobile'=>$tContact,
					'emailid'=>$tEmail,
					'course'=>$tCourse,
					'exp'=>$tExp,
					'other'=>$tOther
				);
		   $this->db->insert('trainers',$data); 
		   echo "Successfully Added New Trainer : ".$tName;
		 
	 }
	 function updateTrainer()
	 {
	   $tName = $this->input->post('name');
	   $tId = $this->input->post('id');
	   $tContact = $this->input->post('mobile');
	   $tEmail = $this->input->post('emailid');
	   $tCourse = $this->input->post('course');
	   $tExp = $this->input->post('exp');
	   $tOther = $this->input->post('other');
	   $data  = array(
				'name'=>$tName,
				'id'=>$tId,
				'mobile'=>$tContact,
                'emailid'=>$tEmail,
                'course'=>$tCourse,
				'exp'=>$tExp,
				'other'=>$tOther
			);
		$this->db->where('id', $tId);
		$this->db->update('trainers', $data);
	 
		echo "Successfully Updated Trainer Id:".$tId;
	 }
	 function deleteTrainer()
	 {
		$tId = $this->input->post('id');		
		$this->db->where('id', $tId);
		$this->db->delete('trainers'); 		 

		echo "Successfully Deleted Trainer Id:".$tId;
	 }		
 
}