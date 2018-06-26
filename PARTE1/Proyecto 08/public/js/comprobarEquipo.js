
function comprobarEquipo(){

  var nombreEquipo = document.getElementById('nombreEquipo').value;
  var participantes = document.getElementById('participantes').value;




  if (nombreEquipo.length == 0) {
    alert ("No has rellenado el nombre del equipo");
    return false;
  }

  if (participantes.length == 0) {
    alert ("No has rellenado el número de participantes");
    return false;
  }

    if (participantes >5 || participantes <1) {
        alert ("El número de participantes no puede ser mayor que 5");
        return false;
    }

}
