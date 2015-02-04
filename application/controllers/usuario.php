<?php
	Class Usuario extends CI_controller{

		public function __construct(){

				parent::__construct();
				$this->load->database();
				$this->load->library('grocery_crud');
				ini_set('date.timezone', 'America/Los_Angeles');
		}

		public function index(){
			$this->load->view('index.php');
		}

		public function valuser(){
			$user = $this->input->post('txtuser');
			$psw  = $this->input->post('txtpsw');
			$sms  ="Ocurrio un error, por favor revise dentenidamente o informe a Diego.";

			if($user==''||$psw=='')
			{
				$sms = "Para ingresar debe completar los campos";
			}
			else{

				$user = trim($user,"");
				$user = strtoupper($user);

				$this->db->select('us_usuario,us_password,us_nombre,us_apepat,dis_rol');
				$this->db->from('dis_usuario');
				$this->db->join('dis_usuario_rol','dis_usuario.us_id=dis_usuario_rol.dis_usuario');
				$this->db->where('us_usuario',$user);
				$query  = $this->db->get();

				if($query->num_rows()>0){

					foreach($query->result() as $r){
						$usuario = $r->us_nombre.' '.$r->us_apepat;
						$password= $r->us_password;

						$session['nombre']=$r->us_nombre;
						$session['paterno']=$r->us_apepat;
						$session['rol']=$r->dis_rol;			
					}
					$password = $this->encrypt->decode($password);
					if(strcmp($password,$psw)==0){
						$this->session->set_userdata($session);
						redirect('core/gestion_usuario');

					}else{
						echo "usuario y/o password incorrectos<br>";
						$url = site_url()."/usuario";
						echo "<a href='".$url."'>Reintente</a>";
					}

				}
				else{
						echo "usuario y/o password incorrectos<br>";
						$url = site_url()."/usuario";
						echo "<a href='".$url."'>Reintente</a>";
				}

				//si la password es correcta
				//$this->session->set_userdata($session);
				
			}

			
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(usuario);
		}

		private function decode($pwd){
			$password = $this->encrypt->decode($pwd);
			return $password;
		}

		public function prueba (){
			$string = "admin";
			$string_encode = $this->encrypt->encode($string);
			$string_decode = $this->encrypt->decode($string_encode);
			echo $string_encode;
			echo "<br>";
			echo $string_decode;
		}


	}