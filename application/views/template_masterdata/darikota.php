<!-- Begin Page Content -->
<div class="container-fluid">
<br>
<div><button type="button" class="btn btn-success" href="#" data-toggle="modal" data-target="#tambahdarikota">Tambah Data</button></div>
<br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Master Data Dari Kota</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Kota</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          foreach($dari_kota->result_array() as $s):
          $id_darikota=$s['id_darikota'];
          $nama_darikota=$s['nama_darikota'];
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $nama_darikota;?></td>
            <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group btn-group-sm" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pilih Aksi
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item btn btn-info btn-sm btn-edit-darikota" href="#" data-id_darikota="<?= $id_darikota;?>" data-nama_darikota="<?= $nama_darikota;?>">Edit</a>
              <a class="dropdown-item btn btn-info btn-sm btn-delete-darikota" href="#" data-id_darikota="<?= $id_darikota;?>">Delete</a> 

            </div>
            </div>
            </div>
            </td>
            <!-- Tambah darikota-->
            <form action="<?php echo base_url('admin/Admin_controller/tambahdarikota'); ?>" method="post">
            <div class="modal fade" id="tambahdarikota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                      </button>
                    </div>
                    <div class="modal-body"></div>
                    <form method="post" accept-charset="utf-8" class="user" action="#">
                                <div class="form-group">
                                  <input type="text" name="nama_darikota" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nama Kota";?>
                                </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary">Tambah</a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              </form>

            <!-- Edit Dari Kota-->
            <form action="<?php echo base_url('admin/Admin_controller/editdarikota'); ?>" method="post">
            <div class="modal fade" id="editdarikota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Data Dari kota</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                      </button>
                    </div>
                    <div class="modal-body"></div>
                    <input type="hidden" class="form-control id_darikota" name="id_darikota">
                                <div class="form-group">
                                <label>Nama Dari Kota</label>
                                  <input type="text" name="nama_darikota" class="form-control nama_darikota" id="exampleInputEmail" aria-describedby="emailHelp">
                                </div>
                    <div class="modal-footer">
                      <input type="hidden" name="id_darikota" class="id_darikota">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary">Save</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <!-- Delete Dari Kota-->
            <form action="<?php echo base_url('admin/Admin_controller/deletedarikota'); ?>" method="post">
            <div class="modal fade" id="deletedarikota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="hidden" name="id_darikota" class="id_darikota">
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