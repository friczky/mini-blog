<?php 
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();		
	
	}
	function index(){
		$this->db->where('id',1);
		$data['blog'] = $this->db->get('blog')->row_array();
		$this->load->view('login/index',$data);
	}
	function auth(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => $password
			);
		$cek = $this->db->query("SELECT * FROM users where email='$email' and password='$password'");

		if($cek->num_rows() > 0){
			$data = $cek->row_array();
			$data_session = array(
				'email' => $email,
				'status' => "login",
				'role' => $data['role'],
				'nama' => $data['nama'],
				'id_user' => $data['id_user']
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("admin"));
		}else{
			echo "<script> window.alert('Username atau Password Salah') ; window.location.href='../login'; </script>";
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}