<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LogIn</title>

    <!-- Bootstrap CSS -->
    <!--
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Font-Awesome-master/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">
    -->
    <link rel="stylesheet" type="text/css" href="{{asset('My_Desing/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('My_Desing/Font-Awesome-master/web-fonts-with-css/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('My_Desing/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('My_Desing/css/global.css')}}">
  </head>
  <body>
    <div class="container-fluid bg">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12" ></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!--form start-->
          <form class="form-container">
            <h1>Login</h1>
            <div class="form-group">
              <label for="exampleInputEmail1">Correo</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo" name="" required="" autofocus>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="" required="">
            </div>
            
            <!--
            <div class="form-group">
              <label for="exampleInputFile"> File input</label>
              <input type="file" id="exampleInputFile" name="">
              <p class="help-block"> Example block-level help text here.</p>
            </div>
          -->
            <div class="checkbox">
              <label>
                <input type="checkbox" name="">Check me out
              </label>
            </div>
            <button type="submit" class="btn btn-success btn-block">Accesar</button>
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
