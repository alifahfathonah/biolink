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

  <link href="<?php echo base_url('assets/') ?>css/bootstrap-toggle.min.css" rel="stylesheet">

  <style type="text/css"> 
    .image-upload>input {
      display: none;
    }
  </style>
</head>
<body style="background-image: url('<?php echo base_url('assets/images/bg.png') ?>');  height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}">
  <section id="content" class="wrapper-md animated fadeInDown">
    <div class="container aside-xxxl">
      <br/>
      
      <section class="panel panel-default bg-white" style="box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2), 0 3px 17px 0 rgba(0, 0, 0, 0.19); margin-bottom: 3%; border-radius: 5px;">
        <form method="POST" id="form" action="<?php echo base_url('login/add') ?>" class="panel-body wrapper-lg" enctype="multipart/form-data">


        <div id="register">
          <div class="form-group">
            <label class="control-label"> Nama Lengkap</label>
            <input id="nama" required="" name="user_nama" type="text" placeholder="" class="reg form-control input-sm">
          </div>
          <div class="form-group">
            <label class="control-label"> Email</label>
            <input onchange="cekemail(this.value)" id="email" required="" name="user_email" type="text" placeholder="" class="reg form-control input-sm">
            <small id="alert_email"></small>
          </div>
          <div class="form-group">
            <label class="control-label"> Password</label>
            <input id="password" required="" name="user_password" type="password" placeholder="" class="reg form-control input-sm">
          </div>
          <div class="form-group">
            <label class="control-label"> Ulangi Password</label>
            <input id="repassword" required="" name="user_repassword" type="password" placeholder="" class="reg form-control input-sm">
          </div>
          <hr/>
          <button id="next" onclick="set()" type="button" class="btn btn-primary" style="margin-bottom: 2%;">Next</button>
          <br/><br/>
        </div>
        <!-- end register -->

        <div id="setting" hidden="">
          <div class="form-group">
            <label class="control-label"><i class="fa fa-unlink"></i> Short Url</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"><?php echo base_url('account') ?></span>
              </div>
              <input id="link" onchange="cekurl(this.value)" required="" name="account_url" type="text" class="form-control" placeholder="" required="">
            </div>
            <small id="alert_url"></small>
          </div>

          <div align="center" class="image-upload">
            <label for="file-input">
              <img id="preview" style="border-radius: 100%" width="150" height="150" src="<?php echo base_url('assets/images/image.png') ?>"/>
            </label>

            <input class="file-input form-control" id="file-input" type="file" name="user_foto">
            <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
          </div>     

          <div class="form-group">
            <label class="control-label"><i class="fa fa-text-height"></i> Title</label>
            <input required="" name="account_title" type="text" placeholder="" class="form-control input-sm">
          </div>

          <div class="form-group">
            <label class="control-label"><i class="fa fa-align-center"></i> Deskripsi</label>
            <input required="" name="account_deskripsi" type="text" placeholder="" class="form-control input-sm">
          </div>
          <div class="form-group">
            <label class="control-label"><i class="fa fa-th-large"></i> Teks Color</label>
            <input required="" name="account_teks" type="color" placeholder="" class="form-control input-sm">
          </div>

          <div class="form-group">
            <label class="control-label"><i class="fa fa-image"></i> Background Type</label>
            <br/>
            <input required="" onclick="pilih('preset')" value="preset" checked="" name="account_bg_type" type="radio" placeholder=""> Preset
            &#160;&#160;&#160;
            <input required="" onclick="pilih('file')" value="file" name="account_bg_type" type="radio" placeholder=""> Picture
          </div>

          <div class="form-group">
            <button id="preset" data-toggle="modal" data-target="#modal" type="button" class="btn btn-default form-control">Preset <i class="fa fa-plus"></i></button>
            <input style="width: 100%; color: white; height: 0px; display: block; border-style: none;" required="" type="text" name="account_preset" id="val_preset">
            <small class="text-danger" id="status_preset"></small>
          </div>

          <div class="form-group">
            <input id="picture" name="account_bg" hidden="" type="file" placeholder="" class="form-control input-sm" accept="image/x-png,image/gif,image/jpeg">
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col">
                <label class="control-label"><i class="fa fa-twitter"></i> Twitter</label>
                <input name="account_twitter" type="text" placeholder="" class="form-control input-sm">
              </div>
              <div class="col">
                <label class="control-label"><i class="fa fa-facebook-square"></i> Facebook</label>
                <input name="account_facebook" type="text" placeholder="" class="form-control input-sm">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col">
                <label class="control-label"><i class="fa fa-instagram"></i> Instagram</label>
                <input name="account_instagram" type="text" placeholder="" class="form-control input-sm">
              </div>
              <div class="col">
                <label class="control-label"><i class="fa fa-youtube-play"></i> Youtube</label>
                <input name="account_youtube" type="text" placeholder="" class="form-control input-sm">
              </div>
            </div>
          </div>

          <div class="form-group">
            <input onchange="test()" type="checkbox" data-toggle="toggle" data-size="small">
            <input name="account_branding_status" type="hidden" id="change" value="0">
          </div>

          <div class="form-group">
            <label class="control-label"><i class="fa fa-link"></i> Branding name</label>
            <input id="branding_name" readonly="" name="account_branding_name" type="text" placeholder="" class="form-control input-sm">
          </div>

          <div class="form-group">
            <label class="control-label"><i class="fa fa-random"></i> Branding URL</label>
            <input id="branding_url" readonly="" name="account_branding_url" type="text" placeholder="" class="form-control input-sm">
          </div>

          <div class="form-group">
            <label class="control-label"><i class="fa fa-rss-square"></i> Google Analytics ID</label>
            <input id="google" readonly="" name="account_branding_analytics" type="text" placeholder="" class="form-control input-sm">
          </div>

          <hr/>
          <button type="submit" class="btn btn-primary" style="margin-bottom: 2%;">Sign up</button>
        </div>

          <p class="text-muted text-center"><small>Already have an account?</small>
          <a href="<?php echo base_url('login') ?>">Sign in</a></p>
        </form>
      </section>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Preset</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <div class="row" align="center">
            <?php foreach ($preset_data as $key): ?>
              <div class="col" style="margin-bottom: 3%;">
                <a onclick="preset('<?php echo $key['preset_file'] ?>')" type="button">
                  <img class="img img-thumbnail" src="<?php echo base_url('assets/preset/'.$key['preset_file']) ?>" width="200" height="200">
                </a>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <!-- <footer id="footer">
    <div class="text-center padder clearfix">
      <p>
        <small>Web app framework base on Bootstrap<br>&copy; 2013</small>
      </p>
    </div>
  </footer> -->

  <!-- / footer -->
  <script src="<?php echo base_url('assets/') ?>js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js"></script>
  <!-- App -->
  <script src="<?php echo base_url('assets/') ?>js/app.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/app.plugin.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>sweetalert/sweet-alert.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/bootstrap-toggle.min.js"></script>
