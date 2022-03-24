<?php
function nationality($nation){
    $nations=["Polska"=>"Polak","Hiszpania"=>"Hiszpan"];
    return $nations[$nation];
}

$nation="Hiszpania";
echo nationality($nation);