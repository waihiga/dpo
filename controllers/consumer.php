<?php

$items = (new \DPOPay\Ampq\Consumer())->consume();

require "consume.view.php";