   <!-- Main Content -->
   <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Ongkir</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Kategori</a></div>
              <div class="breadcrumb-item">Main</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Ongkir</h2>
      
            <?php $this->view('pesan_delete') ?> 

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6"> 
              <form method="POST" action="<?php echo site_url('admin/ongkir/save');?>">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Ongkir</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">  
                        <tr> 
                        <th>Kurir</th> 
                        <td> 
                          <select class="form-control" name="idKurir" required> 
                          <option value="0">-Pilih Kurir-</option> 
                            <?php  foreach ($kurir as $item) { ?> 
                              <option value="<?php echo $item->idKurir; ?> idKurir">
                            <?php echo $item->namaKurir; ?>  
                            </option>   
                            <?php } ?>  
                            </select>
                            </td>
                        <tr>

                        <tr> 
                        <th>Kota Asal</th> 
                        <td> 
                          <select class="form-control" name="idKotaAsal" required> 
                          <option value="0">-Pilih Kota Asal-</option> 
                            <?php  foreach ($kota as $item) { ?> 
                              <option value="<?php echo $item->idKota; ?> idKota">
                            <?php echo $item->namaKota; ?>  
                            </option>   
                            <?php } ?>  
                            </select>
                            </td>
                        </tr>  
                        <tr> 
                        </tr>  
                        <tr> 

                        <th>Kota Tujuan</th> 
                        <td> 
                            <select class="form-control" name="idKotaTujuan" required> 
                            <option value="0">-Pilih Kota Tujuan-</option>    
                            <?php foreach ($kota as $item) { ?> 
                              <option value="<?php echo $item->idKota; ?> idKota"> 
                            <?php echo $item->namaKota; ?>  
                            </option> 
                            <?php } ?>
                            </select> 
                            </td>  
                        </tr> 
                        <tr>  
                            <th>Ongkos</th>
                            <td> 
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="biaya" placeholder="biaya" required>
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
        </section>
      </div>