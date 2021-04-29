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
        public function checkConnect()
        {

                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
                $this->form_validation->set_rules('username', 'username', 'required', array('required' => 'Veuillez choisir un pseudonyme', 'is_unique' => 'pseudonyme deja pris'));
                $this->form_validation->set_rules('password', 'password', 'required|is_unique[lbc_user.username]', array('required' => 'Veuillez choisir un pseudonyme', 'is_unique' => 'pseudonyme deja pris'));

                if ($this->form_validation->run() == FALSE) {
                        $this->signIn();
                } else {
                        $username = htmlspecialchars($_POST["username"]);
                        $password = htmlspecialchars($_POST["password"]);
                        $this->signUp_model->addUser($infoUser);
                        $this->home();
                }
        }
}
