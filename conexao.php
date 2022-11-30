<?php
$servername = "localhost";
$database = "condominio";
$username = "usuario_condominio";
$password = "Teste246!";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>