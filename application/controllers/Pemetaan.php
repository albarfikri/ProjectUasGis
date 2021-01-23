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
            'b1' => $this->hotelmodel->b1(),
            'b2' => $this->hotelmodel->b2(),
            'b3' => $this->hotelmodel->b3(),
            'b4' => $this->hotelmodel->b4(),
            'b5' => $this->hotelmodel->b5(),
            'isi' => 'Tampilan Pemetaan'

        );
        $this->load->view('templates/header', $data, False);
        $this->load->view('pemetaan/pemetaan');
        $this->load->view('templates/footer');
    }
    

}


