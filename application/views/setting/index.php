
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

                      <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('setting/save') ?>">
                        
                       <div class="form-group">
                          <label class="control-label"><i class="fa fa-unlink"></i> Short Url</label>

                          <div class="input-group">
                            <span class="input-group-addon"><?php echo base_url('account/') ?></span>
                            <input required="" disabled="" name="account_url" type="text" class="form-control" placeholder="" required="" value="<?php echo $data['account_url'] ?>">
                            <input type="hidden" name="" value="<?php echo base_url('account/'.$data['account_url']) ?>" id="link">
                            <span class="input-group-addon"><a type="button" href="#" onclick="copyToClipboard('#link')"><i class="fa fa-copy"></i> Copy</a></span>
                          </div>
                          <small id="alert_url"></small>
                        </div>

                        <div class="form-group">
                          <label class="control-label"><i class="fa fa-text-height"></i> Title</label>
                          <input required="" name="account_title" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_title'] ?>">
                        </div>

                        <div class="form-group">
                          <label class="control-label"><i class="fa fa-align-center"></i> Deskripsi</label>
                          <input required="" name="account_deskripsi" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_deskripsi'] ?>">
                        </div>
                        <div class="form-group">
                          <label class="control-label"><i class="fa fa-th-large"></i> Teks Color</label>
                          <input required="" name="account_teks" type="color" placeholder="" class="form-control input-sm" value="<?php echo $data['account_teks'] ?>">
                        </div>

                        <div class="form-group">
                          <label class="control-label"><i class="fa fa-image"></i> Background Type</label>
                          <br/>
                          <input required="" onclick="pilih('preset')" value="preset" <?= ($data['account_bg_type'] == 'preset')? 'checked':'' ?> checked="" name="account_bg_type" type="radio" placeholder=""> Preset
                          &#160;&#160;&#160;
                          <input required="" onclick="pilih('file')" value="file" <?= ($data['account_bg_type'] == 'file')? 'checked':'' ?> name="account_bg_type" type="radio" placeholder=""> Picture
                        </div>

                        <div class="form-group">
                          <button id="preset" data-toggle="modal" data-target="#modal" type="button" class="btn btn-default form-control <?= ($data['account_bg_type'] == 'preset')? '':'hidden' ?>">Preset <i class="fa fa-plus"></i></button>
                          <input style="width: 100%; color: white; height: 0px; display: block; border-style: none;" required="" value="<?php echo $data['account_preset'] ?>" type="text" name="account_preset" id="val_preset">
                          <small class="text-danger" id="status_preset"></small>
                        </div>

                        <div class="form-group">
                          <input id="picture" name="account_bg" type="file" placeholder="" class="form-control input-sm  <?= ($data['account_bg_type'] == 'file')? '':'hidden' ?>" accept="image/x-png,image/gif,image/jpeg">
                        </div>

                        <div class="form-group">
                          <a href="<?= ($data['account_bg_type'] == 'preset')? base_url('assets/preset/'.$data['account_preset']):base_url('assets/images/bg/'.$data['account_bg']) ?>" target="_blank" class="btn btn-primary btn-xs" title="view background"><i class="fa fa-eye"> View background</i></a>
                        </div>

                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-6">
                              <label class="control-label"><i class="fa fa-twitter"></i> Twitter</label>
                              <input name="account_twitter" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_twitter'] ?>">
                            </div>
                            <div class="col-md-6">
                              <label class="control-label"><i class="fa fa-facebook-square"></i> Facebook</label>
                              <input name="account_facebook" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_facebook'] ?>">
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-6">
                              <label class="control-label"><i class="fa fa-instagram"></i> Instagram</label>
                              <input name="account_instagram" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_instagram'] ?>">
                            </div>
                            <div class="col-md-6">
                              <label class="control-label"><i class="fa fa-youtube-play"></i> Youtube</label>
                              <input name="account_youtube" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_youtube'] ?>">
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <input onchange="test()" <?= ($data['account_branding_status'] == '1')? 'checked':'' ?> type="checkbox" data-toggle="toggle" data-size="small">
                          <input name="account_branding_status" type="hidden" id="change" value="<?php echo $data['account_branding_status'] ?>">
                        </div>

                        <div class="form-group">
                          <label class="control-label"><i class="fa fa-link"></i> Branding name</label>
                          <input id="branding_name" <?= ($data['account_branding_status'] == '1')? '':'readonly=""' ?> name="account_branding_name" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_branding_name'] ?>">
                        </div>

                        <div class="form-group">
                          <label class="control-label"><i class="fa fa-random"></i> Branding URL</label>
                          <input id="branding_url" <?= ($data['account_branding_status'] == '1')? '':'readonly=""' ?> name="account_branding_url" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_branding_url'] ?>">
                        </div>

                        <div class="form-group">
                          <label class="control-label"><i class="fa fa-rss-square"></i> Google Analytics ID</label>
                          <input id="google" <?= ($data['account_branding_status'] == '1')? '':'readonly=""' ?> name="account_branding_analytics" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_branding_analytics'] ?>">
                        </div>

                        <hr/>
                        <button type="submit" class="btn btn-success" style="margin-bottom: 2%;">Save Change</button>
                      
                      </form>

                    </div>
                  </section>

                </div>
              </div>

            </section>
          </section>

<!-- Modal -->
  <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Preset</h5>
        </div>
        <div class="modal-body">
         <div class="row" align="center">
            <?php foreach ($preset_data as $key): ?>
              <div class="col-md-4" style="margin-bottom: 3%;">
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
          $('#preset').removeClass('hidden');
          $('#preset').addClass('required',true);

          $('#picture').addClass('hidden',true); 
          $('#picture').removeClass('required');         
      }else{
          $('#picture').removeClass('hidden');
          $('#picture').addClass('required',true);

          $('#preset').addClass('hidden',true);
          $('#preset').removeClass('required');

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
  $('#modal').modal('toggle');
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

function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).val()).select();
  document.execCommand("copy");
  $temp.remove();
  swal("Sukses", "Url berhasil di copy", "success");
}
</script>
