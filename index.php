<?php

use DPOPay\Database;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);

$dotenv->load();

$data  = new Database();

$posts = $data->query("select * from users");

var_dump($posts);
$url = $_SERVER['REQUEST_URI'];

if ($url  ==='/'){
    require "controllers/producer.php";
}elseif ($url ==='/consume'){
    require "controllers/consumer.php";
}elseif ($url ==='/question-8'){
    require "controllers/question_8.php";
}
