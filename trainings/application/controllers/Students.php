<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	//$this->load->model('UserModel','',TRUE);
 }

 function index()
 {
  
   $this->load->view('students');
 }
 function addStudent()
 {
	  $id = $this->input->post('id');
   $name = $this->input->post('name');
   $mailid = $this->input->post('emailid');
   $mobile = $this->input->post('mobile');
   $course = $this->input->post('course');
   $zone = $this->input->post('zone');
   $data = array(
		'id'=>$id,
		'name'=>$name,
		'emailid'=>$mailid,
		'mobile'=>$mobile,
		'course'=>$course,
		'zone'=>$zone
		);

	$this->db->insert('students',$data);

    echo "Successfully Registered New Student Id:".$id;
	 
 }
 function getStdList()
 {
	$query = $this->db->query("SELECT * FROM students;");
	echo json_encode($query->result());
 }	 
 function updateStd()
 {
   $id = $this->input->post('id');
   $name = $this->input->post('name');
   $mailid = $this->input->post('emailid');
   $mobile = $this->input->post('mobile');
   $course = $this->input->post('course');
   $zone = $this->input->post('zone');
   $data = array(
		'id'=>$id,
		'name'=>$name,
		'emailid'=>$mailid,
		'mobile'=>$mobile,
		'course'=>$course,
		'zone'=>$zone
		);
	$this->db->where('id', $id);
	$this->db->update('students', $data);
 
    echo "Successfully Updated Student Id:".$id;
 }
 function deleteStd()
 {
	$id = $this->input->post('id');		
	$this->db->where('id', $id);
	$this->db->delete('students'); 		 

    echo "Successfully Deleted Student Id:".$id;
 }		 
	

}
?>