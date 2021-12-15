<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking Tour Through Travel Agency</title>
</head>
{
    "Booking": {
        "Employee name": "Tanvir",
        "Plane": "US Bangla Airlines",
        "Seat num": 10A,
        "Price": "5000 TK",
        "Destination": Cox's Bazar",
    }
}
<?php
$Bookings = array("Bus", "Train");
 
echo json_encode($Bookings);
?>
	 <?php

$json = '{"Bus":5,"Train":7}';
 
var_dump(json_decode($json,true));
?>
<?php
$Bookings = array("Bus", "Train");

        foreach ($Bookings as $value) {
       echo "$value <br>";
       }
	 ?>  
</html>