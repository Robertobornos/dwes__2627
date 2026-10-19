<?php
$colores=["rojo","verde","azul","amarillo"];
echo $colores[0];
for($i=0; $i<count($colores); $i++){
    echo $colores[$i]."<br>";   
}
foreach($colores as $color){
    echo $color."<br>";
}
//añadir un elemento al array
$colores[]="naranja";
//eliminar un elemento del array
unset($colores[1]);
//cambiar un elemento del array
$colores[2]="lila";
