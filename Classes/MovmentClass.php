<?php
include_once '../../Helper/Helper.php';

class MovmentClass
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function move(AbstractCharacter $charcter,$move){

        $l=Helper::convertStringToArray($move);

        //traverse the instruction
        //string $this->move
        for ($i = 0; $i < $l; $i++) {
            switch ($move[$i]) {
                case 'F':
                    $this->robotMoveFront($charcter);
                    break;
                case 'B':
                    $this->robotMoveBack($charcter);
                    break;
                case 'L':
                    $this->robotMoveLeft($charcter);
                    break;
                case  'R':
                    $this->robotMoveRight($charcter);
                    break;
            }
        }
    }

    /**
     * Count The Move Back to Robot
     *
     * @return integer
     */
    private function robotMoveBack($charcter)
    {
      $newPostion=$charcter->getPosition();
      $newPostion[1]=$newPostion[1]-1;
      $charcter->setPosition($newPostion);
      
    }

     /**
     * Count The Move Front to Robot
     *
     * @return integer
     */
    private function robotMoveFront($charcter)
    {
        $newPostion=$charcter->getPosition();
        $newPostion[1]=$newPostion[1]+1;
        $charcter->setPosition($newPostion);
    }

    /**
     * Count The Move Right to Robot
     *
     * @return integer
     */
    private function robotMoveRight($charcter)
    {

        $newPostion=$charcter->getPosition();
        $newPostion[0]=$newPostion[0]+1;
        $charcter->setPosition($newPostion);
    }

    /**
     * Count The Move Left to Robot
     *
     * @return Integer
     */
    private function robotMoveLeft($charcter)
    {
        $newPostion=$charcter->getPosition();
        $newPostion[0]=$newPostion[0]-1;
        $charcter->setPosition($newPostion);
    }

    

}