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
        $query = $this->db->get('lbc_category');
        return $query->result();
    }
}
