<?php
class User extends CI_Controller{ 
 public function __construct(){ 
 	parent::__construct();
	 //Loading url helper
	$this->load->helper('url');
	$this->load->database();
	$this->load->model('Jaket_model');
 }
 
 public function index(){ 
 	$this->load->view("UserHomeVIEW");
 } 
 
 public function jacketVIEW(){ 
	$data['jaket']=$this->Jaket_model->getAllJaket();
	$this->load->view("UserJacketVIEW",$data);
 } 
 
 public function aboutVIEW(){ 
	$this->load->view("UserAboutVIEW");
 }
 
 public function loginForm(){ 
	$this->load->view("AdminLoginVIEW");
 }
}  
 ?>