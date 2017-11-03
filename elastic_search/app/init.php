<?php

require_once('vendor/autoload.php');

// $es = new Elasticsearch\Client([
//     'hosts'=> ['127.0.0.1:9200']
// ]);//old version


$client = Elasticsearch\ClientBuilder::create()->setHosts( ['127.0.0.1:9200'])->build();
