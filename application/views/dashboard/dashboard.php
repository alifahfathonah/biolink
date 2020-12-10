
        <!-- /.aside -->
        <section id="content"> 
          <section class="vbox">           
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="<?php echo base_url('dashboard') ?>"><i class="fa fa-home"></i> Home</a></li>
                <li class="active"><?php echo $title ?></li>
              </ul> 
              
              <section class="panel panel-default">
                <div class="row m-l-none m-r-none bg-light lter">
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-info"></i>
                      <i class="fa fa-male fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear">
                      <span class="h3 block m-t-xs"><strong><?php echo $pemain_num ?></strong></span>
                      <small class="text-muted text-uc">Pemain</small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-warning"></i>
                      <i class="fa fa-male fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear">
                      <span class="h3 block m-t-xs"><strong><?php echo $pelatih_num ?></strong></span>
                      <small class="text-muted text-uc">Pelatih</small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light">                     
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-danger"></i>
                      <i class="fa fa-paste fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear">
                      <span class="h3 block m-t-xs"><strong><?php echo $sparing_num ?></strong></span>
                      <small class="text-muted text-uc">Sparing</small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-trophy fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear">
                      <span class="h3 block m-t-xs"><strong><?php echo $team_num ?></strong></span>
                      <small class="text-muted text-uc">Team</small>
                    </a>
                  </div>
                </div>
              </section>


              <div class="row">

                <div class="col-md-6">

                  <section class="panel panel-default">
                    <div class="carousel slide auto panel-body" id="c-slide">
                        <ol class="carousel-indicators out" style="bottom: 0;">
                          <li data-target="#c-slide" data-slide-to="0" class="active"></li>
                          <li data-target="#c-slide" data-slide-to="1" class=""></li>
                          <li data-target="#c-slide" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="<?php echo base_url('assets/slide/1.jpg') ?>" style="width: 100%; height: 240px">
                          </div>
                          <div class="item">
                            <img src="<?php echo base_url('assets/slide/2.jpg') ?>" style="width: 100%; height: 240px">
                          </div>
                          <div class="item">
                            <img src="<?php echo base_url('assets/slide/3.jpg') ?>" style="width: 100%; height: 240px">
                          </div>
                        </div>
                        <a class="left carousel-control" href="#c-slide" data-slide="prev">
                          <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control" href="#c-slide" data-slide="next">
                          <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                  </section>

                </div>

                <div class="col-md-6">
                  <section class="panel b-light">
                    <header class="panel-heading bg-primary dker no-border"><strong>Calendar</strong></header>
                    <div id="calendar" class="bg-primary m-l-n-xxs m-r-n-xxs"></div>
                  </section>  
                </div>

                <div class="col-md-12">
                  <section class="panel panel-default" style="background-color: #41586E; color: white;">
                    <div class="panel-body">

                      <div class="col-md-1">
                        <img class="img-thumbnail" src="<?php echo base_url('assets/images/club.jpeg') ?>" width="100" style="margin-bottom: 2%;">
                      </div>

                      <div class="col-md-11">
                        <table>
                        <tr><td>Klub</td> <td>&#160;&#160;:&#160;&#160;</td> <td>Blitar Poetra</td></tr>
                        <tr><td>Dibentuk</td> <td>&#160;&#160;:&#160;&#160;</td> <td>2017</td></tr>
                        <tr><td>Alamat</td> <td>&#160;&#160;:&#160;&#160;</td> <td>SEA-BLESS FUTSAL SRENGAT JL. RAYA KENDALREJO RT 01 / RW 01 KENDALREJO SRENGAT BLITAR JAWA TIMUR</td></tr>
                        </table>
                      </div>

                    </div>
                  </section>
                </div>

              </div>

            </section>
          </section>

        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
  