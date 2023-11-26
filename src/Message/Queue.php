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

    public function serializeToJson($data)
    {
        return json_encode($data);
    }
    public function unSerializeFromJson($data)
    {
        return json_decode($data, true);
    }
}