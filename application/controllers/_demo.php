<?php
	Class Demo extends CI_controller{
		
		function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->library('grocery_crud');
		}
		
		function index(){
			
		}
		
		public function employees_example(){
			$crud = new grocery_crud();
			$crud->set_table('employees');
			$output = $crud->render();
			$this->_example_output($output);
		
		}
		
		function _example_output($output = null){
			$this->load->view('our_template.php',$output);
		}
		
	}
