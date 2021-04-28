<?php
class controller_signIn extends CI_Controller
{
        public function __construct()
        {
                parent::__construct();
                $this->load->model("signIn_model");
        }
        
        public function signIn()
        {
                $this->load->view('header');
                $this->load->view('signIn');
                $this->load->view('footer');
        }
        
}
