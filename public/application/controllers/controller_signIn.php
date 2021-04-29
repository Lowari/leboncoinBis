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
                unset($_SESSION["errorLogin"]);
                unset($_SESSION["errorPass"]);
        }
        public function checkConnect()
        {
                unset($_SESSION["errorLogin"]);
                unset($_SESSION["errorPass"]);
                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
                $this->form_validation->set_rules('username', 'username', 'required', array('required' => 'Veuillez choisir un pseudonyme',));
                $this->form_validation->set_rules('password', 'password', 'required', array('required' => 'Veuillez choisir un mot de passe',));

                $infoUser = array('username' => $this->input->post('username'));
                $login = $this->signIn_model->testConnect($infoUser);

                if ($this->form_validation->run() == FALSE) {
                        unset($_SESSION["errorLogin"]);
                        unset($_SESSION["errorPass"]);
                        $this->signIn();
                } else {
                        if (sizeof($login) == 0) {

                                $_SESSION["errorLogin"] = "Ce pseudonyme n'existe pas";
                                $this->signIn();
                        } else {
                                $infoUser = array('username' => $this->input->post('username'), 'password' => $this->input->post('password'));
                                $password = $this->signIn_model->testConnect($infoUser);

                                if (sizeof($password) == 0) {
                                        
                                        $_SESSION["errorPass"] = "Ce mot de passe est incorrecte";
                                        $this->signIn();
                                } else {
                                        $userId = $this->signIn_model->getUser($infoUser);
                                        unset($_SESSION["errorLogin"]);
                                        unset($_SESSION["errorPass"]);
                                        $_SESSION["id"] = $userId[0]->id;
                                        $this->load->view('header');
                                        $this->load->view('accueil');
                                }
                        }
                }
        }
}
