<?php 
/**
 * 
 */
 class Clogin extends CI_Controller
 {
 		
 			function __construct()
 			{
 				parent::__construct();
 				$this->load->model('mlogin');
 			}
 		
 	
 	public function index()
	{
		
		$this->load->view('login/vlogin');
		
	}
}
