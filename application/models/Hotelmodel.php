<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hotelmodel extends CI_Model
{

    public function simpan($data)
    {
        $this->db->insert('hotel', $data);
    }

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('hotel');
        $this->db->order_by('id_hotel', 'desc');
        return $this->db->get()->result();
    }

    public function detail($id_hotel)
    {
        $this->db->select('*');
        $this->db->from('hotel');
        $this->db->where('id_hotel',$id_hotel);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_hotel',$data['id_hotel']);
        $this->db->update('hotel', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_hotel',$data['id_hotel']);
        $this->db->delete('hotel', $data);
    }
} 
