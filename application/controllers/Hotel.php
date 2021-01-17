<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hotel extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('hotelmodel');
    }

    public function index()
    {
        $data = array(
            'title' => 'Hotel',
            'isi' => 'Tampilan Hotel'
        );
        $this->load->view('templates/header', $data);
        $this->load->view('hotel/hotel');
        $this->load->view('templates/footer');
    }

    public function input()
    {
        $this->form_validation->set_rules('nama_hotel', 'Nama hotel', 'required', array(
            'required'=>'%s harus diisi'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat hotel', 'required', array(
            'required'=>'%s harus diisi'
        ));
        $this->form_validation->set_rules('status', 'Status hotel', 'required', array(
            'required'=>'%s harus diisi'
        ));
        $this->form_validation->set_rules('lat', 'Latitude hotel', 'required', array(
            'required'=>'%s harus diisi'
        ));
        $this->form_validation->set_rules('lon', 'Longitude hotel', 'required', array(
            'required'=>'%s harus diisi'
        ));
        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Input Hotel',
                'isi' => 'Tampilan Hotel'
            );
            $this->load->view('templates/header', $data);
            $this->load->view('inputhotel/inputhotel');
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'nama_hotel' => $this->input->post('nama_hotel'),
                'alamat' => $this->input->post('alamat'),
                'status' => $this->input->post('status'),
                'lat' => $this->input->post('lat'),
                'lon' => $this->input->post('lon'),
                'ket' => $this->input->post('ket',)
            );

            $this->hotelmodel->simpan($data);
            $this->session->set_flashdata('pesan','Data berhasil disimpan');
            redirect('hotel/input');
        }
    }
}
