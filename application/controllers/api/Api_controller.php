<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

class Api_Controller extends RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Api_model', 'Apimod');
    }

    // API COUNTER CONTROLLER
    public function Counter_get()
    {
        $counter = $this->Apimod->selectDataCounter();
        $this->response([
            'status' => 'berhasil',
            'data' => $counter
        ], 200);
    }

    public function Counter_post()
    {
        $post = $this->input->post();
        $data = array(
            "nama_counter" => $post['nama_counter'],
            "alamat_counter" => $post['alamat_counter'],
        );
        $row = $this->Apimod->insertDataCounter($data);

        if($row > 0){
            $this->response([
                'status' => 'berhasil!!',
                'data' => $data
            ], 200);
        } else {
            $this->response([
                'status' => 'gagal!!',
                'data' => null
            ], 500);
        }
    }

    public function updateCounter_post()
    {
        $post = $this->input->post();
        $data = array(
            "id_counter" => $post['id_counter'],
            "nama_counter" => $post['nama_counter'],
            "alamat_counter" => $post['alamat_counter'],
        );
        $id = array("id_counter" => $post['id_counter']);

        $row = $this->Apimod->updateDataCounter($id,$data);
        if($row > 0){
            $this->response([
                'status' => 'berhasil!!',
                'massage' => 'Data Telah Terupdate.'
            ], 200);
        } else {
            $this->response([
                'status' => 'gagal!!',
                'massage' => 'Data Gagal Terupdate.'
            ], 500);
        }
    }

    public function deleteCounter_post()
    {
    $post = $this->input->post();
    $id = array("id_counter" => $post['id_counter']);

    $row = $this->Apimod->deleteDataCounter($id);
        if($row > 0){
          $this->response( [
            'status' => 'Berhasil!!',
            'message' => 'Data Telah Dihapus!'
          ], 200 );
        }else{
          $this->response( [
            'status' => 'Gagal!!',
            'message' => 'Data Gagal Dihapus!'
          ], 500 );
        }
  }
  
  // END API COUNTER CONTROLLER

  // API JENIS PAKET CONTROLLER
  public function Jenispkt_get()
  {
      $jenis_pkt = $this->Apimod->selectDataJenispkt();
      $this->response([
          'status' => 'berhasil',
          'data' => $jenis_pkt
      ], 200);
  }

  public function Jenispkt_post()
  {
      $post = $this->input->post();
      $data = array(
          "id_jpkt" => $post['id_jpkt'],
          "nama_jpkt" => $post['nama_jpkt'],
          "harga" => $post['harga'],
      );
      $row = $this->Apimod->insertDataJenispkt($data);

      if($row > 0){
          $this->response([
              'status' => 'berhasil!!',
              'data' => $data
          ], 200);
      } else {
          $this->response([
              'status' => 'gagal!!',
              'data' => null
          ], 500);
      }
  }

  public function updateJenispkt_post()
  {
      $post = $this->input->post();
      $data = array(
          "id_jpkt" => $post['id_jpkt'],
          "nama_jpkt" => $post['nama_jpkt'],
          "harga" => $post['harga'],
      );
      $id = array("id_jpkt" => $post['id_jpkt']);

      $row = $this->Apimod->updateDataJenispkt($id,$data);
      if($row > 0){
          $this->response([
              'status' => 'berhasil!!',
              'massage' => 'Data Telah Terupdate.'
          ], 200);
      } else {
          $this->response([
              'status' => 'gagal!!',
              'massage' => 'Data Gagal Terupdate.'
          ], 500);
      }
  }

  public function deleteJenispkt_post()
  {
  $post = $this->input->post();
  $id = array("id_jpkt" => $post['id_jpkt']);

  $row = $this->Apimod->deleteDataJenispkt($id);
      if($row > 0){
        $this->response( [
          'status' => 'Berhasil!!',
          'message' => 'Data Telah Dihapus!'
        ], 200 );
      }else{
        $this->response( [
          'status' => 'Gagal!!',
          'message' => 'Data Gagal Dihapus!'
        ], 500 );
      }
}

// END API JENIS PAKET CONTROLLER

// API KURIR CONTROLLER
public function Kurir_get()
{
    $kurir = $this->Apimod->selectDataKurir();
    $this->response([
        'status' => 'berhasil',
        'data' => $kurir
    ], 200);
}

