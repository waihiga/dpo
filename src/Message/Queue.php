<?php


namespace DPOPay\Message;


abstract class Queue
{
    protected string $queueFile;

    public function __construct()
    {
        $this->queueFile  = './storage/queue/queue.json' ;
    }

    public function getFileItems()
    {
       return file_get_contents($this->queueFile);
    }
}