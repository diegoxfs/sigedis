<?php
	Class Core extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->library('grocery_crud');
		}
		
		public function index(){}
		
		public function gestion_alumno(){
			$crud = new Grocery_CRUD();
			$crud->set_table('dis_alumno');
			$crud->display_as('dis_iglesia','Iglesia');
			$crud->display_as('al_rut','Rut');
			$crud->display_as('al_rut','Rut');
			$crud->set_subject('Alumno');
			$crud->set_relation('dis_iglesia','dis_iglesia','id_nombre');
			$output = $crud->render();
			$this->_example_output($output);
		}
		
		public function gestion_iglesia(){
			$crud = new Grocery_CRUD();
			$crud->set_table('dis_iglesia');
			$crud->display_as('id_nombre','Nombre Iglesia');
			$crud->display_as('id_direccion','Dirección');
			$crud->set_subject('iglesia');
			$output = $crud->render();
			$this->_example_output($output);
			
		}
		
		public function gestion_curso(){
			$crud = new Grocery_CRUD();
			$crud->set_table('dis_curso');
			$crud->display_as('cu_nombre','Curso');
			$crud->display_as('cu_descripcion','Descripción');
			$crud->set_subject('Curso');
			$output = $crud->render();
			$this->_example_output($output);
			
		}
		
		public function gestion_inscripcion(){
			$crud = new Grocery_CRUD();
<<<<<<< HEAD
=======
			$crud->set_subject('Inscripcion');
>>>>>>> 4c112b2ceadf985a445489f02831ed650e6f23a2
			$crud->set_table('dis_alumno_curso');
			$crud->display_as('dis_curso','Curso');
			$crud->display_as('dis_alumno','Alumno');
			$crud->set_relation('dis_curso','dis_curso','cu_nombre');
			$crud->set_relation('dis_alumno','dis_alumno','al_rut');
			$output = $crud->render();
			$this->_example_output($output);
			
		}
		
		public function gestion_matricula(){
			$crud = new Grocery_CRUD();
<<<<<<< HEAD
=======
			$crud->set_subject('Matricula');
>>>>>>> 4c112b2ceadf985a445489f02831ed650e6f23a2
			$crud->set_table('dis_pago_curso');
			$crud->display_as('pa_costo','Costo');
			$crud->display_as('dis_alumno','Alumno');
			$crud->display_as('dis_curso','Curso');
			$crud->set_relation('dis_curso','dis_curso','cu_nombre');
			$crud->set_relation('dis_alumno','dis_alumno','al_rut');
			$output = $crud->render();
			$this->_example_output($output);
		}
		
		public function _example_output($out = null){
			$this->load->view('our_template.php',$out);
		}
		
	}
