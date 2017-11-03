<?php

require_once('app/init.php');
if(!empty($_GET)){
    if(isset($_GET['searchQuery'])){
        $q = $_GET['searchQuery'];

        $query = $client->search([
            'body'=>[
                'query'=> [
                    'bool'=>[
                        'should'=>[
                            ['match'=>['title'=>$q]],
                            ['match'=>['body'=>$q]],
                            ['match'=>['keywords'=>$q]],                            
                        ]
                    ]
                ]
            ]
        ]);

        // echo "<pre>",print_r($query),"</pre>";//[hits][total]
        if($query['hits']['total'] >= 1){
            $results = $query['hits']['hits'];
            // echo '<pre>',print_r($results),'</pre>';
        }
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
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">    
</head>
<body>
    <div class="container">
    <div style="height:150px">
    
    </div>
        <form action="" method="get">
            <div class="row">
                <div class="columns five"><input type="search" name="searchQuery" id="searchQuery" class="u-full-width">
                <input type="submit" value="Search" class="u-pull-right">
                </div>
            </div>
        </form>
        <div class="container">
        <?php
        if(isset($results)){
            //$results : simple array
            foreach($results as $r){
        ?>
        <div class="row cf">
   <div class="columns ten">
                <div class="box" style="border:1px solid #ddd;background-color:#ccc;box-sizing:border-box;padding:10px;border-radius:6px;">
                <h3><small style="font-size:14px;text-decoration:underline">id : <?php echo $r['_id'] ?></small><br><?php echo $r["_source"]['title']?></h3>
                <p><?php if(array_key_exists("keywords",$r["_source"]) && count($r["_source"]["keywords"]) >1){
                    echo implode(', ',$r["_source"]["keywords"]);
                } 
                    ?></p>
                <p><?php echo $r["_source"]["body"] ?></p>
                </div>
            </div></div>
        <?php


            }
        }
        ?>
         
            <div class="columns six">
            <div class="box" style="border:1px solid #ddd;background-color:#ccc"></div>
            </div>
        </div>
    </div>
</body>
</html>