<?php
	Class Core extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->library('grocery_crud');
			ini_set('date.timezone', 'America/Los_Angeles');
			$session = NULL;
			$session = $this->session->userdata('rol');
			if($session==NULL){
				$this->session->sess_destroy();
				redirect('usuario');
			}
		}
		
		public function index(){}
		
		public function gestion_alumno(){
			$crud = new Grocery_CRUD();
			$crud->set_language("spanish");
			$crud->set_table('dis_alumno');
			$crud->display_as('dis_iglesia','Iglesia');
			$crud->display_as('al_rut','Rut');
			$crud->display_as('al_rut','Rut');
			$crud->set_subject('Alumno');
			$crud->set_relation('dis_iglesia','dis_iglesia','id_nombre');
			$output = $crud->render();
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/bootstrap.min.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/sb-admin.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/plugins/morris.css';
 			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/font-awesome/css/font-awesome.css';
			$output->js_files[] =  base_url().'assets/grocery_crud/themes/sbadmin/js/bootstrap.js';
			$output->section[]='Alumno';
			$this->_example_output($output);
		}
		
		// Gestionar las calificaciones de los alumnos
		// Tres calificiones por curso, asignar en la base de datos numero ordinal de nota por curso
		
		Public function gestion_calificacion(){
			$crud = new Grocery_CRUD();
			$crud->set_language("spanish");
			$crud->set_table('dis_calificacion');
			$crud->set_relation('dis_curso','dis_curso','cu_nombre');
			$crud->set_relation('dis_alumno','dis_alumno','al_rut');
			$output = $crud->render();
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/bootstrap.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/sb-admin.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/plugins/morris.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/font-awesome/css/font-awesome.css';
			$output->js_files[] = base_url().'assets/grocery_crud/themes/sbadmin/js/bootstrap.js';
			$output->section[]='Calificaciones';
			$this->_example_output($output);
			
		}
		
		public function gestion_iglesia(){
			$crud = new Grocery_CRUD();
			$crud->set_language("spanish");
			$crud->set_table('dis_iglesia');
			$crud->display_as('id_nombre','Nombre Iglesia');
			$crud->display_as('id_direccion','Dirección');
			$crud->set_subject('iglesia');
			$output = $crud->render();
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/bootstrap.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/sb-admin.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/plugins/morris.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/font-awesome/css/font-awesome.css';
			$output->js_files[] = base_url().'assets/grocery_crud/themes/sbadmin/js/bootstrap.js';
			$output->section[]='Iglesias';
			$this->_example_output($output);
		}
		
		public function gestion_curso(){
			$crud = new Grocery_CRUD();
			$crud->set_language("spanish");
			$crud->set_table('dis_curso');
			$crud->display_as('cu_nombre','Curso');
			$crud->display_as('cu_descripcion','Descripción');
			$crud->set_subject('Curso');
			$output = $crud->render();
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/bootstrap.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/sb-admin.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/plugins/morris.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/font-awesome/css/font-awesome.css';
			$output->js_files[] = base_url().'assets/grocery_crud/themes/sbadmin/js/bootstrap.js';
			$output->section[]='Cursos';
			$this->_example_output($output);
		}
		
		public function gestion_inscripcion(){
			$crud = new Grocery_CRUD();
			$crud->set_language("spanish");
			$crud->set_subject('Inscripcion');
			$crud->set_table('dis_alumno_curso');
			$crud->display_as('dis_curso','Curso');
			$crud->display_as('dis_alumno','Alumno');
			$crud->set_relation('dis_curso','dis_curso','cu_nombre');
			$crud->set_relation('dis_alumno','dis_alumno','al_rut');
			$output = $crud->render();
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/bootstrap.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/sb-admin.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/plugins/morris.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/font-awesome/css/font-awesome.css';
			$output->js_files[] = base_url().'assets/grocery_crud/themes/sbadmin/js/bootstrap.js';
			$output->section[]='Inscripciones';
			$this->_example_output($output);
			
		}
		
		public function gestion_matricula(){
			$crud = new Grocery_CRUD();
			$crud->set_language("spanish");
			$crud->set_subject('Matricula');
			$crud->set_table('dis_pago_curso');
			$crud->display_as('pa_costo','Costo');
			$crud->display_as('dis_alumno','Alumno');
			$crud->display_as('dis_curso','Curso');
			$crud->set_relation('dis_curso','dis_curso','cu_nombre');
			$crud->set_relation('dis_alumno','dis_alumno','al_rut');
			$output = $crud->render();
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/bootstrap.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/sb-admin.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/plugins/morris.css';
 			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/font-awesome/css/font-awesome.css';//font-awesome/css/font-awesome.min.css
			$output->js_files[] = base_url().'assets/grocery_crud/themes/sbadmin/js/bootstrap.js';
			$output->section[]='Matriculas';
			$this->_example_output($output);
		}

		public function gestion_usuario(){
			$crud = new Grocery_CRUD();
			$crud->set_language("spanish");
			$crud->set_subject('Usuario');
			$crud->set_table('dis_usuario');
			$crud->display_as('us_usuario','Usuario');
			$crud->display_as('us_password','Password');
			$crud->display_as('us_nombre','Nombre');
			$crud->display_as('us_apepat','Apellido Paterno');
			$crud->display_as('us_apemat','Apellido Materno');
			$crud->display_as('us_email','E-mail');
			$crud->callback_before_insert(array($this,'encrypt_password'));
			$crud->callback_before_update(array($this,'encrypt_password'));
			$output = $crud->render();
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/bootstrap.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/sb-admin.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/plugins/morris.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/font-awesome/css/font-awesome.css';
			$output->js_files[] = base_url().'assets/grocery_crud/themes/sbadmin/js/bootstrap.js';
			$output->section[]='Usuarios';
			$this->_example_output($output);
		}

		public function gestion_permisos(){
			$crud = new Grocery_CRUD();
			$crud->set_language("spanish");
			$crud->set_subject('Usuario');
			$crud->set_table('dis_usuario_rol');
			$crud->set_relation_n_n('Roles','dis_usuario_rol','dis_rol','dis_usuario','dis_rol','ro_comentario');
			$output = $crud->render();
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/bootstrap.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/sb-admin.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/css/plugins/morris.css';
			$output->css_files[] = base_url().'assets/grocery_crud/themes/sbadmin/font-awesome/css/font-awesome.css';
			$output->js_files[] = base_url().'assets/grocery_crud/themes/sbadmin/js/bootstrap.js';
			$output->section[]='Permisos';
			$this->_example_output($output);
		}

		public function encrypt_password($post_array)
		{
			$post_array['us_password'] = $this->encrypt->encode($post_array['us_password']);
			return $post_array;
		}
		
		public function _example_output($out = null){
			$this->load->view('our_template_new.php',$out);
		}
		
	}
