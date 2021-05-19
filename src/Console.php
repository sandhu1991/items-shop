<?php

require_once('ElectronicItem.php');
require_once('LimitExtras.php');
require_once('Controller.php');

class Console extends ElectronicItem implements LimitExtras
{
    const MAX_EXTRAS_LIMIT = 4;

    public function __construct()
    {

        $this->setType(ElectronicItem::ELECTRONIC_ITEM_CONSOLE);
    }

    /**
     *
     * @return boolean
     */
    public function maxExtras()
    {
       if(count($this->extras) == self::MAX_EXTRAS_LIMIT){
           return true; 
       }

       return false;

    }

    /**
     *
     * @return array
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     *
     * @param float $price
     * @param string $type
     */
    public function setExtra($price, $type)
    {
       
        if($this->maxExtras()){

            print "Console can have maximun ". self::MAX_EXTRAS_LIMIT." extras"; 
        }

        $controller = new Controller();
        $controller->setPrice($price);
        $controller->setType(ElectronicItem::ELECTRONIC_ITEM_CONTROLLER);
        $controller->setWired($type);
        $this->extras[] = $controller;
    }

}
