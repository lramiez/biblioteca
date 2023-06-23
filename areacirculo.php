<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilos.css">
    <title></title>
</head>
<body>

    <form class="form" method="post" action="areacirculo.php" >

         <h1 class="titulo">Cálculo de Áreas</h1>
         <h1 class="titulo2">
            <?php  
                echo "Hola ";
                $nombre = $_POST['nombre']; 
                echo $nombre;
                
                $radio = $_POST['radio'];
                $area= pi()*pow($radio, 2);
                
                echo "<br>";
                echo "el área del circulo para un radio de --> ";echo $radio; echo " es.... ";echo $area;
               
                ?>
        </h1>
         
        <button class="botoncolor"><a href="index.html">regresar al menú</a></button>
     </form>

     
 

</body>
</html>
   