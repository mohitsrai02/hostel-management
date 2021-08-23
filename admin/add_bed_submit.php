<?php
include '../configfile.php';





$locat=$_POST['locate_id'];
$hall=$_POST['hall_room_no'];
$bed=$_POST['bed_no'];
$rent=$_POST['rent'];
$status="pending";
$sql = "INSERT INTO tbl_room_details(location_id,status,hallroom_no,bed_no,rent)
VALUES ('$locat','$status','$hall','$bed','$rent')";
$test=(mysqli_query($link, $sql));

if($test==1)  {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);

header("Location: add_bed.php");


?>