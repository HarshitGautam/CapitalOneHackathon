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
                    <h1 class="page-header">Hi Baur...!!</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;</b><b><strong> </strong> </b>We got exciting things going on here
                    </div>
                </div>
                <!--end  Welcome -->
            </div>


            <div class="row">
                <div class="col-lg-6">

                    <!--Area chart example -->
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>Your pocket money</h2>
                            <div class="pull-right">
                                
                            </div>
                        </div>

                        <div class="panel-body">
                    
						<p style="font-size:180px"> &nbsp; $15</p>
					
                        </div>

                    </div>
					
					<!--Area chart example -->
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>How many people you can feed with this money</h2>
                            <div class="pull-right">
                                
                            </div>
                        </div>

                        <div class="panel-body">
						
						
						<p style="font-size:180px"> <img src="assets/img/1.jpg" alt="" height = "200" width = "300">&nbsp;2</p>
					
                        </div>

                    </div>
				</div>
				
				<div class="col-lg-6">
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>Your wishlist</h2>
                            <div class="pull-right">
                               
                            </div>
                        </div>

                        <div class="panel-body">
                    <div class="form-group">
  <label for="usr">Add:</label>
  <input type="text" class="form-control" id="usr">
</div>
						 <a href="" class="btn btn-default btn-lg" role="button">Guitar</a> &nbsp;
								<a href="https://www.amazon.com/s/ref=nb_sb_ss_c_1_8?url=search-alias%3Daps&field-keywords=interstellar" class="btn btn-success btn-lg" role="button">Interstellar music CD</a> &nbsp;
								<a href="" class="btn btn-default btn-lg" role="button">Baseball bat</a> &nbsp;
								<a href="" class="btn btn-default btn-lg" role="button">Headphones</a> &nbsp;
								<p></p>
								<a href="" class="btn btn-default btn-lg" role="button">Harry Potter book</a> &nbsp;
								<a href="" class="btn btn-default btn-lg" role="button">Watch</a> &nbsp;
								<a href="" class="btn btn-default btn-lg" role="button">Basketball shoes</a> &nbsp;
                        </div>

                    </div>
					
         
                </div>
				<div class="col-lg-6">
				</div>
<div class="col-lg-6">
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>What your parents want you to buy</h2>
                            <div class="pull-right">
                               
                            </div>
                        </div>

                        <div class="panel-body">
                    
						 <a href="" class="btn btn-default btn-lg" role="button">Robotics book</a> &nbsp;
								<a href="" class="btn btn-default btn-lg" role="button">Bicycle</a> &nbsp;
								<a href="" class="btn btn-default btn-lg" role="button">Monitor</a> &nbsp;
								<a href="" class="btn btn-default btn-lg" role="button">Virtual Reality headset</a> &nbsp;
								<p></p>
								<a href="https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=astronomy+book" class="btn btn-success btn-lg" role="button">Astronomy book</a> &nbsp;
								<a href="" class="btn btn-default btn-lg" role="button">Spects</a> &nbsp;
								<a href="" class="btn btn-default btn-lg" role="button">Football</a> &nbsp;
                        </div>

                    </div>
					
         
                </div>

				<div class="col-lg-6">



                    
				</div>
            

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
