
<head>
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
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
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
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

