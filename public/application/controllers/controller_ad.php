<?php
class controller_ad extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ad_model");
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data["lastestAd"] = $this->ad_model->getLastAd();
       $this->load->view("header");
        $this->load->view("ad",$data);
        $this->load->view("footer");
    }

    public function searchAd(){
        $data["lastestAd"] = $this->ad_model->getAd($this->input->post());
        $this->load->view("header");
        $this->load->view("ad",$data);
        $this->load->view("footer");
    }
} 