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
            <script src="assets/js/jquery-1.11.1.js"></script>
      <script src="assets/js/bootstrap.js"></script>
 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <title>Free Responsive Admin Theme - ZONTAL</title>
    <!-- BOOTSTRAP CORE STYLE  -->
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
    url: 'view_other_payment.php',
     data : { id : edit},
    success: function(data){
       //alert(data);
         var obj = JSON.parse(data);
       //  alert(obj);
        var id=obj[0]["id"];   
        var sourc=obj[0]["sourc"];
        var amt=obj[0]["amt"];
        var dat=obj[0]["dat"];

    $("#source").val(sourc);
    $("#amount").val(amt);
    $("#date").val(dat);
    


});
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
                        <h1 class="page-head-line">Other Payment Details</h1>
                    </div>
                                                    </div>
 <div class="row">
      <div class="col-md-6">
          <div class="panel panel-default">
          
          <div class="panel-body">
   
              <form action="other_payment_submit.php" method="POST" enctype="multipart/form-data">
                  
              <div class="form-group">
                  <div class="col-xs-4">  <label >Source</label></div>
                    <div class="col-xs-8"><input type="text" class="form-control" id="source" name="source" placeholder="Source"></div>
                  </div>
                  <div class="col-xs-12"><br></div>
                  <div class="form-group">
                  <div class="col-xs-4">  <label >Amount</label></div>
                    <div class="col-xs-8"><input type="text" class="form-control" id="amount" name="amount" placeholder="Amount"></div>
                  </div>
                  <div class="col-xs-12"><br></div>
                  <div class="form-group">
                  <div class="col-xs-4">  <label >Date</label></div>
                    <div class="col-xs-8"><input type="Date" class="form-control" id="date" name="date" placeholder="Date"></div>
                  </div>
                  <div class="col-xs-12"><br></div>
                  <div class="col-xs-12"><input type="submit" class="btn btn-info" value="Save"></div>
                  <button type="button" id="update" class="btn btn-info"  style="display: none;">Button</button>

              </form>
 </div>
 </div>
              </div>
                <div class="col-md-6">
                <div class="form-group">

                  <div class="col-xs-4">  <label >Total Amount</label></div>
                  <?php
                  include '../configfile.php';
                            $typ=mysqli_query($link,"SELECT SUM(amount) AS ttl FROM tbl_other_payment");
                            $row=mysqli_fetch_assoc($typ);
                              ?>
                    <div class="col-xs-8"><input type="text" class="form-control" id="total_amount" name="total_amount" value="<?php echo $row['ttl'];?>" disabled></div>
                                        


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
                <table class="table display" id="example" >
                <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Source</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                  include '../configfile.php';
                            $type=mysqli_query($link,"SELECT * FROM tbl_other_payment  order by id desc");
                            $flag = 0;
                            while ($row=mysqli_fetch_assoc($type))
                            {?>
                 
                    <tr>
                            <td><?php echo ++$flag; ?></td>
                            <td><?php echo $row["source"];?></td>
                            <td><?php echo $row["amount"];?></td>
                            <td><?php echo $row["payment_date"];?></td>
                            
                            
                            <td>
                              <button type="button"  class="btn btn-primary btn-sm edit" id="<?php echo $row["id"];?>" style="border-radius: 5px">Edit</button>                      
                            </td>
                    </tr>
                      <?php
                            }?>
 
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
