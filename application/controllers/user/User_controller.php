<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {

    public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('djiwa/index');
		}
		$this->load->helper('text');
		$this->load->model('Djiwa_model');
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
	
	public function table_order(){
		$data['id_user'] = $this->session->userdata('id_user');
		$data['username'] = $this->session->userdata('username');
		$data['transaksi'] = $this->Djiwa_model->tampil_transaksi();
		$data['no_resi_otomatis'] = $this->Djiwa_model->no_resi_otomatis();
		$data['dari_kota'] = $this->Djiwa_model->tampil_darikota();
		$data['ke_kota'] = $this->Djiwa_model->tampil_kekota();
		$data['jenis_pkt'] = $this->Djiwa_model->getAlljenispaket();
		$data['pembayaran'] = $this->Djiwa_model->tampil_pembayaran();
		$data['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
		$this->load->view('table_order', $data);
	}

	public function simpanorderrequest(){
		$id_user = $this->session->userdata('id_user');
		$dapetnoresi = $this->Djiwa_model->no_resi_otomatis();
		$data=array(
			"no_resi"=>$dapetnoresi,
			"id_user"=>$id_user,
			"id_darikota"=>$_POST['id_darikota'],
			"id_kekota"=>$_POST['id_kekota'],
			"nama_penerima"=>$_POST['nama_penerima'],
			"alamat_penerima"=>$_POST['alamat_penerima'],
			"id_jpkt"=>$_POST['id_jpkt'],
			"id_pembayaran"=>$_POST['id_pembayaran'],
			"id_status"=>'1',
		);
		$hasil = $this->db->insert('transaksi', $data);
		
		if($hasil){
			?>
			<script>
				alert("Sukess!! Orderan anda berhasil masuk ke dalam sistem Djiwa Express.");
				window.location.href='<?php echo base_url('user/user_controller/table_daftar_resi');?>';
			</script>
			<?php
		} ?>
		<?php

		// redirect(base_url('user/user_controller/table_daftar_resi'));
	}

	public function table_daftar_resi(){
		$id_user = $this->session->userdata('id_user');
		$data['username'] = $this->session->userdata('username');
		$data['getdetailuser'] = $this->Djiwa_model->get_usersdetailusers($this->session->userdata('username'));
		 $data['counter'] = $this->Djiwa_model->getAllcounter();
		 $data['kurir'] = $this->Djiwa_model->getAllkurir();
		 $data['status'] = $this->Djiwa_model->getAllstatus();
		 $data['transaksi'] = $this->Djiwa_model->tampil_resi_user($id_user);
		$this->load->view('table_daftar_resi', $data);
	}
}

/* End of file user_controller.php */
?>