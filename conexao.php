<?php
$conectar = mysqli_connect("localhost", "root", "", "frota");
if (!$conectar) {
    die("Erro ao conectar ao banco: " . mysqli_error($conectar));
}
?> 