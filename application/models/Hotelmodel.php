<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hotelmodel extends CI_Model
{

    public function simpan($data)
    {
        $this->db->insert('hotel', $data);
    }
}
