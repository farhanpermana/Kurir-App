<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>assets/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url(); ?>js/demo/chart-pie-demo.js"></script>

  <script>
    $(document).ready(function(){
 
      //Counter
        // get Edit Counter
        $('.btn-edit-counter').on('click',function(){
            // get data from button edit
            const id_counter = $(this).data('id_counter');
            const nama_counter = $(this).data('nama_counter');
            const alamat_counter = $(this).data('alamat_counter');
            // Set data to Form Edit Competition
            $('.id_counter').val(id_counter);
            $('.nama_counter').val(nama_counter);
            $('.alamat_counter').val(alamat_counter);
            // Call Modal Edit Competition
            $('#editcounter').modal('show');
        });
 
        // get Delete Counter
        $('.btn-delete-counter').on('click',function(){
            // get data from button delete Counter
            const id_counter = $(this).data('id_counter');
            // Set data to Form delete Counter
            $('.id_counter').val(id_counter);
            
            // Call Modal delete Counter
            $('#deletecounter').modal('show');
        });
      //End Counter

      //Jenis Paket
        // get Edit Jenis Paket
        $('.btn-edit-jenispaket').on('click',function(){
            // get data from button edit
            const id_jpkt = $(this).data('id_jpkt');
            const nama_jpkt = $(this).data('nama_jpkt');
            const harga = $(this).data('harga');
            // Set data to Form Edit Competition
            $('.id_jpkt').val(id_jpkt);
            $('.nama_jpkt').val(nama_jpkt);
            $('.harga').val(harga);
            // Call Modal Edit Competition
            $('#editjenispaket').modal('show');
        });
 
        // get Delete Jenis Paket
        $('.btn-delete-jenispaket').on('click',function(){
            // get data from button delete Jenis Paket
            const id_jpkt = $(this).data('id_jpkt');
            // Set data to Form delete Jenis Paket
            $('.id_jpkt').val(id_jpkt);
            
            // Call Modal delete Jenis Paket
            $('#deletejenispaket').modal('show');
        });
      //End Jenis Paket

      //Kurir
        // get Edit Kurir
        $('.btn-edit-kurir').on('click',function(){
            // get data from button edit
            const id_kurir = $(this).data('id_kurir');
            const nama_kurir = $(this).data('nama_kurir');
            // Set data to Form Edit Competition
            $('.id_kurir').val(id_kurir);
            $('.nama_kurir').val(nama_kurir);
            // Call Modal Edit Competition
            $('#editkurir').modal('show');
        });
 
        // get Delete Kurir
        $('.btn-delete-kurir').on('click',function(){
            // get data from button delete Kurir
            const id_kurir = $(this).data('id_kurir');
            // Set data to Form delete Kurir
            $('.id_kurir').val(id_kurir);
            
            // Call Modal delete Kurir
            $('#deletekurir').modal('show');
        });
      //End Kurir

      //status
        // get Edit status
        $('.btn-edit-status').on('click',function(){
            // get data from button edit
            const id_status = $(this).data('id_status');
            const nama_status = $(this).data('nama_status');
            // Set data to Form Edit Competition
            $('.id_status').val(id_status);
            $('.nama_status').val(nama_status);
            // Call Modal Edit Competition
            $('#editstatus').modal('show');
        });
 
        // get Delete status
        $('.btn-delete-status').on('click',function(){
            // get data from button delete status
            const id_status = $(this).data('id_status');
            // Set data to Form delete status
            $('.id_status').val(id_status);
            
            // Call Modal delete status
            $('#deletestatus').modal('show');
        });
      //End status

      //Dari Kota
        // get Edit Dari Kota
        $('.btn-edit-darikota').on('click',function(){
            // get data from button edit
            const id_darikota = $(this).data('id_darikota');
            const nama_darikota = $(this).data('nama_darikota');
            // Set data to Form Edit Competition
            $('.id_darikota').val(id_darikota);
            $('.nama_darikota').val(nama_darikota);
            // Call Modal Edit Competition
            $('#editdarikota').modal('show');
        });
 
        // get Delete Dari Kota
        $('.btn-delete-darikota').on('click',function(){
            // get data from button delete Dari Kota
            const id_darikota = $(this).data('id_darikota');
            // Set data to Form delete darikota
            $('.id_darikota').val(id_darikota);
            
            // Call Modal delete darikota
            $('#deletedarikota').modal('show');
        });
      //End Dari kota

      //Ke Kota
        // get Edit Ke Kota
        $('.btn-edit-kekota').on('click',function(){
            // get data from button edit
            const id_kekota = $(this).data('id_kekota');
            const nama_kekota = $(this).data('nama_kekota');
            // Set data to Form Edit Competition
            $('.id_kekota').val(id_kekota);
            $('.nama_kekota').val(nama_kekota);
            // Call Modal Edit Competition
            $('#editkekota').modal('show');
        });
 
        // get Delete Ke Kota
        $('.btn-delete-kekota').on('click',function(){
            // get data from button delete Ke Kota
            const id_kekota = $(this).data('id_kekota');
            // Set data to Form delete kekota
            $('.id_kekota').val(id_kekota);
            
            // Call Modal delete kekota
            $('#deletekekota').modal('show');
        });
      //End Ke kota

      //Pembayaran
        // get Edit Ke Pembayaran
        $('.btn-edit-pembayaran').on('click',function(){
            // get data from button edit
            const id_pembayaran = $(this).data('id_pembayaran');
            const nama_pembayaran = $(this).data('nama_pembayaran');
            // Set data to Form Edit Competition
            $('.id_pembayaran').val(id_pembayaran);
            $('.nama_pembayaran').val(nama_pembayaran);
            // Call Modal Edit Competition
            $('#editpembayaran').modal('show');
        });
 
        // get Delete Ke Pembayaran
        $('.btn-delete-pembayaran').on('click',function(){
            // get data from button delete Ke Pembayaran
            const id_pembayaran = $(this).data('id_pembayaran');
            // Set data to Form delete Pembayaran
            $('.id_pembayaran').val(id_pembayaran);
            
            // Call Modal delete Pembayaran
            $('#deletepembayaran').modal('show');
        });
      //End Pembayaran

      //Profile
      // get Data User
      $('.btn-edit-profile').on('click',function(){
            // get data from button edit
            const id_user = $(this).data('id_user');
            const username = $(this).data('username');
            const nama_user = $(this).data('nama_user');
            const j_kelamin = $(this).data('j_kelamin');
            const tgl_lahir = $(this).data('tgl_lahir');
            const pw = $(this).data('pw');
            // Set data to Form Edit Competition
            $('.id_user').val(id_user);
            $('.username').val(username);
            $('.nama_user').val(nama_user);
            $('.j_kelamin').val(j_kelamin).trigger('change');
            $('.tgl_lahir').val(tgl_lahir);
            $('.pw').val(pw);
            // Call Modal Edit Competition
            $('#profileModal').modal('show');
        });
        
        //Transaksi
        // get Edit Transaksi
        $('.btn-edit-transaksi').on('click',function(){
            // get data from button edit
            const no_resi = $(this).data('no_resi');
            const tgl = $(this).data('tgl');
            const id_user = $(this).data('id_user');
            const id_darikota = $(this).data('id_darikota');
            const id_kekota = $(this).data('id_kekota');
            const nama_penerima = $(this).data('nama_penerima');
            const alamat_penerima = $(this).data('alamat_penerima');
            const id_jpkt = $(this).data('id_jpkt');
            const harga = $(this).data('harga');
            const id_counter = $(this).data('id_counter');
            const id_pembayaran = $(this).data('id_pembayaran');
            const id_kurir = $(this).data('id_kurir');
            const id_status = $(this).data('id_status');

            // Set data to Form Edit Competition
            $('.no_resi').val(no_resi);
            $('.tgl').val(tgl);
            $('.id_user').val(id_user);
            $('.id_darikota').val(id_darikota);
            $('.id_kekota').val(id_kekota);
            $('.nama_penerima').val(nama_penerima);
            $('.alamat_penerima').val(alamat_penerima);
            $('.id_jpkt').val(id_jpkt);
            $('.harga').val(harga); 
            $('.id_counter').val(id_counter);
            $('.id_pembayaran').val(id_pembayaran);
            $('.id_kurir').val(id_kurir);
            $('.id_status').val(id_status);
            // Call Modal Edit Competition
            $('#edittransaksi').modal('show');
        });
 
        // get Delete Transaksi
        $('.btn-delete-transaksi').on('click',function(){
            // get data from button delete Transaksi
            const no_resi = $(this).data('no_resi');
            // Set data to Form delete Transaksi
            $('.no_resi').val(no_resi);
            
            // Call Modal delete Transaksi
            $('#deletetransaksi').modal('show');
        });
      //End Transaksi

      // get Order Request
        $('.btn-get-order-request').on('click',function(){
            // get data from button edit
            const id_darikota = document.getElementById('id-darikota').value;
            const id_kekota = document.getElementById('id-kekota').value;
            const nama_penerima = document.getElementById('nama-penerima').value;
            const alamat_penerima = document.getElementById('alamat-penerima').value;
            const id_jpkt = document.getElementById('id-jpkt').value;
            const id_pembayaran = document.getElementById('id-pembayaran').value;

            // // Set data to Form Edit Competition
             $('.id_darikota').val(id_darikota);
             $('.id_kekota').val(id_kekota);
             $('.nama_penerima').val(nama_penerima);
             $('.alamat_penerima').val(alamat_penerima);
             $('.id_jpkt').val(id_jpkt);
             $('.id_pembayaran').val(id_pembayaran);
          
            // Call Modal Edit Competition
            $('#getorder').modal('show');
        });

        //Admin User
        // get Password ke Admin User
        $('.btn-gantipwuser').on('click',function(){
            // get data from button edit
            const id_user = $(this).data('id_user');
            const pw = $(this).data('pw');
            // Set data to Form Edit Competition
            $('.id_user').val(id_user);
            $('.pw').val(pw);
            // Call Modal Edit Competition
            $('#gantipwuser').modal('show');
        });

        // get Edit Ke Admin User
        $('.btn-edit-adminuser').on('click',function(){
            // get data from button edit
            const id_user = $(this).data('id_user');
            const username = $(this).data('username');
            const nama_user = $(this).data('nama_user');
            const level = $(this).data('level');
            // Set data to Form Edit Competition
            $('.id_user').val(id_user);
            $('.username').val(username);
            $('.nama_user').val(nama_user);
            $('.level').val(level);
            // Call Modal Edit Competition
            $('#editadminuser').modal('show');
        });
 
        // get Delete Ke Admin User
        $('.btn-delete-adminuser').on('click',function(){
            // get data from button delete Ke Admin User
            const id_user = $(this).data('id_user');
            // Set data to Form delete Admin User
            $('.id_user').val(id_user);
            
            // Call Modal delete Admin User
            $('#deleteadminuser').modal('show');
        });
      //End Pembayaran

    });

  </script>
  
</body>

</html>