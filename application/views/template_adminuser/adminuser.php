<!-- Begin Page Content -->
<div class="container-fluid">
<br>
<br>
<br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">All User</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Nama User</th>
            <th>Level</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $no = 1;
          foreach($user->result_array() as $s):
          $id_user=$s['id_user'];
          $username=$s['username'];
          $nama_user=$s['nama_user'];
          $level=$s['level'];
          $pw=$s['pw'];
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $username;?></td>
            <td><?php echo $nama_user;?></td>
            <td><?php echo $level;?></td>
            <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group btn-group-sm" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pilih Aksi
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item btn btn-info btn-sm btn-gantipwuser" href="#"
            data-id_user="<?= $id_user;?>"
            data-pw="<?= $pw;?>">Ganti Password</a> 
            <a class="dropdown-item btn btn-info btn-sm btn-edit-adminuser" href="#" 
            data-id_user="<?= $id_user;?>"
            data-username="<?= $username;?>"  
            data-nama_user="<?= $nama_user;?>" 
            data-level="<?= $level;?>">Edit</a>
              <a class="dropdown-item btn btn-info btn-sm btn-delete-adminuser" href="#" data-id_user="<?= $id_user;?>">Delete</a> 

            </div>
            </div>
            </div>
            </td>

            <!-- Edit User Password-->
            <form action="<?php echo base_url('admin/Admin_controller/gantipwuser'); ?>" method="post">
            <div class="modal fade" id="gantipwuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Password User</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                      </button>
                    </div>
                    <div class="modal-body"></div>
                    <input type="hidden" class="form-control id_user" name="id_user">
                                <div class="form-group">
                                <label>Password</label>
                                  <input type="password" name="pw" class="form-control pw" id="exampleInputEmail" aria-describedby="emailHelp">
                                </div>
                    <div class="modal-footer">
                      <input type="hidden" name="id_user" class="id_user">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary">Save</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <!-- Edit Admin User-->
            <form action="<?php echo base_url('admin/Admin_controller/editadminuser'); ?>" method="post">
            <div class="modal fade" id="editadminuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                      </button>
                    </div>
                    <div class="modal-body"></div>
                    <input type="hidden" class="form-control id_user" name="id_user">
                                <div class="form-group">
                                <label>Username</label>
                                  <input type="text" name="username" class="form-control username" id="exampleInputEmail" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                <label>Nama User</label>
                                  <input type="text" name="nama_user" class="form-control nama_user" id="exampleInputEmail" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                <label>Level</label>
                                  <select name="level" class="form-control level" id="exampleInputEmail" aria-describedby="emailHelp">
                                  <option>user</option>
                                    <option>admin</option>
                                    </select>
                                </div>
                    <div class="modal-footer">
                      <input type="hidden" name="id_user" class="id_user">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary">Save</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>

            <!-- Delete Admin User-->
            <form action="<?php echo base_url('admin/Admin_controller/deleteadminuser'); ?>" method="post">
            <div class="modal fade" id="deleteadminuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="hidden" name="id_user" class="id_user">
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