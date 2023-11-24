<?php


namespace  DPOPay\Ampq;

use DPOPay\Message\Queue;

class Consumer extends Queue
{
    public function consume($queue)
    {
        $queueMessages = $this->getFileItems();
        $queueMessages = json_decode($queueMessages, true) ?: [];

        return $queueMessages;
    }
}