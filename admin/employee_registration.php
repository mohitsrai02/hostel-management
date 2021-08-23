<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Free Responsive Admin Theme - ZONTAL</title>
     <!-- BOOTSTRAP CORE STYLE  -->
         <script src="assets/js/jquery-1.11.1.js"></script>
      <script src="assets/js/bootstrap.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />

<script>
  $(document).ready(function() {
    
    $('#example').DataTable();

    $('.edit').on( "click", function() {

alert("shobhit");
 var edit=$(this).attr("id");
$.ajax({
    type: "POST",
    url: 'view_employee_detail.php',
     data : { id : edit},
    success: function(data){
       //alert(data);
         var obj = JSON.parse(data);
       //  alert(obj);
        var id=obj[0]["id"];   
        var nam=obj[0]["nam"];
        var dept=obj[0]["dept"];
        var prnt=obj[0]["prnt"]; 
        var uhid=obj[0]["uhid"];
        var bnkac=obj[0]["bnkac"];
        var bnknam=obj[0]["bnknam"];
        var ifsc=obj[0]["ifsc"];
          
           
        var dob=obj[0]["dob"];
        
        var ecode=obj[0]["ecode"];
        var pfno=obj[0]["pfno"];
           
        var locadd=obj[0]["locadd"];
        var qual=obj[0]["qual"];
        var city=obj[0]["city"];
        var mob=obj[0]["mob"];
        var phone=obj[0]["phone"];
        var email=obj[0]["email"];
        var joindate=obj[0]["joindate"];
        var releavedate=obj[0]["releavedate"];   
        var offday=obj[0]["offday"];
        var basis=obj[0]["basis"];
        var hra=obj[0]["hra"];
        var da=obj[0]["da"];
        var ptax=obj[0]["ptax"];
        var slry=obj[0]["slry"];
        var pf=obj[0]["pf"];
        var conv=obj[0]["conv"];   
        var itax=obj[0]["itax"];
        var peradd=obj[0]["peradd"];

      alert(id);
      
    $("#user_name").val(nam);
    $("#user_dept").val(dept);
    $("#user_pname").val(prnt);
    $("#emp_uhid").val(uhid);
    $("#emp_ac").val(bnkac);
    $("#emp_bankname").val(bnknam);
    $("#emp_ifsc").val(ifsc);
       
    
    $("#u_dob").val(dob);
    
    $("#emp_code").val(ecode);
    $("#emp_pfno").val(pfno);
    
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
      $("#u_name").attr("disabled",true);
      $("#u_password").attr("disabled",true);
       $("#sub").hide();
       $("#update").show();
       //$("u_password").attr("disabled");
      /*  var gend=obj[2]["gend"];
           
        var dob=obj[4]["dob"];
        
        var ecode=obj[6]["ecode"];
        var pfno=obj[7]["pfno"];
           
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

    
    */
    //$("u_name").attr("disabled");
      // $("u_password").attr("disabled");
   //alert(a);
        //alert(obj[0]["id"]);

    }
});
    });
 $("#update").on( "click", function() {

alert("shobhit");
 var edit=$(".edit").attr("id");
  var nam=$("#user_name").val();
   var dept=$("#user_dept").val();
   var prnt=$("#user_pname").val();
   var uhid=$("#emp_uhid").val();
   var bnkac=$("#emp_ac").val();
  var  bnknam=$("#emp_bankname").val();
  var  ifsc=$("#emp_ifsc").val();
    var dob= $("#u_dob").val();
    var ecode=$("#emp_code").val();
   var pfno=$("#emp_pfno").val();
    var locadd =$("#emp_address").val();
   var peradd=$("#emp_paddress").val();
   var qual=$("#emp_qualification").val();
   var city=$("#emp_city").val();
   var mob=$("#emp_mobile").val();
  var  phone=$("#emp_phone").val();
  var email= $("#emp_email").val();
  var joindate= $("#emp_joiningdate").val();
  var releavedate= $("#emp_releavedate").val();
  var offday= $("#emp_offdays").val();
  var basis= $("#emp_basis").val();
  var hra= $("#emp_hra").val();
  var da= $("#emp_da").val();
 var  ptax = $("#emp_ptax").val();
 var  slry = $("#emp_salary").val();
 var  pf= $("#emp_pf").val();
  var conv = $("#emp_conv").val();
  var itax= $("#emp_itax").val();
$.ajax({
    type: "POST",
    url: 'update_employee_detail.php',
     data : { id : edit,user_name : nam,user_dept : dept,u_dob : dob,user_pname : prnt,emp_code : ecode,emp_pfno : pfno,emp_uhid : uhid,emp_ac : bnkac,emp_bankname : bnknam,emp_ifsc : ifsc,emp_address : locadd,emp_paddress : peradd,emp_qualification : qual,emp_city : city,emp_mobile : mob,emp_phone : phone,emp_email : email,emp_joiningdate : joindate,emp_releavedate : releavedate,emp_offdays : offday,emp_basis : basis,emp_hra : hra,emp_da : da,emp_ptax : ptax,emp_salary : slry,emp_pf : pf,emp_conv : conv,emp_itax : itax},
     success: function(data){
        alert(data);
     }


    });
        });  

    
 
} );
</script>


