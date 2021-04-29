<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Footer_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Footer_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('footer');
    }

    public function footer() {
        $data['infoFooter'] = $this->Footer_model->getInfosFooter();
        $this->load->view('header');
        $this->load->view('footer', $data);
    }
}
