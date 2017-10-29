<?php
require('db/connect.php');

if(!empty($_GET)){
    if(isset($_GET['query'])){
        $keyword = $db->real_escape_string($_GET['query']);

        $db_query = $db->query("SELECT title,article FROM search_practice WHERE article LIKE '%$keyword%'");

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="search_results">
<ul>
    <?php 
    if($db_query->num_rows){
        while ($result = $db_query->fetch_object()){        
    
    ?>
    <li><a href="#"><?php echo $result->title ?></a></li>

<?php
 } }
?>
</ul>


    </div>
</body>
</html>