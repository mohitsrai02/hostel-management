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
                        <h1 class="page-head-line">Registration Details</h1>
                    </div>
                                                    </div>
 <div class="row">
      <div class="col-md-6">
          <div class="panel panel-default">
          <div class="panel-heading">
              Details
          </div>
          <div class="panel-body">
   
              <form action="registration_submit.php" method="POST" enctype="multipart/form-data">
           <div class="form-group">
                  <label >Name</label>
                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter name" />
              </div>
                   <div class="form-group">
                    <label >Photo:</label>
                    <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" >
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
                  <label >Date of birth</label>
                  <input type="Date" class="form-control" name="dob" id="dob" placeholder="Date Of Birth" />
              </div>
 
  
                <div class="form-group">
                  <label >Bank A/C No.</label>
                  <input type="text" class="form-control" name="user_ac" id="user_ac" placeholder="Bank" />
                </div>
                <div class="form-group">
                  <label >Bank Name</label>
                  <input type="text" class="form-control" id="user_bankname" name="user_bankname" placeholder="Bank Name" />
                </div>
                <div class="form-group">
                  <label >IFSC code</label>
                  <input type="text" class="form-control" name="user_ifsc" name="user_ifsc" placeholder="IFSC" />
                </div>

                <div class="form-group">
                  <label >Qualification</label>
                  <input type="text" class="form-control" id="user_qualification" name="user_qualification" placeholder="Qualification" />
                </div>
                <div class="form-group">
                  <label >Mobile No.</label>
                  <input type="text" class="form-control" id="user_mobile" name="user_mobile" placeholder="Mobile" />
                </div>
                <div class="form-group">
                  <label >N.I.C</label>
                  <input type="text" class="form-control" id="user_nic" name="user_nic" placeholder="Mobile" />
                </div>
               <div class="col-xs-12">
                    <div class="col-xs-2"><label>floor</label></div> 
                     <div class="col-xs-2"><select name="user_floor" class="form-control" style="width: 70px">
                                                <?php
                  include '../configfile.php';
                            $type=mysqli_query($link,"SELECT * FROM tbl_room_details WHERE status='pending' ");
                            $flag = 0;
                            while ($row=mysqli_fetch_assoc($type))
                            {?>
                 

                                                  <option id="<?php echo $row["location_id"];?>" value="<?php echo $row["location_id"];?>" ><?php echo $row["location_id"];?></option>
                                              
                                             
                              
                                           <?php
                            }?>
     </select></div>
                    <div class="col-xs-2"><label>RoomNo.</label></div>
                     <div class="col-xs-2"><select name="room_no" class="form-control" style="width: 70px">
                                 <?php
                  include '../configfile.php';
                            $type=mysqli_query($link,"SELECT * FROM tbl_room_details WHERE status='pending' ");
                            $flag = 0;
                            while ($row=mysqli_fetch_assoc($type))
                            {?>
                 

                                                  <option id="<?php echo $row["hallroom_no"];?>" value="<?php echo $row["hallroom_no"];?>"><?php echo $row["hallroom_no"];?></option>
                                              
                                             
                              
                                           <?php
                            }?>                          </select></div>                                             

                   
                    <div class="col-xs-2"><label>Bed No.</label></div>
                        <div class="col-xs-2"><select name="bed_no" class="form-control" style="width: 70px">
                                 <?php
                  include '../configfile.php';
                            $type=mysqli_query($link,"SELECT * FROM tbl_room_details WHERE status='pending' ");
                            $flag = 0;
                            while ($row=mysqli_fetch_assoc($type))
                            {?>
                 

                                                  <option id="<?php echo $row["bed_no"];?>" value="<?php echo $row["bed_no"];?>"><?php echo $row["bed_no"];?></option>
                                              
                                             
                              
                                           <?php
                            }?>                                                </select></div>                  
                  </div>
                  <div class="form-group">
    <label >Date of Re-Leave</label>
    <input type="Date" class="form-control" id="releavedate" name="releavedate" placeholder="Re-Leave date" />
  </div>

  <div class="form-group">
    <label >Mother Name</label>
    <input type="text" class="form-control" id="m_name" name="m_name" placeholder="Mother Name" />
  </div>
  <div class="form-group">
    <label >Education Qualification</label>
    <input type="text" class="form-control" id="m_qualification" name="m_qualification" placeholder="Education Qualification" />
  </div>
  <div class="form-group">
    <label >Profession</label>
    <input type="text" class="form-control" id="m_profession" name="m_profession" placeholder="Profession" />
  </div>
  <div class="form-group">
    <label >Designation</label>
    <input type="text" class="form-control" id="m_designation" name="m_designation" placeholder="Designation" />
  </div>                                
                                </div>
                            </div>
                          </div>
                    
                    <div class="col-md-6">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                       More Details
                        </div>
                        <div class="panel-body">
               
