<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$scrapper = new NadimTuhin\DSE\DseScrapper();
$data = $scrapper->scrap();

print_r($data);