<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Asociacion
        <small>.</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Administrar</a></li>
        <li class="active">Nueva asociación</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row center-block">
        <div class="col-md-6">
                <!-- Input addon -->
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Nueva asociación</h3>
            </div>
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url(); ?>administrar/asociacion/addAsociacion">         
            <div class="box-body">
                
            <div class="alert alert-danger alert-dismissible <?php if(isset($data['mensaje'])){if($data['mensaje']!=0){echo 'hidden';}}?>">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-close"></i> Error!</h4>
                No se pudo ingresar el nuevo dato, intente nuevamente.
            </div>
            
            <div class="alert alert-success alert-dismissible <?php if(isset($data['mensaje'])){if($data['mensaje']!=1){echo 'hidden';}}?>">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Bien!</h4>
                Asociación correcta.
            </div>
                
            <div class="alert alert-danger alert-dismissible <?php if(isset($data['mensaje'])){if($data['mensaje']!==2){echo 'hidden';}}?>">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-close"></i> Error!</h4>
                Asociación ya establecida.
            </div>
                
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <select name="usuario" class="form-control" required>
                    <?php if(isset($data['usuarios'])) { foreach ($data['usuarios'] as $usuario): ?>
                    <option value="<?php echo $usuario['id_usuario'];?>"><?php echo $usuario['nombre'];?></option>
                    <?php endforeach; }?>
                  </select>
              </div>
                <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-connectdevelop"></i></span>
                <select name="dispositivo" class="form-control" required>
                    <?php if(isset($data['dispositivos'])) { foreach ($data['dispositivos'] as $dispositivo): ?>
                    <option value="<?php echo $dispositivo['id_dispositivo'];?>"><?php echo $dispositivo['nombre'];?></option>
                    <?php endforeach; }?>                    
                  </select>
              </div>
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary center-block">Agregar</button>
            </div>
                <h4>
                    <a href="<?php echo base_url(); ?>administrar/asociacion"><i class="fa fa-angle-double-left"></i> regresar</a>
                </h4>
            </form>                
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->