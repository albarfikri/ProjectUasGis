<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'isi' => 'Tampilan Dashboard'

        );
        $this->load->view('templates/header', $data, False);
        $this->load->view('home/dashboard');
        $this->load->view('templates/footer');
    }
}
