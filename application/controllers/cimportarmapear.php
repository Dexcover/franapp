<?php 
/**
* 
*/
class Cimportarmapear extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('vimportarmapear');
		$this->load->view('layout/footer');
	}
}
?>