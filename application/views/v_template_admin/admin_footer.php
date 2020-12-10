  <!-- Bootstrap -->
  <script src="<?php echo base_url('assets/') ?>js/bootstrap.js"></script>
  <!-- App -->  
  <script src="<?php echo base_url('assets/') ?>js/app.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/app.plugin.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/charts/sparkline/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/charts/flot/jquery.flot.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/charts/flot/jquery.flot.tooltip.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/charts/flot/jquery.flot.resize.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/charts/flot/jquery.flot.grow.js"></script>
  <!-- <script src="<?php echo base_url('assets/') ?>js/charts/flot/demo.js"></script> -->
  <script src="<?php echo base_url('assets/') ?>js/charts/flot/jquery.flot.pie.min.js"></script>

  <script src="<?php echo base_url('assets/') ?>js/calendar/bootstrap_calendar.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/calendar/demo.js"></script>

  <script src="<?php echo base_url('assets/') ?>js/sortable/jquery.sortable.js"></script>

  <script src="<?php echo base_url('assets/') ?>sweetalert/sweet-alert.js"></script>

  <!-- datatables -->
  <script src="<?php echo base_url('assets/') ?>js/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/bootstrap-toggle.min.js"></script>

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
        text: "Hapus data ini ?",
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

  //delete
  function logout(url){
      swal({
        title: "Apa kamu yakin?",
        text: "Keluar aplikasi ?",
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

  //data table
  $(function () {

    //data table
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  
</script>