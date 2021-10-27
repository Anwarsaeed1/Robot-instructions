<?php

namespace App\Http\Controllers;

use App\Classes\RobotClass;
use App\Http\Requests\RebotInstructionFormRequest;
use Illuminate\Http\Request;

class RobotInstructionController extends Controller
{
    private $robotClass;

     /**
      * Magic Method __construct
      *
      * @param RobotClass $robotClass
      */
    public function __construct(RobotClass $robotClass)
    {
        
        $this->robotClass=$robotClass;
    }
    /**
     * 
     * function to find final position of
     * robot after the complete movement
     * 
     * @param string $move
     * @return string
     */
    function robotInstruction(RebotInstructionFormRequest $request)
    {
        $data=$request->validated();
        return $this->dataResponse(['result'=>$this->robotClass->finalPosition($data['rebot_moves'])]);
    }
 
}
