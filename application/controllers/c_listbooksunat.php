
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_listbooksunat extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('m_sunat');
    }

    public function index(){
        $data['judul'] = 'List Book Sunat | KLISE';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');

        $username= $this->session->userdata('username');
        // $data['jmlOrder'] = $this->m_sunat->getListbooksunat($this->session->userdata('username'))->num_rows();
        $data['order'] = $this->m_sunat->getListbooksunat($username)->result();
        $this->load->view('v_listbooksunat', $data);
    }

    
    public function deletePesanan(){
        
        $idOrder = $this->input->post('idOrder');
        $this->m_sunat->deletePesanan($idOrder);
        redirect('/c_listbooksunat','refresh');
        
    }

    public function selesaiPesanan() {

        $idOrder = $this->input->post('idOrder');
        $this->m_sunat->selesaiPesanan($idOrder);
        redirect('/c_listbooksunat','refresh');
    }
}
?>