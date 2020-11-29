<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model('Djiwa_model');
		if ($this->session->userdata('username')=="") {
			redirect('djiwa/index');
		}
		
		$this->load->helper('text');
	}
	public function index() {
		$username = $this->input->post('username');
		$data['username'] = $this->session->userdata('username');
		$data['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
		$data['nama_user'] = $this->session->userdata('nama_user');
		$this->load->view('home', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('djiwa/index');
	}

	public function table_darikota(){
		$data['username'] = $this->session->userdata('username');
		$x['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
		$x['dari_kota'] = $this->Djiwa_model->tampil_darikota();
		$this->load->view('table_darikota', $x);
		}

	public function table_kekota(){
		$x['username'] = $this->session->userdata('username');
		$x['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
		$x['ke_kota'] = $this->Djiwa_model->tampil_kekota();
		$this->load->view('table_kekota', $x);
		}

	public function table_pembayaran(){
		$x['username'] = $this->session->userdata('username');
		$x['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
		$x['pembayaran'] = $this->Djiwa_model->tampil_pembayaran();
		$this->load->view('table_pembayaran', $x);
		}

	public function table_counter(){
		$data['username'] = $this->session->userdata('username');
		$data['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
		$data['counter'] = $this->Djiwa_model->getAllcounter();
		$this->load->view('table_counter', $data);
		}

	public function table_jenispkt(){
		$x['username'] = $this->session->userdata('username');
		$x['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
		$x['jenis_pkt'] = $this->Djiwa_model->getAlljenispaket();
		$this->load->view('table_jenispkt', $x);
		}

	public function table_status(){
		$x['username'] = $this->session->userdata('username');
		$x['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
		$x['status'] = $this->Djiwa_model->getAllstatus();
		$this->load->view('table_status', $x);
		}

	public function table_kurir(){
		$x['username'] = $this->session->userdata('username');
		$x['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
		$x['kurir'] = $this->Djiwa_model->getAllkurir();
		$this->load->view('table_kurir', $x);
		}

	public function table_daftar_transaksi(){
		$data['username'] = $this->session->userdata('username');
		$data['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
		$data['counter'] = $this->Djiwa_model->getAllcounter();
		$data['kurir'] = $this->Djiwa_model->getAllkurir();
		$data['status'] = $this->Djiwa_model->getAllstatus();
		$data['transaksi'] = $this->Djiwa_model->tampil_transaksi();
		$this->load->view('table_daftar_transaksi', $data);
		}

	public function table_cekongkir_dokumen(){
		$x['username'] = $this->session->userdata('username');
		$x['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
		$this->load->view('table_cekongkir_dokumen', $x);
		}

	public function table_cekongkir_barang(){
		$x['username'] = $this->session->userdata('username');
		$x['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
		$this->load->view('table_cekongkir_barang', $x);
		}

	public function table_adminuser(){
		$x['username'] = $this->session->userdata('username');
		$x['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
		$x['user'] = $this->Djiwa_model->getAlladminuser();
		$this->load->view('table_adminuser', $x);
		}

//Counter Start
	

    function tambahcounter()
    {
		$id_counter=$this->input->post('id_counter');
		$nama_counter=$this->input->post('nama_counter');
		$alamat_counter=$this->input->post('alamat_counter');

        $this->Djiwa_model->simpancounter($id_counter,$nama_counter,$alamat_counter);
        redirect(base_url('admin/admin_controller/table_counter'));

    }

    function editcounter(){
            
        $id_counter = $this->input->post('id_counter');
        $data=array(
            "id_counter"=>$_POST['id_counter'],
            "nama_counter"=>$_POST['nama_counter'],
            "alamat_counter"=>$_POST['alamat_counter'],
        );
        
        
        $this->db->where('id_counter', $id_counter);
        
        $this->db->update('counter', $data);
        
        redirect(base_url('admin/admin_controller/table_counter'));
        
    }
    
    function deletecounter(){
        $id_counter=$this->input->post('id_counter');
        $this->Djiwa_model->deletecounter($id_counter);
        redirect(base_url('admin/admin_controller/table_counter'));
    }

//Counter End

//Jenis_Paket Start

function tambahjenispaket()
{
	$id_jpkt=$this->input->post('id_jpkt');
	$nama_jpkt=$this->input->post('nama_jpkt');
	$harga=$this->input->post('harga');

	$this->Djiwa_model->simpanjenispaket($id_jpkt,$nama_jpkt,$harga);
	redirect(base_url('admin/admin_controller/table_jenispkt'));

}

function editjenispaket(){
		
	$id_jpkt = $this->input->post('id_jpkt');
	$data=array(
		"id_jpkt"=>$_POST['id_jpkt'],
		"nama_jpkt"=>$_POST['nama_jpkt'],
		"harga"=>$_POST['harga'],
	);
	
	
	$this->db->where('id_jpkt', $id_jpkt);
	
	$this->db->update('jenis_pkt', $data);
	
	redirect(base_url('admin/admin_controller/table_jenispkt'));
	
}

function deletejenispaket(){
	$id_jpkt=$this->input->post('id_jpkt');
	$this->Djiwa_model->deletejenispaket($id_jpkt);
	redirect(base_url('admin/admin_controller/table_jenispkt'));
}

//Jenis_Paket End

//Kurir Start

function tambahkurir()
{
	$id_kurir=$this->input->post('id_kurir');
	$nama_kurir=$this->input->post('nama_kurir');

	$this->Djiwa_model->simpankurir($id_kurir,$nama_kurir);
	redirect(base_url('admin/admin_controller/table_kurir'));

}

function editkurir(){
		
	$id_kurir = $this->input->post('id_kurir');
	$data=array(
		"id_kurir"=>$_POST['id_kurir'],
		"nama_kurir"=>$_POST['nama_kurir'],
	);
	
	
	$this->db->where('id_kurir', $id_kurir);
	
	$this->db->update('kurir', $data);
	
	redirect(base_url('admin/admin_controller/table_kurir'));
	
}

function deletekurir(){
	$id_kurir=$this->input->post('id_kurir');
	$this->Djiwa_model->deletekurir($id_kurir);
	redirect(base_url('admin/admin_controller/table_kurir'));
}

//Kurir End

//Status Start

function tambahstatus()
{
	$id_status=$this->input->post('id_status');
	$nama_status=$this->input->post('nama_status');

	$this->Djiwa_model->simpanstatus($id_status,$nama_status);
	redirect(base_url('admin/admin_controller/table_status'));

}

function editstatus(){
		
	$id_status = $this->input->post('id_status');
	$data=array(
		"id_status"=>$_POST['id_status'],
		"nama_status"=>$_POST['nama_status'],
	);
	
	
	$this->db->where('id_status', $id_status);
	
	$this->db->update('status', $data);
	
	redirect(base_url('admin/admin_controller/table_status'));
	
}

function deletestatus(){
	$id_status=$this->input->post('id_status');
	$this->Djiwa_model->deletestatus($id_status);
	redirect(base_url('admin/admin_controller/table_status'));
}

//Status End

//Darikota Start

function tambahdarikota()
{
	$id_darikota=$this->input->post('id_darikota');
	$nama_darikota=$this->input->post('nama_darikota');

	$this->Djiwa_model->simpandarikota($id_darikota,$nama_darikota);
	redirect(base_url('admin/admin_controller/table_darikota'));

}

function editdarikota(){
		
	$id_darikota = $this->input->post('id_darikota');
	$data=array(
		"id_darikota"=>$_POST['id_darikota'],
		"nama_darikota"=>$_POST['nama_darikota'],
	);
	
	
	$this->db->where('id_darikota', $id_darikota);
	
	$this->db->update('dari_kota', $data);
	
	redirect(base_url('admin/admin_controller/table_darikota'));
	
}

function deletedarikota(){
	$id_darikota=$this->input->post('id_darikota');
	$this->Djiwa_model->deletedarikota($id_darikota);
	redirect(base_url('admin/admin_controller/table_darikota'));
}

//Darikota End

//Kekota Start

function tambahkekota()
{
	$id_kekota=$this->input->post('id_kekota');
	$nama_kekota=$this->input->post('nama_kekota');

	$this->Djiwa_model->simpankekota($id_kekota,$nama_kekota);
	redirect(base_url('admin/admin_controller/table_kekota'));

}

function editkekota(){
		
	$id_kekota = $this->input->post('id_kekota');
	$data=array(
		"id_kekota"=>$_POST['id_kekota'],
		"nama_kekota"=>$_POST['nama_kekota'],
	);
	
	
	$this->db->where('id_kekota', $id_kekota);
	
	$this->db->update('ke_kota', $data);
	
	redirect(base_url('admin/admin_controller/table_kekota'));
	
}

function deletekekota(){
	$id_kekota=$this->input->post('id_kekota');
	$this->Djiwa_model->deletekekota($id_kekota);
	redirect(base_url('admin/admin_controller/table_kekota'));
}

//Kekota End

//Pembayaran Start

function tambahpembayaran()
{
	$id_pembayaran=$this->input->post('id_pembayaran');
	$nama_pembayaran=$this->input->post('nama_pembayaran');

	$this->Djiwa_model->simpanpembayaran($id_pembayaran,$nama_pembayaran);
	redirect(base_url('admin/admin_controller/table_pembayaran'));

}

function editpembayaran(){
		
	$id_pembayaran = $this->input->post('id_pembayaran');
	$data=array(
		"id_pembayaran"=>$_POST['id_pembayaran'],
		"nama_pembayaran"=>$_POST['nama_pembayaran'],
	);
	
	
	$this->db->where('id_pembayaran', $id_pembayaran);
	
	$this->db->update('pembayaran', $data);
	
	redirect(base_url('admin/admin_controller/table_pembayaran'));
	
}

function deletepembayaran(){
	$id_pembayaran=$this->input->post('id_pembayaran');
	$this->Djiwa_model->deletepembayaran($id_pembayaran);
	redirect(base_url('admin/admin_controller/table_pembayaran'));
}

//Pembayaran End

// Profile Start
function editprofile(){
            
	$id_user = $this->input->post('id_user');
	$data=array(
		"j_kelamin"=>$_POST['j_kelamin'],
		"tgl_lahir"=>$_POST['tgl_lahir'],
	);
	$this->db->where('id_user', $id_user);
	$this->db->update('detail_user', $data);

	$data1=array(
		"nama_user"=>$_POST['nama_user'],
		"pw"=>$_POST['pw'],
	);
	$this->db->where('id_user', $id_user);
	$this->db->update('user', $data1);
	redirect(base_url('admin/admin_controller'));
	
}
//	Profile End

//Transaksi Start

function edittransaksi(){
		
	$no_resi = $this->input->post('no_resi');
	$data=array(
		"id_counter"=>$_POST['id_counter'],
		"id_kurir"=>$_POST['id_kurir'],
		"id_status"=>$_POST['id_status'],
	);
	
	
	$this->db->where('no_resi', $no_resi);
	
	$this->db->update('transaksi', $data);

	redirect(base_url('admin/admin_controller/table_daftar_transaksi'));
	
}

function deletetransaksi(){
	$no_resi=$this->input->post('no_resi');
	$this->Djiwa_model->deletetransaksi($no_resi);
	redirect(base_url('admin/admin_controller/table_daftar_transaksi'));
}

public function get_date_laporan_transaksi()
{
	$data['username'] = $this->session->userdata('username');
	$data['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
	$data['counter'] = $this->Djiwa_model->getAllcounter();
	$data['kurir'] = $this->Djiwa_model->getAllkurir();
	$data['status'] = $this->Djiwa_model->getAllstatus();
	$dari_tanggal = $this->input->post('dari_tanggal');
	$sampai_tanggal = $this->input->post('sampai_tanggal');
	$data['transaksi'] = $this->Djiwa_model->cetak_transaksi($dari_tanggal, $sampai_tanggal);
	$data['dari_tanggal'] = $dari_tanggal;
	$data['sampai_tanggal'] = $sampai_tanggal;
	$this->load->view('cetak_daftar_transaksi', $data);
}

// Transaksi End

//Admin_User Start

function gantipwuser(){
		
	$id_user = $this->input->post('id_user');
	$data=array(
		"id_user"=>$_POST['id_user'],
		"pw"=>$_POST['pw'],
	);
	
	
	$this->db->where('id_user', $id_user);
	
	$this->db->update('user', $data);
	
	redirect(base_url('admin/admin_controller/table_adminuser'));
	
}

function editadminuser(){
		
	$id_user = $this->input->post('id_user');
	$data=array(
		"id_user"=>$_POST['id_user'],
		"username"=>$_POST['username'],
		"nama_user"=>$_POST['nama_user'],
		"level"=>$_POST['level'],
	);
	
	
	$this->db->where('id_user', $id_user);
	
	$this->db->update('user', $data);
	
	redirect(base_url('admin/admin_controller/table_adminuser'));
	
}

function deleteadminuser(){
	$id_user=$this->input->post('id_user');
	$this->Djiwa_model->deleteadminuser($id_user);
	redirect(base_url('admin/admin_controller/table_adminuser'));
}

//Admin_User End

}
/* End of file admin_controller.php */
?>