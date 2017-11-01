<?php
/*
if($_SERVER['REQUEST_METHOD'] == 'POST'){

if(isset($_POST['name']) === true && !empty($_POST['name'])){
    require('db/connect.php');
    $query_input = $_POST['name'];
    $sql_query = "SELECT bio FROM people WHERE first_name = $query_input";
    $results = $db->query($sql_query);
    
}
}

*/
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    
    if(isset($_GET['name']) === true && !empty($_GET['name'])){
        require('../db/connect.php');
        $query_input =$db->real_escape_string($_GET['name']);
        $sql_query = "SELECT bio FROM people WHERE first_name = '$query_input'";
        $results = $db->query($sql_query);
        // var_dump($results);
        if($results->num_rows){
            while ($row = $results->fetch_object()){
                echo "<h3>$row->bio</h3>";
            }
        }
    }
   
    };
