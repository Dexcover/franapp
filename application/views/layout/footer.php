
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.7
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <div class="form-group">
      <h3 class="control-sidebar-heading" style="text-align: center;">Administrar usuarios</h3>
      <div class="form-group">
        <label class="control-sidebar-subheading">
          <a href="#" class="btn btn-block btn-primary btn-sm" style="with:80%;" data-toggle="modal" data-target="#modalcrearusuario">Crear Usuario</a>
        </label>
        <label class="control-sidebar-subheading">
          <a href="#" class="btn btn-block btn-primary btn-sm" style="with:80%;" data-toggle="modal" data-target="#modalupusuario">Actualizar Usuarios</a>
        </label>
      </div>
    </div>
  </aside>
  <!-- Modal Crear usuario -->
<div id="modalcrearusuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal Contentenido-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Crear Usuario</h4>
      </div>
      <div class="modal-body">
       <form action="<?php echo base_url();?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="txtci" placeholder="Cedula">
      </div>
      <div class="form-group has-feedback">
      <select name="cborol" class="form-control select2" style="width: 100%;">
      <option value="disabled" selected="selected">Administrador</option>
      </select>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="txtnombres" placeholder="Nombres">
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="txtpass" placeholder="Contraseña">
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Crear</button>
        </div>
        <!-- /.col -->
      </div>
    </form> 
      </div>
      
        
    </div>
  </div>
</div>
<!-- Modal Fin Crear usuario -->
<!-- Modal actualizar usuario -->
<div id="modalupusuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal Contentenido-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar Usuario</h4>
      </div>
      <div class="modal-body">
      </div>
      <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Cedula</th>
                      <th>Rol</th>
                      <th>Nombres</th>
                      <th>Contraseña</th>
                      <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>17870019</td>
                      <td>Carlos España</td>
                      <td>Administrador</td>
                      <td>y373y37eie82782yeue272yye73</td>
                      <td><a href="#" class="btn btn-block btn-primary btn-sm" style="with:20%;" data-toggle="modal" data-target="#modaleditarusuario" >Editar</a><a href="<?php echo base_url();?>" class="btn btn-block btn-danger btn-sm" style="with:50%;" >Eliminar</a></td>
                      
                    </tr>
                   
                    </tbody>
                    <tfoot>
                    <tr>
                    <th>Cedula</th>
                      <th>Rol</th>
                      <th>Nombres</th>
                      <th>Contraseña</th>
                      <th style="width: auto;">Acción</th>
                      
                    </tr>
                    </tfoot>
      </table>
    </div>
  </div>
</div>
<!-- Modal Fin actualizar usuario -->
 <!-- Modal Editar usuario -->
<div id="modaleditarusuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal Contentenido-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Usuario</h4>
      </div>
      <div class="modal-body">
       <form action="<?php echo base_url();?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control"name="txtcedula" placeholder="Cedula">
      </div>
      <div class="form-group has-feedback">
      <select name="rol" class="form-control select2" style="width: 100%;">
      <option value="disabled" selected="selected">Administrador</option>
      </select>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="txtnombres" placeholder="Nombres">
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="txtpass" placeholder="Contraseña">
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Editar</button>
        </div>
        <!-- /.col -->
      </div>
    </form> 
      </div>
      
        
    </div>
  </div>
</div>
<!-- Modal Fin Crear usuario -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url();?>assets/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url();?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

<!-- Page script -->

<script>

  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();



    //Date range picker
    $('#reservation',).daterangepicker();
    //Date range picker with time picker
   

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button

    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );


    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });

  });
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
