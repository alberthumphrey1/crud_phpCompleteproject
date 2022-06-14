<?php
$weight=90;
$height=2.5;
$bmi=$weight / ($height*$height);
if ($bmi <= 24){
    echo "Underweight";
}elseif ($bmi <= 34){
    echo "Normal weight";
}elseif ($bmi <= 39){
    echo "Over weight";
}else {
    echo "Obese";
}
echo "<br>";
$Principle=5000;
$Rate=9;
$Time=4;
$interest=($Principle*$Rate*$Time)/100;
if ($interest<=3000){
    echo "Very advisable";
}elseif ($interest<=4000){
    echo "Fairly advisable";
}elseif ($interest<=5000){
    echo "Not advisable";
}else{
    echo "Scam";
}
echo "<br>";
$radius = 500;
$pi = 3.142;
$height = 100;
$area = ($pi * ($radius*$radius) * $pi * ($radius*$radius));
$volume = $area*$height;
if (($volume<2500 or ($volume > ($area*$area)))){
    echo "consider the cylinder";
}else {
    echo "reject the cylinder";
}
echo "<br>";
$email = "abdulrahmansofia01@gmail.com";
$password = "sofia123";
if ($email !== "abdulrahmansofia01@gmail.com")
    echo "Login";
elseif($password !== "sofia123")
    echo "Register";
else{
    echo"login";
}


