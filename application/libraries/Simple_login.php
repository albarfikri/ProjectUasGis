<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        // load data model user
        $this->CI->load->model('user_model');
	}

	// fungsi login
	public function login($username,$password)
	{
		$check = $this->CI->user_model->login($username,$password);
		// jika ada, create session
		if($check){
			$id_user	=	$check->id_user;
			$nama_user		=	$check->nama_user;
			$akses_level	=	$check->akses_level;
			// create session
			$this->CI->session->set_userdata('id_user',$id_user);
			$this->CI->session->set_userdata('nama_user',$nama_user);
			$this->CI->session->set_userdata('username',$username);
			$this->CI->session->set_userdata('akses_level',$akses_level);
			// redirect admin diproteksi
			redirect(base_url('Dashboard'),'refresh');
		}else {
			// kalau tidak ada, login kembali
			$this->CI->session->set_flashdata('warning', 'Username atau password salah');
			redirect(base_url('login'),'refresh');
		}

	}

	// fungsi cek login
	public function cek_login()
	{
		// cek
		if($this->CI->session->userdata('username') == ""){
			$this->CI->session->set_flashdata('warning', 'Anda belum login');
			redirect(base_url('login'),'refresh');

		}
		
	}

	// fungsi logout
	public function logout()
	{
		// membuang session
		$this->CI->session->unset_userdata('id_user');
		$this->CI->session->unset_userdata('nama_user');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('akses_level');
		// setelah session di unset
		$this->CI->session->set_flashdata('sukses', 'Anda berhasil logout');
			redirect(base_url('login'),'refresh');
	}


	

}

/* End of file Simple_login.php */
/* Location: ./application/libraries/Simple_login.php */
