<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
                    <h3 class="box-title">Crear Cliente</h3>
                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
        </div>
        <form role="form" action="<?php echo base_url();?>ccrearcliente/crearcliente">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nombre del Cliente</label>
                        <input type="text" class="form-control"  name="nombre_cliente" placeholder="Nombre">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Ruc del Cliente</label>
                        <input type="text" class="form-control"  name="ruc" placeholder="Ruc">
                      </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                    </div>
                    <p><?php echo $mensaje; ?></p>
        </form>
      </div>
    </div>
  </div>  
  <div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Listado de Clientes</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nombre del Cliente</th>
                      <th>Ruc del Cliente</th>
                      <th>Autor</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.0
                      </td>
                      <td>Win 95+</td>
                      
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.5
                      </td>
                      <td>Win 95+</td>
                      
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 6
                      </td>
                      <td>Win 98+</td>
                      
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet Explorer 7</td>
                      <td>Win XP SP2+</td>
                      
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet Explorer 7</td>
                      <td>Win XP SP2+</td>
                      
                    </tr>
                    
                    
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
        </div>
      </div>
  </div>
</section>