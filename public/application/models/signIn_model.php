<?php
class signIn_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
   
    public function testConnect($data){
        $show = $this->db->get_where('lbc_user', $data);
        return $show->result();
    }
    public function getUser($data){
        $show = $this->db->get_where('lbc_user', $data);
        return $show->result();
    }
}
