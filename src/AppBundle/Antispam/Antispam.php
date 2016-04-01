<?php

namespace AppBundle\Antispam;


class Antispam
{
    private $antispamLenght;

    public function __construct($antispamLength)
    {
        $this->antispamLenght = $antispamLength;
//        $this->mailer = $mailer;
    }

    public function isSpam($text)
    {
     return strlen($text) < $this->antispamLenght;
    }

}