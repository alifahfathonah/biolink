
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
                    <header class="panel-heading">
                      <?php echo $title ?>  
                    </header>
                    <div style="padding: 1%;" class="table-responsive">
                      
                      <form role="form" method="post" action="<?php echo base_url() ?>iklan/update/<?php echo $data['iklan_id'] ?>">
                
                      <div class="form-group">
                        <label>Tampil Kiri</label>
                        <textarea style="height: 100px;" required="" class="form-control" name="iklan_kiri" placeholder="Tulis script Tampil posisi kiri"><?php echo $data['iklan_kiri'] ?></textarea>
                      </div>

                      <div class="form-group">
                        <label>Tampil Kanan</label>
                        <textarea style="height: 100px;" required="" class="form-control" name="iklan_kanan" placeholder="Tulis script Tampil posisi kanan"><?php echo $data['iklan_kanan'] ?></textarea>
                      </div>

                      <!-- <div class="form-group">
                        <label>Tampil Atas</label>
                        <textarea style="height: 100px;" required="" class="form-control" name="iklan_atas" placeholder="Tulis script Tampil posisi atas"><?php echo $data['iklan_atas'] ?></textarea>
                      </div> -->

                      <div class="form-group">
                        <label>Tampil Bawah</label>
                        <textarea style="height: 100px;" required="" class="form-control" name="iklan_bawah" placeholder="Tulis script Tampil posisi bawah"><?php echo $data['iklan_bawah'] ?></textarea>
                      </div>

                      <button class="btn btn-success" type="submit">Save <i class="fa fa-check"></i></button>

                    </form>

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
