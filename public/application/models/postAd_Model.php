<?php 
    class postAd_model extends CI_Model{

        public function __construct()
        {
        $this->load->database();
        }

        public function getAllCategory(){
            $cat = $this->db->get("lbc_category");
            return $cat->result();
        }

        public function getAllRegion(){
            $region = $this->db->get("lbc_region");
            return $region->result();
        }

        public function setAd($ad){
            $this->db->insert("lbc_ad",$ad);
        }

        public function getUser($id){
            $user = $this->db->get_where("lbc_user",array("id"=>$id));
            return $user->result();
        }
}