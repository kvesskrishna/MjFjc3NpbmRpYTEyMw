<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EmployeeRegisterForm extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	//$this->load->model('UserModel','',TRUE);
 }

 function index()
 {
   $this->load->view('employee');
 }
 function addEmp()
 {
	 $id = $this->input->post('id');
   $designation = $this->input->post('designation');
   $department = $this->input->post('department');
   $DOB = $this->input->post('DOB');
   $ESI_id = $this->input->post('ESI_id');
   $Name = $this->input->post('Name');
   $PF_id = $this->input->post('PF_id');
   $basicpay = $this->input->post('basicpay');
   $DOJ = $this->input->post('DOJ');
   $data = array(
		'id'=>$id,
		'Name'=>$Name,
		'DOB'=>$DOB,
		'department'=>$department,
		'PF_id'=>$PF_id,
		'ESI_id'=>$ESI_id,
		'designation'=>$designation,
		'basicpay'=>$basicpay,		'DOJ'=>$DOJ
		);

	$this->db->insert('employees',$data);
   
   echo "Successfully Registered New Employee Id:".$id;
 }
 function updateEmp()
 {
   $id = $this->input->post('id');
   $designation = $this->input->post('designation');
   $department = $this->input->post('department');
   $DOB = $this->input->post('DOB');
   $ESI_id = $this->input->post('ESI_id');
   $Name = $this->input->post('Name');
   $PF_id = $this->input->post('PF_id');
   $basicpay = $this->input->post('basicpay');
   
   $data = array(
		'id'=>$id,
		'Name'=>$Name,
		'DOB'=>$DOB,
		'department'=>$department,
		'PF_id'=>$PF_id,
		'ESI_id'=>$ESI_id,
		'designation'=>$designation,
		'basicpay'=>$basicpay
		);
	     $this->db->where('id', $id);
		 $this->db->update('employees', $data);
   
   echo "Successfully Updated Employee Id:".$id;
   
 }
	function deleteEmp()
	 {
		 
		$id = $this->input->post('id');
		
		 $this->db->where('id', $id);
		$this->db->delete('employees'); 
     echo "Successfully Deleted Employee Id:".$id;
			
	 }

	function getList()
	 {
		 $query = $this->db->query("SELECT * FROM employees;");

			echo json_encode($query->result());
			
	 }

}
?>