
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
                            <input required="" name="search" type="text" class="input-sm form-control" placeholder="Cari nama">
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-sm btn-default" type="button">Go!</button>
                            </span>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <form id="form" method="POST" action="<?php echo base_url('preset/delcheked') ?>">
                        <table class="table b-t b-light table-bordered">
                          <thead>
                            <tr>
                              <th width="20"><input type="checkbox"></th>
                              <th>Gambar</th>
                              <th>Nama</th>
                              <th>Date</th>
                              <th width="1">Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 0; ?>
                            <?php foreach ($data as $value): ?>
                              <tr>
                                <td><input value="<?php echo $value['preset_id'] ?>" type="checkbox" name="check[]" ></td>
                                
                                <td><img class="img img-thumbnail" src="<?php echo base_url() ?>assets/preset/<?php echo $value['preset_file'] ?>" width="50" height="50"></td>
                                <td><?php echo $value['preset_nama'] ?></td>
                                <?php 

                                  $d = date_create($value['preset_tanggal']);
                                  $date = date_format($d, 'd M Y');

                                 ?>
                                <td><?php echo $date ?></td>
                                <td width="1" align="center"><i onclick="del('<?php echo base_url('preset/delete/'.$value['preset_id']) ?>')" class="btn btn-sm btn-danger fa fa-close"></i></td>
                                
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

  <!--button add-->
  <div style="position: fixed; bottom: 0px; right: 0px; z-index: 2147483647; min-width: 90px; box-sizing: content-box; overflow: hidden; min-height: 120px;">
    <div style="position: relative; cursor: pointer;">
      <a type="button" data-toggle="modal" data-target="#modal">
        <div class="desktop-closed-message-avatar" style="background: #463C8E; display: flex; justify-content: center; position: absolute; top: 38px; right: 20px; height: 60px; width: 60px; border: 0px; border-radius: 50%; box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 20px;">
          <img src="<?php echo base_url('assets/images/pencil.png') ?>" width="30" height="30" style="margin-top: 15px;">
        </div>
      </a>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Preset Upload</h5>
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
        </div>
        <div class="modal-body">
          
          <form action="<?php echo base_url('preset/add') ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
            <div class="form-group">
              <label>Nama Preset</label>
              <input required="" type="text" name="preset_nama" class="form-control" placeholder="Nama Preset">
            </div>
            <div class="form-group">
                <label>Image</label>
              <input required="" type="file" name="preset_file" class="form-control" accept="image/*">
              <small class="text-danger"><i>* Format JPG/JPEG/PNG max 2MB</i></small>
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit">Upload <i class="fa fa-upload"></i></button>
            </div>
         </form>

        </div>
      </div>
    </div>
  </div>

  
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