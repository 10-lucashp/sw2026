<?php
echo "crescente <br>";
$numeros = [6, 4, 2, 5, 3, 1];
sort($numeros);
foreach ($numeros as $valor) {
echo "$valor <br>";}
?>

<?php
echo "decrescente <br>";
$numeros = [6, 4, 2, 5, 3, 1];
rsort($numeros);
foreach ($numeros as $valor) {
echo "$valor <br>";}
?>