</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email:

                    </strong>Shubhit14357@gmail.com
                        &nbsp;&nbsp;
                 <strong>Support: </strong>+91 7770934818
                </div>

            </div>
        </div>
    </header>
             <!-- HEADER END-->
     <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                              <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                        
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Dashboard</a></li>
                          <li><a href="change_password.php">Change Password</a></li>
                            <li><a href="blank.php">LogOut</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Employee Details</h1>
                    </div>
                                                    </div>
                                                <div class="row">
                                            <div class="col-md-6">
                                            <div class="panel panel-default">
                                        <div class="panel-heading">
                                Details
                            </div>
                                                <div class="panel-body">
              <form action="employee_registration_submit.php" method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                  <label >Name</label>
                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter name" />
              </div>
                   <div class="form-group">
                    <label >Photo:</label>
                    <input type="file" name="fileToUpload" class="form-control" id="fileToUpload" >
                  </div>
                
                <div class="col-xs-12" >
                    <div class="form-group">
                      <div class="col-xs-3" > <label >Gender:</label></div>
                      <div class="col-xs-3" ><input type="radio" name="gender" value="male">Male</div>
                      <div class="col-xs-3"> <input type="radio" name="gender" value="female">Female</div>
                    <div class="col-xs-3"> <input type="radio" name="gender" value="other">Other</div>
                    
                    </div>
                </div>
          
  <div class="form-group">
  <div class="col-xs-12">  <label >Dept. Name</label></div>
                                            <select name="user_dept" id='user_dept' class="form-control">
                                                <option  value="select">Select</option>
                                                <option  value="manager">Manager</option>
                                                <option  value="chefs">Chefs</option>
                                             <option value="server">Server</option>
                                                <option value="waiter">Waiter</option>
                                             <option  value="miscelleneous">Miscelleneous</option>
                                                <option  value="admin">Admin</option>
                                             

                                              </select>
   </div>
   <div class="form-group">
   <label >Username</label>
                <input type="text" name="u_name" id="u_name" class="form-control" placeholder="Username" />
              </div>
                    <div class="form-group">
   <label >Password</label>
                <input type="Password" name="u_password" id="u_password" class="form-control" placeholder="Password" />
              </div>

              		 
                   

  <div class="form-group">
    <label >Date of birth</label>
    <input type="date" class="form-control" name="u_dob" id="u_dob" placeholder="Date Of Birth" />
  </div>
 <div class="form-group"> <label >Parent Name</label>
  
             <input type="text" name="user_pname" id="user_pname" class="form-control" placeholder="Enter parent name" />
             
                                        </div>
  
  <div class="form-group">
    <label>Employee code</label>
    <input type="text" class="form-control" id="emp_code" name="emp_code" placeholder="employee code" />
  </div>
  <div class="form-group">
    <label >P.F. Number</label>
    <input type="text" class="form-control" id="emp_pfno" name="emp_pfno" placeholder="P.F. Number" />
  </div>
  <div class="form-group">
    <label >UHID No.</label>
    <input type="text" class="form-control" id="emp_uhid" name="emp_uhid" placeholder="UHID" />
  </div>
  <div class="form-group">
    <label >Bank A/C No.</label>
    <input type="text" class="form-control" name="emp_ac" id="emp_ac" placeholder="Bank" />
  </div>
  <div class="form-group">
    <label >Bank Name</label>
    <input type="text" class="form-control" id="emp_bankname" name="emp_bankname" placeholder="Bank Name" />
  </div>
  <div class="form-group">
    <label >IFSC code</label>
    <input type="text" class="form-control" name="emp_ifsc" id="emp_ifsc" placeholder="IFSC" />
  </div>
<div class="form-group">
    <label >Local Address</label>
    <input type="text" class="form-control" id="emp_address" name="emp_address" placeholder="Address" />
  </div>
  <div class="form-group">
    <label >Permanent Address</label>
    <input type="text" class="form-control" id="emp_paddress" name="emp_paddress" placeholder="Permanent Address" />
  </div>
