<?php 
error_reporting(-1);
// Найти наибольший общий делитель (НОД) двух натуральных чисел N и M.
$n = 28;
$m = 56;

echo(nod($n, $m));

function nod($n, $m){
    $nodn = 0;
    $nodm = 0;
    for($i = 1; $i < $m; $i++){
        if($n % $i == 0){
            $nodn = $i;
        }
        if($m % $i == 0){
            $nodm = $i;
        }
        if ($nodn == $nodm){
            $nod = $nodn;
        }
    } 
    return $nod;
}   


