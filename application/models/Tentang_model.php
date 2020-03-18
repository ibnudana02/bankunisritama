<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_model extends CI_Model
{
    public function get_company()
    {
        $this->db->select('*');
        $this->db->from('tentang');
        return $this->db->get()->result_array();
    }
}
