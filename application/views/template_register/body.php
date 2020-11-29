<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5"><img src="https://www.pngitem.com/pimgs/m/22-227282_animated-clipart-delivery-truck-hd-png-download.png" width="500" height="400"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru!</h1>
              </div>
              <form class="user" class="user" action="<?php echo base_url('djiwa/create_users'); ?>" method="post">
                <div class="form-group">
                    <input type="text" name="nama_user" class="form-control form-control-user" id="exampleName" placeholder="Nama">
                  </div>
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-user" id="exampleUsername" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" name="pw" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                </div>
                <button href="login.html" class="btn btn-primary btn-user btn-block medium">
                  Buat Akun
                </a>
                </div>
                <div class="text-center">
                <a class="small" href="<?php echo BASE_URL(); ?>djiwa/index">Sudah punya akun? Login!</a>
              </form>
              <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
