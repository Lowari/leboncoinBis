<?php 
    class checkProfile_model extends CI_Model{

        public function __construct()
        {
        $this->load->database();
        }

       public function getUserInfo($data){
        $show = $this->db->get_where('lbc_user', $data);
        return $show->result();
       }
} 