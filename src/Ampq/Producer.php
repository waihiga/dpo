<?php

namespace DPOPay\Ampq;


use DPOPay\Message\Queue;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class Producer extends Queue
{

    public function queue($queue,$msg)
    {
        $queueMessages =  $this->getFileItems();
        $queueMessages  = json_decode($queueMessages, true) ? : [];

        if (array_key_exists($queue,$queueMessages)){
            $queueMessages[$queue][]= $msg;
        }else{
            $queueMessages[$queue][] = $msg;
        }

       return file_put_contents($this->queueFile, json_encode($queueMessages));
    }
}