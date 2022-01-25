<?php  



 session_start();  



 if(isset($_SESSION["name"]))  

 {  

    $username = $_SESSION['name'];

 

 }  

 else  

 {  

      header("location:signin.php");  

 }  

 include('../inc/connection.php');

 $conn = DB(); 

 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
 
$stmt = $conn->query("SELECT image FROM banner order by id desc");

$data = $stmt->fetchAll(); 

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>banner</title>
  <style type="text/css">
    .tradingview-widget-container {
      padding-top: 65.5px;
      width: 100% !important;
      overflow: hidden;
      height: 192px !important;
    }
    .tradingview-widget-container iframe {
        transform: scale(4.2);
    }
  </style>
</head>
<body>
  <!-- TradingView Widget BEGIN -->
  <div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>

	 <?php foreach($data as $row){ if($row['image'] !=''){ ?><img src="<?php echo $row['image']; ?>"/> <?php }else{} }?>
  </div>
  <!-- TradingView Widget END -->
</body>
</html>