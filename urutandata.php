<?php

echo "Data awal : larine, aduh, qifuat, toda, anevi, samid, kifuat";
echo "<br>";
echo "Menjadi : ";
echo "<br>";
$data=['larine','aduh', 'qifuat', 'toda', 'anevi', 'samid', 'kifuat'];
sort($data);
foreach ($data as $new){
    echo $new;
    echo "<br>";
}

?>