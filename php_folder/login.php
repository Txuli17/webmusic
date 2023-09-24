<form method="post">
    <label for="Gmail">Gmail:</label>
    <input type="text" name="Gmail" id="Gmail" required>
    <label for="Password">Contraseña</label>
    <input type="password" name="Contraseña" id="Contraseña" required>
    <input type="submit" name="submit" value="enviar">
</form>
<?php
$servidor = "localhost"; 
$usuario = "root"; 
$contraseña = ""; // Reemplaza con tu contraseña.
$base_de_datos = "usuarios";
$conexion = new mysqli($localhost, $root, '', $usuarios);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
if ($_SERVER ["REQUEST_METHOD"] == "POST")
$Gmail1 = $_POST["Gmail"];
echo $Gmail1;
?>