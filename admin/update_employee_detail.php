
<?php
include '../configfile.php';
//var_dump($row['id']);
// die();
$id = $_POST['id'];

$nam=$_POST['user_name'];
$dept=$_POST['user_dept'];
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


$sql = "UPDATE tbl_emp_registration SET emp_name = '$nam', dept_name = '$dept',parent_name = '$prnt',pf_number = '$pfno',adhaar_no = '$uhid',bank_acc = '$bnkac',bank_name = '$bnknam',ifsc_code = '$ifsc',address = '$locadd',city = '$city',mobile_no = '$mob',phone_no = '$phone',email = '$email',birth_date = '$dob',joining_date = '$joindate',relieve_date = '$releavedate',permanent_address = '$peradd',qualification = '$qual',off_day = '$offday',basis = '$basis',hra = '$hra',net_salary = '$slry',pf = '$pf',conv = '$conv',p_tax = '$ptax',da = '$da',i_tax = '$itax',emp_code = '$ecode' WHERE id = '$id' ";


$test=(mysqli_query($link, $sql));
$result = array();
$result[]= array('status'=>1,'msg'=> 'success');

echo json_encode($result);
 
 mysqli_close($link);


?>