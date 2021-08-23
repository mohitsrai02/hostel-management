<?php 

include '../configfile.php';
//var_dump($row['id']);
// die();
$id = $_POST['id'];
// echo $id;

// die();
 $sql = "select * from tbl_emp_registration where id='$id'";
 
 $res = mysqli_query($link,$sql);
 
 $result = array();
 
 while($row = mysqli_fetch_array($res)){
 $id = $row['id'];
 $nam=$row['emp_name'];
$dept=$row['dept_name'];
$prnt=$row['parent_name'];
$uhid=$row['adhaar_no'];
$bnkac=$row['bank_acc'];
$bnknam=$row['bank_name'];
$ifsc=$row['ifsc_code'];
$gend=$row['gender'];

$dob=$row['birth_date'];

$ecode=$row['emp_code'];
$pfno=$row['pf_number'];

$locadd=$row['address'];
$peradd=$row['permanent_address'];
$qual=$row['qualification'];
$city=$row['city'];
$mob=$row['mobile_no'];
$phone=$row['phone_no'];
$email=$row['email'];
$joindate=$row['joining_date'];
$releavedate=$row['relieve_date'];
$offday=$row['off_day'];
$basis=$row['basis'];
$hra=$row['hra'];
$da=$row['da'];
$ptax=$row['p_tax'];
$slry=$row['net_salary'];
$pf=$row['pf'];
$conv=$row['conv'];
$itax=$row['i_tax'];
 /*array_push($result, 
 array('item'=>$row[0],$row[1]));
 */
$result[]= array('id'=> $id,'nam'=> $nam,'dept'=> $dept,'prnt'=> $prnt,'uhid'=> $uhid,'bnkac'=> $bnkac,'bnknam'=> $bnknam,'ifsc'=> $ifsc,'gend'=> $gend,'dob'=> $dob,'pfno'=> $pfno,'ecode'=> $ecode,'pfno'=> $pfno,'locadd'=> $locadd,'peradd'=> $peradd,'qual'=> $qual,'city'=> $city,'mob'=> $mob,'phone'=> $phone,'email'=> $email,'joindate'=> $joindate,'releavedate'=> $releavedate,'offday'=> $offday,'basis'=> $basis,'hra'=> $hra,'da'=> $da,'ptax'=> $ptax,'slry'=> $slry,'pf'=> $pf,'conv'=> $conv,'itax'=> $itax);
}
/*


----id,emp_name,dept_name,parent_name,adhaar_no,bank_acc,bank_name,ifsc_code,address,city,mobile_no,phone_no,email,birth_date,joining_date,relieve_date,permanent_address,qualification,gender,off_day,basis


 
*/
  /*,'gend'=> $gend,,'dob'=> $dob,,'pfno'=> $pfno,'ecode'=> $ecode,'pfno'=> $pfno,,,'locadd'=> $locadd,'peradd'=> $peradd,'qual'=> $qual,'city'=> $city,'mob'=> $mob,'phone'=> $phone,'email'=> $email,'joindate'=> $joindate,'releavedate'=> $releavedate,'offday'=> $offday,'basis'=> $basis,'hra'=> $hra,'da'=> $da,'ptax'=> $ptax,'slry'=> $slry,'pf'=> $pf,'conv'=> $conv,'itax'=> $itax*/
 echo json_encode($result);
 
 mysqli_close($link);
?>
