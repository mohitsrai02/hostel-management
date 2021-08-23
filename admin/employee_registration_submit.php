<?php
include '../configfile.php';

if($_POST['sub']=="sub")
{
$nam=$_POST['user_name'];

/*photo*/

$target_dir = "assets/img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
echo "<br>";
$c = $_SERVER['HTTP_REFERER'];
$a = explode("/",$c);
echo "<br>";
$b = $a[0]."//".$a[2]."/".$a[3]."/".$target_file;


$gend=$_POST['gender'];
$dept=$_POST['user_dept'];
$unam=$_POST['u_name'];
$pswrd=$_POST['u_password'];
$dob=$_POST['u_dob'];
$prnt=$_POST['user_pname'];
$ecode=$_POST['emp_code'];
$pfno=$_POST['emp_pfno'];
$uhid=$_POST['emp_uhid'];
$bnkac=$_POST['emp_ac'];
$bnknam=$_POST['emp_bankname'];
$ifsc=$_POST['emp_ifsc'];
$locadd=$_POST['emp_address'];
$peradd=$_POST['emp_paddress'];
$qual=$_POST['emp_qualification'];
$city=$_POST['emp_city'];
$mob=$_POST['emp_mobile'];
$phone=$_POST['emp_phone'];
$email=$_POST['emp_email'];
$joindate=$_POST['emp_joiningdate'];
$releavedate=$_POST['emp_releavedate'];
$offday=$_POST['emp_offdays'];
$basis=$_POST['emp_basis'];
$hra=$_POST['emp_hra'];
$da=$_POST['emp_da'];
$ptax=$_POST['emp_ptax'];
$slry=$_POST['emp_salary'];
$pf=$_POST['emp_pf'];
$conv=$_POST['emp_conv'];
$itax=$_POST['emp_itax'];


$sql = "INSERT INTO tbl_emp_registration(emp_name,dept_name,u_name,u_pass,parent_name,pf_number,adhaar_no,bank_acc,bank_name,ifsc_code,address,city,mobile_no,phone_no,email,birth_date,joining_date,relieve_date,permanent_address,qualification,gender,off_day,basis,hra,net_salary,pf,conv,p_tax,da,i_tax,emp_code,image)
VALUES ('$nam','$dept','$unam','$pswrd','$prnt','$pfno','$uhid','$bnkac','$bnknam','$ifsc','$locadd','$city','$mob','$phone','$email','$dob','$joindate','$releavedate','$peradd','$qual','$gend','$offday','$basis','$hra','$slry','$pf','$conv','$ptax','$da','$itax','$ecode','$b')";
$test=(mysqli_query($link, $sql));

if($test==1)  {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);
header("Location: employee_registration.php");

}
?>