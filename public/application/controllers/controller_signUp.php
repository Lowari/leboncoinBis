<?php
class controller_signUp extends CI_Controller
{
        public function __construct()
        {
                parent::__construct();
                $this->load->model("signUp_model");
        }
        public function home()
        {
                $this->load->view('header');
                $this->load->view('home');
                $this->load->view('footer');
        }
        public function signUp()
        {
                $this->load->view('header');
                $this->load->view('signUp');
                $this->load->view('footer');
        }
        public function addUser()
        {

                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
                $this->form_validation->set_rules('username', 'username', 'required|is_unique[lbc_user.username]', array('required' => 'Veuillez choisir un pseudonyme', 'is_unique' => 'pseudonyme deja pris'));
                $this->form_validation->set_rules('password', 'password', 'required', array('required' => 'Veuillez choisir un mot de passe'));
                $this->form_validation->set_rules('confpass', 'confpass', 'required|matches[password]', array('required' => 'Veuillez choisir un mot de passe', 'matches' => 'le mot de passe ne correspond pas'));
                $this->form_validation->set_rules('firstname', 'firstname', 'required', array('required' => 'Veuillez choisir un prénom',));
                $this->form_validation->set_rules('lastname', 'lastname', 'required', array('required' => 'Veuillez choisir un nom',));
                $this->form_validation->set_rules('phone', 'phone', 'required', array('required' => 'Veuillez choisir un numéro de téléphone',));
                $this->form_validation->set_rules('mail', 'mail', 'required|valid_email|is_unique[lbc_user.mail]', array('required' => 'Veuillez choisir un mail','valid_email'=>'addresse mail non valide','is_unique'=>'mail deja pris'));
                $this->form_validation->set_rules('address', 'address', 'required', array('required' => 'Veuillez choisir une adresse',));
                $this->form_validation->set_rules('city', 'city', 'required', array('required' => 'Veuillez choisir une ville ',));
                $this->form_validation->set_rules('zipCode', 'zipCode', 'required', array('required' => 'Veuillez choisir un code postal',));


                if ($this->form_validation->run() == FALSE) {
                        $this->signUp();
                } else {
                        $username = htmlspecialchars($_POST["username"]);
                        $password = htmlspecialchars($_POST["password"]);
                        $firstname = htmlspecialchars($_POST["firstname"]);
                        $lastname = htmlspecialchars($_POST["lastname"]);
                        $phone = htmlspecialchars($_POST["phone"]);
                        $mail = htmlspecialchars($_POST["mail"]);
                        $address = htmlspecialchars($_POST["address"]);
                        $city = htmlspecialchars($_POST["city"]);
                        $zipcode = htmlspecialchars($_POST["zipCode"]);
                        $lvl = 2 ;

                        $infoUser = array("username"=>$username,"password"=>$password,"firstname"=>$firstname,"lastname"=>$lastname,"phone"=>$phone,"mail"=>$mail,"adress"=>$address,"city"=>$city,"zipCode"=>$zipcode, "id_lbc_lvlUser"=>$lvl);
                        $this->signUp_model->addUser($infoUser);
                        $this->home();
                }
        }
}
