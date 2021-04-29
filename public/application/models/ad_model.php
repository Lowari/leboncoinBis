<?php 
    class ad_model extends CI_Model{

        public function __construct()
        {
        $this->load->database();
        }

        public function getLastAd(){
            $this->db->join("lbc_category","lbc_category.id = lbc_ad.id_lbc_category","left");
            $this->db->join("lbc_region","lbc_region.id = lbc_ad.id_lbc_region","left");
            $this->db->select('`lbc_ad`.`id` AS `idAd`,`title`,`description`,`image`,`price`,`city`,`phone`,`mail`,`id_lbc_category`,`id_lbc_user`,`id_lbc_region`,`lbc_category`.`name`,`lbc_region`.`name` AS `regionName`,`lbc_region`.`number`');
            $this->db->from('lbc_ad');
            $this->db->limit(6);
            $this->db->order_by('idAd', 'DESC');
            $query = $this->db->get();
            return $query->result();
        }
} 