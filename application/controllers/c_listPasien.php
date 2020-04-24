<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_listPasien extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_sunat');
    }

    public function index(){
        $data['judul'] = 'List Pasien | KLISE';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');

        $username = $this->session->userdata('username');

        $data['jmlOrder'] = $this->m_sunat->getListPasien($username)->num_rows();
        $data['order'] = $this->m_sunat->getListPasien($username)->result();
        $this->load->view('v_listPasien', $data);
    }
}
?>