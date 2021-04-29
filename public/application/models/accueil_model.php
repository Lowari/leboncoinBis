<?php
class Accueil_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }  

    public function randomAdd(){
        $this->db->select('*');
        $this->db->from('lbc_ad');
        $this->db->order_by('rand()');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query->result_array();
        }
}
