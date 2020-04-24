<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_sunat');
    }

    public function index(){
        $data['judul'] = 'Login | KLISE';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');
        $this->load->view('v_login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $loginAs = $this->input->post('loginAs');
        if($this->m_sunat->login($username, $password, $loginAs)){
            $this->session->set_userdata('username', $this->input->post('username'));
            $this->session->set_userdata('password', $this->input->post('password'));
            $this->session->set_userdata('loginAs', $this->input->post('loginAs'));
            if($loginAs == 'dokter'){
                redirect('/c_homeDokter','refresh');
            }else{
                redirect('/c_homePasien','refresh');
            }
        }else{
            $data['error_message'] = "invalid username/password";
            $data['judul'] = 'Halaman Login';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/footer');
            $this->load->view('v_login', $data);
            
        }
    }
}
?>