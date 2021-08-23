<?php
include '../configfile.php';





$type=$_POST['hall_room'];
$locate=$_POST['location'];
$cap=$_POST['capacity'];

$sql = "INSERT INTO tbl_hall_details(type,location,capacity)
VALUES ('$type','$locate','$cap')";
$test=(mysqli_query($link, $sql));

if($test==1)  {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);

header("Location: add_hall.php");

?>