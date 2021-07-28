<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ver archivos</title>
    </head>
    <body> 
   <h1>Ver archivos en el directorio</h1>
   <ul>
       <?php
       $archivos=scandir("./archivos");
       for($i=0;$i<count($archivos);$i++){
           echo '<li>'.$archivos[$i].'</li>';
       }
       ?>
</ul>
    </body>
</html>
