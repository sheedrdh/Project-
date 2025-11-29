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
if ($prixTTC = $prixHT + ($prixHT * $Tva / 100))
    ;

echo $prixTTC


    // echo "ca c est le prixHT $prixHT" <"br">    .

    ?>

<h2> second idee </h2>

<?php

echo $prixHT;


echo $Tva;

if ($prixTTC = $prixHT + ($prixHT * $Tva / 100))
    ;

echo $prixTTC
    ?>


<h2> 3 idee </h2>
<?php



//    function "formule" (if($prixTTC = $prixHT + ($prixHT * $Tva / 100))) 

function calculerPrixTTC($prixHT, $Tva)
{

    $prixTTC = $prixHT * (1 + $Tva / 100);
    return $prixTTC;
}
echo "prix HT  $prixHT <br> ";
echo "prix tva $Tva <br> ";
echo "prix ttc $prixTTC <br> ";

?>