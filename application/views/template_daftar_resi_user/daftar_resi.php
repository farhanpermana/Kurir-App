<!-- Begin Page Content -->
<div class="container-fluid">
<br>
<br>
<br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">List Order</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>No Resi</th>
            <th>Atas Nama</th>
            <th>Dari kota</th>
            <th>Ke Kota</th>
            <th>Nama Penerima</th>
            <th>Alamat Penerima</th>
            <th>Jenis Paket</th>
            <th>Harga</th>
            <th>Counter</th>
            <th>Jenis Pembayaran</th>
            <th>Kurir</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          foreach($transaksi->result_array() as $k):
          $tgl=$k['tgl'];
          $no_resi=$k['no_resi'];
          $id_user=$k['nama_user'];
          $id_darikota=$k['nama_darikota'];
          $id_kekota=$k['nama_kekota'];
          $nama_penerima=$k['nama_penerima'];
          $alamat_penerima=$k['alamat_penerima'];
          $id_jpkt=$k['nama_jpkt'];
          $harga=$k['harga'];
          $id_counter=$k['id_counter'];
          $nama_counter=$k['nama_counter'];
          $id_pembayaran=$k['nama_pembayaran'];
          $id_kurir=$k['id_kurir'];
          $nama_kurir=$k['nama_kurir'];
          $id_status=$k['id_status'];
          $nama_status=$k['nama_status'];
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $tgl;?></td>
            <td><?php echo $no_resi;?></td>
            <td><?php echo $id_user;?></td>
            <td><?php echo $id_darikota;?></td>
            <td><?php echo $id_kekota;?></td>
            <td><?php echo $nama_penerima;?></td>
            <td><?php echo $alamat_penerima;?></td>
            <td><?php echo $id_jpkt;?></td>
            <td><?php echo $harga;?></td>
            <td><?php echo $nama_counter;?></td>
            <td><?php echo $id_pembayaran;?></td>
            <td><?php echo $nama_kurir;?></td>
            <td><?php echo $nama_status;?></td>
            <?php endforeach;?>
          </tr>
        </tbody>
      </table>
      <h4><i>Note :</h4><br><b>*</b>Jika pembayaran menggunakan <b>Bank Transfer</b> silahkan transfer ke <b>BCA 5113849666 a/n Farhan permana</b> kemudian berikan bukti transfer!<br><b>*</b>Jika pembayaran menggunakan <b>Cash</b> silahkan siapkan uang pas saat kurir datang menjemput paket!</i>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->