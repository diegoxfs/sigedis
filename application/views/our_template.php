<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
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
<!-- Beginning header -->
    <div>
        <a href='<?php echo site_url('core/gestion_alumno')?>'>Alumnos</a> | 
        <a href='<?php echo site_url('core/gestion_iglesia')?>'>Iglesias</a> |
        <a href='<?php echo site_url('core/gestion_curso')?>'>Cursos</a> |
        <a href='<?php echo site_url('core/gestion_inscripcion')?>'>Asignacion de cursos</a> |
        <a href='<?php echo site_url('core/gestion_matricula')?>'>Pago de matriculas</a> | 
    </div>
<!-- End of header-->
    <div style='height:20px;'></div>  
    <div>
        <?php echo $output; ?>
 
    </div>
<!-- Beginning footer -->
<div>hola si</div>
<!-- End of Footer -->
</body>
</html>


 