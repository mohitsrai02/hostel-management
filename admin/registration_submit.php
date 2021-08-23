<?php
include '../configfile.php';

var_dump($_POST);

$nam=$_POST['user_name'];
{

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

}
$gend=$_POST['gender'];
$dob=$_POST['dob'];
$bankac=$_POST['user_ac'];
$banknam=$_POST['user_bankname'];
$ifsc=$_POST['user_ifsc'];
$qual=$_POST['user_qualification'];
$mobile=$_POST['user_mobile'];
$nic=$_POST['user_nic'];
$floor=$_POST['user_floor'];
$room=$_POST['room_no'];
$bed=$_POST['bed_no'];
$mnam=$_POST['m_name'];
$mqual=$_POST['m_qualification'];
$mprofess=$_POST['m_profession'];
$mdesign=$_POST['m_designation'];
$maddr=$_POST['m_address'];
$mmobile=$_POST['m_mobile'];
$mphone=$_POST['m_phone'];
$memail=$_POST['m_email'];
$releavedate=$_POST['releavedate'];
$fnam=$_POST['f_name'];
$fqual=$_POST['f_qualification'];
$fprofess=$_POST['f_profession'];
$fdesign=$_POST['f_designation'];
$faddr=$_POST['f_address'];
$fmobile=$_POST['f_mobile'];
$fphone=$_POST['f_phone'];
$femail=$_POST['f_email'];
$advpayment=$_POST['advance_payment'];




$sql = "INSERT INTO tbl_registration(name,gender,dob,bank_ac,bank_name,ifsc_code,qualification,mobile_no,nic,floor,room_no,bed_no,relieve_date,mother_name,mother_education,mother_profession,mother_address,mother_telephone,mother_phone_no,mother_email,mother_designation,father_name,father_education,father_profession,father_address,father_telephone,father_phone,father_email,father_designation,advance_payment,image_url)
VALUES ('$nam','$gend','$dob','$bankac','$banknam','$ifsc','$qual','$mobile','$nic','$floor','$room','$bed','$releavedate','$mnam','$mqual','$mprofess','$maddr','$mphone','$mmobile','$memail','$mdesign','$fnam','$fqual','$fprofess','$faddr','$fphone','$fmobile','$femail','$fdesign','$advpayment','$b')";
$test=(mysqli_query($link, $sql));

if($test==1)  {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

// $sql = "select * from tbl_registration where name='$nam' AND ifsc_code='$ifsc' AND mobile_no='$mobile'";
 
 //$res = mysqli_query($link,$sql);
 $last_id = mysqli_insert_id($link);
//echo $last_id;

$sql2="UPDATE tbl_room_details SET reg_id='$last_id',status='approve' WHERE location_id='$floor' AND hallroom_no='$room' AND bed_no='$bed'";

mysqli_query($link, $sql2);

$today = date("d.m.y"); 
 $pymntstat="pending";
 $pymnttype="N/A";
 $addserv="pending";
//echo $today;
$sql3 = "INSERT INTO tbl_payment(reg_id)
VALUES ('$last_id'.'$pymntstst','$pymnttype','$addserv')";
mysqli_query($link, $sql3);

mysqli_close($link);

//header("Location:registration.php");















?>