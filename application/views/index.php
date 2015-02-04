
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Acceso</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/grocery_crud/themes/sbadmin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/grocery_crud/themes/sbadmin/css/signin.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

        <?php 
        $attr = array ('class' =>'form-signin');
        echo form_open('usuario/valuser', $attr) ?>
        <h2 class="form-signin-heading">SIGE<strong>DIS </strong></h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="user" name="txtuser" id="txtuser" class="form-control" placeholder="Usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="txtpsw" id="inputPassword" class="form-control" placeholder="Clave" required>
        <div class="checkbox">
          <!--<label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>-->
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <?php echo form_close(); ?>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>