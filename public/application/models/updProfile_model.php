<?php 
    class updProfile_model extends CI_Model{

        public function __construct()
        {
        $this->load->database();
        }

       public function getUserInfo($data){
        $show = $this->db->get_where('lbc_user', $data);
        return $show->result();
       }
       public function updUser($data,$id)
    {
        $this->db->where("id",$id);
        $this->db->update('lbc_user', $data);
    }
} 