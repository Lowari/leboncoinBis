<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_user_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Footer_model');
        $this->load->model('checkProfile_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('user_info');
        $this->load->view('footer');
    }
    public function checkProfile(){
        $id = array("id" => $_SESSION["id"]);
        $data["getUserInfo"] = $this->checkProfile_model->getUserInfo($id);
        $this->load->view('header');
        $this->load->view('user_info',$data);
        $this->load->view("footer");
    }
}
