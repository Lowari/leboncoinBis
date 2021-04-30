<?php

class Admin_user extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getUserInfoMax(){
        
        $getUserInfoMax = $this->db->get('lbc_user');
        return $getUserInfoMax->result();
    }

}