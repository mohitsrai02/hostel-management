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
                        <h1 class="page-head-line">Details</h1>
                    </div>
                                                    </div>
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
                <table class="table">
                <thead>
                
                    <tr>
                        <th>Name</th>
                        <th>Floor</th>
                        <th>Hall/Room No.</th>
                        
                        <th>Bed No.</th>
                        <th>Rent</th>
                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                  include '../configfile.php';
                            $type=mysqli_query($link,"SELECT a.Id, Name, floor, room_no, a.bed_no, rent FROM tbl_registration a JOIN tbl_room_details RD on RD.reg_id = a.Id WHERE NOT EXISTS ( SELECT payment, pdate, d FROM tbl_payment b WHERE a.Id = b.reg_id and NOT EXISTS (Select payment, pdate from tbl_payment Where b.d !='" + 09-2018 + "' and relieve_date is null))");
                            $flag = 0;
                            while ($row=mysqli_fetch_assoc($type))
                            {?>
                 
                    <tr>
                            
                           
                           <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["floor"]; ?></td>
                            <td><?php echo $row["room_no"]; ?></td>
                            <td><?php echo $row["a.bed_no"]; ?></td>
                            <td><?php echo $row["rent"]; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" style="border-radius: 5px">Edit</button> </td>
                    </tr>
                    <?php
                            }?>
                </tbody>
                </table>
  <div class="col-md-12">
                        <h1 class="page-head-line">Additional Services</h1>
                    </div>
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
                <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Services</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                            
                           
                           <td>N/A</td>
                            <td>N/A</td>
                       
                    </tr>
                </tbody>
                </table>
                </div>

<div class="col-md-12">
   <center> <button type="button" class="btn btn-danger btn-md">Save & Print</button></center>
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
   
  
</body>
</html>
