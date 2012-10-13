<?php

namespace dayax\opengraph\type;

use dayax\core\Component;
use dayax\core\Message;


abstract class BaseType extends Component
{
    protected $requiredProperties = array();
    
    public function __construct()
    {
        $this->configure();
    }        
    
    public function validateURL($url)
    {
        //FIXME: implement this function
        return true;
    }
    
    protected function setRequiredProperties($properties)
    {
        if(!is_array($properties)){
            $properties = array($properties);
        }
        $this->requiredProperties = array_merge($this->requiredProperties,$properties);
    }
    
    public function validate()
    {
        $vMessage = array();
        foreach($this->requiredProperties as $name)
        {
            if(is_null($this->$name)){
                
                $vMessage[] = Message::translateMessage('og.required_property',$this->Type,$name);
            }
        }
        
        if(count($vMessage)>0){
            return $vMessage;
        }else{
            return true;
        }
    }
    
    public function getType()
    {
        $c =explode("\\",get_class($this));
        $c = $c[count($c)-1];
        return $c;
    }
    
    abstract public function render();
    
    abstract protected function configure();        
}

?>
