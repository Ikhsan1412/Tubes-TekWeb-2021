<?php
class cale extends CI_Controller{ 
 public function index(){ 
 } 
 
 	public function hitung(){ 
 $x = $this->input->post('bil1'); 
 $y = $this->input->post('bil2'); 
 $data['hasil'] = $x+$y; 
 $this->load->view("calculator_form",$data);
 } 
}  
 ?>