<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Usuarios</title>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="{{asset('My_Desing/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('My_Desing/Font-Awesome-master/web-fonts-with-css/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('My_Desing/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('My_Desing/css/global.css')}}">
    <!--
    <?php $message=Session::get('message')?>
    @if('message' == 'store')
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
      Usuario creado exitosamente
      
    </div>
    @endif
  -->

  </head>
  <body background="{{asset('My_Desing/images/wallpaper2you_27497.jpg')}}">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-lg-12" ></div>
        <div class="col-md-4 col-sm-4 col-lg-12">
          <!--form start-->
          <form class="form-container">
            <!--<h1>Registro de Usuarios</h1>-->
            <legend>Lista de Usuarios</legend>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Clave Funcionario</th>
                  <th>Email</th>
                  <th>Teléfono</th>
                  <th>Dirección</th>
                  <th>Municipio</th>
                  <th>Acción</th>
                </tr>
              </thead>
              @foreach($users as $user)
              <tbody>
                <tr>
                  <td>{{$user->nombre}}</td>
                  <td>{{$user->clave_fun}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->telefono}}</td>
                  <td>{{$user->direccion}}</td>
                  <td>{{$user->municipio}}</td>
                  <td>
                    <a class="btn btn-primary btn-sm" >Editar</a>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </form>
          <!--form end-->
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
      </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>