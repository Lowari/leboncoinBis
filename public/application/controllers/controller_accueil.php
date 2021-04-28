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
        $this->load->view('accueil');
    }
}
