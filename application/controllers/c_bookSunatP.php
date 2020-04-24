<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class c_bookSunatP extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_sunat');
    }

    public function index() {
        $data['judul'] = 'Book Tipe Sunat | KLISE';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');
        $data['tipeSunat'] = $this->m_sunat->getTipeSunat()->result();
        $this->load->view('v_bookSunatP1',$data);
    }

    public function pilihDokter()
    {
        $this->session->set_userdata('pilSunat', $this->input->post('pilSunat'));

        $data['judul'] = 'Book Dokter Sunat | KLISE';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');

        $data['listDokter'] = $this->m_sunat->getDokterByTipe($this->session->userdata('pilSunat'))->result();
        $this->load->view('v_bookSunatP2',$data);
    }

    // public function showHarga()
    // {

    //     $data['judul'] = 'Daftar Harga Sunat | KLISE';
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/footer');

    //     $data['listHarga'] = $this->m_sunat->getHargaByTipe($this->session->userdata('pilSunat'))->result();
    //     $this->load->view('v_bookSunatP3',$data);
    // }


    public function pilTanggal()
    {
        $this->session->set_userdata('uDokter', $this->input->post('pilDokter'));

        $data['judul'] = 'Daftar Tanggal Sunat | KLISE';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');
        $this->load->view('v_bookSunatP3');
    }

    public function reviewBook()
    {
        $this->session->set_userdata('tanggal', $this->input->post('tanggal'));

        $data = [
            "tipeSunat" => $this->session->userdata('pilSunat'),
            "dokter" => $this->m_sunat->getDokter($this->session->userdata('uDokter'))->row(),
            "tglSunat" => $this->session->userdata('tanggal')
        ];  

        $data['profile'] = $this->m_sunat->getPasien($this->session->userdata('username'))->row();
        $data['harga'] = $this->m_sunat->getHargaByTipe($this->session->userdata('pilSunat'))->row();
        $data['judul'] = 'Review Booking Sunat | KLISE';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');
        $this->load->view('v_bookSunatP4', $data);
    }
    
    public function inputOrder()
    {
        $tagihan = $this->input->post('tagihan');
        $saldo = $this->input->post('saldo');

        if($saldo >= $tagihan){
            $data = [
                "uPasien" => $this->session->userdata('username'),
                "uDokter" => $this->session->userdata('uDokter'),
                "tglSunat" => $this->session->userdata('tanggal'),
                "status" => 'belum selesai'
            ];  
            $this->m_sunat->tarikSaldo($this->session->userdata('username'), $tagihan, $saldo, $this->session->userdata('loginAs'));
            
            $saldoDokter = $this->m_sunat->getDokter($this->session->userdata('uDokter'))->row()->saldo;
            $this->m_sunat->topUp($this->session->userdata('uDokter'), $tagihan, $saldoDokter, 'dokter');

            $this->m_sunat->inputOrder($data);
            $this->session->set_userdata('uDokter', '');
            $this->session->set_userdata('tanngal', '');

            redirect('/c_listbooksunat','refresh');
        }else{
            $data = [
                "tipeSunat" => $this->session->userdata('pilSunat'),
                "dokter" => $this->m_sunat->getDokter($this->session->userdata('uDokter'))->row(),
                "tglSunat" => $this->session->userdata('tanggal')
            ];  
    
            $data['profile'] = $this->m_sunat->getPasien($this->session->userdata('username'))->row();
            $data['harga'] = $this->m_sunat->getHargaByTipe($this->session->userdata('pilSunat'))->row();
            $data['error_message'] = 'saldo kurang';
            $data['judul'] = 'Review Booking Sunat | KLISE';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/footer');
            $this->load->view('v_bookSunatP4', $data);
        }
    }

    public function topUp()
    {
        $saldo = $this->input->post('saldo');
        $jumlah = $this->input->post('jumlah');
        $username = $this->session->userdata('username');
        $loginAs = $this->session->userdata('loginAs');

        $this->m_sunat->topUp($username, $jumlah, $saldo, $loginAs);
        
        $data = [
            "tipeSunat" => $this->session->userdata('pilSunat'),
            "dokter" => $this->m_sunat->getDokter($this->session->userdata('uDokter'))->row(),
            "tglSunat" => $this->session->userdata('tanggal')
        ];  

        $data['profile'] = $this->m_sunat->getPasien($this->session->userdata('username'))->row();
        $data['harga'] = $this->m_sunat->getHargaByTipe($this->session->userdata('pilSunat'))->row();
        $data['judul'] = 'Review Booking Sunat | KLISE';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');
        $this->load->view('v_bookSunatP4', $data);
    }


}


?>