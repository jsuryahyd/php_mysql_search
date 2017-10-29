<?php

require('db/connect.php');
require_once 'Faker/src/autoload.php';

$faker = Faker\Factory::create();
// echo $faker->sentence(10,true);
// $t = $faker->datetime();
// echo $faker->datetime()->format('Y-m-d H:i:s');
for($i=0;$i<101;$i++){
    $t = $faker->datetime()->format('Y-m-d H:i:s');
    $title = $db->real_escape_string($faker->sentence);
    $text = $db->real_escape_string($faker->text);
    if($query_stmt = $db->query("INSERT INTO search_practice (title,article,published) VALUES('$title','$text','$t')")){
        echo $db->affected_rows."rows affected<br>";        
    }else{
        echo $db->error;
    }
    
}
