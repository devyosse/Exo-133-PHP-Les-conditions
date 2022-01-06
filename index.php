<?php

// Premiere ligne
$a = 50;
$b = 10;

if ($a > $b) {
    echo "Hello World!" ."<br>";
}

//Deuxieme ligne
if($a != $b) {
    echo "Hello World2" ."<br>";
}

//Troisieme ligne
if($a== $b) {
    echo "Oui" ."<br>";
}
else {
    echo "Non" ."<br>";
}


//Quatrieme ligne

 if($a == $b) {
    echo "1";
}
 if($a > $b) {
    echo "2";
}

elseif($a != $b) {
    echo "3";
}

//Cinquieme ligne
$color = "dude";

 if($color == "red") {
     echo "Hello";
 }
  elseif($color == "green"){
    echo "Welcome";
  }


if($color != "red" && "green"){
    echo "color vaut rien !";
}