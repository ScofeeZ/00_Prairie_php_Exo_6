<?php
$langage = array("HTML","CSS","Javascript","PHP");
  function trier($abc) {
    sort($abc);
    return $abc;
  }
  $stringretour = array();
  $trierretour = trier($langage);
    foreach ($trierretour as $retour) {
        echo $retour;
    }
?>
