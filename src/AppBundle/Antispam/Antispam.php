<?php

namespace AppBundle\Antispam;


class Antispam
{
    private $antispamLength;

    public function __construct($antispamLength)
    {
        $this->antispamLength = $antispamLength;
//        $this->mailer = $mailer;
    }

    public function isSpam($text)
    {
     return strlen($text) < $this->antispamLength;
    }

}