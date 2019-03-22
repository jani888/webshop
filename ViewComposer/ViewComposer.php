<?php

/**
 *
 */
class ViewComposer
{
    private static $provide = [];

    public static function extractVariables(){
        $vars = [];
        foreach (self::$provide as $key => $value) {
            if(is_callable($value)){
                $vars[$key] = $value();
            }else{
                $vars[$key] = $value;
            }
        }

        return $vars;
    }

    public static function provide(string $key, $value){
        self::$provide[$key] = $value;
    }
}
