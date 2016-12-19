
<section class="content">
	<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Importar y mapear archivos</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
            <div class="row">
              	<div class="col-md-12">
	            <div class="form-group">
	                <label>Cliente</label>
	                <select class="form-control select2" disabled="disabled" style="width: 100%;">
	                  <option selected="selected">Cliente</option>
	                </select>
	            </div>
	        	</div>
	        	<div class="col-md-12">
	            <div class="form-group">
	                <label>Año</label>
	                <select class="form-control select2" disabled="disabled" style="width: 100%;">
	                  <option selected="selected">Año</option>
	                </select>
	            </div>
	        	</div>
	        	<div class="col-md-12">
	            <div class="form-group">
	                <label>Tipo</label>
	                <select class="form-control select2" disabled="disabled" style="width: 100%;">
	                  <option selected="selected">Tipo</option>
	                </select>
	            </div>
	        	</div>
	    	</div>
		</div>
	</div>
	<div class="row">
    	<div class="col-xs-12">
	        <div class="box box-primary">
	                <div class="box-header">
	                  <h3 class="box-title">Listado de Clientes</h3>
	                </div>
	              <table id="example1" class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th>Fuente de Datos</th>
	                  <th>Año CD</th>
	                  <th>Mes CD</th>
	                  <th><label>
                  <input type="checkbox" class="minimal" checked>
                </label></th>
	                </tr>
	                </thead>
	                <tbody>
	                <tr>
	                  <td>USA</td>
	                  <td>2015</td>
	                  <td>Nobiembre</td>
	                  <td><label>
                  <input type="checkbox" class="minimal" checked>
                </label></td>
	                </tr>
	                </tbody>
	                <tfoot>
	                <tr>
	                  <th>Fuente de Datos</th>
	                  <th>Año CD</th>
	                  <th>Mes CD</th>
	                  <th><label>
                  <input type="checkbox" class="minimal" checked>
                </label></th>
	                </tr>
	                </tfoot>
	              </table>
	        </div>
            <!-- /.box-body -->
      	</div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      
      <!-- /.row -->
</section>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
<!-- page script -->
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

