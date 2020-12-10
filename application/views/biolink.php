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
