<?php


  include 'configfile.php';

$uname=$_POST["username"];
$pass=$_POST["pass"];

var_dump($_POST);

$sql=mysqli_query($link,("SELECT * FROM tbl_emp_registration WHERE u_name = '$uname' and u_pass= '$pass'"));
#$out = mysqli_query($link,$sql);
echo "<br>";
#var_dump($out);
    // output data of each row
    $row = mysqli_fetch_assoc($sql);
    var_dump($row['dept_name']);
            if($row['dept_name']=='admin')
                {
                    echo 'admin';
                    
                    header("Location:admin/index.php");
                }
                else
                    {
                        echo 'user';
                    
                        header("Location: employee/index.php");
                    }
    
    
           
?>
