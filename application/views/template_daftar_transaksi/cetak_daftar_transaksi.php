<body onload="window.print();">
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <div class="row">
  <div class="col-md-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
  </div>
  <div class="col-md-9">
    <h6 class="m-0 font-weight-bold text-primary float-right">Tgl. <?php echo $dari_tanggal ?> - <?php echo $sampai_tanggal ?></h6>
  </div>
  </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
          <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>No Resi</th>
            <th>Nama User</th>
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
            </tr>
          <?php endforeach; ?>
            </tbody>
      </table>
    </div>
  </div>
</div>