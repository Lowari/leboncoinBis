<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin_model");
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['description_list'] = $this->admin_model->getUserInfoMin();

        $this->load->view('header');
        $this->load->view('admin', $data);
        $this->load->view('footer');
    }

    public function deleteUser()
    {   if(isset($_SESSION["lvl"]) && $_SESSION["lvl"] == 1 && isset($_POST["deleteId"])){
            $id = $_POST["deleteId"];
        $this->admin_model->deleteUse($id);
        $this->index();
    }else{

        }
    }
  
}
