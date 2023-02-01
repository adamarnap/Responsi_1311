<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-settings.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Menu Utama Dashboard Member</h1>

        </div>

        <div class="section-body">


            <div id="output-status"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Menu Member</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item"><a href="<?php echo site_url('mmember/member'); ?>" class="nav-link">Beranda</a></li>
                                <li class="nav-item"><a href="http://localhost/tokokita_dev/index.php/member/transaksi" class="nav-link">Transaksi</a></li>
                                <li class="nav-item"><a href="http://localhost/tokokita_dev/index.php/member/riwayat_transaksi" class="nav-link">Riwayat Transaksi</a></li>
                                <li class="nav-item"><a href="<?php echo site_url('mmember/member/toko'); ?>" class="nav-link">Toko</a></li>
                                <li class="nav-item"><a href="http://localhost/tokokita_dev/index.php/member/ubah_profil" class="nav-link">Ubah Profil</a></li>
                                <li class="nav-item"><a href="<?php echo site_url('home/logout'); ?>" class="nav-link">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


              <div class="col-8"> 
				<form method="POST" enctype="multipart/form-data" action="<?php echo site_url('Member/save_toko');?>">
					<div class="card">

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">  
                 
                        <tr> 
                          
                        <th>Nama Toko</th>
                            <td> 
                            <div class="col-sm-14">
                            <input type="text" class="form-control" id="site-namaToko" name="namaToko" placeholder="Nama Toko">
                            </div> 
                            </td> 

                        </tr>  
                        <tr> 
                        </tr>  
                        <tr> 
 
                        <th>Logo</th>
                            <td> 
                            <div class="col-sm-14">
                            <input type="file" class="form-control" id="site-logo" name="logo" placeholder="Masukan Logo">
                            </div> 
                            </td> 
                        
                        </tr> 
                        <tr>  
                            <th>Deskripsi</th>
                            <td> 
                            <div class="col-sm-14">
                            <input type="text" class="form-control" id="site-deskripsi" name="deskripsi" placeholder="Deskripsi">
                            </div> 
                            </td> 
                        </tr>

                      </table>
						</div> 
					  <div class="card-footer">
						<button type="submit" class="btn btn-primary">Simpan</button>
					  </div>
                  </div>
                  
                </div>
              </div>
             
            </div>
                


            </div>
        </div>
    </section>
</div>

</div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="http://localhost/tokokita_dev/assets/admin/assets/js/stisla.js"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="http://localhost/tokokita_dev/assets/admin/assets/js/scripts.js"></script>
<script src="http://localhost/tokokita_dev/assets/admin/assets/js/custom.js"></script>
</body>

</html>