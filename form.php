<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigData</title>
    <!-- Core CSS - Include with every page -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>

<body style="background-image:url(assets/img/bg2.jpg); background-size: 100% auto;">


<?php 
$servername ='localhost';
 $username = 'root';
 $password = '';
 $dbname = 'hack';
  


$conn = new mysqli($servername, $username, $password, $dbname);
$query= "";
if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "";

 /*if($query!=NULL)
{
	//echo "loop entered";
if (!$conn->query($query)) 
{
    printf("Errormessage: %s\n", $conn->error);
}
	$result = $conn->query($query);
}
 
$row = $result->fetch_assoc();

$query1 = "";

if($query1!=NULL)
{
	//echo "loop entered";
if (!$conn->query($query1)) 
{
    printf("Errormessage: %s\n", $conn->error);
}
	$result1 = $conn->query($query1);
}
 
$row1 = $result1->fetch_assoc()

 */	
  ?>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
		
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
			
            <div class="navbar-header">
			<div class="col-lg-6">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">
				<img src="assets/img/logo.png" alt="" height = "40" width = "95">
                </a>
            </div>
			</div>
			<a href="index.php" class="pull-right btn btn-lg btn-primary" role="button">Logout</a>
			</nav> 	
				
    </div>

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><strong>Harshit</strong></div>
                                <div class="user-text-online">
								<p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="home.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                   
                    
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper" style="background:transparent !important">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Complete the form for authorization</h1>
                </div>
                <!--End Page Header -->
            </div>
				<div class="col-lg-4">
				</div>
				<div class="col-lg-4">
    <form class="form-signin" action="couple.php" method="post">       
      <h2 class="form-signin-heading"></h2>
	  <p><strong>Who all should have this plan?</strong></p>
	  <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe">You
      </label>
	  
	  <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe">Akshat Maltare
      </label>
	  
	  <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe">Jinali Gandhi
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" value="Search" name= "submit">Submit
	  </button>   
    </form>
  </div>
           

				
				
				 </center>
				
            </div>

               
                </div>
            </div>


         


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>
