<h1> exo 1 </h1>
<h2> il faut montrait le prixHT et la tav est $prixTTC </h2>
<h3>premier idee</h3>
<?php

$prixHT = 50;
$Tva = 20;
$prixTTC = null;

if ($prixHT) {
    echo "prix HT  $prixHT <br> ";
}
if ($Tva) {
    echo "prix tva $Tva <br> ";
}
if ($prixTTC = $prixHT + ($prixHT * $Tva / 100));

echo "prix ttc $prixTTC <br> "



    // echo "ca c est le prixHT $prixHT" <"br">    .

    ?>

<h2> second idee </h2>

<?php

if ($prixTTC = $prixHT + ($prixHT * $Tva / 100));

    echo   "prix ttc $prixTTC <br> ";


      echo "prix HT  $prixHT <br> " ;

        echo $Tva;


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