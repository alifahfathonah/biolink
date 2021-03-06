
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

                        <hr>
                        <center>
                        <label style="width: 100%; background-color: #717171; padding: 0.3%; color: white;">ACCOUNT</label>
                        </center>
                        <br/>

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
                          <div class="row">
                            <div class="col-md-6">
                              <label class="control-label"><i class="fa fa-whatsapp"></i> Whatsapp</label>
                              <input name="account_whatsapp" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_whatsapp'] ?>">
                            </div>
                            <div class="col-md-6">
                              <label class="control-label"><i class="fa fa-telegram"></i> Telegram</label>
                              <input name="account_telegram" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_telegram'] ?>">
                            </div>
                          </div>
                        </div>

                         <div class="form-group">
                          <div class="row">
                            <div class="col-md-6">
                              <label class="control-label"><i class="fa fa-envelope"></i> Gmail</label>
                              <input name="account_gmail" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_gmail'] ?>">
                            </div>
                            <div class="col-md-6">
                              <label class="control-label"><i class="fa fa-phone-square"></i> No. telp</label>
                              <input name="account_no" type="number" placeholder="" class="form-control input-sm" value="<?php echo $data['account_no'] ?>">
                            </div>
                          </div>
                        </div>

                        <br/>
                        <center>
                        <label style="width: 100%; background-color: #717171; padding: 0.3%; color: white;">MARKET PLACE</label>
                        </center>
                        <br/>

                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-6">
                                <label class="control-label"><img src="<?php echo base_url('assets/images/icon/shopee_black.png') ?>" width="15" height="15"> Shopee</label>
                                <input name="account_shopee" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_shopee'] ?>">
                              </div>
                              <div class="col-md-6">
                                <label class="control-label"><img src="<?php echo base_url('assets/images/icon/tokopedia_black.png') ?>" width="15" height="15"> Tokopedia</label>
                                <input name="account_tokopedia" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_tokopedia'] ?>">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-6">
                                <label class="control-label"><img src="<?php echo base_url('assets/images/icon/lazada_black.png') ?>" width="15" height="15"> Lazada</label>
                                <input name="account_lazada" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_lazada'] ?>">
                              </div>
                              <div class="col-md-6">
                                <label class="control-label"><img src="<?php echo base_url('assets/images/icon/bukalapak_black.png') ?>" width="15" height="15"> Bukalapak</label>
                                <input name="account_bukalapak" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_bukalapak'] ?>">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-6">
                                <label class="control-label"><img src="<?php echo base_url('assets/images/icon/blibli_black.png') ?>" width="15" height="15"> Blibli</label>
                                <input name="account_bibli" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_bibli'] ?>">
                              </div>
                              <div class="col-md-6">
                                <label class="control-label"><img src="<?php echo base_url('assets/images/icon/jdid_black.png') ?>" width="15" height="15"> Jd.id</label>
                                <input name="account_jdid" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_jdid'] ?>">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-6">
                                <label class="control-label"><img src="<?php echo base_url('assets/images/icon/elevenia_black.png') ?>" width="15" height="15"> Elevenia</label>
                                <input name="account_elevenia" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_elevenia'] ?>">
                              </div>
                              <div class="col-md-6">
                                <label class="control-label"><img src="<?php echo base_url('assets/images/icon/amazon_black.png') ?>" width="15" height="15"> Amazon</label>
                                <input name="account_amazon" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_amazon'] ?>">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-6">
                                <label class="control-label"><img src="<?php echo base_url('assets/images/icon/alibaba_black.png') ?>" width="15" height="15"> Alibaba</label>
                                <input name="account_alibaba" type="text" placeholder="" class="form-control input-sm" value="<?php echo $data['account_alibaba'] ?>">
                              </div>
                            </div>
                          </div>

                        <div class="form-group">
                          <label><i class="fa fa-thumb-tack"></i> Social media that are added</label>

                          <div style="display: block;">
                            <?php foreach ($sosmed_data as $key): ?>
                            
                              <button onclick="sosmed('<?php echo $key['sosmed_id'] ?>')" type="button"><img src="<?php echo base_url('assets/images/sosmed/'.$key['sosmed_icon']) ?>" width="30" height="30"></button>

                            <?php endforeach ?>
                          </div>

                        </div>
                        <div class="form-group">
                          <button id="addRow" type="button" class="btn btn-primary">Account <i class="fa fa-plus"></i></button>
                          <small style="display: block;" class="text-danger">* add another account</small>

                          <input type="hidden" name="number" id="number" value="0">

                          <div style="margin-top: 1%;">
                            <div class="row" id="newRow">
                              
                            </div>
                          </div>

                        </div>

                        <center>
                        <label style="width: 100%; background-color: #717171; padding: 0.3%; color: white;">YOUTUBE VIDEO</label>
                        </center>
                        
                        <?php foreach ($youtube_data as $key): ?>
                          <a href="#" onclick="modalyoutube('<?php echo $key['youtube_id'] ?>')"><img class="img-thumbnail" style="margin-bottom: 1%;" src="http://img.youtube.com/vi/<?php echo $key['youtube_link'] ?>/hqdefault.jpg" width="100"></a>
                        <?php endforeach ?>

                        <div class="form-group">

                          <button id="addVideo" type="button" class="btn btn-primary">Link Video <i class="fa fa-plus"></i></button>
                           <small style="display: block;" class="text-danger">* add another video</small>

                          <input type="hidden" name="videonumber" id="videoNumber" value="0">

                          <div style="margin-top: 1%;">
                            <div id="newVideo">
                              
                            </div>
                          </div>

                        </div>

                        <hr>

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

