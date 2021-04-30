<?php

class postAd extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model("postAd_Model");
        $this->load->helper('url_helper');
    }

    public function index()
    {
        if (isset($_SESSION["id"])) {
            $data["cat"] = $this->postAd_Model->getAllCategory();
            $data["region"] = $this->postAd_Model->getAllRegion();
            $data["user"] = $this->postAd_Model->getUser($_SESSION["id"]);
            $this->load->view("header");
            $this->load->view('postAd', $data);
            $this->load->view("footer");
        } else {
            $this->load->view("header");
            $this->load->view("postAdConnect");
            $this->load->view("footer");
        };
    }

    public function addAd()
    {
        $this->load->library('form_validation');

        $config['upload_path']  = 'assets/img/imgAd';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|jfif|svg|jif|pdf';
        $config['max_size'] = 20000;
        $config['max_width'] = 15000;
        $config['max_height'] = 15000;
        $this->load->library('upload', $config);



        $this->form_validation->set_error_delimiters('<small class="form-text text-danger">', '</small>');
        $this->form_validation->set_rules('title', 'title', 'required|min_length[5]', array('required' => "Le titre de l'annonce doit etre renseigner","min_length" => "Le nombre de charactère doit etre de 5 minimum"));
        $this->form_validation->set_rules('description', 'description|min_length[10]', 'required', array('required' => "La description de l'annonce doit etre renseigner","min_length" => "Le nombre de charactère doit etre de 10 minimum"));
        $this->form_validation->set_rules('price', 'price', 'required', array('required' => "Le prix de l'annonce doit etre renseigner"));
        $this->form_validation->set_rules('city', 'city', 'required', array('required' => "La ville de l'annonce doit etre renseigner"));
        $this->form_validation->set_rules('phone', 'phone', 'required', array('required' => "Le téléphone de contact doit etre renseigner"));
        $this->form_validation->set_rules('mail', 'mail', 'required', array('required' => "Le mail de contact doit etre renseigner"));
        if ($this->input->post("category") == "0") {
            $this->form_validation->set_message('category', "Veuillez Selectionner une catégotie");
        }
        if ($this->input->post("region") == "0") {
            $this->form_validation->set_message('region', "Veuillez Selectionner une region");
        }


        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            if ($this->input->post("category") == "rien") {
                $this->index();
            }
            if ($this->input->post("region") == "0") {
                $this->index();
            }
            if ($this->upload->do_upload('photoAnnonce') == false) {
                $_SESSION["error"] = array('error' => $this->upload->display_errors());
                $this->index();
                
            } else {
                unset($_SESSION["error"]);
                $picture = $this->upload->data('file_name');
                $ad = array("title" => htmlspecialchars($this->input->post("title")),
                "description" => htmlspecialchars($this->input->post("description")),
                "image" => $picture,
                "price" => (float)$this->input->post("price"),
                "city" => htmlspecialchars($this->input->post("city")),
                "phone" => htmlspecialchars($this->input->post("phone")),
                "mail" => htmlspecialchars($this->input->post("mail")),
                "buy" => 0,
                "id_lbc_category" => htmlspecialchars($this->input->post("category")),
                "id_lbc_user" =>  $_SESSION["id"],
                "id_lbc_region" => htmlspecialchars($this->input->post("region")),
            );
            $this->postAd_Model->setAd($ad);
            $this->load->view("header");
            $this->load->view("adGreat");
            $this->load->view("footer");
            }
        }
    }
}
