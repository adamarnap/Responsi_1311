      <!-- Main Content -->
      <div class="main-content">
        <section class="section"> 
              
        <div class="container mt-5">
        <div class="row">
          <div class="col-5 col-sm-5 offset-sm-5 col-md-5 offset-md-2 col-lg-2 offset-lg-2 col-xl-8 offset-xl-2">
            
   
            <div class="card card-primary">
              <div class="card-header"><h4>Masuk Akun Member</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo site_url('Member/act_login'); ?>">
                  <div class="row">
   
                  <div class="form-group col-5">
                  <div class="form-group">
                    <label >Username</label>
                    <input type="text" class="form-control" name="username" required>
                    <div class="invalid-feedback">
                    </div>
                  </div> 
                  </div> 
                  </div> 
                  

                  <div class="form-group col-5">
                  <div class="row">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div> 
                      </div> 
                      </div>

                      <div class="form-group col-5">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" required>
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div> 
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div> 

        </section>
      </div>