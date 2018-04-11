<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		//$this->load->database();
	 }
	 function index()
	 {
	   $this->load->view('courses');
	 }
     function getCourses()
	 {
		$query = $this->db->query("SELECT * FROM courses;");
		echo json_encode($query->result());
	 }
	 function addCourse()
	 {
		 $cName = $this->input->post('name');
		   $cId = $this->input->post('id');
		   $cCost = $this->input->post('cost');
		   // $cCreatedOn = $this->input->post('createdDate');
		   $data  = array(
					'courseName'=>$cName,
					'courseId'=>$cId,
					'courseCost'=>$cCost
					// 'createdOn'=>$cCreatedOn
				);
		   $this->db->insert('courses',$data); 
		   echo "Successfully Added New Course : ".$cName;
		 
	 }
	 function updateCourse()
	 {
		$cName = $this->input->post('name');
		$cId  = $this->input->post('id');
		$cCost = $this->input->post('cost');
		$prevId = $this->input->post('prevId');
		// $cCreatedOn = $this->input->post('createdDate');
		$data  = array(
				'courseName'=>$cName,
				'courseId'=>$cId,
                'courseCost'=>$cCost
                // 'createdOn'=>$cCreatedOn
			);
		$this->db->where('CourseId', $prevId);
		$this->db->update('courses', $data);
	 
		echo "Successfully Updated Course Id:".$cId;
	 } 
	 function deleteCourse()
	 {
		$cId = $this->input->post('CourseId');		
		$this->db->where('CourseId', $cId);
		$this->db->delete('courses'); 		 

		echo "Successfully Deleted Course Id:".$cId;
	 }	

}