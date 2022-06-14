<?php
//ARRAYS
    //1. INDEXED ARRAYS
    //2.ASSOCIATIVE ARRAYS

//........INDEXED ARRAYS.....//
$cars = ["Dodge" , "Mitsubishi" , "Isuzu" , "Honda" , "Porsche" , "Range"];
echo $cars[1];
echo "<br>";
echo $cars[4];
echo "<br>";
//sorting an indexed array in an ascending order
sort($cars);
foreach ($cars as $gari){
    echo "<p>$gari</p>";
}

//.........ASSOCIATIVE ARRAYS.....//
$magari = ["KDH006"=>"Porsche", "KCD987"=> "Ford", "KDY435"=>"Chevrolet"];
echo $magari["KCD987"];
//sorting an assosiative array in ascending order with respect to keys
//ksort($magari);
//sorting an assosiative array in descending order with respect to keys
//krsort($magari);
//sorting an assosiative array in ascending order with respect to value
//asort($magari);
//sorting an assosiative array in descending order with respect to value
arsort($magari);
foreach ($magari as $key => $value){
    echo "<p>$key........$value</p>";
}