<!-- Modal preset -->
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

<!--modal sosmed-->
<div class="modal fade" id="sosmed" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        
        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('setting/sosmed_update') ?>">
         
         <input type="hidden" id="sosmed_id" name="sosmed_id">

          <div class="form-group">
            <label>Name</label>
            <input type="text" required="" id="sosmed_name" name="sosmed_name" placeholder="Sosial media name" class="form-control">
          </div>
          <div class="form-group">
            <label>Link / Url</label>
            <input type="text" required="" id="sosmed_link" name="sosmed_link" placeholder="Link sosial media" class="form-control">
          </div>
          <div class="form-group">
            <label>Icon</label>
            
            <input type="file" name="sosmed_icon" class="form-control">
          </div>
          <div class="form-group">
            <label>Color</label>
            <input type="color" required="" id="sosmed_color" name="sosmed_color" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success">Update <i class="fa fa-check"></i></button>

            <a id="sosmed_delete" href=""><button type="button" class="btn btn-danger">Remove <i class="fa fa-times"></i></button></a>
          </div>

        </form>

      </div>
    </div> 
  </div>
</div>

<!--modal youtube-->
<div class="modal fade" id="youtube" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        
        <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('setting/youtube_update') ?>">
         
         <input type="hidden" id="youtube_id" name="youtube_id">

        <iframe id="youtube_frame" style="width: 100%" height="415" src=""></iframe>

          <div class="form-group">
            <label>Link Youtube</label>
            <input type="text" required="" id="youtube_link" name="youtube_link" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success">Update <i class="fa fa-check"></i></button>

            <a id="youtube_delete" href=""><button type="button" class="btn btn-danger">Remove <i class="fa fa-times"></i></button></a>
          </div>

        </form>

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


// add row sosmed
$("#addRow").click(function () {
      var i = $('#number').val();

      var html = '';
    
      html += '<div id="inputFormRow">';
      html += '<div class="col-md-3">';
          html += '<label>Name</label>';
          html += '<input type="text" required="" name="sosmed_name[]" placeholder="Sosial media name" class="form-control">';
        html += '</div>';
        html += '<div class="col-md-3">';
          html += '<label>Link / Url</label>';
          html += '<input type="text" required="" name="sosmed_link[]" placeholder="Link sosial media" class="form-control">';
        html += '</div>';
        html += '<div class="col-md-3">';
          html += '<label>Icon</label>';
          html += '<input type="file" required="" name="sosmed_icon'+i+'" multiple="multiple" class="form-control">';
        html += '</div>';
        html += '<div class="col-md-3">';
          html += '<label>Color</label>';
          html += '<input type="color" required="" name="sosmed_color[]" class="form-control">';
        html += '</div>';
        // html += '<div class="col-md-1">';
        //  html += '<label>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;</label>';
        //   html += '<button id="removeRow" class="btn btn-danger" type="button"><i class="fa fa-times"></i></button>';
        // html += '</div>';
        html += '<div>';
        html += '<div class="clearfix"></div><br/>';

    $('#newRow').append(html);


    //tambah
    var n = parseInt(i)+1;
    $('#number').val(n);
});

//////////////////////// video ////////////////////////
$("#addVideo").click(function () {
      var i = $('#videoNumber').val();

      var html = '';
    
      html += '<input placeholder="Input link youtube" class="form-control" type="text" name="youtube_link[]"><br/>';


    $('#newVideo').append(html);


    //tambah
    var n = parseInt(i)+1;
    $('#videoNumber').val(n);
});


function sosmed(id){
  $.ajax({
    url: '<?php echo base_url('setting/getsosmed') ?>',
    type: 'POST',
    dataType: 'json',
    data: {id: id},
  })
  .done(function(data) {
    var sosmed_id = data[0]['sosmed_id'];

    $('#sosmed_id').val(sosmed_id); 
    $('#sosmed_name').val(data[0]['sosmed_name']);
    $('#sosmed_color').val(data[0]['sosmed_color']);
    $('#sosmed_link').val(data[0]['sosmed_link']);

    $('#sosmed_delete').attr('href', '<?php echo base_url('setting/sosmed_delete/') ?>'+sosmed_id);

    $('#sosmed').modal('toggle');

  });
}

function modalyoutube(id){
  $.ajax({
    url: '<?php echo base_url('setting/getyoutube') ?>',
    type: 'POST',
    dataType: 'json',
    data: {id: id},
  })
  .done(function(data) {
    var youtube_id = data[0]['youtube_id'];

    $('#youtube_frame').attr('src', 'https://www.youtube.com/embed/'+data[0]['youtube_link']);

    $('#youtube_link').val('https://www.youtube.com/watch?v='+data[0]['youtube_link']);

    $('#youtube_id').val(youtube_id);

    $('#youtube_delete').attr('href', '<?php echo base_url('setting/youtube_delete/') ?>'+youtube_id);

    $('#youtube').modal('toggle');

  });
}
</script>
