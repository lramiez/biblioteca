<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LMRR Formulario</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<!--FORMULARIO---->
    <form class="form" method="post" action="areacirculo.php" >
        <h1 class="titulo">Cálculo de Áreas</h1>
        <input class="cajas" type="text" name="nombre" placeholder="Escribe tu nombre " required maxlength="30">
        <input class="cajas" type="text" name="radio" placeholder="Esctibe el radio del circulo" required maxlength="30">
        <input class="botoncolor" type="submit" value="Realizar el cálculo del área">
        <button class="botoncolor"><a href="index.html">regresar al menú</a></button>
     </form>
</body>
</html>