<?php
$conectar = mysqli_connect("localhost", "root", "W@s159874", "frota", "3306");
if (!$conectar) {
    die("Erro ao conectar ao banco: " . mysqli_error());
}
echo "Conectado com sucesso";
?> 