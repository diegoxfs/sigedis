<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
   
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/dashboard.css" rel="stylesheet">
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
    background-color:#CFCFCF;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
	
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>/dashboard">SIGE<strong>DIS</strong></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url(); ?>/dashboard">Dashboard</a></li>
            <li><a href="#">Cuenta</a></li>
          </ul>
        </div>
      </div>
    </nav>	
	
	
<!-- Beginning header -->
<!-- End of header-->

<!-- Menú -->

	    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Gestion <span class="sr-only">(current)</span></a></li>
            <li><a href="<?php echo site_url();?>/core/gestion_alumno">Alumnos</a></li>
            <li><a href="<?php echo site_url();?>/core/gestion_curso">Cursos</a></li>
            <li><a href="<?php echo site_url();?>/core/gestion_iglesia">Iglesias</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Acciones<span class="sr-only">(current)</span></a></li>
            <li><a href="<?php echo site_url();?>/core/gestion_matricula">Matriculas</a></li>
            <li><a href="<?php echo site_url();?>/core/gestion_inscripcion">Inscribir curso</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Seguridad<span class="sr-only">(current)</span></a></li>
            <li><a href="<?php echo site_url();?>/core/gestion_usuario">Usuarios</a></li>
            <li><a href="<?php echo site_url();?>/core/gestion_permiso">Permisos</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="table-responsive">
            
          </div>
        </div>
      </div>
    </div>

	
<!-- End Menú -->

    <!--<div style='height:20px;'></div>-->  
    <div style="width: 1000px; margin-right: 30px; float: right;">
        <?php echo $output; ?>
    </div>
<!-- Beginning footer -->
<div></div>
<!-- End of Footer -->
</body>
</html>


 