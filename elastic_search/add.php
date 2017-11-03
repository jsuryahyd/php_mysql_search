<?php

require_once('app/init.php');


if(!empty($_POST)){
    if(isset($_POST['title']) && isset($_POST['body']) && isset($_POST['body'])){
$title = $_POST['title'];
$body = $_POST['body'];
$keywords = explode(',',$_POST['keywords']);//array

$indexed = $client->index([
        'index'=>'articles',
        'type'=>'article',
        'body'=>[
            'title'=>$title,
            'body'=>$body,
            'keywords'=>$keywords
        ]
    ]);
//on success
        if($indexed){
            print_r($indexed);
        };
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add </title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">    
</head>
<body>
    <div class="container">
    <form action=""  method="post">
        <div class="row">
            <div class="columns twelve"><label for="title" class="u-full-width">Title of the Article</label><input class="u-full-width" type="text" name="title" id="title"></div>
        </div>
        <div class="row">
            <div class="columns twelve"><label for="body" class="u-full-width">Body of the Article</label><textarea class="u-full-width" type="text" name="body" id="body" rows="9" style="min-height:inherit;height:auto"></textarea></div>
        </div>
        <div class="row">
            <div class="columns twelve"><label for="keywords" class="u-full-width">keywords</label><input class="u-full-width" type="text" name="keywords" id="keywords"></div>
        </div>
        <div class="row">
            
            <div class="columns twelve"><input type="submit" value="post" class="button-primary u-pull-right"></div>
        </div>
        </form>
    </div>
</body>
</html>