emp_registration-------------------------------------------


var id=obj[0]["id"];   
        var nam=obj[1]["nam"];
      
      /*  var gend=obj[2]["gend"];
        var dept=obj[3]["dept"];   
        var dob=obj[4]["dob"];
        var prnt=obj[5]["prnt"];
        var ecode=obj[6]["ecode"];
        var pfno=obj[7]["pfno"];
        var uhid=obj[8]["uhid"];
        var bnkac=obj[9]["bnkac"];
        var bnknam=obj[10]["bnknam"];
        var ifsc=obj[11]["ifsc"];   
        var locadd=obj[12]["locadd"];
        var qual=obj[13]["qual"];
        var city=obj[14]["city"];
        var mob=obj[15]["mob"];
        var phone=obj[16]["phone"];
        var email=obj[17]["email"];
        var joindate=obj[18]["joindate"];
        var releavedate=obj[19]["releavedate"];   
        var offday=obj[20]["offday"];
        var basis=obj[21]["basis"];
        var hra=obj[22]["hra"];
        var da=obj[23]["da"];
        var ptax=obj[24]["ptax"];
        var slry=obj[25]["slry"];
        var pf=obj[26]["pf"];
        var conv=obj[27]["conv"];   
        var itax=obj[28]["itax"];
        var peradd=[29]["peradd"];

    $("#user_name").val(nam);
    $("#gender").val(gend);
    $("#user_dept").val(dept);
    $("#u_dob").val(dob);
    $("#user_pname").val(prnt);
    $("#emp_code").val(ecode);
    $("#emp_pfno").val(pfno);
    $("#emp_uhid").val(uhid);
    $("#emp_ac").val(bnkac);
    $("#emp_bankname").val(bnknam);
    $("#emp_ifsc").val(ifsc);
    $("#emp_address").val(locadd);
    $("#emp_paddress").val(peradd);
    $("#emp_qualification").val(qual);
    $("#emp_city").val(city);
    $("#emp_mobile").val(mob);
    $("#emp_phone").val(phone);
    $("#emp_email").val(email);
    $("#emp_joiningdate").val(joindate);
    $("#emp_releavedate").val(releavedate);
    $("#emp_offdays").val(offday);
    $("#emp_basis").val(basis);
    $("#emp_hra").val(hra);
    $("#emp_da").val(da);
    $("#emp_ptax").val(ptax);
    $("#emp_salary").val(slry);
    $("#emp_pf").val(pf);
    $("#emp_conv").val(conv);
    $("#emp_itax").val(itax);
    */
    //$("u_name").attr("disabled");
      // $("u_password").attr("disabled");

      ---------------------------------------------------

      view emp registration-----------------------------------------------


      $gend=$row['gender'];
$dept=$row['user_dept'];
$dob=$row['u_dob'];
$prnt=$row['user_pname'];
$ecode=$row['emp_code'];
$pfno=$row['emp_pfno'];
$uhid=$row['emp_uhid'];
$bnkac=$row['emp_ac'];
$bnknam=$row['emp_bankname'];
$ifsc=$row['emp_ifsc'];
$locadd=$row['emp_address'];
$peradd=$row['emp_paddress'];
$qual=$row['emp_qualification'];
$city=$row['emp_city'];
$mob=$row['emp_mobile'];
$phone=$row['emp_phone'];
$email=$row['emp_email'];
$joindate=$row['emp_joiningdate'];
$releavedate=$row['emp_releavedate'];
$offday=$row['emp_offdays'];
$basis=$row['emp_basis'];
$hra=$row['emp_hra'];
$da=$row['emp_da'];
$ptax=$row['emp_ptax'];
$slry=$row['emp_salary'];
$pf=$row['emp_pf'];
$conv=$row['emp_conv'];
$itax=$row['emp_itax']; */

 /*array_push($result, 
 array('item'=>$row[0],$row[1]));
 */
$result[]= array('id'=> $id, 'nam'=> $nam /*,'gend'=> $gend,'dept'=> $dept,'dob'=> $dob,'prnt'=> $prnt,'ecode'=> $ecode,'pfno'=> $pfno,'uhid'=> $uhid,'bnkac'=> $bnkac,'bnknam'=> $bnknam,'ifsc'=> $ifsc,'locadd'=> $locadd,'peradd'=> $peradd,'qual'=> $qual,'city'=> $city,'mob'=> $mob,'phone'=> $phone,'email'=> $email,'joindate'=> $joindate,'releavedate'=> $releavedate,'offday'=> $offday,'basis'=> $basis,'hra'=> $hra,'da'=> $da,'ptax'=> $ptax,'slry'=> $slry,'pf'=> $pf,'conv'=> $conv,'itax'=> $itax*/);
}
----------------------------










SELECT a.Id, Name, floor, room_no, a.bed_no, rent FROM tbl_registration a JOIN tbl_room_details RD on RD.reg_id = a.Id WHERE NOT EXISTS ( SELECT payment, pdate, d FROM tbl_payment b WHERE a.Id = b.reg_id and NOT EXISTS (Select payment, pdate from tbl_payment Where b.d !='" + 09-2018 + "' and relieve_date is null))////////queruy