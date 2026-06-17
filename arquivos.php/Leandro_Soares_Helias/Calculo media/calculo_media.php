<?php
header("Content-Type: text/html; charset=utf-8");

// Corrigido 'fnotal' para 'fnota1' para bater com o HTML
$n1 = $_GET['fnota1']; 
$n2 = $_GET['fnota2'];
$n3 = $_GET['fnota3'];
$nome = $_GET['fnome'];

$media = ($n1 + $n2 + $n3) / 3;
$media = number_format($media, 1);

echo "A média do $nome é = $media";
?>