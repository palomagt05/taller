<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Formulario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="<?php echo base_url('guardar')  ?>" method="post">
        <div class="card card-success collapsed-card">
          <div class="card-header">
            <h4 class="card-title">
              <i class="fas fa-plus-circle"></i> 
              Agregar taller
            </h4>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
            </div>
          </div>
          <div class="card-body">

            <div class="row">
              <div class="col-xs-12 col-md-12 col-lg-6">
                <div class="form-group">
                  <label for="">Nombre del taller</label>
                  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escriba aquí" required="required">
                </div>
                <div class="form-group">
                  <label for="">Lugar</label>
                  <input type="text" name="lugar" id="lugar" class="form-control" placeholder="Escriba aquí" required="required">
                </div>
                <div class="form-group">
                  <label for="">Cupo del taller</label>
                  <input type="number" name="cupo" id="cupo" class="form-control" placeholder="0" min="1" max="100" required="required">
                </div>
                <div class="form-group">
                  <label for="">Hora del taller</label>
                  <input type="time" name="hora" id="hora" class="form-control" required="required">
                </div>
              </div>
              <div class="col-xs-12 col-md-12 col-lg-6">
                <div class="form-group">
                  <label for="">Fecha del taller</label>
                  <input type="date" name="fecha" id="fecha" class="form-control" required="required">
                </div>
                <div class="form-group">
                  <label for="">Hora del taller</label>
                  <select name="tipo" id="tipo" class="form-control" required="required">
                    <option value="">Seleccione una opción</option>
                    <option value="1">Presencial</option>
                    <option value="2">Semi-Presencial</option>
                    <option value="3">Virtual</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Correo de Contacto</label>
                  <input type="email" name="correo" id="correo" class="form-control" required="required"  >
                </div>
                <div class="form-group">
                  <label for="">¿Trabajas?</label>
                  <input type="radio" name="trabaja" id="trabaja_1" required="required"> Si
                  <input type="radio" name="trabaja" id="trabaja_2" required="required" checked="checked"> No
                </div>
                <div class="form-group" id="div_trabaja" style="display:none;">
                  <label for="">¿Dónde trabajas?</label>
                  <input type="text" name="donde" id="donde" class="form-control" placeholder="Escriba aquí">
                </div>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  Ver ventana modal
                </button>
              </div>
            </div>

            
            
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <button class="btn btn-warning">Cancelar</button>
          </div>
        </div>
      </form>

      <div class="card card-success">
        <div class="card-header">
          <h2 class="card-title">Taller registrados</h2>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-hover table-striped" id="tabla">
            <thead>
              <tr class="text-center">
                <th>No.</th>
                <th>Nombre de taller</th>
                <th>Fecha</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php
              if ($talleres!=false) { 
                foreach ($talleres->result() as $taller) {
                  ?>
                  <tr>
                    <td><?php echo $taller->id_taller ?></td>
                    <td><?php echo $taller->nombre ?></td>
                    <td><?php echo $taller->fecha ?></td>
                    <td>
                      <a href="" title="Editar taller" class="">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="<?php echo base_url('borrar/'.$taller->id_taller) ?>" title="Borrar taller" class="btn-borrar" data-name="<?php echo $taller->nombre ?>">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <?php
                }
              }
              ?>
            </tbody>
            <tfoot></tfoot>
          </table>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
