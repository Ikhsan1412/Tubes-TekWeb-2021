<?php
	class Jaket_model extends CI_model{
			public function getAllJaket(){
				return $this->db->get('jaket');
			}
			
			function insertJaket(){
				$jaket = array(
				"id_jaket" => $this->input->post(""),
				"merk_jaket" => $this->input->post("merk"),
				"color_jaket" => $this->input->post("color"),
				"size_jaket" => $this->input->post("size"),
				"harga_jaket" => $this->input->post("harga"),
				"jenis_jaket" => $this->input->post("jenis")
				);
				return $this->db->insert('jaket',$jaket);
			}
			
			function getJaketById($id){
				$this->db->where("id_jaket",$id);
				return $this->db->get('jaket');
			}
	
			function updateJaket($id){
				$jaket = array(
				"id_jaket" => $this->input->post(""),
				"merk_jaket" => $this->input->post("merk"),
				"color_jaket" => $this->input->post("color"),
				"size_jaket" => $this->input->post("size"),
				"harga_jaket" => $this->input->post("harga"),
				"jenis_jaket" => $this->input->post("jenis")
				);
				$this->db->where("id_jaket",$id);
				return $this->db->update("jaket",$jaket);
			}
	
			function deleteJaket($id){
				$this->db->where("id_jaket",$id);
				return $this->db->delete("jaket");
			}			
	}
?>