<?php
require_once __DIR__.'/../vendor/autoload.php';

use Daw\models\ConsultaEquipo;


$consulta = new ConsultaEquipo();
//var_dump($consulta);

$consulta->insertaEquipo($_POST['nombreEquipo'], $_POST['participantes']);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista Equipos</title>
  </head>
  <style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}

th {
  background-color: #0D9D0F;
  }
td {
  background-color: rgb(107,189,215);
  text-align: center;
}
</style>
  <body>
    <h1 text align="center">Lista Equipos</h1>
  </body>


  </table>
  <table style="width:60%" align="center">
      <tr>
          <th >NOMBRE EQUIPO</th>
          <th >NÚMERO PARTICIPANTES</th>
      </tr>
      <?php
      $seleccion = $consulta->listarEquipo();
      foreach ($seleccion as $fila) {

          echo "<tr>"."<td>"
              .$fila['nombre']."</td>"."<td>"
              .$fila['participantes']."</td>"."</tr>";
      }

      ?>

  </table>

    <table style="width:33%" align="center">
      <br></br>
    <tr>

        <th ><a href="insertarEquipo.php">Nuevo Equipo</a></th>
    </tr>
</table>
<br></br>
<br></br>
</html>
