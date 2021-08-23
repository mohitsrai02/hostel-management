<?php 

include '../configfile.php';
//var_dump($row['id']);
// die();
$regid = $_POST['id'];
// echo $id;

// die();
 $sql = "select * from tbl_additional_services where regist_id='$regid'";
 
 $res = mysqli_query($link,$sql);
 
 $result = array();
 
 while($row = mysqli_fetch_array($res)){

 $serv=$row['services'];
$chrg=$row['charges'];

 /*array_push($result, 
 array('item'=>$row[0],$row[1]));
 */
$result[]= array('serv'=> $serv,'chrg'=> $chrg);
}
/*


----id,emp_name,dept_name,parent_name,adhaar_no,bank_acc,bank_name,ifsc_code,address,city,mobile_no,phone_no,email,birth_date,joining_date,relieve_date,permanent_address,qualification,gender,off_day,basis


 
*/
  /*,'gend'=> $gend,,'dob'=> $dob,,'pfno'=> $pfno,'ecode'=> $ecode,'pfno'=> $pfno,,,'locadd'=> $locadd,'peradd'=> $peradd,'qual'=> $qual,'city'=> $city,'mob'=> $mob,'phone'=> $phone,'email'=> $email,'joindate'=> $joindate,'releavedate'=> $releavedate,'offday'=> $offday,'basis'=> $basis,'hra'=> $hra,'da'=> $da,'ptax'=> $ptax,'slry'=> $slry,'pf'=> $pf,'conv'=> $conv,'itax'=> $itax*/
 echo json_encode($result);
 
 mysqli_close($link);
?>
