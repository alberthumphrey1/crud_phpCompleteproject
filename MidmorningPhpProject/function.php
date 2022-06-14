<?php
//1.create a function to calculate tha BMI of any person

//2.create and print values of array of your linking in a descending order
// with respect to  the value
$students = ["ONE"=>"Bradley", "TWO"=> "Brandon", "THREE"=>"John", "FOUR"=> "Gerald"];
//sorting an assosiative array in descending order with respect to value
arsort($students);
foreach ($students as $students){
    echo "<p>$students</p>";
}

//3.using a for loop, while loop and do while loop respectively
// print all the numbers from 0-100 in a descending order
$counter=100;
while($counter>=0){
    echo"<p>$counter</p>";
    $counter--;
}
$counterTwo =100;
do{
    echo"<p>$counterTwo</p>";
    $counterTwo--;
}while($counterTwo>=0);




for ($counterX=100;$counterX>=0;$counterX--){
    echo "<p>$counterX</p>";
}
$y=100;
while($y>=0){
    echo $y;
    $y--;
}
echo "<br>";

$z=100;
do{
    echo $z;
    $z--;
}while($z>=0);


//4.Using a for loop ,while loop and do while loop respectively
//print all even numbers from 0-10
$counterThree=0;
while($counterThree<=100){
    if($counterThree%2 == 0){
        echo"$counterThree</p>";
    }

$counterThree++;
}