</body>
</html>

<script type="text/javascript">

// branding //
 function test(){
    var change = $('#change').val();
    if (change == 1) {
      //aktif
      $('#change').val('0');
      $('#branding_name').attr({'readonly' : true});
      $('#branding_url').attr({'readonly' : true});
      $('#google').attr({'readonly' : true});
      
    }else{
      //nonaktif
      $('#change').val('1');
      $('#branding_name').removeAttr('readonly');
      $('#branding_url').removeAttr('readonly');
      $('#google').removeAttr('readonly');
      
    }
 }

 // pilih preset or file //
 function pilih(type){
      if (type == 'preset') {
          $('#preset').removeAttr('hidden');
          $('#preset').attr('required',true);

          $('#picture').attr('hidden',true); 
          $('#picture').removeAttr('required');         
      }else{
          $('#picture').removeAttr('hidden');
          $('#picture').attr('required',true);

          $('#preset').attr('hidden',true);
          $('#preset').removeAttr('required');

          $('#val_preset').removeAttr('required');
          $('#val_preset').val('');
          $('#status_preset').text('');
      }
  }

// preview image //
$(document).on("click", ".browse", function() {
  var file = $(this).parents().find(".file-input");
  file.trigger("click");
});
$('input[type="file"]').change(function(e) {
  var fileName = e.target.files[0].name;
  $("#file").val(fileName);

  var reader = new FileReader();
  reader.onload = function(e) {
    document.getElementById("preview").src = e.target.result;
  };
  reader.readAsDataURL(this.files[0]);
});

// next //
function set(){
  var $nonempty = $('.reg').filter(function() {
    return this.value != ''
  });

  if ($nonempty.length < 4) {
    swal("Peringatan", "Lengkapi inputan terlebih dahulu", "warning");
  }else{
    if ($('#password').val() != $('#repassword').val()) {
      swal("Peringatan", "Periksa password", "warning");
    }else{
      $('#register').attr('hidden',true);
      $('#setting').removeAttr('hidden');
    }
  }
}

// select preset //
function preset(val){
  $('#val_preset').val(val);
  $('#status_preset').text(val);
  $('#modal').modal('toggle','close');
}


//cek email //
function cekemail(val){
  $.ajax({
    url : "<?php echo base_url('login/cekemail') ?>",
    method : "POST",
    data : {val: val},
    async : false,
    dataType : 'json',
    success: function(data){

      if (data == 0) {
        $('#alert_email').css("color","green");
        $('#alert_email').text('Email tersedia');
      }else{
        $('#alert_email').css("color","red");
        $('#alert_email').text('Email sudah ada');
        $('#email').val('');
      }              
    
    }
  });
}

// cek url //
function cekurl(val){
  $.ajax({
    url : "<?php echo base_url('login/cekurl') ?>",
    method : "POST",
    data : {val: val},
    async : false,
    dataType : 'json',
    success: function(data){

      if (data == 0) {
        $('#alert_url').css("color","green");
        $('#alert_url').text('* URL tersedia');
      }else{
        $('#alert_url').css("color","red");
        $('#alert_url').text('* URL sudah ada');
        $('#link').val('');
      }              
    
    }
  });
}
</script>