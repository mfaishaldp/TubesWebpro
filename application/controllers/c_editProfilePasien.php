<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_editProfilePasien extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_sunat');
    }

    public function index(){
        $data['judul'] = 'Edit Profile | KLISE';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');

        $username = $this->session->userdata('username');
        $data['profile'] = $this->m_sunat->getPasien($username)->row();
        $this->load->view('v_editProfilePasien', $data);
    }

    
    public function editProfile(){
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
        ];
        $username = $this->session->userdata('username');
        $loginAs = $this->session->userdata('loginAs');
        $this->m_sunat->editProfile($username, $data, $loginAs);

        redirect('/c_profile/profilePasien','refresh');
    }
}
?>