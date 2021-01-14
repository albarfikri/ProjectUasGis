<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hotel extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Hotel',
            'isi' => 'Tampilan Hotel'
        );
        $this->load->view('templates/header',$data);
        $this->load->view('home/hotel');
        $this->load->view('templates/footer');
    }
}
