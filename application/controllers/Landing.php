<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Landing Page',
            'isi' => 'Tampilan Landing Page'

        );
        $this->load->view('landing/header', $data, False);
        $this->load->view('landing/home');
        $this->load->view('landing/footer');
    }

    public function about()
    {
        $data = array(
            'title' => 'Landing Page',
            'isi' => 'Tampilan Landing Page'

        );
        $this->load->view('landing/header', $data, False);
        $this->load->view('landing/about');
        $this->load->view('landing/footer');
    }
}
