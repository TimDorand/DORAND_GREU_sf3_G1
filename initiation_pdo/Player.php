<?php

/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 29/03/2016
 * Time: 08:46
 */

class Player
{
    /**
     * @var int
     */
    private $life;

    /**
     * @var int
     */
    private $strength;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $stamina;

    /**
     * @return int
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * @param int $life
     */
    public function setLife($life)
    {
        $this->life = $life;
        return $this;

    }

    /**
     * @return int
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param int $strength
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;
        return $this;

    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;

    }

    /**
     * @return int
     */
    public function getStamina()
    {
        return $this->stamina;
    }

    /**
     * @param int $stamina
     */
    public function setStamina($stamina)
    {
        $this->stamina = $stamina;
        return $this;

    }







}