<?php require_once 'php_action/db_connect.php' ?>
<?php require_once 'includes/header.php'; ?>

<div class="row">
  <div class="col-md-12">

    <ol class="breadcrumb">
      <li><a href="dashboard.php">Home</a></li>     
      <li class="active">Graph Product Damage</li>
    </ol>

    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="glyphicon glyphicon-check"></i> Graph Product Damage
        
      </div> <!-- /panel-heading -->
<!DOCTYPE html>
<html>
  <head>
    <title>Product Damage LineGraph</title>
    <style>
      .chart-container {
        width: 750px;
        height: auto;
      }
    </style>

  </head>
  <body>
    <div class="chart-container", align="center", style="margin-left:200px;margin-top: 100px;" >
      <canvas id="mycanvas"></canvas>
    </div>
    
    <!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/linegraph.js"></script>
  </body>
</html>