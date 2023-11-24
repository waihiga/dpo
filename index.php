<?php

require_once __DIR__ . '/vendor/autoload.php';

$items = (new \DPOPay\Ampq\Consumer())->consume('kamande');

//$items = (new \DPOPay\Ampq\Producer())->queue('doug','coming over');

require "index.view.php";
