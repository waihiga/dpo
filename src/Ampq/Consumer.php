<?php


namespace  DPOPay\Ampq;

use DPOPay\Message\Queue;

class Consumer extends Queue
{
    public function consume($queue=null)
    {
        $queueMessages = $this->getFileItems();
        $queueMessages = $this->unSerializeFromJson($queueMessages) ?: [];

        return $queueMessages;
    }
}