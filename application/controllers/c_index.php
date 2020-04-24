<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_index extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_sunat');
    }

    public function index(){
        $data['judul'] = 'Welcome | KLISE';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');
        $this->load->view('v_index');
    }
}
?>