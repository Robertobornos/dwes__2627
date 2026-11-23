<?php



$nota = 7;



if($nota<5){


 "Insuficiente";

}else if($nota>=5 && $nota<6){

echo "Suficiente";
}else if($nota>=6 && $nota<7){

echo "notable";

}else if($nota>=7 && $nota<9){

echo "sobresaliente";


}else if ($nota<0 || $nota>10){

echo "la nota tiene que estar entre 0 y 10 ";
}

?>