<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Member</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Member</a></div>
        <div class="breadcrumb-item">Main</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Member</h4><a href="<?php echo site_url('memberr/member/add');?>" class="btn btn-primary"> Tambah Member</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-md">
                  <tr>
                    <th>No. </th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama Konsumen</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Status Aktif</th>
                  </tr>
                  <?php foreach ($member as $item) {?>
                  <tr>
                    <td><?php echo $item->idKonsumen;?></td>
                    <td><?php echo $item->username;?></td>
                    <td><?php echo $item->password;?></td>
                    <td><?php echo $item->namaKonsumen;?></td>
                    <td><?php echo $item->alamat;?></td>
                    <td><?php echo $item->email;?></td>
                    <td><?php echo $item->tlpn;?></td>
                   <td>
                    <label class="custom-switch">
                          <input type="radio" name="option" value="1" class="custom-switch-input" checked>
                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description">YES</span>
                    </label>
                    <label class="custom-switch">
                          <input type="radio" name="option" value="1" class="custom-switch-input" checked>
                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description">NO</span>
                    </label>
                  </tr>
                <?php }?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
