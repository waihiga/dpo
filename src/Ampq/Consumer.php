<?php


namespace  DPOPay\Ampq;

use Bschmitt\Amqp\Amqp;
use Bschmitt\Amqp\Consumer as ParentConsumer;
use Closure;
use DPOPay\Message\Queue;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class Consumer extends Queue
{
    public function consume($queue)
    {
        $queueMessages = $this->getFileItems();
        $queueMessages = json_decode($queueMessages, true) ?: [];

        return $queueMessages;
    }
}