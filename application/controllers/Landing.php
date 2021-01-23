<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hotelmodel');
    }

    public function index()
    {
        $data = array(
            'title' => 'Landing Page',
            'hotel' => $this->hotelmodel->tampil(),
            'isi' => 'Tampilan Landing Page'

        );
        $this->load->view('landing/header', $data, False);
        $this->load->view('landing/home');
        $this->load->view('landing/footer');
    }
}
