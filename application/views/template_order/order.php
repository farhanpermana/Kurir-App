<!-- Begin Page Content -->
<div class="container-fluid">
<br>
<br>
<br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Order Request</h6>
  </div>
  <div class="card-body">
    <form action="" method="POST">
                    <div class="form-group">
                    <label>Dari Kota</label>
                    <select name="id_darikota" id="id-darikota" class="form-control id_darikota">
                    <option></option>
                                <?php                        
                                                foreach($dari_kota->result_array() as $v):          
                                                $id_darikota=$v['id_darikota'];
                                                $nama_darikota=$v['nama_darikota'];                      
                                                ?>    
                                <option value="<?php echo $id_darikota; ?>"><?php echo $nama_darikota; ?></option>
                                                <?php endforeach; ?>
                                </select>
                    </div>

                    <div class="form-group">
                    <label>Ke Kota</label>
                    <select name="id_kekota" class="form-control id_kekota" id="id-kekota">
                    <option></option>
                                <?php                        
                                                foreach($ke_kota->result_array() as $v):          
                                                $id_kekota=$v['id_kekota'];
                                                $nama_kekota=$v['nama_kekota'];                      
                                                ?>
                                <option value="<?php echo $id_kekota; ?>"><?php echo $nama_kekota; ?></option>
                                                <?php endforeach; ?>
                                </select>
                    </div>


                    <div class="form-group">
                      <label>Nama Penerima</label>
                      <input type="text" name="nama_penerima" class="form-control nama_penerima" id="nama-penerima" aria-describedby="emailHelp">
                     </div>

                    <div class="form-group">
                      <label>Alamat Lengkap Penerima</label>
                      <input type="text" name="alamat_penerima" class="form-control alamat_penerima" id="alamat-penerima" aria-describedby="emailHelp">
                     </div>

                    <div class="form-group">
                    <label>Jenis Paket</label>
                    <select name="id_jpkt" class="form-control id_kekota" id="id-jpkt">
                    <option></option>
                                <?php                        
                                foreach($jenis_pkt->result_array() as $v):          
                                $id_jpkt=$v['id_jpkt'];
                                $nama_jpkt=$v['nama_jpkt'];     
                                $harga=$v['harga'];                    
                                ?>              
                                <option class="select-jenispaket" id="hargashow" value="<?php echo $id_jpkt; ?>" ><?php echo $nama_jpkt; ?></option>
                                <?php endforeach; ?>       
                                </select>    
                    </div>

                     <div class="form-group">
                    <label>Jenis Pembayaran</label>
                    <select name="id_pembayaran" class="form-control id_pembayaran" id="id-pembayaran">
                    <option></option>
                                <?php                        
                                foreach($pembayaran->result_array() as $v):          
                                $id_pembayaran=$v['id_pembayaran'];
                                $nama_pembayaran=$v['nama_pembayaran'];                    
                                ?>    
                                <option value="<?php echo $id_pembayaran; ?>"><?php echo $nama_pembayaran; ?></option>
                                <?php endforeach; ?>       
                                </select>
                    </div>
   <input type="hidden" value="<?php echo $id_user; ?>">
  <button type="button" class="btn btn-primary btn-get-order-request">Submit</button>
</form>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Order -->
<form action="<?php echo base_url('user/User_controller/simpanorderrequest'); ?>" method="post">
            <div class="modal fade" id="getorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <label>Dari Kota</label>
                    <select name="id_darikota" class="form-control id_darikota" readonly>
                    <option></option>
                                <?php                        
                                                foreach($dari_kota->result_array() as $v):          
                                                $id_darikota=$v['id_darikota'];
                                                $nama_darikota=$v['nama_darikota'];                      
                                                ?>    
                                <option value="<?php echo $id_darikota; ?>"><?php echo $nama_darikota; ?></option>
                                                <?php endforeach; ?>
                                </select>
                    </div>
                    <div class="form-group">
                    <label>Ke Kota</label>
                    <select name="id_kekota" class="form-control id_kekota" readonly>
                    <option></option>
                                <?php                        
                                                foreach($ke_kota->result_array() as $v):          
                                                $id_kekota=$v['id_kekota'];
                                                $nama_kekota=$v['nama_kekota'];                      
                                                ?>
                                <option value="<?php echo $id_kekota; ?>"><?php echo $nama_kekota; ?></option>
                                                <?php endforeach; ?>
                                </select>
                    </div>


                    <div class="form-group">
                      <label>Nama Penerima</label>
                      <input type="text" name="nama_penerima" class="form-control nama_penerima" aria-describedby="emailHelp" readonly>
                     </div>

                    <div class="form-group">
                      <label>Alamat Lengkap Penerima</label>
                      <input type="text" name="alamat_penerima" class="form-control alamat_penerima"  aria-describedby="emailHelp" readonly>
                     </div>

                    <div class="form-group">
                    <label>Jenis Paket</label>
                    <select name="id_jpkt" class="form-control id_jpkt" readonly>
                    <option></option>
                                <?php                        
                                foreach($jenis_pkt->result_array() as $v):          
                                $id_jpkt=$v['id_jpkt'];
                                $nama_jpkt=$v['nama_jpkt'];     
                                $harga=$v['harga'];                    
                                ?>              
                                <option class="select-jenispaket" id="hargashow" value="<?php echo $id_jpkt; ?>" ><?php echo $nama_jpkt; ?></option>
                                <?php endforeach; ?>       
                                </select>    
                    </div>

                     <div class="form-group">
                    <label>Jenis Pembayaran</label>
                    <select name="id_pembayaran" class="form-control id_pembayaran" readonly>
                    <option></option>
                                <?php                        
                                foreach($pembayaran->result_array() as $v):          
                                $id_pembayaran=$v['id_pembayaran'];
                                $nama_pembayaran=$v['nama_pembayaran'];                    
                                ?>    
                                <option value="<?php echo $id_pembayaran; ?>"><?php echo $nama_pembayaran; ?></option>
                                <?php endforeach; ?>       
                                </select>
                    </div>
                    <div class="form-group">
                    <label>Total Ongkir</label>
                    <select name="id_jpkt" class="form-control id_jpkt" readonly>
                    <option></option>
                                <?php                        
                                foreach($jenis_pkt->result_array() as $v):          
                                $id_jpkt=$v['id_jpkt'];
                                $nama_jpkt=$v['nama_jpkt'];     
                                $harga=$v['harga'];                    
                                ?>              
                                <option class="select-jenispaket" value="<?php echo $id_jpkt; ?>" ><?php echo $harga; ?></option>
                                <?php endforeach; ?>       
                                </select>    
                    </div>
                    <div class="modal-footer">
                    
                      <input type="hidden" name="id_counter" class="id_counter">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary">Order</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>