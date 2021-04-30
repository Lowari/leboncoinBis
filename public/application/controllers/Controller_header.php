<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_header extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("header_model");
        $this->load->helper('url_helper');
    }

	public function index()
	{
		$this->load->view('header');
	}
    public function home()
	{
        $this->load->view('header');
        $this->load->view('home');
	}
    public function disconnect()
	{
        $this->load->helper('url');
        session_destroy();
        redirect(base_url()."accueil");
	}
}

