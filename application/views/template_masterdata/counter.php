<!-- Begin Page Content -->
<div class="container-fluid">
<br>
<div><button type="button" class="btn btn-success" href="#" data-toggle="modal" data-target="#tambahModal">Tambah Data</button></div>
<br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Master Data Counter</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Counter</th>
            <th>Alamat Counter</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          foreach($counter->result_array() as $s):
          $id_counter=$s['id_counter'];
          $nama_counter=$s['nama_counter'];
          $alamat_counter=$s['alamat_counter'];
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $nama_counter;?></td>
            <td><?php echo $alamat_counter;?></td>
            <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group btn-group-sm" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pilih Aksi
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item btn btn-info btn-sm btn-edit-counter" href="#" data-id_counter="<?= $id_counter;?>" data-nama_counter="<?= $nama_counter;?>" data-alamat_counter="<?= $alamat_counter;?>">Edit</a>
              <a class="dropdown-item btn btn-info btn-sm btn-delete-counter" href="#" data-id_counter="<?= $id_counter;?>">Delete</a> 

            </div>
            </div>
            </div>
            </td>
            <!-- Tambah Modal-->
            <form action="<?php echo base_url('admin/Admin_controller/tambahcounter'); ?>" method="post">
            <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                  <input type="text" name="nama_counter" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nama Counter";?>
                                </div>
                                <div class="form-group">
                                  <input type="text" name="alamat_counter" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Alamat Counter";?>
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

            <!-- Edit Counter-->
            <form action="<?php echo base_url('admin/Admin_controller/editcounter'); ?>" method="post">
            <div class="modal fade" id="editcounter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Data Counter</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                      </button>
                    </div>
                    <div class="modal-body"></div>
                    <input type="hidden" class="form-control id_counter" name="id_counter">
                                <div class="form-group">
                                <label>Nama Counter</label>
                                  <input type="text" name="nama_counter" class="form-control nama_counter" id="exampleInputEmail" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                <label>Alamat Counter</label>
                                  <input type="text" name="alamat_counter" class="form-control alamat_counter" id="exampleInputEmail" aria-describedby="emailHelp">
                                </div>
                    <div class="modal-footer">
                      <input type="hidden" name="id_counter" class="id_counter">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary">Save</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <!-- Delete Counter-->
            <form action="<?php echo base_url('admin/Admin_controller/deletecounter'); ?>" method="post">
            <div class="modal fade" id="deletecounter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="hidden" name="id_counter" class="id_counter">
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