<?php

$color = array();

//           0        1       2
$color = ["green", "blue", "red"];
echo $color[2];

//add item in array
$color[] = "black";

echo json_encode($color), "<br>";

//replace item in array
$color[0] = "yellow";

echo json_encode($color), "<br>";


//delete a specific item in array
echo json_encode($color), "<br>";
unset ($color[1]);
echo json_encode($color), "<br>";

$data = ["john doe", 23, "Bacoor, Cavite", "BSIT", 4102, "09999999999"];
echo json_encode($color), "<br>";

//associative arrays
$cars = ["toyota" => "vios", "honda" => "city", "hyundai" => "yamaha"];
echo json_encode($cars), "<br>";

//adding arrays
$student = ["name" => "John Doe",
            "course" => "BSIT",
            "email" => "jdoe@test.com",
            "address" => "Bacoor, Cavite"];
        echo $student["address"], "<br>";

//echo json_encode($student), "<br>";

//individual display of array data
$indexArr = ["john doe", "BSIT", "jdoe@test.com", "Bacoor, Cavite"];
echo $indexArr[3], "<br>";

//foreach loop
foreach($student as $row){

    echo $row, "<br>";

}

//echo value
/*function showName($name = "", $number = 0){
    //"blank name"
    //"0"
    echo "HELLO THERE, ",$name,", your total amount due is ",$number;
    
}

//showName("Adrian");

$amount = "3500";
showName("John Doe",$amount);*/


//return value
function computeFare($fareAmount, $discount){

    
    $totalDiscount = $fareAmount * ($discount/100);
    $totalFare = $fareAmount - $totalDiscount;
    return $totalFare;

}

echo computeFare(200,20);
//echo $displayValue;



?>