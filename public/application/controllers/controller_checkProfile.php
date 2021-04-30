<?php
class controller_checkProfile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("checkProfile_model");
    }
    public function checkProfile(){
        $id = array("id" => $_SESSION["id"]);
        $data["getUserInfo"] = $this->checkProfile_model->getUserInfo($id);
        $this->load->view('header');
        $this->load->view('checkProfile',$data);
        $this->load->view("footer");
    }
}
