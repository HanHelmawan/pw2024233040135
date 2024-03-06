<?php

function UrutanAngka($no){
    $monno =1;
    for ($i = 1; $i <= $no; $i++){
        for($j = 1; $j <=$i; $j++){
            echo $monno++." ";
        }
        echo("<br>");
    }
}
UrutanAngka(5);
?>
