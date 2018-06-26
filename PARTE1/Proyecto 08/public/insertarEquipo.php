<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>

  </head>
  <body>
    <h1 text align="center">Introduce tus datos</h1><br>
      <center><form action="listadoEquipo.php" method="post" onsubmit="return comprobarEquipo()">

        <p text align="center">Equipo</p>
        <input type="text" value="" id="nombreEquipo" name="nombreEquipo">

        <p text align="center">Participantes</p>
        <input type="text" value="" id="participantes" name="participantes">

        <input type="submit" name="RegistroEquipo" value="Regístrate">
      </form></center>

      <script src="js/comprobarEquipo.js"></script>
  </body>
</html>
