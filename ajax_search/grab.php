<?php

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <div><input type="text" name="name" id="name"><input type="submit" value="Grab" id="grab">
    <?php
    if($results->num_rows){
        while($row  = $results->fetch_object()){
?>
<h2 class="result"><?php echo $row->first_name ?> </h2>
<?php
        };
    };
    ?>
    </h2>
    </div> -->

<div><input type="text" name="name" id="name"><input type="submit" value="Grab" id="grab">
  
<div class="result"></div>

    </h2>
    </div>
    <script src="../js/jquery-3.1.1.js"></script>
    <script src="../js/grab.js">
    </script>
</body>
</html>