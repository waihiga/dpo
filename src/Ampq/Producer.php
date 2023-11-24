<?php

namespace DPOPay\Ampq;


use DPOPay\Message\Queue;

class Producer extends Queue
{

    public function queue($queue,$msg)
    {
        $queueMessages  = $this->unSerializeFromJson($this->getFileItems()) ? : [];

        if (array_key_exists($queue,$queueMessages)){
            $queueMessages[$queue][]= $msg;
        }else{
            $queueMessages[$queue][] = $msg;
        }

       return file_put_contents($this->queueFile, $this->serializeToJson($queueMessages));
    }
}