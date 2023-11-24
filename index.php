<?php

require_once __DIR__ . '/vendor/autoload.php';

//$items = (new \DPOPay\Ampq\Consumer())->consume();


$url = $_SERVER['REQUEST_URI'];

if ($url  ==='/'){
    require "controllers/producer.php";
}elseif ($url ==='/consume'){
    require "controllers/consumer.php";
}
