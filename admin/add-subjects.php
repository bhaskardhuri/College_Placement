<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {

$trmsaid=$_SESSION['trmsaid'];

$subjects=$_POST['subjects'];

$sql="insert into tblsubjects(Subject)values(:subjects)";
$query=$dbh->prepare($sql);
$query->bindParam(':subjects',$subjects,PDO::PARAM_STR);
$query->execute();
$LastInsertId=$dbh->lastInsertId();
if ($LastInsertId>0) {
echo '<script>alert("Subject has been added.")</script>';
echo "<script>window.location.href ='manage-subjects.php'</script>";
}else{
    echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>Add TPO role</title>
  

    <link rel="apple-touch-icon" href="apple-icon.png">


    <link rel="stylesheet" href="../vendors2/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors2/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors2/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors2/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors2/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../assets2/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

     
    <div id="right-panel" class="right-panel">

        <!-- Header-->
         
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Subjects Details</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="add-subjects.php">Subjects Details</a></li>
                            <li class="active">Add</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                       <!-- .card -->

                    </div>
                    <!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Subjects </strong><small> Details</small></div>
                            <form name="" method="post" action="">
                                
                            <div class="card-body card-block">
 
                                <div class="form-group"><label for="company" class=" form-control-label">Subject Name</label><input type="text" name="subjects" value="" class="form-control" id="subjects" required="true"></div>
                                              <p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">
                                                            <i class="fa fa-dot-circle-o"></i>  Add
                                                        </button></p>
                                                    
                                                </div>
                                                </form>
                                            </div>



                                           
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="../vendors2/jquery/dist/jquery.min.js"></script>
                            <script src="../vendors2/popper.js/dist/umd/popper.min.js"></script>
                            <script src="../vendors2/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="../vendors2/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>
                            <script src="../vendors2/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="../assets2/js/main.js"></script>
</body>
</html>