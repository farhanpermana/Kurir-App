<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Djiwa_model extends CI_Model {

    public function check_user_di_db($data) {
        $query = $this->db->get_where('user', $data);
        return $query;
    }

    function tampil_darikota(){
  
        $hasil=$this->db->query("SELECT * FROM dari_kota");
        return $hasil;
  
    }

    function tampil_kekota(){
  
        $hasil=$this->db->query("SELECT * FROM ke_kota");
        return $hasil;
  
    }

    function tampil_pembayaran(){
  
        $hasil=$this->db->query("SELECT * FROM pembayaran");
        return $hasil;
  
    }

    function tampil_jenispkt(){
  
        $hasil=$this->db->query("SELECT * FROM jenis_pkt");
        return $hasil;
  
    }        

    function tampil_status(){
  
        $hasil=$this->db->query("SELECT * FROM status");
        return $hasil;
  
    }

    function tampil_kurir(){
  
        $hasil=$this->db->query("SELECT * FROM kurir");
        return $hasil;
  
    }    

    function tampil_transaksi(){
  
        $hasil=$this->db->query("SELECT * FROM transaksi
        LEFT JOIN user ON transaksi.id_user=user.id_user
		LEFT JOIN dari_kota ON transaksi.id_darikota=dari_kota.id_darikota
		LEFT JOIN ke_kota ON transaksi.id_kekota=ke_kota.id_kekota
		LEFT JOIN jenis_pkt ON transaksi.id_jpkt=jenis_pkt.id_jpkt
		LEFT JOIN counter ON transaksi.id_counter=counter.id_counter
        LEFT JOIN pembayaran ON transaksi.id_pembayaran=pembayaran.id_pembayaran
        LEFT JOIN kurir ON transaksi.id_kurir=kurir.id_kurir
        LEFT JOIN status ON transaksi.id_status=status.id_status");
        
        return $hasil;
  
    }    

    function get_users(){
        $this->db->select('*');
        $this->db->from('user');
        $hasil = $this->db->get();
        return $hasil;
    }
    
    function get_detailusers(){
        $this->db->select('*');
        $this->db->from('detail_user');
        $hasil = $this->db->get();
        return $hasil;
    }

    function get_usersdetailusers($username){
         $this->db->select('*');
          $this->db->from('user');
         $this->db->join('detail_user', 'user.id_user=detail_user.id_user');
         $this->db->where('username', $username);

         return $this->db->get()->result_array();
    }

    function create_users($table,$data){
        $query = $this->db->insert($table, $data);
        return $query;
    }   

    // Start Counter

	function getAllcounter()
	{
		return $this->db->get('counter');  
    }

    function simpancounter($id_counter, $nama_counter, $alamat_counter)
    {
        $hasil=$this->db->query("INSERT INTO counter (id_counter,nama_counter,alamat_counter) VALUES ('$id_counter','$nama_counter','$alamat_counter')");
        return $hasil;
    }

    function deletecounter($id_counter){
        $hasil=$this->db->query("DELETE FROM counter WHERE id_counter='$id_counter'");
        return $hasil;
    }

    // End Counter

    // Start Jenis Paket

	function getAlljenispaket()
	{
		return $this->db->get('jenis_pkt');  
    }

    function simpanjenispaket($id_jpkt, $nama_jpkt, $harga)
    {
        $hasil=$this->db->query("INSERT INTO jenis_pkt (id_jpkt,nama_jpkt,harga) VALUES ('$id_jpkt','$nama_jpkt','$harga')");
        return $hasil;
    }

    function deletejenispaket($id_jpkt){
        $hasil=$this->db->query("DELETE FROM jenis_pkt WHERE id_jpkt='$id_jpkt'");
        return $hasil;
    }

    // End Jenis Paket

    // Start Kurir

	function getAllkurir()
	{
		return $this->db->get('kurir');  
    }

    function simpankurir($id_kurir, $nama_kurir)
    {
        $hasil=$this->db->query("INSERT INTO kurir (id_kurir,nama_kurir) VALUES ('$id_kurir','$nama_kurir')");
        return $hasil;
    }

    function deletekurir($id_kurir){
        $hasil=$this->db->query("DELETE FROM kurir WHERE id_kurir='$id_kurir'");
        return $hasil;
    }

    // End Jenis Kurir

    // Start Status

	function getAllstatus()
	{
		return $this->db->get('status');  
    }

    function simpanstatus($id_status, $nama_status)
    {
        $hasil=$this->db->query("INSERT INTO status (id_status,nama_status) VALUES ('$id_status','$nama_status')");
        return $hasil;
    }

    function deletestatus($id_status){
        $hasil=$this->db->query("DELETE FROM status WHERE id_status='$id_status'");
        return $hasil;
    }

    // End Status

    // Start Dari kota

	function getAlldarikota()
	{
		return $this->db->get('dari_kota');  
    }

    function simpandarikota($id_darikota, $nama_darikota)
    {
        $hasil=$this->db->query("INSERT INTO dari_kota (id_darikota,nama_darikota) VALUES ('$id_darikota','$nama_darikota')");
        return $hasil;
    }

    function deletedarikota($id_darikota){
        $hasil=$this->db->query("DELETE FROM dari_kota WHERE id_darikota='$id_darikota'");
        return $hasil;
    }

    // End Dari kota

    // Start Ke kota

	function getAllkekota()
	{
		return $this->db->get('ke_kota');  
    }

    function simpankekota($id_kekota, $nama_kekota)
    {
        $hasil=$this->db->query("INSERT INTO ke_kota (id_kekota,nama_kekota) VALUES ('$id_kekota','$nama_kekota')");
        return $hasil;
    }

    function deletekekota($id_kekota){
        $hasil=$this->db->query("DELETE FROM ke_kota WHERE id_kekota='$id_kekota'");
        return $hasil;
    }

    // End Ke kota

    // Start Pembayaran

	function getAllpembayaran()
	{
		return $this->db->get('pembayaran');  
    }

    function simpanpembayaran($id_pembayaran, $nama_pembayaran)
    {
        $hasil=$this->db->query("INSERT INTO pembayaran (id_pembayaran,nama_pembayaran) VALUES ('$id_pembayaran','$nama_pembayaran')");
        return $hasil;
    }

    function deletepembayaran($id_pembayaran){
        $hasil=$this->db->query("DELETE FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
        return $hasil;
    }

    // End Pembayaran

    // Start User

	function getAlluser()
	{
		return $this->db->get('user');  
    }

    function simpanuser($id_user, $nama_user)
    {
        $hasil=$this->db->query("INSERT INTO user (id_user,nama_user) VALUES ('$id_user','$nama_user')");
        return $hasil;
    }

    function deleteuser($id_user){
        $hasil=$this->db->query("DELETE FROM user WHERE id_user='$id_user'");
        return $hasil;
    }

    // End User

    // Start Transaksi

	function getAlltransaksi()
	{
		return $this->db->get('transaksi');  
    }

    function deletetransaksi($no_resi){
        $hasil=$this->db->query("DELETE FROM transaksi WHERE no_resi='$no_resi'");
        return $hasil;
    }

    function cetak_transaksi($dari_tanggal, $sampai_tanggal){
  
        $hasil=$this->db->query("SELECT * FROM transaksi
        LEFT JOIN user ON transaksi.id_user=user.id_user
		LEFT JOIN dari_kota ON transaksi.id_darikota=dari_kota.id_darikota
		LEFT JOIN ke_kota ON transaksi.id_kekota=ke_kota.id_kekota
		LEFT JOIN jenis_pkt ON transaksi.id_jpkt=jenis_pkt.id_jpkt
		LEFT JOIN counter ON transaksi.id_counter=counter.id_counter
        LEFT JOIN pembayaran ON transaksi.id_pembayaran=pembayaran.id_pembayaran
        LEFT JOIN kurir ON transaksi.id_kurir=kurir.id_kurir
        LEFT JOIN status ON transaksi.id_status=status.id_status
        WHERE tgl BETWEEN '$dari_tanggal 00:00:00' AND '$sampai_tanggal 23:59:59'");
        
        return $hasil;
  
    }    

    // End Transaksi

        //BUAT CUSTOM ID USERS OTOMATIS
        public function no_resi_otomatis(){
		  $this->db->select('RIGHT(transaksi.no_resi,2) as no_resi', FALSE);
		  $this->db->order_by('no_resi','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('transaksi');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $noresi = intval($data->no_resi) + 1; 
		  }
		  else{      
			   $noresi = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('dmy'); 
			  $batas = str_pad($noresi, 3, "0", STR_PAD_LEFT);    
			  $dapetnoresi = $tgl.$batas;  //format kode
			  return $dapetnoresi;  
         }
    
         function tampil_resi_user($id_user){
  
            $hasil=$this->db->query("SELECT * FROM transaksi
            LEFT JOIN user ON transaksi.id_user=user.id_user
            LEFT JOIN dari_kota ON transaksi.id_darikota=dari_kota.id_darikota
            LEFT JOIN ke_kota ON transaksi.id_kekota=ke_kota.id_kekota
            LEFT JOIN jenis_pkt ON transaksi.id_jpkt=jenis_pkt.id_jpkt
            LEFT JOIN counter ON transaksi.id_counter=counter.id_counter
            LEFT JOIN pembayaran ON transaksi.id_pembayaran=pembayaran.id_pembayaran
            LEFT JOIN kurir ON transaksi.id_kurir=kurir.id_kurir
            LEFT JOIN status ON transaksi.id_status=status.id_status
            WHERE user.id_user = $id_user
            ");
            
            return $hasil;
      
        }
        
    // Start Admin User

	function getAlladminuser()
	{
		return $this->db->get('user');  
    }

    function deleteadminuser($id_user){
        $hasil=$this->db->query("DELETE FROM user WHERE id_user='$id_user'");
        return $hasil;
    }

    // End Admin User
    
}