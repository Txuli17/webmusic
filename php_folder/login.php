<form method="post">
    <label for="Gmail">Gmail:</label>
    <input type="text" name="Gmail" id="Gmail" required>
    <label for="Password">Contraseña</label>
    <input type="password" name="Contraseña" id="Contraseña" required>
    <input type="submit" name="submit" value="enviar">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Gmail = $_POST["Gmail"];
    $Contraseña = $_POST["Contraseña"];
    if (empty($Gmail) || empty($Contraseña)) {
        echo "Rellene todos los campos";
    }
    $conn->close();
}

?>