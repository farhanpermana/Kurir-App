<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6"><img src="https://www.pngitem.com/pimgs/m/22-227282_animated-clipart-delivery-truck-hd-png-download.png" width="500" height="420"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form method="post" accept-charset="utf-8" class="user" action="<?php echo base_url ('djiwa/check') ?>">
                    <div class="form-group">
                      <input type="username" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="pw" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <button href="index.html" class="btn btn-primary btn-user btn-block medium">
                      Login
                    </button>
                    <hr>
                  <div class="text-center">
                    <a class="medium" href="<?php echo BASE_URL();?>djiwa/register">Daftar!!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>