<div class="form-group">
    <label >Address</label>
    <input type="text" class="form-control" id="m_address" name="m_address" placeholder="Address" />
  </div>
  
  <div class="form-group">
    <label >Mobile No.</label>
    <input type="text" class="form-control" id="m_mobile" name="m_mobile" placeholder="Mobile Number" />
  </div>
  <div class="form-group">
    <label >Telephone</label>
    <input type="text" class="form-control" id="m_phone" name="m_phone" placeholder="Telephone" />
  </div>
 <div class="form-group">
    <label >E-Mail</label>
    <input type="text" class="form-control" id="m_email" name="m_email" placeholder="E-Mail" />
  </div>
  <div class="form-group">
    <label >Father Name</label>
    <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Father Name" />
  </div>
  <div class="form-group">
    <label >Education Qualification</label>
    <input type="text" class="form-control" id="f_qualification" name="f_qualification" placeholder="Education Qualification" />
  </div>
  <div class="form-group">
    <label >Profession</label>
    <input type="text" class="form-control" id="f_profession" name="f_profession" placeholder="Profession" />
  </div>
  <div class="form-group">
    <label >Designation</label>
    <input type="text" class="form-control" id="f_designation" name="f_designation" placeholder="Designation" />
  </div>                  
<div class="form-group">
    <label >Address</label>
    <input type="text" class="form-control" id="f_address" name="f_address" placeholder="Address" />
  </div>
  
  <div class="form-group">
    <label >Mobile No.</label>
    <input type="text" class="form-control" id="f_mobile" name="f_mobile" placeholder="Mobile Number" />
  </div>
  <div class="form-group">
    <label >Telephone</label>
    <input type="text" class="form-control" id="f_phone" name="f_phone" placeholder="Telephone" />
  </div>
 <div class="form-group">
    <label >E-Mail</label>
    <input type="text" class="form-control" id="f_email" name="f_email" placeholder="E-Mail" />
  </div>
 <div class="form-group">
    <label >Advance Payment</label>
    <input type="text" class="form-control" id="advance_payment" name="advance_payment" placeholder="Advance Payment" />
  </div>
 <input type="submit" class="btn btn-info" value="Submit">
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
                <table class="table" class="table" id="example" class="display">
                <thead>
                    <tr>
                        <th>SL NO.</th>
                        <th>Name</th>
                        <th>Qualification</th>
                        <th>Mobile No.</th>
                        <th>Bank a/c</th>
                        <th>Bank Name</th>
                        <th>Advance Payment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  include '../configfile.php';
                            $type=mysqli_query($link,"SELECT * FROM tbl_registration order by id desc");
                            $flag = 0;
                            while ($row=mysqli_fetch_assoc($type))
                            {?>
                        
                   
                   <tr>
                            <td><?php echo ++$flag; ?></td>
                            <td><?php echo $row["name"];?></td>
                            <td><?php echo $row["qualification"];?></td>
                            <td><?php echo $row["mobile_no"];?></td>
                            <td><?php echo $row["bank_ac"];?></td>
                            <td><?php echo $row["bank_name"];?></td>
                            <td><?php echo $row["advance_payment"];?></td>
                            <td>
                          <button type="button" class="btn btn-primary btn-sm" style="border-radius: 5px">Edit</button>                        </td>
                    </tr>
                           <?php
                            }?>
                  
                  <!--  <tr>
                            <td>1</td>
                            <td>Abc</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" style="border-radius: 5px">Edit</button>                        </td>
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
