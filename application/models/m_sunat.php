<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_sunat extends CI_model{
    public function register($regisAs, $data){
        $cek = $this->db->where('username', $data['username']);
        $cek = $this->db->get($regisAs);
        
        if($cek->num_rows() == 0){
            $this->db->insert($regisAs, $data);
            return true;
        }else{
            return false;
        }
        
        
    }

    public function login($username, $password, $loginAs)
    {
        $query = $this->db->where('username', $username);
        $query = $this->db->where('password', $password);
        $query = $this->db->get($loginAs);
        if($query->num_rows() == 1){
            return true;
        }else{
            return false;
        }
    }
    
    public function getPasien($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('pasien');
    }

    public function getDokter($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('dokter');
    }

    public function topUp($username, $jumlah, $saldo, $loginAs)
    {
        $topUp = $saldo + $jumlah;
        $this->db->set('saldo', $topUp);
        $this->db->where('username', $username);
        $this->db->update($loginAs);
    }

    public function tarikSaldo($username, $jumlah, $saldo, $loginAs)
    {
        $tarik = $saldo - $jumlah;
        $this->db->set('saldo', $tarik);
        $this->db->where('username', $username);
        $this->db->update($loginAs);
    }

    public function getTipeSunat()
    {
        return $this->db->get('tipeSunat');
    }
    
    public function editProfile($username, $data, $loginAs)
    {
        $this->db->set($data);
        $this->db->where('username', $username);
        return $this->db->update($loginAs);
    }

    public function deleteAccount($username, $loginAs)
    {
        $this->db->where('username', $username);
        return $this->db->delete($loginAs);
    }
    
    public function getListPasien($uDokter)
    {
        $this->db->select('ordersunat.idOrder, pasien.nama, tglSunat, dokter.tipeSunat, tipesunat.harga, ordersunat.status');
        $this->db->from('ordersunat');
        $this->db->join('dokter','dokter.username = ordersunat.uDokter');
        $this->db->join('pasien', 'pasien.username = ordersunat.uPasien');
        $this->db->join('tipesunat','tipesunat.tipeSunat = dokter.tipeSunat');
        $this->db->where('uDokter', $uDokter);
        $this->db->where('status', 'belum selesai');
        return $this->db->get();
    }

    public function getDokterByTipe($tipeSunat){
        $this->db->where('tipeSunat', $tipeSunat);
        return $this->db->get('dokter');

    }

    public function getHargaByTipe($tipeSunat){
        $this->db->where('tipeSunat', $tipeSunat);
        return $this->db->get('tipesunat');
    }

    public function getListbooksunat($uPasien)
    {
        // $this->db->where('uPasien', $uPasien);
        // return $this->db->get('ordersunat');
         
        $this->db->select('idOrder, dokter.nama, tglSunat, dokter.tipeSunat, tipesunat.harga, ordersunat.status');
        $this->db->from('ordersunat');
        $this->db->join('dokter','dokter.username = ordersunat.uDokter');
        // $this->db->on(); 
        $this->db->join('tipesunat','tipesunat.tipeSunat = dokter.tipeSunat');
        $this->db->where('uPasien', $uPasien);
        return $this->db->get();
    }
    public function getListBookSunatUndone($uPasien)
    {
        // $this->db->where('uPasien', $uPasien);
        // return $this->db->get('ordersunat');
         
        $this->db->select('idOrder, dokter.nama, tglSunat, dokter.tipeSunat, tipesunat.harga, ordersunat.status');
        $this->db->from('ordersunat');
        $this->db->join('dokter','dokter.username = ordersunat.uDokter');
        // $this->db->on(); 
        $this->db->join('tipesunat','tipesunat.tipeSunat = dokter.tipeSunat');
        $this->db->where('uPasien', $uPasien);
        $this->db->where('status', 'belum selesai');
        return $this->db->get();
    }

    public function inputOrder($data)
    {
        $this->db->insert('ordersunat', $data);
    }

    public function deletePesanan($idOrder)
    {
        $this->db->where('idOrder', $idOrder);
        $this->db->delete('ordersunat');
        
    }

    public function selesaiPesanan($idOrder)
    {
        $this->db->where('idOrder', $idOrder);
        $this->db->set('status', 'selesai');
        $this->db->update('ordersunat');
    }
}

