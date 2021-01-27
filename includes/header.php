<?php require_once 'php_action/core.php'; ?>

<!DOCTYPE html>
<html>
<head>

	<title>HNH SAFETY INVENTORY SYSTEM</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">

	<!-- DataTables -->
  <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">

  <!-- file input -->
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>


	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
	  <a class="navbar-brand" href="#" style="padding:0px;">
    <img src="download.png" style= "width: 40px" alt="">
    


                   
                </a>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
   
      <ul class="nav navbar-nav navbar-right">  


      	<li id="navDashboard"><a href="index.php"><i class="glyphicon glyphicon-list-alt"></i>  Dashboard</a></li>        
       
        <li id="navBrand"><a href="brand.php"><i class="glyphicon glyphicon-bold"></i>  Brand</a></li>        
	
		
        <li id="navCategories"><a href="categories.php"> <i class="glyphicon glyphicon-th-list"></i> Category</a></li> 
        <li id="navProduct"><a href="product.php"> <i class="glyphicon glyphicon-ruble"></i> Product</a></li> 
        <li id="navProductDamage"><a href="product_damage.php"> <i class="glyphicon glyphicon-warning-sign"></i> Product Damage</a></li> 
       

      
		 
		
		  <?php  if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
        <li class="dropdown" id="navCustomer">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-euro"></i> Customer <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavAddCustomer"><a href="orders.php?o=add"> <i class="glyphicon glyphicon-plus"></i> Customer detail/order</a></li>            
            <li id="topNavListCustomer"><a href="orders.php?o=manord"> <i class="glyphicon glyphicon-edit"></i> List Customer</a></li>            
          </ul>
        </li> 
        <?php } ?>

         <?php  if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
        <li id="navSupplier"><a href="supplier.php"> <i class="glyphicon glyphicon-eye-open"></i> Supplier </a></li>
    <?php } ?>

<?php  if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
        <li class="dropdown" id="navReport">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-check"></i> Report&Graph <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavReportCustomer"><a href="report.php"> <i class="glyphicon glyphicon-th-list"></i> Customer Report</a></li> 
            <li id="topNavReportSupplier"><a href="report_supplier.php"> <i class="glyphicon glyphicon-th-list"></i> Supplier Report</a></li> 
            <li id="topNavReportDamage"><a href="report_damage.php"> <i class="glyphicon glyphicon-th-list"></i> Damage Report</a></li>           
            <li id="topNavGraphDamage"><a href="linegraph.php"> <i class="glyphicon glyphicon-list-alt"></i> Graph Product Damage</a></li>            
          </ul>
        </li> 
         <?php } ?>

        
		
		<!--<?php  if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
        <li id="navNotification"><a href="notification.php"> <i class="glyphicon glyphicon-send"></i> Notification </a></li>
		<?php } ?>  -->

        <li class="dropdown" id="navSetting">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">    
			<?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
            <li id="topNavSetting"><a href="setting.php"> <i class="glyphicon glyphicon-wrench"></i> Setting</a></li>
            <li id="topNavUser"><a href="user.php"> <i class="glyphicon glyphicon-wrench"></i> Add User</a></li>
<?php } ?>              
            <li id="topNavLogout"><a href="logout.php"> <i class="glyphicon glyphicon-log-out"></i> Logout</a></li>            
          </ul>
        </li>        
           
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">