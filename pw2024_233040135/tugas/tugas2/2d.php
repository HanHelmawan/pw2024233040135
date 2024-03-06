<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .warp {
        width: fit-content;
        border: 4px solid black;
        position: relative;
        display: flex;
    }
    .kotak {
        width: 100px;
        height:100px;
    } 
    .two {
     background-color: white;
     
    }
    .three {
        background-color: black;
        color:white;
    }
    div {
        width: fit-content;
        height: fit-content;
    }
</style>

</head>
<body>

<div class="warp">
<?php

for($i =1; $i <= 5; $i++){
    echo "<div>";
    for ($j = 1; $j <=5; $j++){      
        $class =($i + $j) % 2 == 0? "two":"three";
        echo "<div class = 'kotak $class'></div>";
    }
    echo "</div>";
}
?>
</div>
</body>
</html>
