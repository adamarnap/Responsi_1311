<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                <div class="breadcrumb-item">Form</div>
            </div>
        </div>



        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <form method="POST" action="<?= site_url('admin/kurir/save'); ?>">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Tambah Kurir</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Kurir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputEmail3" name="namaKurir" placeholder="Nama Kurir">
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