public function Kurir_post()
{
    $post = $this->input->post();
    $data = array(
        "id_kurir" => $post['id_kurir'],
        "nama_kurir" => $post['nama_kurir'],
    );
    $row = $this->Apimod->insertDataKurir($data);

    if($row > 0){
        $this->response([
            'status' => 'berhasil!!',
            'data' => $data
        ], 200);
    } else {
        $this->response([
            'status' => 'gagal!!',
            'data' => null
        ], 500);
    }
}

public function updateKurir_post()
{
    $post = $this->input->post();
    $data = array(
        "id_kurir" => $post['id_kurir'],
        "nama_kurir" => $post['nama_kurir'],
    );
    $id = array("id_kurir" => $post['id_kurir']);

    $row = $this->Apimod->updateDataKurir($id,$data);
    if($row > 0){
        $this->response([
            'status' => 'berhasil!!',
            'massage' => 'Data Telah Terupdate.'
        ], 200);
    } else {
        $this->response([
            'status' => 'gagal!!',
            'massage' => 'Data Gagal Terupdate.'
        ], 500);
    }
}

public function deleteKurir_post()
{
$post = $this->input->post();
$id = array("id_kurir" => $post['id_kurir']);

$row = $this->Apimod->deleteDataKurir($id);
    if($row > 0){
      $this->response( [
        'status' => 'Berhasil!!',
        'message' => 'Data Telah Dihapus!'
      ], 200 );
    }else{
      $this->response( [
        'status' => 'Gagal!!',
        'message' => 'Data Gagal Dihapus!'
      ], 500 );
    }
}

// END API KURIR CONTROLLER

// API STATUS CONTROLLER
public function Status_get()
{
    $status = $this->Apimod->selectDataStatus();
    $this->response([
        'status' => 'berhasil',
        'data' => $status
    ], 200);
}

public function Status_post()
{
    $post = $this->input->post();
    $data = array(
        "id_status" => $post['id_status'],
        "nama_status" => $post['nama_status'],
    );
    $row = $this->Apimod->insertDataStatus($data);

    if($row > 0){
        $this->response([
            'status' => 'berhasil!!',
            'data' => $data
        ], 200);
    } else {
        $this->response([
            'status' => 'gagal!!',
            'data' => null
        ], 500);
    }
}

public function updateStatus_post()
{
    $post = $this->input->post();
    $data = array(
        "id_status" => $post['id_status'],
        "nama_status" => $post['nama_status'],
    );
    $id = array("id_status" => $post['id_status']);

    $row = $this->Apimod->updateDataStatus($id,$data);
    if($row > 0){
        $this->response([
            'status' => 'berhasil!!',
            'massage' => 'Data Telah Terupdate.'
        ], 200);
    } else {
        $this->response([
            'status' => 'gagal!!',
            'massage' => 'Data Gagal Terupdate.'
        ], 500);
    }
}

public function deleteStatus_post()
{
$post = $this->input->post();
$id = array("id_status" => $post['id_status']);

$row = $this->Apimod->deleteDataStatus($id);
    if($row > 0){
      $this->response( [
        'status' => 'Berhasil!!',
        'message' => 'Data Telah Dihapus!'
      ], 200 );
    }else{
      $this->response( [
        'status' => 'Gagal!!',
        'message' => 'Data Gagal Dihapus!'
      ], 500 );
    }
}

// END API STATUS CONTROLLER

// API PEMBAYARAN CONTROLLER
public function Pembayaran_get()
{
    $pembayaran = $this->Apimod->selectDataPembayaran();
    $this->response([
        'status' => 'berhasil',
        'data' => $pembayaran
    ], 200);
}

public function Pembayaran_post()
{
    $post = $this->input->post();
    $data = array(
        "id_pembayaran" => $post['id_pembayaran'],
        "nama_pembayaran" => $post['nama_pembayaran'],
    );
    $row = $this->Apimod->insertDataPembayaran($data);

    if($row > 0){
        $this->response([
            'status' => 'berhasil!!',
            'data' => $data
        ], 200);
    } else {
        $this->response([
            'status' => 'gagal!!',
            'data' => null
        ], 500);
    }
}

public function updatePembayaran_post()
{
    $post = $this->input->post();
    $data = array(
        "id_pembayaran" => $post['id_pembayaran'],
        "nama_pembayaran" => $post['nama_pembayaran'],
    );
    $id = array("id_pembayaran" => $post['id_pembayaran']);

    $row = $this->Apimod->updateDataPembayaran($id,$data);
    if($row > 0){
        $this->response([
            'status' => 'berhasil!!',
            'massage' => 'Data Telah Terupdate.'
        ], 200);
    } else {
        $this->response([
            'status' => 'gagal!!',
            'massage' => 'Data Gagal Terupdate.'
        ], 500);
    }
}

