<?php
include_once '../../Helper/Helper.php';

class MovmentClass
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function move(AbstractCharacter $character,$move){

        $l=Helper::convertStringToArray($move);

        //traverse the instruction
        //string $this->move
        for ($i = 0; $i < $l; $i++) {
            switch ($move[$i]) {
                case 'F':
                    $this->characterMoveFront($character);
                    break;
                case 'B':
                    $this->characterMoveBack($character);
                    break;
                case 'L':
                    $this->characterMoveLeft($character);
                    break;
                case  'R':
                    $this->characterMoveRight($character);
                    break;
            }
        }
    }

    /**
     * Count The Move Back to character
     *
     * @return integer
     */
    private function characterMoveBack($charcter)
    {
      $newPostion=$charcter->getPosition();
      $newPostion[1]=$newPostion[1]-1;
      $charcter->setPosition($newPostion);
      
    }

     /**
     * Count The Move Front to character
     *
     * @return integer
     */
    private function characterMoveFront($charcter)
    {
        $newPostion=$charcter->getPosition();
        $newPostion[1]=$newPostion[1]+1;
        $charcter->setPosition($newPostion);
    }

    /**
     * Count The Move Right to character
     *
     * @return integer
     */
    private function characterMoveRight($charcter)
    {

        $newPostion=$charcter->getPosition();
        $newPostion[0]=$newPostion[0]+1;
        $charcter->setPosition($newPostion);
    }

    /**
     * Count The Move Left to character
     *
     * @return Integer
     */
    private function characterMoveLeft($charcter)
    {
        $newPostion=$charcter->getPosition();
        $newPostion[0]=$newPostion[0]-1;
        $charcter->setPosition($newPostion);
    }

    

}