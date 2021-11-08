<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{?>
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
    <title>Online Library Management System | Admin Dash Board</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');
	  include('bgwork.php');?>
<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="heading-line" style="width:90%; padding: 5px 30px 10px 30px; margin-left:20px;">
                <h4 class="header-line ">ADMIN DASHBOARD</h4>
                
                            </div>

        </div>
             
             <div class="row" style="width:70%;background-color : #FEEAF7;padding:7px 7px 7px 7px;border-radius:20px;margin : 10px; ">

 <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center" style="background-color:#FECFF8;">
                      <i class="fa fa-book fa-5x" aria-hidden="true" style="color:black"></i>
<?php 
$sql ="SELECT id from tblbooks ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$listdbooks=$query->rowCount();
?>


                            <h3><?php echo htmlentities($listdbooks);?></h3>
                     <h3> Listed Books</h3>
                        </div>
                    </div>

            
                 <div class="col-md-3 col-sm-2 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center" style="background-color:#FECFF8;">
                      <i class="fa fa-bar-chart fa-5x"  aria-hidden="true" style="color:black"></i>
<?php 
$sql1 ="SELECT id from tblissuedbookdetails ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$issuedbooks=$query1->rowCount();
?>

                            <h3><?php echo htmlentities($issuedbooks);?> </h3>
                           <h3>Book Issue Frequency</h3>
                        </div>
                    </div>
             
               <div class="col-md-3 col-sm-2 col-xs-6">
                      <div class="alert alert-warning back-widget-set text-center" style="background-color:#FECFF8;">
                   <i class="fa fa-area-chart fa-5x" aria-hidden="true" style="color:black;"></i>
<?php 
$status=1;
$sql2 ="SELECT id from tblissuedbookdetails where ReturnStatus=:status";
$query2 = $dbh -> prepare($sql2);
$query2->bindParam(':status',$status,PDO::PARAM_STR);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$returnedbooks=$query2->rowCount();
?>

                            <h3><?php echo htmlentities($returnedbooks);?></h3>
                          <h3>Book Return Frequency</h3>
                        </div>
                    </div>
               <div class="col-md-3 col-sm-2 col-xs-6">
                      <div class="alert alert-danger back-widget-set text-center" style="background-color:#FECFF8;">
                            <i class="fa fa-users fa-4x" style="color:black;"></i>
                            <?php 
$sql3 ="SELECT id from tblstudents ";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$regstds=$query3->rowCount();
?>
                            <h3><?php echo htmlentities($regstds);?></h3>
                          <h3> Registered Users</h3>
                        </div>
                    </div>

        </div>



 <div class="row" style="width:70%;background-color : #FEEAF7;padding:7px 7px 7px 7px;border-radius:20px;margin : 10px; ">

 <div class="col-md-4 col-sm-2 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center"style="background-color:#FECFF8;">
                            <i class="fa fa-user fa-5x" style="color:black;"></i>
<?php 
$sql4 ="SELECT id from tblauthors ";
$query4 = $dbh -> prepare($sql4);
$query4->execute();
$results4=$query4->fetchAll(PDO::FETCH_OBJ);
$listdathrs=$query4->rowCount();
?>


                            <h3><?php echo htmlentities($listdathrs);?></h3>
                            <h3>Listed Publications</h3> 
                        </div>
                    </div>

            
                 <div class="col-md-4 col-sm-2 rscol-xs-6">
                      <div class="alert alert-info back-widget-set text-center" style="background-color:#FECFF8;">
                      <i class="fa fa-bookmark fa-5x" style="color:black;"></i>
<?php 
$sql5 ="SELECT id from tblcategory ";
$query5 = $dbh -> prepare($sql5);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$listdcats=$query5->rowCount();
?>

                            <h3><?php echo htmlentities($listdcats);?> </h3>
                           <h3>Listed Categories</h3>
                        </div>
                    </div>   
<div class="col-md-4 col-sm-2 rscol-xs-6">
                      <div class="alert alert-info back-widget-set text-center" style="background-color:#FECFF8;">
                            <i class="fa fa-money fa-5x" style="color:black;"></i>
<?php 
$ret="select * from tblfine where 1";
$query= $dbh -> prepare($ret);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{
$fine=$result->fine;	
}
}
?>

                            <h3><?php echo htmlentities($fine);?> </h3>
                           <h3>Current Fine Per Day</h3>
                        </div>
                    </div>     
					

        </div> 

             
            
    </div>
    </div>
    
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

    <!---Footer-->
<footer class="text-center text-white foot">
  <h3 style="color:white">
    <center><strong>
      PrimaThink : Library Management System </strong>
    </center>
  </h3>
  
  <div id="contact" >Contact Our Toll Free Number : 180X 40XX 30XX for more Information. </div> 

  <!-- Copyright-->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" style="color:white;text-decoration" href="https://primathink.com/">PrimaThink (All Rights Reserved)  </a>
  </div>
</footer>
</body>
</html>
<?php } ?>
