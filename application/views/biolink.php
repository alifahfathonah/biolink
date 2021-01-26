<!DOCTYPE html>
<html lang="en" class="link-html"> 
    <head> 
        <title><?php echo $user['user_nama'] ?></title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo.png" />
        <link href="<?php echo base_url('assets/biolink/fontgoogle.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/biolink/bootstrap_v4.css') ?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets/biolink/custom.css') ?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets/biolink/link_custom.css') ?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets/biolink/fontawesome.css') ?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets/biolink/animated.min.css') ?>" rel="stylesheet" media="screen">

        <style type="text/css">
            a:link{
                box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2), 0 3px 17px 0 rgba(0, 0, 0, 0.19);
            }
        </style>
    </head> 

    
    <body class="link-body" style="background-image: url(<?= ($data['account_bg_type'] == 'preset')? base_url('assets/preset/'.$data['account_preset']):base_url('assets/images/bg/'.$data['account_bg']) ?>);
    height: 100%;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    color: <?php echo $data['account_teks'] ?>;">
        <div class="container animated fadeIn">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-md-8 link-content">

                    <header class="d-flex flex-column align-items-center">

                        <img id="image" src="<?= ($user['user_foto'] == null)? base_url('assets/images/no.jpg'):base_url('assets/images/user/'.$user['user_foto']) ?>" alt="Avatar" class="link-image" />
                            
                        <div class="d-flex flex-row align-items-center mt-4">
                            <h1 id="title"><?php echo $user['user_nama'] ?></h1>

                            <span data-toggle="tooltip" title="Verified" class="link-verified ml-1"><i class="fa fa-check-circle fa-1x"></i></span>
                        </div>

                        <p id="title"><h4>( <?php echo $data['account_title'] ?> )</h4></p>
                        <p id="description"><?php echo $data['account_deskripsi'] ?></p>
                    </header>

                    <main id="links" class="mt-4">

                        <?php if (!$data['account_twitter'] == null): ?>
                            <div data-link-id="56">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_twitter'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #1DA1F3;"><i class="fab fa-twitter mr-1"></i>Twitter    
                                    </a>
                                </div>
                             </div>
                        <?php endif ?>

                        <?php if (!$data['account_facebook'] == null): ?>
                            <div data-link-id="56">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_facebook'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #4867AA;"><i class="fab fa-facebook mr-1"></i>Facebook    
                                    </a>
                                </div>
                             </div>
                        <?php endif ?>

                        <?php if (!$data['account_instagram'] == null): ?>
                            <div data-link-id="58">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_instagram'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #A9107E;"><i class="fab fa-instagram mr-1"></i>Instagram    
                                    </a>
                                </div>
                            </div>
                        <?php endif ?>  

                        <?php if (!$data['account_youtube'] == null): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_youtube'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #F70000;">
                                        <i class="fab fa-youtube mr-1"></i>Youtube    
                                    </a>
                                </div>
                            </div>  
                        <?php endif ?>
                        
                        <?php if (!$data['account_whatsapp'] == null): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_whatsapp'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #009A72;">
                                        <i class="fab fa-whatsapp mr-1"></i>Whatsapp    
                                    </a>
                                </div>
                            </div>  
                        <?php endif ?>

                        <?php if (!$data['account_telegram'] == null): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_telegram'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #5682A3;">
                                        <i class="fab fa-telegram mr-1"></i>Telegram    
                                    </a>
                                </div>
                            </div>  
                        <?php endif ?>

                        <?php if (!$data['account_gmail'] == null): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_gmail'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #F5C63D;">
                                        <i class="fa fa-envelope mr-1"></i>Gmail    
                                    </a>
                                </div>
                            </div>  
                        <?php endif ?>

                        <?php if (!$data['account_no'] == null): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo 'tel:/'.$data['account_no'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #02823e;">
                                        <i class="fa fa-phone-square mr-1"></i>No. Tlp    
                                    </a>
                                </div>
                            </div>  
                        <?php endif ?>

                        <!-- market place -->

                        <?php if (!$data['account_shopee'] == null): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_shopee'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #F7442E;">
                                        <img src="<?php echo base_url('assets/images/icon/shopee.png') ?>" width="30" height="30"> Shopee    
                                    </a>
                                </div>
                            </div>  
                        <?php endif ?>

                        <?php if (!$data['account_tokopedia'] == null): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_tokopedia'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #28a745;">
                                        <img src="<?php echo base_url('assets/images/icon/tokopedia.png') ?>" width="25" height="25"> Tokopedia    
                                    </a>
                                </div>
                            </div>  
                        <?php endif ?>

                        <?php if (!$data['account_lazada'] == null): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_lazada'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #0F146D;">
                                        <img src="<?php echo base_url('assets/images/icon/lazada.png') ?>" width="25" height="25"> Lazada    
                                    </a>
                                </div>
                            </div>  
                        <?php endif ?>

                        <?php if (!$data['account_bukalapak'] == null): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_bukalapak'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #CE0F55;">
                                        <img src="<?php echo base_url('assets/images/icon/bukalapak.png') ?>" width="25" height="25"> Bukalapak    
                                    </a>
                                </div>
                            </div>  
                        <?php endif ?>

                        <?php if (!$data['account_bibli'] == null): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_bibli'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #FFFFFF; color: #139BDD;">
                                        <img src="<?php echo base_url('assets/images/icon/blibli.png') ?>" width="25" height="25"> Blibli    
                                    </a>
                                </div>
                            </div>  
                        <?php endif ?>

                        <?php if (!$data['account_jdid'] == null): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_jdid'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #C81423;">
                                        <img src="<?php echo base_url('assets/images/icon/jdid.png') ?>" width="25" height="25"> Jd.id    
                                    </a>
                                </div>
                            </div>  
                        <?php endif ?>

                        <?php if (!$data['account_elevenia'] == null): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_elevenia'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #31A0FF;">
                                        <img src="<?php echo base_url('assets/images/icon/elevenia.png') ?>" width="55"> Elevenia    
                                    </a>
                                </div>
                            </div>  
                        <?php endif ?>

                        <?php if (!$data['account_amazon'] == null): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_amazon'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #232f3ec2;">
                                        <img src="<?php echo base_url('assets/images/icon/amazon.png') ?>" width="25" height="25"> Amazon    
                                    </a>
                                </div>
                            </div>  
                        <?php endif ?>

                        <?php if (!$data['account_alibaba'] == null): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $data['account_alibaba'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: #FFFFFF; color: #E35300;">
                                        <img src="<?php echo base_url('assets/images/icon/alibaba.png') ?>" width="25" height="25"> Alibaba    
                                    </a>
                                </div>
                            </div>  
                        <?php endif ?>

                        <?php foreach (@$sosmed_data as $key): ?>
                            <div data-link-id="57">
                                <div class="my-3">
                                    <a target="_BLANK" href="<?php echo $key['sosmed_link'] ?>" class="btn btn-block btn-default link-btn link-btn-rounded animated infinite false delay-2s" style="background: <?php echo $key['sosmed_color'] ?>;">
                                        <img src="<?php echo base_url('assets/images/sosmed/'.$key['sosmed_icon']) ?>" width="20" height="20"> <?php echo $key['sosmed_name'] ?>    
                                    </a>
                                </div>
                            </div>  
                        <?php endforeach ?>

                        <?php foreach ($youtube as $key): ?>
                            <iframe style="width: 100%" height="415" src="https://www.youtube.com/embed/<?php echo $key['youtube_link'] ?>"></iframe>
                        <?php endforeach ?>

                    </main>

                    <footer class="link-footer">
                        <a target="_BLANK" id="branding" href="<?= ($data['account_branding_url'] == null)? base_url():$data['account_branding_url'] ?>" style="color: <?php echo $data['account_teks'] ?>;">🔥 by <?= ($data['account_branding_name'] == null)?'BioLink':$data['account_branding_name'] ?></a>
                    </footer>
                    <br/>
                </div>
            </div>
        </div>
    </body>

    <script src="<?php echo base_url('assets/biolink/') ?>jquery.min.js"></script>
    <script src="<?php echo base_url('assets/biolink/') ?>popper.min.js"></script>
    <script src="<?php echo base_url('assets/biolink/') ?>bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/biolink/') ?>main.js"></script>
    <script src="<?php echo base_url('assets/biolink/') ?>functions.js"></script>
    <script src="<?php echo base_url('assets/biolink/') ?>fontawesome.min.js"></script>
</html>
