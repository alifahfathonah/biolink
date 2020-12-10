 <section id="content"> 
      <section class="vbox">           
        <section class="scrollable padder">
          <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="<?php echo base_url('dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><?php echo $title ?></li>
          </ul>
  
          <div class="row">
            <div class="col-sm-12">
              <section class="panel panel-default">
                <header class="panel-heading font-bold">
                 <a href="<?php echo base_url('user') ?>"><button type="submit" class="btn btn-sm btn-default"><i class="fa fa-arrow-circle-left"></i> Back</button></a>
                </header>
                <div class="panel-body">  

                  <form role="form" method="POST" action="<?php echo base_url('user/action') ?>" enctype="multipart/form-data">
                  	<div class="form-group"> 
                      <label>Nama</label>
                      <input required="" name="user_nama" type="text" class="form-control" value="<?php echo @$data['user_nama'] ?>">
                    </div>
                    <div class="form-group"> 
                      <label>Email address</label>
                      <input required="" readonly="" name="user_email" type="email" class="form-control" value="<?php echo @$data['user_email'] ?>">
                    </div>
                    <div class="form-group"> 
                      <label>Password</label>
                      <input readonly="" name="user_password" type="password" class="form-control" placeholder="Masukan password baru" value="<?php echo @$data['user_password'] ?>">
                    </div>

                    <div class="form-group">
                      <label>Foto</label>
                      <input name="user_foto" type="file" class="form-control" accept="image/*">

                      <?php if (@$data['user_foto']): ?>
                        <a href="<?php echo base_url('assets/images/user/').$data['user_foto'] ?>" target="_blank"><button type="button" class="btn btn-xs btn-default"><small>view image <i class="fa fa-eye"></i></small></button></a>
                      <?php else: ?>
                        <button type="button" class="btn btn-xs btn-default"><small>No image</small></button>
                      <?php endif ?>

                    </div>

                    <input type="hidden" name="user_id" value="<?php echo $data['user_id'] ?>">
                    
                    <input name="edit" type="submit" class="btn btn-sm btn-success" value="Edit">
                    <input onclick="del('<?php echo base_url('user/action/'.$data['user_id']) ?>')" name="delete" type="button" class="btn btn-sm btn-danger" value="Delete">
                  
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


