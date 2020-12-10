
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
                    <header class="panel-heading font-bold">

                      <?php if (@$power['registrasi_power']): ?>
                        <a href="<?php echo base_url('registrasi/power_off/'.$power['registrasi_id']) ?>"><button class="btn btn-sm btn-default btn-bg"><i class="fa fa-pause"></i> Stop</button></a>  
                      <?php else: ?>
                        <a href="<?php echo base_url('registrasi/power_on') ?>"><button class="btn btn-sm btn-default btn-bg"><i class="fa fa-play"></i> Start</button></a>
                      <?php endif ?>
                      
                    </header>
                    <div class="row m-l-none m-r-none bg-light lter">

                      <div class="countup" id="countup1">

                        <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                          <span class="fa-stack fa-2x pull-left m-r-sm">
                            <i class="fa fa-circle fa-stack-2x text-info"></i>
                            <i class="fa fa-clock-o fa-stack-1x text-white"></i>
                          </span>
                          <a class="clear" href="#">
                            <span class="timeel days h3 block m-t-xs">00</span>
                            <small class="timeel timeRefDays text-muted text-uc">Days</small>
                          </a>
                        </div>
                        <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                          <span class="fa-stack fa-2x pull-left m-r-sm">
                            <i class="fa fa-circle fa-stack-2x text-warning"></i>
                            <i class="fa fa-clock-o fa-stack-1x text-white"></i>
                          </span>
                          <a class="clear" href="#">
                            <span class="timeel hours h3 block m-t-xs">00</span>
                            <small class="timeel timeRefHours text-muted text-uc">hours</small>
                          </a>
                        </div>
                        <div class="col-sm-6 col-md-3 padder-v b-r b-light">                     
                          <span class="fa-stack fa-2x pull-left m-r-sm">
                            <i class="fa fa-circle fa-stack-2x text-danger"></i>
                            <i class="fa fa-clock-o fa-stack-1x text-white"></i>
                          </span>
                          <a class="clear" href="#">
                            <span class="timeel minutes h3 block m-t-xs">00</span>
                            <small class="timeel timeRefMinutes text-muted text-uc">minutes</small>
                          </a>
                        </div>
                        <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                          <span class="fa-stack fa-2x pull-left m-r-sm">
                            <i class="fa fa-circle fa-stack-2x icon-muted"></i>
                            <i class="fa fa-clock-o fa-stack-1x text-white"></i>
                          </span>
                          <a class="clear" href="#">
                            <span class="timeel seconds h3 block m-t-xs">00</span>
                            <small class="timeel timeRefSeconds text-muted text-uc">second</small>
                          </a>
                        </div>


                        <table class="table table-bordered table-hover m-b-none">
                          <thead>
                            <tr>
                              <th colspan="4" style="background-color: #F5F5F5;"><i class="fa fa-bell icon"></i> 10 user terbaru</th>
                            </tr>
                            <tr>
                              <th>Nama</th>
                              <th>Email</th>
                              <th>Tanggal</th>                    
                            </tr>
                          </thead>
                          <tbody>

                            <?php foreach ($data as $key): ?>
                              <tr>                    
                              <td><?php echo $key['user_nama'] ?></td>
                              <td><?php echo $key['user_email'] ?></td>
                              <td><?php echo $key['user_tanggal'] ?></td>
                              </tr>
                            <?php endforeach ?>
                              
                          </tbody>
                        </table>

                      

                      </div>
                      
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

<script type="text/javascript">

<?php if (@$power['registrasi_power'] == 1): ?>

  window.onload = function() {
    // Month Day, Year Hour:Minute:Second, id-of-element-container
    countUpFromTime("<?php echo $tanggal ?>", 'countup1'); // ****** Change this line!
  };
  function countUpFromTime(countFrom, id) {
    countFrom = new Date(countFrom).getTime();
    var now = new Date(),
        countFrom = new Date(countFrom),
        timeDifference = (now - countFrom);
      
    var secondsInADay = 60 * 60 * 1000 * 24,
        secondsInAHour = 60 * 60 * 1000;
      
    days = Math.floor(timeDifference / (secondsInADay) * 1);
    years = Math.floor(days / 365);
    if (years > 1){ days = days - (years * 365) }
    hours = Math.floor((timeDifference % (secondsInADay)) / (secondsInAHour) * 1);
    mins = Math.floor(((timeDifference % (secondsInADay)) % (secondsInAHour)) / (60 * 1000) * 1);
    secs = Math.floor((((timeDifference % (secondsInADay)) % (secondsInAHour)) % (60 * 1000)) / 1000 * 1);

    var idEl = document.getElementById(id);
    //idEl.getElementsByClassName('years')[0].innerHTML = years;
    idEl.getElementsByClassName('days')[0].innerHTML = days;
    idEl.getElementsByClassName('hours')[0].innerHTML = hours;
    idEl.getElementsByClassName('minutes')[0].innerHTML = mins;
    idEl.getElementsByClassName('seconds')[0].innerHTML = secs;

    clearTimeout(countUpFromTime.interval);
    countUpFromTime.interval = setTimeout(function(){ countUpFromTime(countFrom, id); }, 1000);
  }

  <?php endif ?>
</script>
  