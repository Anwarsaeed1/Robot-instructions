<?php

namespace App\Classes;
use Illuminate\Support\Str;

class RobotClass
{
    /**
     *
     * function to find final position of
     * robot after the complete movement
     *  
     * @param string $move
     * @return string
     */
    public function finalPosition($move)
    {
        $move=Str::upper($move);

        $l = strlen($move);

        $countFront = 0;
        $countBack = 0;
        $countLeft = 0;
        $countRight = 0;
    
        // traverse the instruction
        // string 'move'
        for ($i = 0; $i < $l; $i++) {   
            // for each movement increment its
            // respective counter
            if ($move[$i] == 'F') {
                $countFront++;
            } elseif ($move[$i] == 'B') {
                $countBack++;
            } elseif ($move[$i] == 'L') {
                $countLeft++;
            } elseif ($move[$i] == 'R') {
                $countRight++;
            }
        }
        // Return final position of robot
       return "$move => X="
            .($countRight - $countLeft).' , '.
             "Y=".($countFront - $countBack);    
    }

}
 