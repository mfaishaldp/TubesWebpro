<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_profile extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_sunat');
    }

    public function profilePasien(){
        $data['judul'] = 'Profile | KLISE';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');

        $username = $this->session->userdata('username');
        $data['profile'] = $this->m_sunat->getPasien($username)->row();
        $this->load->view('v_profilePasien', $data);
    }

    
    public function profileDokter(){
        $data['judul'] = 'Profile | KLISE';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');

        $username = $this->session->userdata('username');
        $data['profile'] = $this->m_sunat->getDokter($username)->row();
        $this->load->view('v_profileDokter', $data);
    }

    public function topUp()
    {
        $saldo = $this->input->post('saldo');
        $jumlah = $this->input->post('jumlah');
        $username = $this->session->userdata('username');
        $loginAs = $this->session->userdata('loginAs');

        $this->m_sunat->topUp($username, $jumlah, $saldo, $loginAs);
        
        if($this->session->userdata('loginAs') == 'pasien'){
            redirect('/c_profile/profilePasien','refresh');
        }else{
            redirect('/c_profile/profileDokter','refresh');
        }
        
        
    }

    public function tarikSaldo()
    {
        $saldo = $this->input->post('saldo');
        $jumlah = $this->input->post('jumlah');

        if($saldo >= $jumlah){
            $username = $this->session->userdata('username');
            $loginAs = $this->session->userdata('loginAs');

            $this->m_sunat->tarikSaldo($username, $jumlah, $saldo, $loginAs);   
        }
        if($this->session->userdata('loginAs') == 'pasien'){
            redirect('/c_profile/profilePasien','refresh');
        }else{
            redirect('/c_profile/profileDokter','refresh');
        }
    }

    public function DeleteAkun()
    {
        $username = $this->session->userdata('username');
        $loginAs = $this->session->userdata('loginAs');
        if($loginAs == 'dokter'){
            $jmlOrder = $this->m_sunat->getListPasien($username)->num_rows();
        }else{
            $jmlOrder = $this->m_sunat->getListBookSunatUndone($username)->num_rows();
        }

        if($jmlOrder == 0){
            $this->m_sunat->deleteAccount($username, $loginAs);
            redirect('/c_index','refresh');
        }else{
            $data['error_message'] = 'Anda mempunyai order yang belum selesai.';
            if($loginAs == 'dokter'){
                $data['judul'] = 'Profile | KLISE';
                $this->load->view('templates/header', $data);
                $this->load->view('templates/footer');

                $username = $this->session->userdata('username');
                $data['profile'] = $this->m_sunat->getDokter($username)->row();
                $this->load->view('v_profileDokter', $data);
            }else{
                $data['judul'] = 'Profile | KLISE';
                $this->load->view('templates/header', $data);
                $this->load->view('templates/footer');

                $username = $this->session->userdata('username');
                $data['profile'] = $this->m_sunat->getPasien($username)->row();
                $this->load->view('v_profilePasien', $data);
            }
        }
    }

}
?>