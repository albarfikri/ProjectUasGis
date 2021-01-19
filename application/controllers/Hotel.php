<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hotel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hotelmodel');
    }

    public function index()
    {
        $data = array(
            'title' => 'Table Hotel',
            'hotel' => $this->hotelmodel->tampil(),
            'isi' => 'Tampilan Hotel'
        );
        $this->load->view('templates/header', $data);
        $this->load->view('hotel/hotel', $data);
        $this->load->view('templates/footer');
    }

    public function input()
    {
        $this->form_validation->set_rules('nama_hotel', '<strong>Nama hotel', 'required', array(
            'required' => '%s harus diisi</strong>'
        ));
        $this->form_validation->set_rules('alamat', '<strong>Alamat hotel', 'required', array(
            'required' => '%s harus diisi</strong>'
        ));
        $this->form_validation->set_rules('status', '<strong>Status hotel', 'required', array(
            'required' => '%s harus diisi</strong>'
        ));
        $this->form_validation->set_rules('bintang', '<strong>Bintang hotel', 'required', array(
            'required' => '%s harus diisi</strong>'
        ));
        $this->form_validation->set_rules('lat', '<strong>Latitude hotel', 'required', array(
            'required' => '%s harus diisi</strong>'
        ));
        $this->form_validation->set_rules('lon', '<strong>Longitude hotel', 'required', array(
            'required' => '%s harus diisi</strong>'
        ));
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Input Hotel',
                'isi' => 'Tampilan Input Hotel'
            );
            $this->load->view('templates/header', $data);
            $this->load->view('inputhotel/inputhotel',$data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'nama_hotel' => $this->input->post('nama_hotel'),
                'alamat' => $this->input->post('alamat'),
                'status' => $this->input->post('status'),
                'bintang' => $this->input->post('bintang'),
                'lat' => $this->input->post('lat'),
                'lon' => $this->input->post('lon'),
                'gambar' => $this->input->post('gambar'),
                'ket' => $this->input->post('ket',)
            );

            $this->hotelmodel->simpan($data);
            $this->session->set_flashdata('pesan', 'Data berhasil disimpan');
            redirect('hotel/input');
        }
    }

    public function edit($id_hotel)
    {
        $this->form_validation->set_rules('nama_hotel', '<strong>Nama hotel', 'required', array(
            'required' => '%s harus diisi</strong>'
        ));
        $this->form_validation->set_rules('alamat', '<strong>Alamat hotel', 'required', array(
            'required' => '%s harus diisi</strong>'
        ));
        $this->form_validation->set_rules('status', '<strong>Status hotel', 'required', array(
            'required' => '%s harus diisi</strong>'
        ));
        $this->form_validation->set_rules('bintang', '<strong>Bintang hotel', 'required', array(
            'required' => '%s harus diisi</strong>'
        ));
        $this->form_validation->set_rules('lat', '<strong>Latitude hotel', 'required', array(
            'required' => '%s harus diisi</strong>'
        ));
        $this->form_validation->set_rules('lon', '<strong>Longitude hotel', 'required', array(
            'required' => '%s harus diisi</strong>'
        ));
      

        if ($this->form_validation->run() == FALSE) {
            $data = array( 
                'title' => 'Edit Hotel',
                'hotel' => $this->hotelmodel->detail($id_hotel),
                'isi' => 'Tampilan Edit Hotel'
            );
            $this->load->view('templates/header',$data);
            $this->load->view('inputhotel/edithotel', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'id_hotel' =>$id_hotel,
                'nama_hotel' => $this->input->post('nama_hotel'),
                'alamat' => $this->input->post('alamat'),
                'status' => $this->input->post('status'),
                'bintang' => $this->input->post('bintang'),
                'lat' => $this->input->post('lat'),
                'lon' => $this->input->post('lon'),
                'gambar' => $this->input->post('gambar'),
                'ket' => $this->input->post('ket',)
            );

            $this->hotelmodel->edit($data);
            $this->session->set_flashdata('pesan', 'Data berhasil di Edit');
            redirect('hotel');
        }
    }

    public function delete($id_hotel)
    {
        $data = array('id_hotel'=>$id_hotel);
        $this->hotelmodel->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil di Hapus');
        redirect('hotel');
    }
}