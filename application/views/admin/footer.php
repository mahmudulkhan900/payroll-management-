 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Md Mahmudul</b> Hasan
    </div>
    <strong>&copy; <?php echo date("Y"); ?></strong> Payroll Management System 
  </footer>

</div>




<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script>
    $('#datepicker').datepicker({
      autoclose: true
    })
</script>
<script>
  $(function () {
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
</body>
</html>
