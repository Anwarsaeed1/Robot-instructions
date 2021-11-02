<?php 
// Headers
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once '../../Classes/RobotClass.php';
    require_once "../../models/Robot.php";
    require_once "../../Helper/Helper.php";
    require_once "../../Classes/MovmentClass.php";



    /**
     * Object MomentClass Run With All Charachters 
     */
    $movment=New MovmentClass();
    
    /**
     * RobotClaas Movments 
     */
    $robotClass= New RobotClass();
    $movment->move($robotClass,'FFRFL');

 

    /**
     * Response The Result Of Final Movemenets
     */
    echo json_encode(
        array('code'=>200,'message' => 'Final Move Is Successful','Result'=>"FFRFL => x=".' '.
        $robotClass->getPosition()[0].',y='.''.$robotClass->getPosition()[1]
        ,'Time'=>Helper::timeMovment())
    );
