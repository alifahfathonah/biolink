<!DOCTYPE html>
<html lang="en" style="background-color: white;"> 
<head>
  <meta charset="utf-8" />
  <title>Biolink</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo.png" />
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/app.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>sweetalert/sweetalert2.min.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head> 
<body style="background-image: url('<?php echo base_url('assets/images/bg.png') ?>');  height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}">
  <section id="content" class="wrapper-md animated fadeInUp">    
    <div class="container aside-xxxl">
      <br/>
      
      <section class="panel panel-default bg-white m-t-lg" style="box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2), 0 3px 17px 0 rgba(0, 0, 0, 0.19); margin-bottom: 3%; border-radius: 5px;">

        <form method="POST" action="<?php echo base_url('login/auth') ?>" class="panel-body wrapper-lg">
          <div class="form-group">
            <label class="control-label">Email</label>
            <input required="" name="user_email" type="email" placeholder="test@example.com" class="form-control input-sm">
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input required="" name="user_password" type="password" id="inputPassword" placeholder="Password" class="form-control input-sm">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Keep me logged in
            </label>
          </div>
          
          <hr>
          <button type="submit" class="btn btn-primary">Sign in</button>
          
          
          <p class="text-muted text-center"><small>Do not have an account?</small>
          <a href="<?php echo base_url('login/register') ?>">Sign up</a></p>
        </form>
      </section>
      <br/><br/><br/><br/>
    </div>
  </section>
  <!-- footer -->
  <!-- <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>Web app framework base on Bootstrap<br>&copy; 2013</small>
      </p>
    </div>
  </footer> -->
  <!-- / footer -->
  <script src="<?php echo base_url('assets/') ?>js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url('assets/') ?>js/bootstrap.js"></script>
  <!-- App -->
  <script src="<?php echo base_url('assets/') ?>js/app.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/app.plugin.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>sweetalert/sweet-alert.js"></script>
  
</body> 
</html>

<script type="text/javascript">
  //alert
   <?php if($this->session->flashdata('sukses')): ?>
    swal("Sukses", "<?php echo $this->session->flashdata('sukses');?>", "success");
   <?php endif ?>

   <?php if($this->session->flashdata('gagal')): ?>
    swal("Gagal", "<?php echo $this->session->flashdata('gagal'); ?>", "warning");
  <?php endif ?>

  //delete
  function del(url){
      swal({
        title: "Apa kamu yakin?",
        text: "Hapus data ini!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
    
          $(location).attr('href',url);
          
        }
      });
    }
</script>