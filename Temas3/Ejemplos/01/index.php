<?php



$a=10;
$b='10';
$c=5;
$d='HOLA PEPE';
$e='Hola luis';
$f='hola';



var_dump($a==$b);//true
var_dump($a===$b);//false
var_dump($a!==$b);//true
var_dump($a!=$b);//falso
var_dump($b>$c);//true
var_dump($a!=$c);//true
var_dump($a<>$c);//true
var_dump($d==$e);//false    



var_dump($d[0]==$e[0]);//false
var_dump($d[0]==$f[0]);//true


$Resultado=($a>$b)?"Es Mayor":"Es Menor";

echo $Resultado;


?>