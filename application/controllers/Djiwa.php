<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Djiwa extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//sudah login?
		if ($this->session->userdata('level')=="admin") {
			redirect('admin/Admin_controller');
		}
		elseif ($this->session->userdata('level')=='user') {
			redirect('user/User_controller');
		}
		$this->load->model('Djiwa_model');	
		//tutup
	}

	public function index()
	{
        $this->load->view('login');

    }
    public function check()
    {
        $data = array('username' => $this->input->post('username', TRUE),   
                      'pw' => $this->input->post('pw', TRUE));
        $this->load->model('Djiwa_model');
        $hasil = $this->Djiwa_model->check_user_di_db($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Telah Login';
				$sess_data['id_user'] = $sess->id_user;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$sess_data['nama_user'] = $sess->nama_user;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {
				redirect('admin/Admin_controller');
			}
			elseif ($this->session->userdata('level')=='user') {
				redirect('user/User_controller');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek kembali username dan password anda!');history.go(-1);</script>";
		}
	}
// Register Start
	// READ
	function register(){
		$data['user'] = $this->Djiwa_model->get_users();
		$data['detail_user'] = $this->Djiwa_model->get_detailusers();
		$this->load->view('register',$data);
	}

	//CREATE
	function create_users(){
	// $id_user = $this->db->insert('id_user');
	$nama_user = $this->input->post('nama_user');
	$username = $this->input->post('username');
	$pw = $this->input->post('pw');
	$data1 = array(
			'nama_user'=>$nama_user,
			'username'=>$username,
			'pw'=>$pw,
			'level'=>'user',
		);
	$insert = $this->Djiwa_model->create_users('user',$data1);
	$last_id = $this->db->insert_id();

	$data = array(
		'id_user'=>$last_id,
	);
	$insert1 = $this->Djiwa_model->create_users('detail_user',$data);
	if($insert1){
		?>
		<script>
			alert("Registrasi Sukses!!");
			window.location.href='<?php echo base_url();?>';
		</script>
		<?php
	} ?>
	<?php
	}
//Register End


}