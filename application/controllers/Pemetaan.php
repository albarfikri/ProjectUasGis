<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemetaan extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Pemetaan',
            'isi' => 'Tampilan Pemetaan'

        );
        $this->load->view('templates/header', $data, False);
        $this->load->view('pemetaan/pemetaan');
        $this->load->view('templates/footer');
    }
}
