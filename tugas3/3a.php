<?php 
$a = 10;
$b=3.14;


echo "<br><b>Mengitung Luas Lingkaran</b><br><br>";
function hitungLuasLingkaran($a,$b){
    $luaslingkaran =$b*$a*$a;
    return $luaslingkaran;
}
echo "Jari-Jari = ". $a ."cm.<br>";
echo "Luas Lingkaran = ".$luas = hitungLuasLingkaran($a,$b)."cm <sup>2</sup> <br> <hr>";

echo "<br><b>Mengitung Keliling Lingkaran</b><br><br>";
function hitungKelilingLingkaran($a,$b){
    $kelilinglingkaran =2*$b*$a;
    return  $kelilinglingkaran ;
}
echo "Jari-Jari = ". $a * 2 ."cm.<br>";
echo "keliling Lingkaran = ".$keliling = hitungkelilingLingkaran($a,$b* 2)."cm <sup>2</sup> <br> <hr>";

?>
