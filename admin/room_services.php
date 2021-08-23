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
<script>
$(document).ready(function(){
var a=1;
//alert("ajay");
$("#add").on("click",function(){
//alert("shobhit");
a++; 
$("#tbl").append("<tr id='tr_"+a+"'><td><input type='text' name='services[]' class='form-control name'  id='service_"+a+"'  placeholder='Enter Services' ></td><td><input type='text' name='price[]' class='form-control phone' id='price_"+a+"'  placeholder='Enter Price' ></td><td><button class='btn btn-primary btn-sm edit' id='edit_"+a+"'>edit</button> <button class='btn btn-danger btn-sm del' id='del_"+a+"'>delete</button></td></tr>");


});
    $('#student_name').change(function() {
var edit=$(this).children(":selected").attr("id");
alert(edit);
$.ajax({
    type: "POST",
    url: 'view_room_services.php',
     data : { id : edit},
    success: function(data){

         var obj = JSON.parse(data);
        // alert(obj);
var count = Object.keys(obj).length;
  console.log(count);
  alert(count);

for(var i=0;i<count;i++)
{
var b=0;
var c=obj[i]["serv"];
var d=obj[i]["chrg"];
b++;
$("#tbl").prepend("<tr id='tr_"+b+"'><td><input type='text' name='services[]' class='form-control name'  id='service_"+b+"'  value='"+c+"' ></td><td><input type='text' name='price[]' class='form-control phone' id='price_"+b+"'  value='"+d+"' ></td><td> <button class='btn btn-danger btn-sm del' id='del_"+a+"'>delete</button></td></tr>");
}
}
}); 
});
});
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
                        <h1 class="page-head-line">Room Services</h1>
                    </div>
                                                    </div>
                      <form action="room_services_submit.php" method="POST" >
                      <div class="col-xs-12"><select class="form-control" id="student_name" name="student_name" style="width: 400px;margin-bottom: 20px">
                                
                                                <option id="select" value="select">Select student</option>
                                                <?php
                  include '../configfile.php';
                            $type=mysqli_query($link,"SELECT  id,name FROM tbl_registration WHERE relieve_date= '' ");
                            $flag = 0;
                            while ($row=mysqli_fetch_assoc($type))
                            {?>
                        		
                                                <option id="<?php echo $row["id"];?>" value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
                                                
                                                 
                                              <?php
                                          }?>
                           </select>                   
                        </div>
                        <button type="button" id="add" class="btn btn-info btn-sm" style="margin-bottom : 20px;border-radius: 5px">Add Services</button>
 
   
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
             
                </div>

            </div>
        </div>

    </footer>                 
                <div class="table-responsive ">          
                <table class="table" id="tbl">
                <thead>
                    <tr>
                        
                        <th>Services</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                            
                           
                            
                            
                            <td><input type="text" class="form-control" id="services_1" name="services[]" placeholder="Enter Services" /></td>
                            <td><input type="text" class="form-control" id="price_1" name="price[]" placeholder="Enter Price" /></td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal" style="margin-left: 2px;border-radius: 5px">Delete</button>
                            </td>
                    </tr>
                </tbody>
                </table>
                </div>
                <div class="col-md-12">
   <center> <button type="Submit" class="btn btn-danger btn-md" style="margin-top: 60px">Save</button></center>
</form>
</div>

                </div>
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
   <!--modal-->

 
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: black">Are you sure?</h4>
        </div>
        <div class="modal-body">
          <p style="color: black">Do you really want to delete these records? This process cannot be undone.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                <button type="button"  class="btn btn-danger">Delete</button>
        </div>
      </div>
      
    </div>
  </div>
  
<!--modal end-->

    
</body>
</html>
