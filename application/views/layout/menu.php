<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('s_NOMBRES'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">CLIENTES</li>
        <li><a href="<?php echo base_url();?>ccrearcliente"><i class="fa fa-user-plus"></i> <span>Crear Cliente</span></a></li>
        <li><a href="<?php echo base_url();?>ccrearestudio"><i class="fa fa-bar-chart"></i> <span>Crear Estudio</span></a></li>
        <li class="header">MANEJO DE BASE DE DATOS</li>
        <li><a href="<?php echo base_url();?>cimportarmapear"><i class="fa  fa-map"></i> <span>Importar y mapear archivos</span></a></li>
        <li class="header">REPORTE</li>
        <li><a href="#"><i class="fa  fa-file-excel-o"></i> <span>Ratio Report</span></a></li>
        <li><a href="#"><i class="fa  fa-file-excel-o"></i> <span>Regresión</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  