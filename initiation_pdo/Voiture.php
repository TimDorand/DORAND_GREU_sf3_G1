<?php

/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 29/03/2016
 * Time: 09:30
 */
class Voiture extends Vehicule
{
    private $seat;

    /**
     * @return mixed
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * @param mixed $seat
     */
    public function setSeat($seat)
    {
        $this->seat = $seat;
        return $this;

    }

    public function move()
    {
        if($this->roue != 4) {
            echo 'Votre voiture doit avoir 4 roue';
        }else{
            echo 'Votre véhicule n\'est pas une voiture';
        }
    }




}