<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {

    //API COUNTER MODEL
    public function selectDataCounter(){
        $query = $this->db->get('counter');
        return $query->result_array();
    }

    public function insertDataCounter($data){
        $query = $this->db->insert('counter', $data);
        return $this->db->affected_rows();
    }

    public function updateDataCounter($id, $data) {
        $this->db->set($data);
        $this->db->where($id);
        $this->db->update('counter');
        return $this->db->affected_rows();
    }

    public function deleteDataCounter($id) {
        $this->db->where($id);
        $this->db->delete('counter');
        return $this->db->affected_rows();
    }

    //END API COUNTER MODEL

    //API JENIS PAKET MODEL
    public function selectDataJenispkt(){
        $query = $this->db->get('jenis_pkt');
        return $query->result_array();
    }

    public function insertDataJenispkt($data){
        $query = $this->db->insert('jenis_pkt', $data);
        return $this->db->affected_rows();
    }

    public function updateDataJenispkt($id, $data) {
        $this->db->set($data);
        $this->db->where($id);
        $this->db->update('jenis_pkt');
        return $this->db->affected_rows();
    }

    public function deleteDataJenispkt($id) {
        $this->db->where($id);
        $this->db->delete('jenis_pkt');
        return $this->db->affected_rows();
    }

    //END API JENIS PAKET MODEL

    //API KURIR MODEL
    public function selectDataKurir(){
        $query = $this->db->get('kurir');
        return $query->result_array();
    }

    public function insertDataKurir($data){
        $query = $this->db->insert('kurir', $data);
        return $this->db->affected_rows();
    }

    public function updateDataKurir($id, $data) {
        $this->db->set($data);
        $this->db->where($id);
        $this->db->update('kurir');
        return $this->db->affected_rows();
    }

    public function deleteDataKurir($id) {
        $this->db->where($id);
        $this->db->delete('kurir');
        return $this->db->affected_rows();
    }

    //END API KURIR MODEL

    //API STATUS MODEL
    public function selectDataStatus(){
        $query = $this->db->get('status');
        return $query->result_array();
    }

    public function insertDataStatus($data){
        $query = $this->db->insert('status', $data);
        return $this->db->affected_rows();
    }

    public function updateDataStatus($id, $data) {
        $this->db->set($data);
        $this->db->where($id);
        $this->db->update('status');
        return $this->db->affected_rows();
    }

    public function deleteDataStatus($id) {
        $this->db->where($id);
        $this->db->delete('status');
        return $this->db->affected_rows();
    }

    //END API STATUS MODEL

    //API JENIS PEMBAYARAN MODEL
    public function selectDataPembayaran(){
        $query = $this->db->get('pembayaran');
        return $query->result_array();
    }

    public function insertDataPembayaran($data){
        $query = $this->db->insert('pembayaran', $data);
        return $this->db->affected_rows();
    }

    public function updateDataPembayaran($id, $data) {
        $this->db->set($data);
        $this->db->where($id);
        $this->db->update('pembayaran');
        return $this->db->affected_rows();
    }

    public function deleteDataPembayaran($id) {
        $this->db->where($id);
        $this->db->delete('pembayaran');
        return $this->db->affected_rows();
    }

    //END API JENIS PEMBAYARAN MODEL

    //API JENIS DARI KOTA MODEL
    public function selectDataDariKota(){
        $query = $this->db->get('dari_kota');
        return $query->result_array();
    }
    
    public function insertDataDariKota($data){
        $query = $this->db->insert('dari_kota', $data);
        return $this->db->affected_rows();
    }
    
    public function updateDataDariKota($id, $data) {
        $this->db->set($data);
        $this->db->where($id);
        $this->db->update('dari_kota');
        return $this->db->affected_rows();
    }
    
    public function deleteDataDariKota($id) {
        $this->db->where($id);
        $this->db->delete('dari_kota');
        return $this->db->affected_rows();
    }
    
    //END API JENIS DARI KOTA MODEL

    //API JENIS KE KOTA MODEL
    public function selectDataKeKota(){
        $query = $this->db->get('ke_kota');
        return $query->result_array();
    }

    public function insertDataKeKota($data){
        $query = $this->db->insert('ke_kota', $data);
        return $this->db->affected_rows();
    }

    public function updateDataKeKota($id, $data) {
        $this->db->set($data);
        $this->db->where($id);
        $this->db->update('ke_kota');
        return $this->db->affected_rows();
    }

    public function deleteDataKeKota($id) {
        $this->db->where($id);
        $this->db->delete('ke_kota');
        return $this->db->affected_rows();
    }

    //END API KE KOTA MODEL

}

/* End of file Api_model.php */

?>
