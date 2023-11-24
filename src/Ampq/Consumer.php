<?php


namespace  DPOPay\Ampq;

use DPOPay\Message\Queue;

class Consumer extends Queue
{
    public function consume($queue=null)
    {
       return $this->unSerializeFromJson($this->getFileItems()) ?: [];
    }
}