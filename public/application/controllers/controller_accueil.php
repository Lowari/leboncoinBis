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
        $data["test"] = $this->accueil_model->randomAdd();
        // print_r($test);
        // exit;
        $this->load->view('header');
        $this->load->view('accueil' ,$data);
    }

}
