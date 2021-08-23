<?php
include '../configfile.php';
//var_dump($_POST);

$id=$_POST['student_name'];
$count_serv =count($_POST['services']);
$arr_serv = $_POST['services'];
$arr_chrg = $_POST['price'];
var_dump($count_serv);
var_dump($arr_serv);

for ($i=0;$i<$count_serv;$i++)
{
if($arr_serv[$i]=="")
{
	echo "nothing";
}
	else
	{
echo "select";
$sel="SELECT services from tbl_additional_services WHERE regist_id='$id' and services='$arr_serv[$i]'";
$res1=mysqli_query($link, $sel);
$res=mysqli_query($link, $sel);
	$row = mysqli_fetch_array($res);
	echo "data frm table".$row[0];
	echo "<br>" ;
	echo $arr_serv[$i];
		if($row[0]=="")
		{
			$sql3 = "INSERT INTO tbl_additional_services(services,charges,regist_id) VALUES('$arr_serv[$i]','$arr_chrg[$i]','$id')";
$test2=(mysqli_query($link, $sql3));
		}
		else
		{
	while($row1 = mysqli_fetch_array($res1))
 	{
 	if($row1["services"]== $arr_serv[$i])
 	{
 		echo "Shobhit";
 	}
 	else
 		{
 			echo "insert";
 			$sql2 = "INSERT INTO tbl_additional_services(services,charges,regist_id) VALUES('$arr_serv[$i]','$arr_chrg[$i]','$id')";
$test=(mysqli_query($link, $sql2));
			
 		}
	}
}
}
}


?>