<?php

/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 29/03/2016
 * Time: 09:25
 */
class Vehicule
{
    /**
    * @var string
    */
    protected $color;
    /**
    * @var string
    */
    protected $marque;
    /**
    * @var int
    */
    protected $roue;

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;

    }

    /**
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
        return $this;

    }

    /**
     * @return int
     */
    public function getRoue()
    {
        return $this->roue;
    }

    /**
     * @param int $roue
     */
    public function setRoue($roue)
    {
        $this->roue = $roue;
        return $this;

    }




}