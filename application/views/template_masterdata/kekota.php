<!-- Begin Page Content -->
<div class="container-fluid">
<br>
<div><button type="button" class="btn btn-success" href="#" data-toggle="modal" data-target="#tambahkekota">Tambah Data</button></div>
<br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Master Data Ke Kota</h6>
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
          foreach($ke_kota->result_array() as $s):
          $id_kekota=$s['id_kekota'];
          $nama_kekota=$s['nama_kekota'];
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $nama_kekota;?></td>
            <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group btn-group-sm" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pilih Aksi
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item btn btn-info btn-sm btn-edit-kekota" href="#" data-id_kekota="<?= $id_kekota;?>" data-nama_kekota="<?= $nama_kekota;?>">Edit</a>
              <a class="dropdown-item btn btn-info btn-sm btn-delete-kekota" href="#" data-id_kekota="<?= $id_kekota;?>">Delete</a> 

            </div>
            </div>
            </div>
            </td>
            <!-- Tambah kekekota-->
            <form action="<?php echo base_url('admin/Admin_controller/tambahkekota'); ?>" method="post">
            <div class="modal fade" id="tambahkekota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                  <input type="text" name="nama_kekota" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nama Kota";?>
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

            <!-- Edit Ke Kota-->
            <form action="<?php echo base_url('admin/Admin_controller/editkekota'); ?>" method="post">
            <div class="modal fade" id="editkekota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Data Ke kota</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                      </button>
                    </div>
                    <div class="modal-body"></div>
                    <input type="hidden" class="form-control id_kekota" name="id_kekota">
                                <div class="form-group">
                                <label>Nama Ke Kota</label>
                                  <input type="text" name="nama_kekota" class="form-control nama_kekota" id="exampleInputEmail" aria-describedby="emailHelp">
                                </div>
                    <div class="modal-footer">
                      <input type="hidden" name="id_kekota" class="id_kekota">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary">Save</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <!-- Delete Ke Kota-->
            <form action="<?php echo base_url('admin/Admin_controller/deletekekota'); ?>" method="post">
            <div class="modal fade" id="deletekekota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="hidden" name="id_kekota" class="id_kekota">
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