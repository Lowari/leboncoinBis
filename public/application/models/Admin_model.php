<?php

class Admin_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getUserInfoMin(){
        
        $this->db->select('id, username, lastname, firstname, mail');
        $getUserInfoMin = $this->db->get('lbc_user');
        return $getUserInfoMin->result();
    }

    public function deleteUse($id) {
        $this->db->delete('lbc_user', array('id' => $id));
    }
}
