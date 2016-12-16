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
        <form role="form" action="<?php echo base_url();?>ccrearcliente/crearcliente" method="post">
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
                    <p><?php 
                    if(!empty($mensaje))
                    echo $mensaje; ?></p>
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
                 <div class="form-group">
                <label>Cliente</label>
                <select class="form-control select2" style="width: 100%;">
                  <option value="disabled" selected="selected">Cliente</option>
                  
                  
                </select>
              </div>
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
                    

                     <?php foreach ($clientes as $c): ?>
                    <tr>              
                  <td><?php echo $c['N_CLIENTE']; ?></td>
                  <td><?php echo $c['RUC']; ?></td>
                  <td><?php echo $c['ID_USUARIO']; ?></td>
                  </tr>
                  <?php endforeach; ?>



                  
                    
                    
                    </tbody>
                   
                  </table>
                </div>
                <!-- /.box-body -->
        </div>
      </div>
  </div>
</section>