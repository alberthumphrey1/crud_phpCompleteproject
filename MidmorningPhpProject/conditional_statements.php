<?php
//1.IF STATEMENT
//2. SWITCH STATEMENTS

   //IF STATEMENT
     //-->If statement
     //-->elseif statement
//If statement
//-------------
$age = 17;
if ($age > 18){
    echo "TRUE";
}else{
    echo"FALSE";
}
echo "<br>";
$c = 30;
$d = 30.0;
if ($c != $d){
echo "TRUE";
}else{
    echo"FALSE";
}
echo "<br>";
$a = 30;
$b = 30.0;
if ($c != $d){
    echo "TRUE";
}else{
    echo"FALSE";}
echo "<br>";
$e = 30;
$f = 30.0;
if ($e === $f){
    echo "TRUE";
}else{
    echo"FALSE";}
echo "<br>";
$g = 30;
$h = 30.0;
if ($g !== $h){
    echo "TRUE";
}else{
    echo"FALSE";}
echo "<br>";
$i = 30;
$j = 30.0;
if ($i <> $j){
    echo "TRUE";
}else{
    echo"FALSE";}
echo "<br>";
$k = 30;
$l = 30.0;
if ($k <> $l && $k==$l){
    echo "TRUE";
}else{
    echo"FALSE";}
echo "<br>";
$m = 30;
$n = 30.0;
if ($m >= $n){
    echo "TRUE";
}else{
    echo"FALSE";}
echo "<br>";
$o = 4;
$p = 2;
if ($o % $p ==1){
    echo "TRUE";
}else{
    echo"FALSE";}
echo "<br>";
$q = 3;
$r = 2;
echo $q<=>$r;
echo "<br>";
//-->else if statement
$firstNumber =20;
$secondNumber =30;
if($firstNumber>$secondNumber){
    echo"first Number is greater than second number";

}elseif ($firstNumber<$secondNumber){
    echo"first Number is less than second number";
}else{
    echo"first Number is equal to second number";
}
echo "<br>";
$marks = 65;
if ($marks<30){
    echo "E";
}elseif ($marks <25){
    echo "D-";
}elseif ($marks <30){
    echo "D";
}elseif ($marks <35){
    echo "D+";
}elseif ($marks <40){
    echo "c-";
}elseif ($marks <45){
    echo "C";
}elseif ($marks <50){
    echo "C+";
}elseif ($marks <55){
    echo "B-";
}elseif ($marks <60){
    echo "B";
}elseif ($marks <65){
    echo "B+";
}elseif ($marks <70){
    echo "A-";
}elseif ($marks <100){
    echo "A";
}else{
    echo"Enter valid marks";
}






