
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
                    
                    <div class="panel-body">

                      <form id="formage" action="<?php echo base_url('age/hitung') ?>" method="post" accept-charset="utf-8">

                        <h4 align="center">Birthday</h4>
                        
                        <div class="form-group">
                          <div class="col-md-4">
                            <select id="tanggal" required="" name="tanggal" class="form-control">
                              <?php for ($i=1; $i < 32; $i++):?>
                                <?php if ($i < 10): ?>
                                  <option value="<?php echo '0'.$i ?>"><?php echo '0'.$i ?></option>
                                <?php else: ?>
                                  <option value="<?php echo $i ?>"><?php echo $i ?></option>  
                                <?php endif ?>
                              <?php endfor ?> 
                            </select>
                          </div>
                          <div class="col-md-4">
                            <select id="bulan" required="" name="bulan" class="form-control">
                                <?php  
                              for($i=1; $i<=12; $i++){ 
                                  $month = date('F', mktime(0, 0, 0, $i, 10)); 

                                  if ($i < 10) {
                                    echo '<option value="0'.$i.'">0'.$i.' - '.$month.'</option>';
                                  } else {
                                    echo '<option value="'.$i.'">'.$i.' - '.$month.'</option>';
                                  }

                              }
                            ?>
                            </select>
                          </div>
                          <div class="col-md-4">
                            <input id="tahun" value="<?php echo date('Y') ?>" required="" placeholder="Year" type="number" name="tahun" class="form-control">
                          </div>
                        </div>

                        <div class="clearfix"></div>
                        <br/>
                        <h4 align="center">Birth Time</h4>

                        <div class="form-group">
                          <div class="col-md-4">
                            <div class="input-group">
                              <span class="input-group-addon">Hour</span>
                              <select id="jam" required="" name="jam" class="form-control">
                                <?php for ($i=1; $i < 13; $i++):?>
                                  <?php if ($i < 10): ?>
                                    <option value="<?php echo '0'.$i ?>"><?php echo '0'.$i ?></option>
                                  <?php else: ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>  
                                  <?php endif ?>
                                <?php endfor ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="input-group">
                              <span class="input-group-addon">Minute</span>
                              <select id="menit" required="" name="menit" class="form-control">
                                <?php for ($i=0; $i < 60; $i++):?>
                                  <?php if ($i < 10): ?>
                                    <option value="<?php echo '0'.$i ?>"><?php echo '0'.$i ?></option>
                                  <?php else: ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>  
                                  <?php endif ?>
                                <?php endfor ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <select id="waktu" required="" name="waktu" class="form-control">
                              <option value="am">am</option>
                              <option value="pm">pm</option>
                            </select>
                          </div>
                        </div> 

                        <div class="clearfix"></div>
                        <br/>

                        <div class="form-group">
                          <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">CALCULATE <i class="fa fa-clock-o"></i></button> 
                          </div>  
                        </div>   

                      </form>

                      <?php if(@$this->session->flashdata('umur')): ?>

                        <br/>

                        <?php @$umur = $this->session->flashdata('umur'); ?>
                        <?php @$ultah = $this->session->flashdata('ultah'); ?>

                        <hr>

                        <table class="table table-bordered" style="font-size: 16px;">

                          <tr>
                            <td style="background-color: #E9ECEF">Your age is</td>
                            <th id="umur"><?php echo @$umur['umur_tahun'].' years '.@$umur['umur_bulan'].' months '.@$umur['umur_hari'].' days '.@$umur['umur_jam'].' hours and '.@$umur['umur_menit'].' minutes';?></th>
                          </tr>
                          <tr>
                            <td style="background-color: #E9ECEF">You were born in</td>
                            <th id="lahir"><?php echo $this->session->flashdata('lahir'); ?></th>
                          </tr>
                          <tr>
                            <td style="background-color: #E9ECEF">Next birthday in</td>
                            <th id="ultah"><?php echo @$ultah['ultah_tahun'].' years '.@$ultah['ultah_bulan'].' months '.@$ultah['ultah_hari'].' days '.@$ultah['ultah_jam'].' hours and '.@$ultah['ultah_menit'].' minutes'; ?></th>
                          </tr>
                        </table>
                      <?php endif ?>

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

  