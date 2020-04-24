<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_register extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_sunat');
    }

    public function index(){
        $data['judul'] = 'Register | KLISE';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');
        $this->load->view('v_register');
    }

    public function register()
    {
        $data = [
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "saldo" => 0
        ];
        $regisAs = $this->input->post('regisAs');

        if($regisAs == 'dokter'){
            $data['judul'] = 'Register Dokter | KLISE';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/footer');
            $this->load->view('v_registerDokter', $data);
        }else{
            $this->m_sunat->register($regisAs, $data);
            redirect('/c_index','refresh');
        }
    }

    public function registerDokter()
    {
        $data = [
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "nama" => $this->input->post('nama'),
            "tipeSunat" => $this->input->post('tipeSunat'),
            "alamat" => $this->input->post('alamat'),
            "saldo" => 0
        ];
        $regisAs = $this->input->post('regisAs');
        $this->m_sunat->register($regisAs, $data);
        redirect('/c_index','refresh');
    }

}
?>