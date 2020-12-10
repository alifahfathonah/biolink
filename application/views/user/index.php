
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
                      <form id="form" method="POST" action="<?php echo base_url('user/delcheked') ?>">
                        <table class="table table-bordered b-t b-light">
                          <thead>
                            <tr>
                              <th width="20"><input type="checkbox"></th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Date</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 0; ?>
                            <?php foreach ($data as $value): ?>
                              <tr>
                                <td><input value="<?php echo $value['user_id'] ?>" type="checkbox" name="check[]" ></td>
                                
                                <td onclick="view(<?php echo $value['user_id'] ?>)"><?php echo $value['user_nama'] ?></td>

                                <td onclick="view(<?php echo $value['user_id'] ?>)"><?php echo $value['user_email'] ?></td>

                                <?php 

                                  $d = date_create($value['user_tanggal']);
                                  $date = date_format($d, 'd M Y');

                                 ?>
                                <td onclick="view(<?php echo $value['user_id'] ?>)"><?php echo $date ?></td>
                                
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
 <!--  <div style="position: fixed; bottom: 0px; right: 0px; z-index: 2147483647; min-width: 90px; box-sizing: content-box; overflow: hidden; min-height: 120px;">
    <div style="position: relative; cursor: pointer;">
      <a href="<?php echo base_url('user/add') ?>">
        <div class="desktop-closed-message-avatar" style="background: #41586E; display: flex; justify-content: center; position: absolute; top: 38px; right: 20px; height: 60px; width: 60px; border: 0px; border-radius: 50%; box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 20px;">
          <img src="<?php echo base_url('assets/images/pencil.png') ?>" width="30" height="30" style="margin-top: 15px;">
        </div>
      </a>
    </div>
  </div> -->

  
<script type="text/javascript">

function delcheck(){

  if (!$('#selectcheck').val()) {
    //belum di select
    swal("Gagal", "Action belum di pilih", "warning");
  }else{
    $('#form').trigger('submit');
  }

}

function view(id){
  location.href = '<?php echo base_url("user/view/") ?>'+id ;
}
</script>