<?php

namespace dayax\opengraph;

class OpenGraph
{
    static $config = array(
        'validate_url'  => false,
    );
    
    /**
     * Render the Meta Tag
     */
    public function render()
    {
        
    }
    
    static public function config($name,$value=null)
    {
        if(!in_array($name, self::$config)){
            throw new InvalidArgumentException('og.config_invalid',$name);
        }
        if(!is_null($value)){
            self::$config[$name] = $value;
        }
        return self::$config[$name];
    }
    
    static public function setValidateUrl($validate)
    {
        self::config('validate_url', $validate);
    }
    
    
}
