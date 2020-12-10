
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
                    <div class="row wrapper"> 
                      <div class="col-sm-5 m-b-xs">
                        <select id="selectcheck" class="input-sm form-control input-s-sm inline v-middle">
                          <option value="" hidden="">-- Action --</option>
                          <option value="1">Delete selected</option>
                        </select>
                        <button onclick="delcheck()" class="btn btn-sm btn-default">Apply</button>                
                      </div>
                      <div class="col-sm-4 m-b-xs">
                        
                      </div>
                      <div class="col-sm-3">
                        <form method="POST">
                          <div class="input-group">
                            <input required="" name="search" type="text" class="input-sm form-control" placeholder="Cari judul">
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-sm btn-default" type="button">Go!</button>
                            </span>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <form id="form" method="POST" action="<?php echo base_url('notifikasi/delcheked') ?>">
                        <table class="table table-striped b-t b-light">
                          <thead>
                            <tr>
                              <th width="20"><input type="checkbox"></th>
                              <th>Notication</th>
                              <th>Date</th>
                              <th width="30"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 0; ?>
                            <?php foreach ($data as $value): ?>
                              <tr>

                                <td><input value="<?php echo $value['notifikasi_id'] ?>" type="checkbox" name="check[]" ></td>
                                <td><?php echo $value['notifikasi_isi'] ?></td>
                                
                                <?php 

                                  $d = date_create($value['notifikasi_tanggal']);
                                  $date = date_format($d, 'd M Y');

                                ?>

                                <td>
                                  <?php if ($value['notifikasi_tanggal'] == date('Y-m-d')): ?>
                                    <?php echo $date ?> <span class="label bg-primary">New</span>
                                  <?php else: ?>
                                    <?php echo $date ?> <span class="label bg-danger">Old</span>
                                  <?php endif ?>
                                </td>

                                <td><a href="#" type="button" onclick="del('<?php echo base_url('notifikasi/delete/').$value['notifikasi_id'] ?>')"><i class="fa fa-trash-o icon-muted fa-fw m-r-xs"></i></a></td>

                              </tr>
                            <?php $no++; ?>
                            <?php endforeach ?>
                          </tbody>
                        </table>
                      </form>
                    </div>
                    <footer class="panel-footer">
                      <div class="row">
                        <div class="col-sm-4 hidden-xs">
                                        
                        </div>
                        <div class="col-sm-4 text-center">
                          <small class="text-muted inline m-t-sm m-b-sm">showing <?php echo $no ?> of <?php echo $total ?> items</small>
                        </div>
                        <div class="col-sm-4 text-right text-center-xs">                
                          <!--paging-->
                          <?php echo $this->pagination->create_links(); ?>
                        </div>
                      </div>
                    </footer>
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

function delcheck(){

  if (!$('#selectcheck').val()) {
    //belum di select
    swal("Gagal", "Action belum di pilih", "warning");
  }else{
    $('#form').trigger('submit');
  }

}
</script>