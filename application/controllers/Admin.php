<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                
                if($this->session->userdata('status') != "login"){
				redirect(base_url("login"));
				}
        }

	public function index()
	{

		$data['blog'] = $this->db->get('blog');
		$this->load->view('admin/home',$data);
	}

	public function artikel(){
		$data['blog'] = $this->db->get('blog');
		$data['art'] = $this->db->query("SELECT * FROM artikel order by id_artikel DESC");
			$this->load->view('admin/tree/head', $data);
			$this->load->view('admin/tree/sidebar', $data);
			$this->load->view('admin/tree/navbar', $data);
            $this->load->view('admin/artikel/artikel', $data);
            $this->load->view('admin/tree/js', $data);
	}

	public function artikel_tambah(){
		if (isset($_POST['simpan'])) {

			 $upload_foto = $_FILES['foto'];

            if ($upload_foto) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/images/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }
            $data = [
                'judul' => $this->input->post('judul'),
                'kategori' => $this->input->post('kategori'),
                'foto' => $foto,
                'konten' => $this->input->post('konten'),
                'penulis' => $this->input->post('penulis'),
                'waktu' => date('d-m-Y'),
            ];

            $this->db->insert('artikel', $data);
            redirect(base_url('admin/artikel'));
		}else{
			$data['blog'] = $this->db->get('blog');
			$data['kat'] = $this->db->get('kategori');
			$data['art'] = $this->db->get('artikel');
			$this->load->view('admin/tree/head', $data);
			$this->load->view('admin/tree/sidebar', $data);
			$this->load->view('admin/tree/navbar', $data);
            $this->load->view('admin/artikel/tambah', $data);
            $this->load->view('admin/tree/js', $data);
		}
	}
	public function artikel_edit($id){
		if (isset($_POST['simpan'])) {

		$judul = $this->input->post('judul');
        $kategori = $this->input->post('kategori');
        $konten = $this->input->post('konten');
        $penulis = $this->input->post('penulis');
        $waktu = date("d-m-Y");
        $foto = $_FILES['foto']['name'];
        
        $data = array(
            'judul' => $judul,
            'kategori' => $kategori,
            'konten' => $konten,
            'penulis'	=> $penulis,
            'waktu'		=> $waktu,
        );

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/images';

        $this->load->library('upload', $config);
        //berhasil

        if ($this->upload->do_upload('foto')) {
            $gambarLama = $data['user']['foto'];
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/images/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            echo $this->upload->display_errors();
        }
        
        $where = array(
            'id' => $id,
        );

		$this->db->where('id_artikel',$id);
		$this->db->update('artikel',$data);
		redirect('admin/artikel');
		} else {
			$data['blog'] = $this->db->get('blog');
			$data['kat'] = $this->db->get('kategori');
			$data['art'] = $this->db->query("SELECT * FROM artikel where id_artikel='$id'");
			$this->load->view('admin/tree/head', $data);
			$this->load->view('admin/tree/sidebar', $data);
			$this->load->view('admin/tree/navbar', $data);
            $this->load->view('admin/artikel/edit', $data);
            $this->load->view('admin/tree/js', $data);
		}
	}

	public function artikel_hapus($id){
		$this->db->where('id_artikel',$id);
		$this->db->delete('artikel');
		redirect('admin/artikel');
	}

	

	public function kategori(){
		if (isset($_POST['simpan'])) {
			$data = array (
				'kategori'	=> $this->input->post('kategori')
			);
			$this->db->insert('kategori',$data);
			redirect('admin/kategori');
		}else{
			$data['blog'] = $this->db->get('blog');
			$data['kat'] = $this->db->get('kategori');
			$this->load->view('admin/kategori',$data);
		}
	}

	public function kategori_hapus($id){
		$this->db->where('id',$id);
		$this->db->delete('kategori');
		redirect('admin/kategori');
	}

	public function user(){
		$data['blog'] = $this->db->get('blog');
		$data['art'] = $this->db->query("SELECT * FROM users");
            $this->load->view('admin/tree/head', $data);
			$this->load->view('admin/tree/sidebar', $data);
			$this->load->view('admin/tree/navbar', $data);
            $this->load->view('admin/pengguna/view', $data);
            $this->load->view('admin/tree/js', $data);
	}

	public function user_tambah(){
		if (isset($_POST['simpan'])) {

		$upload_foto = $_FILES['foto'];

            if ($upload_foto) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/images/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }

			$data = [
			'foto'	=> $foto,
			'nama'	=> $this->input->post('nama'),
			'username'=> $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email'	=> $this->input->post('email'),
			'role'	=> $this->input->post('role')
		];

		$this->db->insert('users',$data);
		redirect('admin/user');
		} else {
			$data['blog'] = $this->db->get('blog');
			$this->load->view('admin/tree/head', $data);
			$this->load->view('admin/tree/sidebar', $data);
			$this->load->view('admin/tree/navbar', $data);
            $this->load->view('admin/pengguna/tambah', $data);
            $this->load->view('admin/tree/js', $data);
		}
	}
	public function user_edit($id){
		if (isset($_POST['simpan'])) {
			
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $role = $this->input->post('role');
        $foto = $_FILES['foto']['name'];

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'email'	=> $email,
            'role' => $role,
        );

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/images';

        $this->load->library('upload', $config);
        //berhasil

        if ($this->upload->do_upload('foto')) {
            $gambarLama = $data['user']['foto'];
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/images/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            echo $this->upload->display_errors();
        }

        $where = array(
            'id' => $id,
        );

		$this->db->where('id_user',$id);
		$this->db->update('users',$data);
		redirect('admin/user');
		} else {
			$data['blog'] = $this->db->get('blog');
			$data['user'] = $this->db->query("SELECT * FROM users where id_user='$id'");
			$this->load->view('admin/tree/head', $data);
			$this->load->view('admin/tree/sidebar', $data);
			$this->load->view('admin/tree/navbar', $data);
            $this->load->view('admin/pengguna/edit', $data);
            $this->load->view('admin/tree/js', $data);
		}
	}

	public function user_hapus($id){
		$this->db->where('id_user',$id);
		$this->db->delete('users');
		redirect('admin/user');
	}

	public function profile(){
		if (isset($_POST['simpan'])) {
		
		$nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $foto = $_FILES['foto']['name'];
        
        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'email'	=> $email,
        );

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/images';

        $this->load->library('upload', $config);
        //berhasil

        if ($this->upload->do_upload('foto')) {
            $gambarLama = $data['user']['foto'];
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/images/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            echo $this->upload->display_errors();
        }
        $id = $this->session->userdata('id_user');
        $where = array(
            'id' => $id,
        );

		$this->db->where('id_user',$id);
		$this->db->update('users',$data);
		redirect('admin/profile');
		} else {
			$id = $this->session->userdata('id_user');
			$data['blog'] = $this->db->get('blog');
			$data['user'] = $this->db->query("SELECT * FROM users where id_user='$id'")->row_array();		
			$this->load->view('admin/tree/head', $data);
			$this->load->view('admin/tree/sidebar', $data);
			$this->load->view('admin/tree/navbar', $data);
            $this->load->view('admin/profile/view', $data);
            $this->load->view('admin/tree/js', $data);
		
		}
	}

	public function pengaturan(){
		if (isset($_POST['simpan'])) {
		
        $nama = $this->input->post('nama');
        $tentang = $this->input->post('tentang');
        $disqus = $this->input->post('disqus');
        $logo = $_FILES['logo']['name'];
        $foto = $_FILES['foto']['name'];

        $data = array(
            'nama' => $nama,
            'tentang' => $tentang,
            'disqus' => $disqus,
        );

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/images';

        $this->load->library('upload', $config);
        //berhasil
        if ($this->upload->do_upload('logo')) {
            $gambarLama = $data['user']['logo'];
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/images/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('logo', $gambarBaru);
        } else {
            echo $this->upload->display_errors();
        }

        $where = array(
            'id' => 1,
        );

        if ($this->upload->do_upload('foto')) {
            $gambarLama = $data['user']['foto'];
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/images/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            echo $this->upload->display_errors();
        }

        $where = array(
            'id' => 1,
        );
			$id=1;
		$this->db->where('id',$id);
		$this->db->update('blog',$data);
		redirect('admin/pengaturan');
		} else {
			$data['blog'] = $this->db->query("SELECT * FROM blog where id='1'");
			$this->load->view('admin/tree/head', $data);
			$this->load->view('admin/tree/sidebar', $data);
			$this->load->view('admin/tree/navbar', $data);
            $this->load->view('admin/pengaturan/edit', $data);
            $this->load->view('admin/tree/js', $data);
		}
	}
}
