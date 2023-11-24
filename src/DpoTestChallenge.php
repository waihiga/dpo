<?php


namespace DPOPay;


class DpoTestChallenge
{
    public function sumFirstElevenNumbers($numbers)
    {
        $sum = 0;
        $count = 0;

        $result = [];
        foreach ($numbers as $number){
            if ($number % 2 === 0){

                $result[] =$number;
                $sum +=$number;
                $count++;

                if ($count === 11){
                    break;
                }
            }
        }

        return implode("+",$result) .  '=' . $sum;
    }
}