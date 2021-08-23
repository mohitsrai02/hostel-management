<?php
include '../configfile.php';

var_dump($_POST);

$sourc=$_POST['source'];
$amt=$_POST['amount'];
$dat=$_POST['date'];


$sql = "INSERT INTO tbl_other_payment(source,amount,payment_date)
VALUES ('$sourc','$amt','$dat')";
$test=(mysqli_query($link, $sql));

if($test==1)  {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}


mysqli_close($link);
header("Location:other_payment.php");















?>