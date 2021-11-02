<?php
include_once '../../Abstracts/AbstractCharacter.php';
include_once '../../Helper/Helper.php';

class RobotClass extends AbstractCharacter
{
    private $postion;

    /**
     * Construct Function
     *
     */
    public function __construct()
    {
        $this->postion = [0,0];
    }

    /**
     *
     * Getter Function To Get Position 
     *  
     * @return string
     */
    public function getPosition()
    {
        return $this->postion;
    }

    /**
     *
     * Seeter Function To Set Position
     *  
     * @return string
     */
    public function setPosition($array)
    {
        return $this->postion=$array;
    } 

}