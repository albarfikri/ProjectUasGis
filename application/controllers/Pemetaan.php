<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemetaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hotelmodel');
    }

    public function index()
    {
        $data = array(
            'title' => 'Pemetaan',
            'hotel' => $this->hotelmodel->tampil(),
            'isi' => 'Tampilan Pemetaan'

        );
        $this->load->view('templates/header', $data, False);
        $this->load->view('pemetaan/pemetaan');
        $this->load->view('templates/footer');
    }
}
