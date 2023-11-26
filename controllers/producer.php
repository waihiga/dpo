<?php



$items = (new \DPOPay\Ampq\Producer())->queue('mum','coming over');

require "index.view.php";