<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	 function __construct()
	 {
	   parent::__construct();
	 }
	public function index()
	{
	
		$this->load->helper(array('form'));
		
		if($this->session->userdata('logged_in'))
		   {
			 $session_data = $this->session->userdata('logged_in');
			 $data['username'] = $session_data['username'];
			 $this->load->view('home_view', $data);
		   }
		   else
		   {
			 //If no session, redirect to login page
			  $this->load->view('login');
		   }

	}
}