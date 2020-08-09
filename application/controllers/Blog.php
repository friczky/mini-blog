<?php

class Blog extends CI_Controller{


	public function index(){
		$data['blog'] = $this->db->query("SELECT * FROM blog where id='1'");
		$data['art'] = $this->db->query("SELECT * FROM artikel order by id_artikel DESC LIMIT 4");
		$this->load->view('front/home' ,$data);
	}

	public function semua(){
		$data['blog'] = $this->db->query("SELECT * FROM blog where id='1'");
		$data['art'] = $this->db->query("SELECT * FROM artikel");
		$this->load->view('front/all_artikel' ,$data);
	}

	public function r($id,$judul){
		$data['blog'] = $this->db->query("SELECT * FROM blog where id='1'");
		$data['art'] = $this->db->query("SELECT * FROM artikel where id_artikel='$id'");

		$this->load->view('front/tree/head1' ,$data);
		$this->load->view('front/baca' ,$data);
	}

	public function k(){
		$data['blog'] = $this->db->query("SELECT * FROM blog where id='1'");
		$data['kat'] = $this->db->query("SELECT * FROM kategori");
		$this->load->view('front/kategori',$data);
	}
	public function ks($kategori){
		$data['blog'] = $this->db->query("SELECT * FROM blog where id='1'");
		$data['art'] = $this->db->query("SELECT * FROM artikel where kategori='$kategori'");
		$data['kat'] = $kategori;
		$this->load->view('front/kategori_view',$data);
	}
}