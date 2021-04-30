<?php

class Pagenation extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //load pagination library
        $this->load->library('Pagination_bootstrap');

        //load data from db
        $sql = $this->db->get('lbc_ad');

        //set number of rows per page
        $this->pagination_bootstrap->offset(10);

        //get number of pages
        $data['results'] = $this->pagination_bootstrap->config('/pagenation/index', $sql);

        $this->load->view('pagenation', $data);
    }
}
