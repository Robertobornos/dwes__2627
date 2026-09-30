<?php

//is_null()  Devuelve true si la variable es null, false en caso contrario
//asignar null a la variable 
//cuando la variable no se ha definido
//cuando este  definito sin valor
//cuando la variable se ha eliminado con unset()

/*

isset();

devuelve true
cuando la variable ha sido definida 

*/



// $var = 23;


// if(is_null($var)){
//     echo "La variable es nula<br>";

// }else{
//     echo "La variable no es nula<br>";

// }

// $var1=10;

// if(isset($var1)){
//     echo "La variable está definida<br>";
    

// }else{
//     echo "La variable no está definida<br>";
// }




$var1="";

 if(empty($var1)){
     echo "La variable está vacia<br>";
    

 }else{
  echo "La variable no está vacia<br>";
 }

?>