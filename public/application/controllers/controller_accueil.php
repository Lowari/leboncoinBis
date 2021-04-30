<?php
class controller_accueil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("accueil_model");
    }

    public function accueil()
    {
        $this->allCategory();
        $this->allRegion();
        $data["lastestAd"] = $this->accueil_model->getLastAd();
        $data["test"] = $this->accueil_model->randomAdd();
        $this->load->view('header');
        $this->load->view('accueil' ,$data);
        $this->load->view("footer");
    }

    public function allCategory(){
        $_SESSION["category"] = $this->accueil_model->getAllCategory();
    }

    public function allRegion(){
        $_SESSION["region"] = $this->accueil_model->getAllRegion();
    }
    
    
    public function countRow()
    {
        
        $this->load->view('header');
        $this->load->view('accueil');
    }
}