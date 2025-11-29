<h1> exo 1 </h1>
<h2> il faut montrait le prixHT et la tav est $prixTTC </h2>
<h3>premier idee</h3>
<?php

$prixHT = 50;
$Tva = 20;
$prixTTC = null;

if ($prixHT) {
    echo $prixHT;
}
if ($Tva) {
    echo $Tva;
}
if ($prixTTC = $prixHT + ($prixHT * $Tva / 100));

echo $prixTTf


// echo "ca c est le prixHT $prixHT" <"br">    .

?>

<?php
echo $prixHT;

echo $Tva;

if ($prixTTC = $prixHT + ($prixHT * $Tva / 100));

echo $prixTTC
?>