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
    private function characterMoveBack($character)
    {
      $newPostion=$character->getPosition();
      $newPostion[1]=$newPostion[1]-1;
      $character->setPosition($newPostion);
      
    }

     /**
     * Count The Move Front to character
     *
     * @return integer
     */
    private function characterMoveFront($character)
    {
        $newPostion=$character->getPosition();
        $newPostion[1]=$newPostion[1]+1;
        $character->setPosition($newPostion);
    }

    /**
     * Count The Move Right to character
     *
     * @return integer
     */
    private function characterMoveRight($character)
    {

        $newPostion=$character->getPosition();
        $newPostion[0]=$newPostion[0]+1;
        $character->setPosition($newPostion);
    }

    /**
     * Count The Move Left to character
     *
     * @return Integer
     */
    private function characterMoveLeft($character)
    {
        $newPostion=$character->getPosition();
        $newPostion[0]=$newPostion[0]-1;
        $character->setPosition($newPostion);
    }

    

}