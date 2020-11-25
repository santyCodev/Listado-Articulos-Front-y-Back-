<?php
function retornarConexion() {
  $con=mysqli_connect("localhost","root","","bbdd");
  return $con;
}
?>