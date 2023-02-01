<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Toko</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Kategori</a></div>
              <div class="breadcrumb-item">Main</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data toko</h2>
            <?php $this->view('pesan') ?> 

            <div class="row">
              <div class="col-20 col-md-14 col-lg-14">
                <div class="card">
                  <div class="card-header">
                    <h4>Daftar toko</h4><a href="<?php echo site_url('toko/toko/add'); ?>" class="btn btn-primary">Tambah Toko</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Konsumen</th> 
                          <th>Nama Toko</th> 
                          <th>Logo</th>
                          <th>Deskripsi</th> 
                          <th>Status</th>  
                          <th>Action</th>
                        </tr>  
                        <?php foreach ($toko as $item) { ?>
                        <tr> 
                          <td><?php echo $item->idToko; ?></td>
                          <td><?php echo $item->namaKonsumen; ?></td> 
                          <td><?php echo $item->namaToko; ?></td>
                          <td><?php echo $item->logo; ?></td> 
                          <td><?php echo $item->deskripsi; ?></td> 
                          <td>  
                              <?php  
                              if($item->StatusAktif == 'Y'){ 
                                ?> 
                                  <div class="badge badge-success">Aktif</div> 
                              <?php 
                              } else { 
                                ?> 
                                  <div class="badge badge-success">Tidak Aktif</div> 
                              <?php 
                              } 
                              ?>
                          </td>
                          <td>  
                          <?php  
                          if($item->StatusAktif == 'Y'){ 
                            ?> 
                          <a href="<?php echo site_url('toko/toko/non_aktif/'.$item->idToko); ?>" class="btn btn-warning" >Tidak Aktif</a> 
                          <?php 
                          } else { 
                            ?>
                          <a href="<?php echo site_url('toko/toko/aktif/'.$item->idToko); ?>" class="btn btn-danger">Aktif</a>
                          <?php 
                          } 
                          ?> 
                          </td>
                        </tr> 
                      <?php } ?>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
             
            </div>

          </div>
        </section>
      </div>