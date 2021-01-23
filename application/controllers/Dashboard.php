<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // proteksi halaman
        $this->simple_login->cek_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'isi' => 'Tampilan Dashboard'

        );
        $this->load->view('templates/header', $data, False);
        $this->load->view('dashboard/dashboard');
        $this->load->view('templates/footer');
    }
}
