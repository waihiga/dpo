<?php

use DPOPay\Database;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);

$dotenv->load();

$data  = new Database();

$posts = $data->query("select * from users")->fetc;

var_dump($posts);
$url = $_SERVER['REQUEST_URI'];

if ($url  ==='/'){
    require "controllers/producer.php";
}elseif ($url ==='/consume'){
    require "controllers/consumer.php";
}
