<?php 
class Helper
{
    /**
     * Undocumented function
     *
     * @return string
     */
    public static function timeMovment()
    {
        return date( 'Y-m-d H:i:s', strtotime( 'now' ));
    }

    /**
     * Convert String Request To Array And Index
     *
     * @return void
     */
    public static function convertStringToArray($move)
    {
        return strlen($move);
      
    }

}