# Php Mysql search
## codeAlong of this videos of codecourse
- part-1 : [Basic PHP & MySQL Searching](https://youtu.be/gf32KXTP0C4?list=WL)
- part-2 : [PHP Tutorials: jQuery: Get Data from MySQL Database without Refreshing] (https://youtu.be/Yb3c-HljFro?list=WL) _1/11/2017_
- part-3 : [Search Engine with PHP & Elasticsearch](https://www.youtube.com/watch?v=3xb1dHLg-Lk)
### also to get used to git.

## dependencies
- [fzaninotto/Faker](https://github.com/fzaninotto/Faker.git)
clone this repository into [create_db](create_db/) folder and run **db_filler.php**.
- For part-3, Elastic search, [Download the zip](https://www.elastic.co/downloads), run elastic search.bat. [change the jvm options if needed](https://stackoverflow.com/a/40333263/7314900);Then run `composer install` in the folder containing composer.json. A vendor folder is created with necessary dependencies. 
require the autoload file
```require_once('vendor/autoload.php'); ```
Syntax for version - 5 to create a client is 
```$client = Elasticsearch\ClientBuilder::create()->setHosts( ['127.0.0.1:9200'])->build();```
