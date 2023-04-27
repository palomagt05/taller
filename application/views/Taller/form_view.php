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
      <form action="" method="post">
        <div class="card card-success">
          <div class="card-header">
            <h4 class="card-title">
              Ejemplo de formulario
            </h4>
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
              </div>
            </div>

            
            
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <button class="btn btn-warning">Cancelar</button>
          </div>
        </div>
      </form>

      <div class="card">
        <div class="card-body">
          <table class="table table-bordered table-hover table-striped" id="tabla">
            <thead>
              <tr class="text-center">
                <th>No.</th>
                <th>Nombre de taller</th>
                <th>Fecha</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <td>1</td>
                <td>Taller 1</td>
                <td>15-05-2023</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Taller 2</td>
                <td>15-05-2023</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Taller 3</td>
                <td>15-05-2023</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Taller 4</td>
                <td>15-05-2023</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Taller 5</td>
                <td>15-05-2023</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Taller 6</td>
                <td>15-05-2023</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Taller 7</td>
                <td>15-05-2023</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Taller 8</td>
                <td>15-05-2023</td>
              </tr>
              <tr>
                <td>9</td>
                <td>Taller 9</td>
                <td>15-05-2023</td>
              </tr>
              <tr>
                <td>10</td>
                <td>Taller 10</td>
                <td>15-05-2023</td>
              </tr>
            </tbody>
            <tfoot></tfoot>
          </table>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
