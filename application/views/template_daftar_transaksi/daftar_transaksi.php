<!-- Begin Page Content -->
<div class="container-fluid">
<br>
<br>
<br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">List Transaksi</h6>
  </div>
  <div class="card-body">
  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#cetaklaporantransaksi" >Cetak Transaksi</button>
  <br />
  <br />
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
            <th>Aksi</th>
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
            <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group btn-group-sm" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pilih Aksi
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item btn btn-info btn-sm btn-edit-transaksi" href="#" 
            data-no_resi="<?= $no_resi;?>" 
            data-tgl="<?= $tgl;?>" 
            data-id_user="<?= $id_user;?>" 
            data-id_darikota="<?= $id_darikota;?>" 
            data-id_kekota="<?= $id_kekota;?>" 
            data-nama_penerima="<?= $nama_penerima;?>" 
            data-alamat_penerima="<?= $alamat_penerima;?>" 
            data-id_jpkt="<?= $id_jpkt;?>" 
            data-id_counter="<?= $id_counter;?>" 
            data-harga="<?= $harga;?>" 
            data-id_pembayaran="<?= $id_pembayaran;?>"
            data-id_kurir="<?= $id_kurir;?>" 
            data-id_status="<?= $id_status;?>"  
            data-id_user="<?= $id_user;?>">Edit</a>
              <a class="dropdown-item btn btn-info btn-sm btn-delete-transaksi" href="#" data-no_resi="<?= $no_resi;?>">Delete</a> 

            </div>
            </div>
            </div>
            </td>
            <!-- Edit Transaksi-->
            <form action="<?php echo base_url('admin/Admin_controller/edittransaksi'); ?>" method="post">
            <div class="modal fade" id="edittransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Data Transaksi</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <input type="hidden" class="form-control no_resi" name="no_resi">
                                <div class="form-group">
                                <label>No Resi</label>
                                  <input type="text" name="no_resi" class="form-control no_resi" id="exampleInputEmail" aria-describedby="emailHelp" disabled="true">
                                </div>
                                <div class="form-group">
                                <label>Nama User</label>
                                  <input type="text" name="id_user" class="form-control id_user" id="exampleInputEmail" aria-describedby="emailHelp" disabled="true">
                                </div>
                                <div class="form-group">
                                <label>Dari Kota</label>
                                  <input type="text" name="id_darikota" class="form-control id_darikota" id="exampleInputEmail" aria-describedby="emailHelp" disabled="true">
                                </div>
                                <div class="form-group">
                                <label>Ke Kota</label>
                                  <input type="text" name="id_kekota" class="form-control id_kekota" id="exampleInputEmail" aria-describedby="emailHelp" disabled="true">
                                </div>
                                <div class="form-group">
                                <label>Nama Penerima</label>
                                  <input type="text" name="nama_penerima" class="form-control nama_penerima" id="exampleInputEmail" aria-describedby="emailHelp" disabled="true">
                                </div>
                                <div class="form-group">
                                <label>Alamat Penerima</label>
                                  <input type="text" name="alamat_penerima" class="form-control alamat_penerima" id="exampleInputEmail" aria-describedby="emailHelp" disabled="true">
                                </div>
                                <div class="form-group">
                                <label>Jenis Paket</label>
                                  <input type="text" name="id_jpkt" class="form-control id_jpkt" id="exampleInputEmail" aria-describedby="emailHelp" disabled="true">
                                </div>
                                <div class="form-group">
                                <label>Harga</label>
                                  <input type="text" name="harga" class="form-control harga" id="exampleInputEmail" aria-describedby="emailHelp" disabled="true">
                                </div>
                                <div class="form-group">
                                <label>Counter</label>
                                <select name="id_counter" class="form-control id_counter">
                                <?php                        
                                                foreach($counter->result_array() as $v):          
                                                $id_counterr=$v['id_counter'];
                                                $nama_counter=$v['nama_counter'];                      
                                                ?>
                                <option value="<?php echo $id_counterr; ?>"><?php echo $nama_counter; ?></option>
                                                <?php endforeach; ?>
                                </select>
                                </div>
                                <div class="form-group">
                                <label>Jenis Pembayaran</label>
                                  <input type="text" name="id_pembayaran" class="form-control id_pembayaran" id="exampleInputEmail" aria-describedby="emailHelp" disabled="true">
                                </div>
                                <div class="form-group">
                                <label>Kurir</label>
                                <select name="id_kurir" class="form-control id_kurir">
                                <?php                        
                                                foreach($kurir->result_array() as $v):          
                                                $id_kurir=$v['id_kurir'];
                                                $nama_kurir=$v['nama_kurir'];                      
                                                ?>
                                <option value="<?php echo $id_kurir; ?>"><?php echo $nama_kurir; ?></option>
                                                <?php endforeach; ?>
                                </select>
                                </div>
                                <div class="form-group">
                                <label>Status</label>
                                <select name="id_status" class="form-control id_status">
                                <?php                        
                                                foreach($status->result_array() as $v):          
                                                $id_status=$v['id_status'];
                                                $nama_status=$v['nama_status'];                      
                                                ?>
                                <option value="<?php echo $id_status; ?>"><?php echo $nama_status; ?></option>
                                                <?php endforeach; ?>
                                </select>
                                </div>
                                </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary">Save</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>

<!-- Cetak Transaksi-->
<form action="<?php echo base_url('admin/Admin_controller/get_date_laporan_transaksi'); ?>" method="post" target="_blank">
            <div class="modal fade" id="cetaklaporantransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan Transaksi</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                      </button>
                    </div>
                    <div class="modal-body">
                                <div class="form-group">
                                <label>Dari</label>
                                  <input type="date" name="dari_tanggal" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" >
                                </div>
                                <div class="form-group">
                                <label>Sampai</label>
                                  <input type="date" name="sampai_tanggal" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" >
                                </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary">Print</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <!-- Delete Transaksi-->
            <form action="<?php echo base_url('admin/Admin_controller/deletetransaksi'); ?>" method="post">
            <div class="modal fade" id="deletetransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Peringatan!!</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">Apakah anda yakin ingin mengapus data ini?</div>
                    <div class="modal-footer">
                    <input type="hidden" name="no_resi" class="no_resi">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-danger">Hapus</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach;?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->