public function deletePembayaran_post()
{
$post = $this->input->post();
$id = array("id_pembayaran" => $post['id_pembayaran']);

$row = $this->Apimod->deleteDataPembayaran($id);
    if($row > 0){
      $this->response( [
        'status' => 'Berhasil!!',
        'message' => 'Data Telah Dihapus!'
      ], 200 );
    }else{
      $this->response( [
        'status' => 'Gagal!!',
        'message' => 'Data Gagal Dihapus!'
      ], 500 );
    }
}

// END API PEMBAYARAN CONTROLLER

// API DARI KOTA CONTROLLER
public function Darikota_get()
{
    $dari_kota = $this->Apimod->selectDataDariKota();
    $this->response([
        'status' => 'berhasil',
        'data' => $dari_kota
    ], 200);
}

public function Darikota_post()
{
    $post = $this->input->post();
    $data = array(
        "id_darikota" => $post['id_darikota'],
        "nama_darikota" => $post['nama_darikota'],
    );
    $row = $this->Apimod->insertDataDariKota($data);

    if($row > 0){
        $this->response([
            'status' => 'berhasil!!',
            'data' => $data
        ], 200);
    } else {
        $this->response([
            'status' => 'gagal!!',
            'data' => null
        ], 500);
    }
}

public function updateDarikota_post()
{
    $post = $this->input->post();
    $data = array(
        "id_darikota" => $post['id_darikota'],
        "nama_darikota" => $post['nama_darikota'],
    );
    $id = array("id_darikota" => $post['id_darikota']);

    $row = $this->Apimod->updateDataDariKota($id,$data);
    if($row > 0){
        $this->response([
            'status' => 'berhasil!!',
            'massage' => 'Data Telah Terupdate.'
        ], 200);
    } else {
        $this->response([
            'status' => 'gagal!!',
            'massage' => 'Data Gagal Terupdate.'
        ], 500);
    }
}

public function deleteDarikota_post()
{
$post = $this->input->post();
$id = array("id_darikota" => $post['id_darikota']);

$row = $this->Apimod->deleteDataDariKota($id);
    if($row > 0){
      $this->response( [
        'status' => 'Berhasil!!',
        'message' => 'Data Telah Dihapus!'
      ], 200 );
    }else{
      $this->response( [
        'status' => 'Gagal!!',
        'message' => 'Data Gagal Dihapus!'
      ], 500 );
    }
}

// END API DARI KOTA CONTROLLER

// API KE KOTA CONTROLLER
public function Kekota_get()
{
    $ke_kota = $this->Apimod->selectDataKeKota();
    $this->response([
        'status' => 'berhasil',
        'data' => $ke_kota
    ], 200);
}

public function Kekota_post()
{
    $post = $this->input->post();
    $data = array(
        "id_kekota" => $post['id_kekota'],
        "nama_kekota" => $post['nama_kekota'],
    );
    $row = $this->Apimod->insertDataKeKota($data);

    if($row > 0){
        $this->response([
            'status' => 'berhasil!!',
            'data' => $data
        ], 200);
    } else {
        $this->response([
            'status' => 'gagal!!',
            'data' => null
        ], 500);
    }
}

public function updateKekota_post()
{
    $post = $this->input->post();
    $data = array(
        "id_kekota" => $post['id_kekota'],
        "nama_kekota" => $post['nama_kekota'],
    );
    $id = array("id_kekota" => $post['id_kekota']);

    $row = $this->Apimod->updateDataKeKota($id,$data);
    if($row > 0){
        $this->response([
            'status' => 'berhasil!!',
            'massage' => 'Data Telah Terupdate.'
        ], 200);
    } else {
        $this->response([
            'status' => 'gagal!!',
            'massage' => 'Data Gagal Terupdate.'
        ], 500);
    }
}

public function deleteKekota_post()
{
$post = $this->input->post();
$id = array("id_kekota" => $post['id_kekota']);

$row = $this->Apimod->deleteDataKeKota($id);
    if($row > 0){
      $this->response( [
        'status' => 'Berhasil!!',
        'message' => 'Data Telah Dihapus!'
      ], 200 );
    }else{
      $this->response( [
        'status' => 'Gagal!!',
        'message' => 'Data Gagal Dihapus!'
      ], 500 );
    }
}

// END API KE KOTA CONTROLLER

}

/* End of file Api_controller.php */

?>