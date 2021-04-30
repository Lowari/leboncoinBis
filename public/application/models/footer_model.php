<?php

class Footer_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getInfosFooter()
    {
        $this->db->select('name');
        $getCategoryFooter = $this->db->get('lbc_category');
        return $getCategoryFooter->result();
        // $query = $this->db->get('lbc_category');
        // return $query->result();
    }
}
