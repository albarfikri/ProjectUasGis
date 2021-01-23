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
            'b1' => $this->hotelmodel->b1(),
            'b2' => $this->hotelmodel->b2(),
            'b3' => $this->hotelmodel->b3(),
            'b4' => $this->hotelmodel->b4(),
            'b5' => $this->hotelmodel->b5(),
            'isi' => 'Tampilan Landing Page'

        );
        $this->load->view('landing/header', $data, False);
        $this->load->view('landing/home');
        $this->load->view('landing/footer');
    }
}
