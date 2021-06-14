<?php
class Admin extends CI_Controller{ 
 public function __construct(){ 
 	parent::__construct();
	 //Loading url helper
	$this->load->helper('url');
	$this->load->database();
	$this->load->library('table');
	$this->load->model('Jaket_model');
 }
 
 public function index(){ 
 	$this->load->view("AdminHomeVIEW");
 } 
 
 public function jacketVIEW(){ 
	$data['jaket']=$this->Jaket_model->getAllJaket();
	$this->load->view("AdminJacketVIEW",$data);
 } 
 
 public function aboutVIEW(){ 
	$this->load->view("AdminAboutVIEW");
 }
 
 public function logout(){ 
	$this->load->view("UserHomeVIEW");
 }
 
 public function tambah(){
	$this->load->model("Jaket_model","",TRUE);
	$data['jaket']=$this->Jaket_model->getAllJaket();
	$this->load->view("jaket_tambah",$data);
 }
 
 public function prosesTambah(){
	if($this->Jaket_model->insertJaket()){
		redirect('http://localhost/TubesTekWeb/Index.php/Admin/jacketVIEW');
	}else{ 
		redirect('http://localhost/TubesTekWeb/Index.php/Admin/tambah');
	}
 }
 
 public function update($id){
	$this->load->model('Jaket_model');
	$data['jaket'] = $this->Jaket_model->getJaketById($id)->row();
	$this->load->view("jaket_update",$data);
 }
	
 public function prosesUpdate($id){
	if($this->Jaket_model->updateJaket($id)){
		redirect('http://localhost/TubesTekWeb/Index.php/Admin/jacketVIEW');
	}else{
		redirect('http://localhost/TubesTekWeb/Index.php/Admin/jacketVIEW');
	}
 }
 
 public function hapus($id){
	$this->Jaket_model->deleteJaket($id);
	redirect('http://localhost/TubesTekWeb/Index.php/Admin/jacketVIEW');
 }
}  
 ?>