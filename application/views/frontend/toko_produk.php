
      <!-- Main Content -->
      <div class="main-content">
        <section class="section"> 
          


          <div class="section-header">      
          <div class="col-10 col-md-6 col-lg-20">
            <h1>Menu Utama Dashboard Toko "<?php echo $namaToko->namaToko; ?>"</h1>
          </div>  
          </div>

             

          <div class="row">
              <div class="col-15 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-header">
                      <h6>Menu Toko</h6>
                    </div>  
           
           <div class="col-15 col-md-4 col-lg-8">
            <div class="nav-item active">
              <a href="<?php echo site_url('Member/detail/'.$namaToko->idToko); ?>" class="nav-link">Beranda</a>
            </div>  
          </div>  
           
          <div class="col-15 col-md-8 col-lg-8">
            <div class="nav-item active">
              <a href="<?php echo site_url('Tokoo/produk/'.$namaToko->idToko); ?>" class="nav-link">Produk</a>
            </div>  
          </div> 
           
          <div class="col-15 col-md-8 col-lg-8">
            <div class="nav-item active">
              <a href="#" class="nav-link">Pesanan</a>
            </div>  
          </div> 
           
          <div class="col-15 col-md-8 col-lg-8">
            <div class="nav-item active">
              <a href="#" class="nav-link">Laporan</a>
            </div>  
          </div> 
            
          <div> 
          </div>
          
            
                 
              </div> 
              </div>  



              
              
               <div class="col-md-8">
          <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                         <a href="<?php echo site_url('Tokoo/create_produk/'.$namaToko->idToko); ?>" class="btn btn-primary">Silahkan Masukan Data Produk</a>
                      </li>
               
                    </ul>
                  </div>
                </div>
              </div>
            </div><br>
             
          <?php $this->view('pesan') ?>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Data produk</h4>
                  <div class="card-header-action">
                   
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th> 
                        <th>Action</th>
                        <th>Edit</th> 
                        <th>Hapus</th>
                      </tr>
                         <?php foreach ($produk as $item) { ?>
                        <tr>
                          <td><?php echo $item->namaProduk; ?></td> 
                          <td><?php echo $item->harga; ?></td> 
                          <td><?php echo $item->stok; ?></td>   
                          <td>
                          <a href="<?php echo site_url('home/index/'.$item->idProduk); ?>" class="btn btn-primary">Detail</a>
                        </td>  
                        <td> 
                          <a href="<?php echo site_url('Tokoo/getid/'.$item->idProduk.'/'.$item->idToko); ?>" class="btn btn-warning">Edit</a>
                        </td> 
                        <td> 
                         <a href="<?php echo site_url('Tokoo/delete/'.$item->idProduk.'/'.$item->idToko ); ?>" class="btn btn-danger"> Hapus</a>
                        </td>
                        </tr> 
                        <?php } ?>  
                      </tr>

                         
                    
                               
              
               
                    </table>
                  </div>
                </div>
              </div>
            </div>
              </div>  
               
               </div> 
            </div> 
            </div>
              
               
                 
        
               
                
                 
            
            
                  
                  
         
        
      

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="../node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/index-0.js"></script>
</body>
</html>
