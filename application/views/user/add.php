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

                  <form role="form" method="POST" enctype="multipart/form-data">
                  	<div class="form-group"> 
                      <label>Nama</label>
                      <input required="" name="user_nama" type="text" class="form-control" value="">
                    </div>
                    <div class="form-group"> 
                      <label>Email address</label>
                      <input required="" name="user_email" type="email" class="form-control" value="">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input name="user_password" type="password" class="form-control" placeholder="Masukan password baru">
                    </div>
                    
                    <div class="form-group">
                      <label>Foto</label>
                      <input name="user_foto" type="file" class="form-control" accept="image/*">
                      <small>Format file (JPG/JPEG/GIF)</small>
                    </div>
                    
                    <input name="save" type="submit" class="btn btn-sm btn-primary" value="Save Data">
                  
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