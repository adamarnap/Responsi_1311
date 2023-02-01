<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-settings.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Menu Utama Dashboard toko  </h1>

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
                                <li class="nav-item"><a href="#" class="nav-link">Produk</a></li>
                                <li class="nav-item"><a href="<?php echo site_url('mmember/member'); ?>" class="nav-link">Pesanan</a></li>
                                <li class="nav-item"><a href="<?php echo site_url('mmember/member'); ?>" class="nav-link">Laporan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <?php if (count($toko) > 1) { ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="<?php echo site_url('member/buat_toko'); ?>">Silakan Membuat Toko</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Data Toko</h4>
                                        <div class="card-header-action">

                                        </div>
                                    </div>
                                    </div>

                                    
                                    <div class="col-md-12">

            




                                        <div class="card">
                                            <div class="card-header">
                                            <h4>Data Toko</h4>
                                            <div class="card-header-action">
                                            
                                            </div>
                                            </div>
                                            <div class="card-body p-0">
                                            <div class="table-responsive table-invoice">
                                                <table class="table table-striped">
                                                <tr>
                                                    <th>Nama Toko</th>
                                                    <th>Deskripsi</th>
                                                    <th>Logo</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                    <th>Detail</th>
                                                </tr>
                                                    <?php foreach ($toko as $item) { ?>
                                                    <tr>
                                                    <td><?php echo $item->namaToko; ?></td> 
                                                    <td><?php echo $item->deskripsi; ?></td> 
                                                    <td><?php echo $item->logo; ?></td> 
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
                                                    <a href="<?php echo site_url('home/non_aktif/'.$item->idToko); ?>" class="btn btn-warning" >Tidak Aktif</a> 
                                                    <?php 
                                                    } else { 
                                                        ?>
                                                    <a href="<?php echo site_url('home/aktif/'.$item->idToko); ?>" class="btn btn-danger">Aktif</a>
                                                    <?php 
                                                    } 
                                                    ?> 
                                                    </td>

                                                    <td><a href="<?php echo site_url('Member/detail/'.$item->idToko); ?>" class="badge badge-primary" >Detail</a> </td> 

                                                    </tr> 
                                                <?php } ?>

                                               
                                                        
                                        
                                        
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } else { ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="<?php echo site_url('mmember/member/create_toko'); ?>">Silakan Membuat Toko</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    <?php } ?>

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