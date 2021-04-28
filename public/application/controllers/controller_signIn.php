<?php
class controller_signIn extends CI_Controller
{
        public function __construct()
        {
                parent::__construct();
                $this->load->model("signIn_model");
        }
        public function home(){
                $this->load->view('home');
                
    
            }
        public function signIn(){
            $this->load->view('signIn');
            

        }
        public function addUser(){

            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="">', '</div>');
            $this->form_validation->set_rules('username', 'username', 'required|is_unique[lbc_user.username]', array('required' => 'Veuillez choisir un pseudonyme','is_unique' => 'nom deja pris'));
            $this->form_validation->set_rules('password', 'password', 'required|', array('required' => 'Veuillez choisir un mot de passe'));
            $this->form_validation->set_rules('confpass', 'confpass', 'required|matches[password]', array('required' => 'Veuillez choisir un mot de passe','matches' => 'le mot de passe ne correspond pas'));
            $this->form_validation->set_rules('firstname', 'firstname', 'required|', array('required' => 'Veuillez choisir un prénom',));
            $this->form_validation->set_rules('lastname', 'lastname', 'required|', array('required' => 'Veuillez choisir un nom',));
            $this->form_validation->set_rules('phone', 'phone', 'required|', array('required' => 'Veuillez choisir un numéro de téléphone',));
            $this->form_validation->set_rules('mail', 'mail', 'required|', array('required' => 'Veuillez choisir un mail',));
            $this->form_validation->set_rules('address', 'address', 'required|', array('required' => 'Veuillez choisir une adresse',));
            $this->form_validation->set_rules('city', 'city', 'required|', array('required' => 'Veuillez choisir une ville ',));
            $this->form_validation->set_rules('zipcode', 'zipcode', 'required|', array('required' => 'Veuillez choisir un code postal',));


            if ($this->form_validation->run() == FALSE) {
                    $this->load->view('signIn');
            } else {
                    $this->load->view('signIn');
            }
        }
}
