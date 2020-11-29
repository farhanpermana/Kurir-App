    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Peringatan!!</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah anda yakin ingin logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="<?php echo base_url();?>admin/Admin_controller/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

    <!-- Profile Modal-->
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body"></div>
        <form action="<?php echo base_url('admin/Admin_controller/editprofile'); ?>" method="post">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="username" class="form-control username" id="exampleInputEmail" aria-describedby="emailHelp" disabled="true">
                    </div>
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="nama_user" class="form-control nama_user" id="exampleInputEmail" aria-describedby="emailHelp">
                     </div>
                    <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="j_kelamin" class="form-control j_kelamin">
                    <option></option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" class="form-control tgl_lahir" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="pw" class="form-control pw" id="exampleInputEmail" aria-describedby="emailHelp">
                     </div>
        <div class="modal-footer">
        <input type="hidden" name="id_user" class="id_user">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary">Save</a>
        </div>
        </form>
      </div>
    </div>
  </div>