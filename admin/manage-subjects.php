<?php session_start();
error_reporting(0);
include('includes/dbconnection.php');
if($_GET['delid'])
{
$tid=$_GET['delid'];
$query=$dbh->prepare("delete from tblsubjects where ID=:tid");
$query->bindParam(':tid',$tid,PDO::PARAM_STR);
$query->execute();
echo '<script>alert("Subject deleted")</script>';
echo "<script>window.location.href ='manage-subjects.php'</script>";
  }

  ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    
    <title>Manage TPO role</title>
    
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

         <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Manage Subject</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="manage-subjects.php">Manage Subject</a></li>
                            <li class="active">Manage Subject</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Manage Subject</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <tr>
                  <th>S.NO</th>
            
                  <th>Subject Name</th>
                    <th>Creation Date</th>       
                   <th>Action</th>
                </tr>
                                        </tr>
                                        </thead>
                                    <?php
$sql="SELECT * from tblsubjects";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>   
              
                <tr>
                  <td><?php echo htmlentities($cnt);?></td>
            
                  <td><?php  echo htmlentities($row->Subject);?></td>
                  <td><?php  echo htmlentities($row->CreationDate);?></td>
                  <td><a href="edit-subjects-detail.php?editid=<?php echo htmlentities ($row->ID);?>" class="btn btn-primary">Edit</a>
<a href="manage-subjects.php?delid=<?php echo htmlentities ($row->ID);?>" class="btn btn-danger" onclick="return confirm('Do you really want to delete?');">Delete</a>
                  </td>
                </tr>
               <?php $cnt=$cnt+1;}} ?>   

                                </table>
                            </div>
                        </div>
                    </div>



                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="../vendors2/jquery/dist/jquery.min.js"></script>
    <script src="../vendors2/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors2/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets2/js/main.js"></script>


</body>

</html>