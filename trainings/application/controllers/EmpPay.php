<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EmpPay extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
		//$this->load->model('UserModel','',TRUE);
	 }

	 function index()
	 {

	    $this->load->view('payslip');
	   
	 }
	 function addEmpPay()
	 {
		 $empId = $this->input->post('empId');
	   $basic = $this->input->post('basicpay');
	   $payDate = $this->input->post('paydate');
	   $workingDays = $this->input->post('wokingdays');
	   $absents = $this->input->post('absents');
	   $leaves = $this->input->post('leaves');  
	   $DA = $this->input->post('da');
	   $HRA = $this->input->post('hra');
	   $Convey = $this->input->post('convey');
	   $SPLA = $this->input->post('splA');
	   $insentives = $this->input->post('insentive');
	   $Loan = $this->input->post('loan');
	   $PF = $this->input->post('pfAmnt');
	   $ESI = $this->input->post('esiAmnt');
	   $PT = $this->input->post('ptAmnt');
	   $others = $this->input->post('others');
	   $EarnedTotal = (int)$basic+(int)$DA+(int)$HRA+(int)$Convey+(int)$SPLA+(int)$insentives;
	   $DeductionTotal = (int)$Loan+(int)$PF+(int)$ESI+(int)$PT+(int)$others;
	   $Netpay = $EarnedTotal - $DeductionTotal;
	   
	  
	   
	   
	   $data = array(
			'empId'=>$empId,
			'payDate'=>$payDate,
			'workingDays'=>$workingDays,
			'absents'=>$absents,
			'leaves'=>$leaves,
			'basic'=>$basic,
			'DA'=>$DA,
			'HRA'=>$HRA,	
			'Convey'=>$Convey,
			'SPLA'=>$SPLA,
			'Insentives'=>$insentives,
			'Loan'=>$Loan,
			'PF'=>$PF,
			'ESI'=>$ESI,
			'PT'=>$PT,
			'others'=>$others,
			'EarnedTotal'=>$EarnedTotal,
			'DeductionTotal'=>$DeductionTotal,
			'Netpay'=>$Netpay,
			);

		$this->db->insert('payments',$data);
	   
	   echo "Successfully Created New Pay slip for Employee:".$empId;
		 
	 }
	 function updateEmp()
	 {
	  
	   
	 }
	function deleteEmp()
	 {
		 
		
			
	 }

	function getPays()
	 {
		 $query = $this->db->query("SELECT * FROM payments;");

			echo json_encode($query->result());
			
	 }

}
?>