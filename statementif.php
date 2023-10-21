<?php

$x = 19;
echo "x = $x </br>";

//menggunakan statement IF-ELSE
if($x %2 ==0){
    echo "$x adalah bilangan genap";
} else{
    echo "$x adalah bilangan ganjil";
}

echo "</br></br>";

//menggunkan statment IF-ELSEIF-ELSE
$tahun = "2023";

if ($tahun == "2020") {
    echo "sekarang tahun 2020";
} elseif ($tahun == "2021") {
    echo "sekarang tahun 2021";
} elseif ($tahun == "2022") {
    echo "sekarang tahun 2022";
} else {
    echo "sekarang tahun 2023";
}

?>