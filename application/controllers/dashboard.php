<?php
	Class Dashboard extends CI_controller{
		
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->load->view('dashboard/dashboard_index');
		}
		
		public function panel(){
			$this->load->view('dashboard/dashboard_panel');
		}
	}
