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
                        <h1 class="page-head-line">Details</h1>
                    </div>
                                                    </div>
 <div class="row">
      <div class="col-md-6">
          <div class="panel panel-default">
          
          <div class="panel-body">
   
              <form action="add_hall_submit.php" method="POST" enctype="multipart/form-data">
                  <div class="col-xs-6" ><input type="radio" name="hall_room" value="hall">Hall</div>
                      <div class="col-xs-6"> <input type="radio" name="hall_room" value="room">Room</div>
              <div class="col-xs-12"><br></div>
              
              <div class="col-xs-4"><label>Location/Floor</label></div> 
                     <div class="col-xs-8"><select class="form-control" name="location" style="width: 100px">
                                                <option value="select">Select</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                              </select></div>
                                              
                                      
              <div class="col-xs-12"><br></div>
              <div class="form-group">
                  <div class="col-xs-4">  <label >Capacity</label></div>
                    <div class="col-xs-8"><input type="text" class="form-control" id="capacity" name="capacity" placeholder="Capacity"></div>
                  </div>
                  <div class="col-xs-12"><br></div>
                  <div class="col-xs-12"><input type="submit" class="btn btn-info" value="Save"></div>
              </form>
 </div>
 </div>
 </div>              </div>
                <div class="col-md-6"></div>
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
                        <th>Sl No.</th>
                        <th>Type</th>
                        <th>Floor</th>
                        <th>Capacity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                  include '../configfile.php';
                            $type=mysqli_query($link,"SELECT * FROM tbl_hall_details order by id desc");
                            $flag = 0;
                            while ($row=mysqli_fetch_assoc($type))
                            {?>
                        
                   
                   <tr>
                            <td><?php echo ++$flag; ?></td>
                            <td><?php echo $row["type"];?></td>
                            <td><?php echo $row["location"];?></td>
                            <td><?php echo $row["capacity"];?></td>
                            <td>
                          <button type="button" class="btn btn-primary btn-sm" style="border-radius: 5px">Edit</button>                        </td>
                    </tr>
                           <?php
                            }?>
                  <!--   <tr>
                            
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            
                            
                            <td>
                                <button type="button" class="btn btn-primary btn-sm"  style="border-radius: 5px">Edit</button>
                            </td>
                    </tr> -->
                </tbody>
                </table>
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
