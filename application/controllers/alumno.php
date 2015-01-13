<?php
	Class Alumno extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('grocery_crud');
		}
		
		function index(){}
		
		function alumnos(){
			$crud = new Grocery_CRUD();
			$crud->set_table('dis_alumno');
			$crud->display_as('dis_iglesia','Iglesia');
			$crud->set_subject('Alumno');
			$crud->set_relation('dis_iglesia','dis_iglesia','id_nombre');
			$output = $crud->render();
			$this->_example_output($output);
		}
		
		public function _example_output($out = null){
			$this->load->view('our_template.php',$out);
		}
	}
