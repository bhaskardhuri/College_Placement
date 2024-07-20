<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>YBP Training and Placement || About Us Page</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<link href="css/styles1.css" rel="stylesheet" />
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
</head>
	<body>
<!--header-->
<?php include_once('includes/header.php');?>
<!-- Top Navigation -->
<div class="banner banner5">
	<div class="container">
	<h2>About</h2>
	</div>
</div>
<!--header-->
<!-- About -->
<div class="about">
	 <div class="container">
		 <div class="about-info-grids">
			  
			 	<?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
				 <h4><?php  echo ($row->PageDescription);?></p><?php $cnt=$cnt+1;}} ?></h4>
			  </div>
		 </div>
		 </div>
		<section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Our TPO Team</h2>
<hr color="red" />
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                                    <?php
$sql="SELECT * from tblteacher where isPublic='1'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>  

                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="teacher/images/<?php echo $row->Picture;?>" alt="<?php  echo htmlentities($row->Name);?>" />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2"><?php  echo htmlentities($row->TeacherSub);?></div>
                                    <a class="text-decoration-none link-dark stretched-link" href="teacher-details.php?tid=<?php echo $row->ID;?>" target="_blank">
                                        <h5 class="card-title mb-3"><?php  echo htmlentities($row->Name);?></h5></a>
                                    <p class="card-text mb-0"><small style="color:blue">Academic Experience: <?php  echo htmlentities($row->teachingExp);?> years</small></p>
                                </div>
                         
                            </div>
                        </div>
<?php }} else{?>
<h3 align="center" style="color:red;">Record not Found</h3>
<?php } ?>
                 
                    </div>
                    <!-- Call to action-->
             
                </div>
            </section>
        </main>
</div>
    
        <!-- Footer-->
<?php include_once('includes/footer.php'); ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

	</body>
</html>
