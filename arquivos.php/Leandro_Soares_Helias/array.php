<?php header ("Content-type: text/html; charset=utf-8");
//trabalhando com arrays
$estado = array('SP', 'RJ', 'MG', 'AM', 'ES', 'PR', 'SC', 'RS');
//imprimindo arrays com while
$i =0;
while ($i < 8) {

    echo $estado[$i];
    echo"<br>";
    $i++;
}
?>