<div class="form-group">
    <label >Qualification</label>
    <input type="text" class="form-control" id="emp_qualification" name="emp_qualification" placeholder="Qualification" />
  </div>  
  

                            </div>
                            </div>
                    </div>
                    
                            
                    <div class="col-md-6">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                        Other Details
                        </div>
                        <div class="panel-body">
  
  <div class="form-group">
    <label >City</label>
    <input type="text" class="form-control" id="emp_city" name="emp_city" placeholder="City" />
  </div>                  
  
  <div class="form-group">
    <label >Mobile No.</label>
    <input type="text" class="form-control" id="emp_mobile" name="emp_mobile" placeholder="Mobile" />
  </div>
  <div class="form-group">
    <label >Phone No.</label>
    <input type="text" class="form-control" id="emp_phone" name="emp_phone" placeholder="Phone" />
  </div>
 <div class="form-group">
    <label >E-Mail</label>
    <input type="text" class="form-control" id="emp_email" name="emp_email" placeholder="E-Mail" />
  </div>
 <div class="form-group">
    <label >Date Of joining</label>
    <input type="Date" class="form-control" id="emp_joiningdate" name="emp_joiningdate" placeholder="Joining date" />
  </div>
 <div class="form-group">
    <label >Date of Re-Leave</label>
    <input type="Date" class="form-control" id="emp_releavedate" name="emp_releavedate" placeholder="Re-Leave date" />
  </div>
 <div class="form-group">
    <label >Off-day(Monthly)</label>
    <input type="text" class="form-control" id="emp_offdays" name="emp_offdays" placeholder="Number of Off-days" />
  </div>
 <div class="form-group">
    <label >Basis</label>
    <input type="text" class="form-control" id="emp_basis" name="emp_basis" placeholder="Basis" />
  </div>
 <div class="form-group">
    <label >H.R.A.</label>
    <input type="text" class="form-control" id="emp_hra" name="emp_hra" placeholder="H.R.A." />
  </div>
 <div class="form-group">
    <label >D.A.</label>
    <input type="text" class="form-control" id="emp_da" name="emp_da" placeholder="D.A." />
  </div>
 <div class="form-group">
    <label >P.Tax</label>
    <input type="text" class="form-control" id="emp_ptax" name="emp_ptax" placeholder="P.Tax" />
  </div>
                 <div class="form-group">
                    <label >Net Salary</label>
                    <input type="text" class="form-control" id="emp_salary" name="emp_salary" placeholder="Net Salary" />
                  </div>
                 <div class="form-group">
                    <label >P.F.</label>
                    <input type="text" class="form-control" id="emp_pf" name="emp_pf" placeholder="P.F." />
                  </div>
                 <div class="form-group">
                    <label >Conv</label>
                    <input type="text" class="form-control" id="emp_conv" name="emp_conv" placeholder="Conv" />
                  </div>
 <div class="form-group">
    <label >I.Tax</label>
    <input type="text" class="form-control" id="emp_itax" name="emp_itax" placeholder="Income tax" />
  </div>
 <input type="submit" name="sub" id="sub" class="btn btn-info" value="Submit">

<button type="button" id="update" class="btn btn-info"  style="display: none;">Button</button>
</form>
</div>
                        </div>  
                                </div>             </div>
                    </div>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
             
                </div>

            </div>
        </div>

    </footer>    
                <div class="table-responsive ">          
                <table class="table" id="example" class="display">
                <thead>
                    <tr>
                        <th>SL NO.</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Address</th>
                        <th>Mobile No.</th>
                        <th>Email</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  include '../configfile.php';
                            $type=mysqli_query($link,"SELECT * FROM tbl_emp_registration  order by id desc");
                            $flag = 0;
                            while ($row=mysqli_fetch_assoc($type))
                            {?>
                        
                   
                   <tr>
                            <td><?php echo ++$flag; ?></td>
                            <td><?php echo $row["emp_name"];?></td>
                            <td><?php echo $row["dept_name"];?></td>
                            <td><?php echo $row["address"];?></td>
                            <td><?php echo $row["mobile_no"];?></td>
                            <td><?php echo $row["email"];?></td>
                            <td><?php echo $row["net_salary"];?></td>
                            <td>
                          <button type="button"  class="btn btn-primary btn-sm edit" id="<?php echo $row["id"];?>" style="border-radius: 5px">Edit</button>                        </td>
                    </tr>
                           <?php
                            }?>
                   <!-- <tr>
                            <td>1</td>
                            <td>Abc</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                       <td>    <button type="button" class="btn btn-primary btn-sm" style="border-radius: 5px">Edit</button>
                       </td>
                    </tr>-->
                </tbody>
                </table>
                </div>
                        
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2018 All Rights Reserved. | By : <a href="http://www.xenonation.com/" target="_blank">Xenonation</a>
                </div>

            </div>
        </div>

    </footer>
   
   
</body>
</html>
