<?php
   
   Class Main extends CI_Controller{
   	
		function __construct(){
			
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library('grocery_CRUD');
			
		}
	
		public function index(){
			echo "<h1>Welcome to the world of the CodeIgniter</h1>";
			die();
		}
	
		public function employees(){
			$this->grocery_crud->set_table('employees');
			$output = $this->grocery_crud->render();
			
			$this->_example_output($output);
		}
		
		function _example_output($output = null){
			$this->load->view('our_template.php',$output);
		}
	
   }
