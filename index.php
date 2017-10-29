<?php
require('db/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="skeleton.css"> -->
</head>
<body>
<form action="search.php" method="get">
  <input type="text" name="query" id="query">  
  <input type="submit" value="Search">   
</form> 
</body>
</html>