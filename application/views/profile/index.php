
        <!-- /.aside -->
        <section id="content"> 
          <section class="vbox">           
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="<?php echo base_url('dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
                <li class="active"><?php echo $title ?></li>
              </ul>

              <div class="row">
                <div class="col-md-12">
                    
                  <section class="panel panel-default">
                    <header class="panel-heading text-right bg-light">
                      <ul class="nav nav-tabs pull-left">
                        <li class="active"><a href="#profile" data-toggle="tab"><i class="fa fa-user text-default"></i> Profile</a></li>
                        <li><a href="#security" data-toggle="tab"><i class="fa fa-cog text-default"></i> Security</a></li>
                      </ul>
                      <span class="hidden-sm">&#160;</span>
                    </header>
                    <div class="panel-body">
                      <div class="tab-content">   
                      <!--profile-->           
                        <div class="tab-pane fade active in" id="profile">

                          <div class="panel-body">
                            <div class="clearfix text-center m-t">
                              <div class="inline">
                                <div class="easypiechart easyPieChart" data-percent="100" data-line-width="5" data-bar-color="#4cc0c1" data-track-color="#f5f5f5" data-scale-color="false" data-size="130" data-line-cap="butt" data-animate="1000" style="width: 130px; height: 130px; line-height: 130px;">
                                  <div class="thumb-lg">

                                    <?php if (@$data['user_foto'] == null): ?>
                                      <img src="<?php echo base_url('assets/') ?>images/avatar_default.jpg" class="img-circle">
                                    <?php else: ?>
                                      <img src="<?php echo base_url('assets/') ?>images/user/<?php echo $data['user_foto'] ?>" class="img-circle">
                                    <?php endif ?>
                                    
                                  </div>
                                <canvas width="130" height="130"></canvas></div>
                               
                              </div>                      
                            </div>
                          </div>

                          <form method="POST" action="<?php echo base_url('profile/save_profile') ?>" enctype="multipart/form-data" class="bs-example form-horizontal">

                            <div class="form-group">
                              <label class="col-lg-1 control-label">Photo</label>
                              <div class="col-lg-11">
                                <input name="user_foto" type="file" class="form-control" accept="image/*">
                                <small class="text-danger">* File suport (JPG/JPEG/PNG)</small>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-1 control-label">Name</label>
                              <div class="col-lg-11">
                                <input type="text" value="<?php echo @$data['user_nama'] ?>" name="user_nama" class="form-control" placeholder="fill in the data correctly">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-lg-1 control-label">TTL</label>
                              <div class="col-lg-3">
                                <input type="text" value="<?php echo @$data['detail_tempat_lahir'] ?>" name="detail_tempat_lahir" class="form-control" placeholder="Kota">
                              </div>
                              <div class="col-lg-8">
                                <input id="ttl" type="date" onchange="getumur(this.value)" value="<?php echo @$data['detail_tanggal_lahir'] ?>" name="detail_tanggal_lahir" class="form-control" placeholder="fill in the data correctly">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-lg-1 control-label">Umur</label>
                              <div class="col-lg-11">
                                <input id="umur" readonly="" type="text" value="<?php echo @$data['detail_umur'] ?>" name="detail_umur" class="form-control">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-lg-1 control-label">Alamat</label>
                              <div class="col-lg-11">
                                <input type="text" value="<?php echo @$data['detail_alamat'] ?>" name="detail_alamat" class="form-control" placeholder="fill in the data correctly">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-1 control-label">No Hp</label>
                              <div class="col-lg-11">
                                <input type="number" value="<?php echo @$data['detail_nohp'] ?>" name="detail_nohp" class="form-control" placeholder="fill in the data correctly">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-1 control-label">No. KTP</label>
                              <div class="col-lg-11">
                                <input type="number" value="<?php echo @$data['detail_ktp'] ?>" name="detail_ktp" class="form-control" placeholder="fill in the data correctly">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-1 control-label">Email</label>
                              <div class="col-lg-11">
                                <input type="text" value="<?php echo @$data['user_email'] ?>" name="user_email" class="form-control" placeholder="fill in the data correctly">
                              </div>
                            </div>
                            

                            <div class="form-group">
                              <div class="col-lg-offset-1 col-lg-10">
                                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Save Change</button>
                                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Reset</button>
                              </div>
                            </div>

                          </form>

                        </div>

                      <!--security-->
                        <div class="tab-pane fade" id="security">
                          
                          <form method="POST" action="<?php echo base_url('profile/save_security') ?>" class="bs-example form-horizontal">
                            <div class="form-group">
                              <label class="col-lg-1 control-label">Old Password</label>
                              <div class="col-lg-11">
                                <input readonly="" type="password" value="<?php echo @$data['user_password'] ?>" class="form-control" placeholder="Enter password">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-1 control-label">New Password</label>
                              <div class="col-lg-11">
                                <input required="" id="new" type="password" name="user_password" class="form-control" placeholder="Enter password">

                                <input type="hidden" id="show1" value="0">
                                <button type="button" onclick="newpass()" class="btn btn-xs btn-default"><i class="fa fa-eye"></i> Show Password</button>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-1 control-label">Confirm Password</label>
                              <div class="col-lg-11">
                                <input required="" id="confirm" type="password" class="form-control" placeholder="Enter password" name="confirm">

                                <input type="hidden" id="show2" value="0">
                                <button type="button" onclick="confirmpass()" class="btn btn-xs btn-default"><i class="fa fa-eye"></i> Show Password</button>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-lg-offset-1 col-lg-10">
                                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Save Change</button>
                                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Reset</button>
                              </div>
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>
                  </section>

                </div>
              </div>

            </section>
          </section>


          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>

        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>

  <script type="text/javascript">
    function newpass(){

      if ($('#show1').val() == 1) {
        $('#new').attr({'type': 'password'});
        $('#show1').val(0);
      }else{
        $('#new').attr({'type': 'text'});
        $('#show1').val(1);
      }

    }

    function confirmpass(){

      if ($('#show2').val() == 1) {
        $('#confirm').attr({'type': 'password'});
        $('#show2').val(0);
      }else{
        $('#confirm').attr({'type': 'text'});
        $('#show2').val(1);
      }

    }

    function getumur(value){
      var x = value.split('-');
      var tahun_lahir = x[0];
      var tahun_sekarang = (new Date).getFullYear();
      var umur = tahun_sekarang - tahun_lahir;
      
      $('#umur').val(umur);
    }
  </script>
  