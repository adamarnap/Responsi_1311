      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Ongkir</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Form</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Manajemen Ongkir</h2>
            <p class="section-lead">
              Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
            </p>

            <div class="row">

              <div class="col-12 col-md-6 col-lg-6">
               <form method="POST" action="<?php echo site_url('admin/ongkir/edit');?>"> 
                <input type="hidden" name="id" value="<?php echo $ongkir->idBiayaKirim; ?>">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Edit Ongkir</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Kurir</label>
                      <div class="col-sm-9">
                      <td> 
                          <select class="form-control" name="idKurir"> 
                          <?php  foreach ($kurir as $item) { ?> 
                          <option value="<?php echo $item->idKurir; ?>"><?php echo $item->namaKurir; ?></option>  
                          <?php } ?>
                            <?php  foreach ($kurir as $item) { ?> 
                              <option value="<?php echo $item->idKurir; ?>">
                            <?php echo $item->namaKurir; ?>  
                            </option>   
                            <?php } ?>  
                            </select>
                            </td>
                      </div>
                    </div>
                  </div>  
                   
                  <div class="card-body">
                  <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kota Asal</label>
                      <div class="col-sm-9">
                      <td> 
                          <select class="form-control" name="idKotaAsal"> 
                          <?php  foreach ($kota as $item) { ?> 
                          <option value="<?php echo $item->idKota; ?>"><?php echo $item->namaKota; ?></option>  
                          <?php } ?>
                            <?php  foreach ($kota as $item) { ?> 
                              <option value="<?php echo $item->idKota; ?> ">
                            <?php echo $item->namaKota; ?>  
                            </option>   
                            <?php } ?>  
                            </select>
                            </td>
                      </div>
                    </div>   
                  </div> 

                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kota Tujuan</label>
                      <div class="col-sm-9">
                       <td> 
                          <select class="form-control" name="idKotaTujuan"> 
                          <?php  foreach ($ongkir as $item) { ?> 
                          <option value="<?php echo $item->idKotaTujuan; ?>"><?php echo $item->namaKota; ?></option>  
                          <?php } ?>
                            <?php  foreach ($kota as $item) { ?>     
                              <option value="<?php echo $item->idKota; ?>">
                            <?php echo $item->namaKota; ?>  
                            </option>   
                            <?php } ?>  
                            </select>
                            </td>
                      </div>
                    </div>
                  </div>  
                   
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">ongkos</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="biaya" placeholder="biaya" value="<?php echo $ongkir->biaya; ?>">
                      </div>
                    </div>
                  </div> 
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
      </div>