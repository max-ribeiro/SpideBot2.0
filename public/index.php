<?php

require_once __DIR__."/../src/autoload.php";

use Src\Classes\Products\Product;
use Src\Classes\Database\Db;
use Src\Classes\Scraper\Extract;

$dataBase = new Product();
$scraper = new Extract("https://github.com/max-ribeiro/Spider-Bot/blob/master/Spider.php");
$scraper->extractProducts();