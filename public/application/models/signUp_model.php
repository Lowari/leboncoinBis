<?php
class signUp_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function addUser($data)
    {
        $this->db->insert('lbc_user', $data);
    }
}
