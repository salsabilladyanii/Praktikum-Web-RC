<?php
echo "BERIKUT INI YANG MERUPAKAN BILANGAN PRIMA DARI 1-50 : ";
function prima($angka){
    $temp=0;
    for($i=1;$i<=$angka;$i++){
        if($angka%$i==0){
            $temp++;
        }
    }
    if($temp==2){
        echo "$angka<br>";
    }
}

for($i=1;$i<=50;$i++){
    prima($i);
}

?>