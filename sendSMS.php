<?php require_once 'includes/header.php'; ?>


<div class="row">
    <div class="col-md-12">

        <ol class="breadcrumb">
          <li><a href="dashboard.php">Home</a></li>       
          <li class="active">Notification</li>
        </ol>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Sent SMS</div>
            </div> <!-- /panel-heading -->
            <!--<div class="panel-body">-->

            <body>
                

  <!--<div class="container" style="padding-top: 114px; ">-->
    <div class="row" style="padding-right: 170px" >

      <!--<div class="col-sm-2">-->


<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  <h2 class="text-center"></h2>

  <form class="form-horizontal" method='GET' action='sendSMS.php'>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Mobile Number:</label>
      <div class="col-sm-10">
        <input type="phone" class="form-control" id="phone" placeholder="Enter mobile number" name="phone">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="message">Message:</label>
      <div class="col-sm-10">          
        <textarea name="message" class="form-control" placeholder="Enter message"></textarea>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </div>
    </div>

  </form>
</div>

</body>
</html>
     
 </div>
<?php require_once 'includes/footer.php'; ?>




<!--<?php require_once 'includes/header.php';

$order_id = isset($_GET['']) ? $_GET['order_id'] : '';
$sql = "SELECT * FROM orders where order_id = '$order_id'";
$result = mysqli_query($connect, $sql) or die( mysqli_error($connect));
$rows = mysqli_fetch_array($result);
    
?>-->

<?php
try{
    $message = isset($_GET['message']) ? $_GET['message'] : null;
    $phoneNumber = isset($_GET['phone']) ? $_GET['phone'] : null;

    if($message !=null && $phoneNumber !=null){
        $url = "http://192.168.1.104:8090/sendSMS?username=alia&password=alia&phone=".$phoneNumber."&message=".urlencode($message);
        $curl = curl_init($url);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);

        if($curl_response === false){
            $info = curl_getinfo($curl);
            curl_close($curl);
            die('Error occurred'.var_export($info));
        }

        curl_close($curl);

        $response  = json_decode($curl_response);
        if($response->status == 200){
            echo 'Message has been sent';
        }else{
            'Technical Problem';
        }

    }
}catch(Exception $ex){
    echo "Exception: ".$ex;
}
?>


