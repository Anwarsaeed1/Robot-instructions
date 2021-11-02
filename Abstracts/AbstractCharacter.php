<?php

abstract class AbstractCharacter { 

  private $postion;

  /**
   * get Postion function
   *
   */
    abstract public function getPosition();

  /**
   * Undocumented function
   *
   * @param [type] $move
   */
   abstract public function setPosition($array);

}
?>