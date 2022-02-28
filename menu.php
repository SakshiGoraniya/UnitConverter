<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Converter</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    include "header.php";
    ?>
<div class="container">
    <div class="converter">
    <center>
    <div class="row">
    <div class="col-md-3">
    <a href="LengthDistance.php">
      <div class="card-counter primary">
        <i class="fa fa-exchange float-left"></i>
 <span class="count-numbers">Length and Distance</span>
        <span class="count-name"></span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-area-chart float-left"></i>
        <span class="count-numbers">Area</span>
        <span class="count-name"></span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-database float-left"></i>
        <span class="count-numbers">Volume and Capacity</span>
        <span class="count-name"></span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-users float-left"></i>
        <span class="count-numbers">Mass and Weight</span>
        <span class="count-name"></span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter purple">
        <i class="fa fa-car float-left"></i>
        <span class="count-numbers">Speed</span>
        <span class="count-name"></span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter yellow">
        <i class="fa fa-thermometer-full float-left "></i>
        <span class="count-numbers">Temperature</span>
        <span class="count-name"></span>
      </div>
    </div>
  </div>
</div>

</body>

</html>