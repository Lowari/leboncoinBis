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

        public function getAd($data){
            $this->db->join("lbc_category","lbc_category.id = lbc_ad.id_lbc_category","left");
            $this->db->join("lbc_region","lbc_region.id = lbc_ad.id_lbc_region","left");
            $this->db->select('`lbc_ad`.`id` AS `idAd`,`title`,`description`,`image`,`price`,`city`,`phone`,`mail`,`id_lbc_category`,`id_lbc_user`,`id_lbc_region`,`lbc_category`.`name`,`lbc_region`.`name` AS `regionName`,`lbc_region`.`number`');
            $this->db->from('lbc_ad');
            if($data["category"] != "rien"){
                $this->db->where("lbc_category.id",$data["category"]);
            }
            if($data["region"] != "rien"){
                $this->db->where("lbc_region.number",$data["region"]);
            }
            if($data["search"] != ""){
                $where = "(`lbc_ad`.`description` LIKE '%".$data["search"]."%' ESCAPE '!' OR `lbc_ad`.`title` LIKE '%".$data["search"]."%' ESCAPE '!')";
                $this->db->where($where);
            }
            if($data["priceMin"] != "" && $data["priceMax"] != ""){
                $where = '`lbc_ad`.`price` >= '.$data["priceMin"]. ' AND  `lbc_ad`.`price` <= '.$data["priceMax"];
                $this->db->where($where);
            }
            if($data["priceMin"] != "" && $data["priceMax"] == ""){
                $where = "`lbc_ad`.`price` >= ".$data["priceMin"];
                $this->db->where($where);
            }
            if($data["priceMin"] == "" && $data["priceMax"] != ""){
                $where = "`lbc_ad`.`price` <= ".$data["priceMax"];
                $this->db->where($where);
            }
            $this->db->order_by('idAd', 'DESC');
            $query = $this->db->get();
            return $query->result();
        }
} 