<?php 

class postAd extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model("postAd_Model");
		$this->load->helper('url_helper');
	}

    public function index(){
        if(isset($_SESSION["id"])){
            //$this->postAd_Model->getUser($_SESSION['id']);
            $this->load->view('postAd');
        }else{
            $this->load->view("postAdConnect");
        };
        
    }
}