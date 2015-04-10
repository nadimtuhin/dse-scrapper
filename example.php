<?php

require_once('vendor/autoload.php');

$scrapper = new NadimTuhin\DSE\DseScrapper();
$data = $scrapper->scrap();

print_r($data);