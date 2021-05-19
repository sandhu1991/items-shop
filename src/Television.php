<?php

require_once('ElectronicItem.php');
require_once('LimitExtras.php');
require_once('Controller.php');

class Televesion extends ElectronicItem implements LimitExtras
{

    public function __construct()
    {

        $this->setType(ElectronicItem::ELECTRONIC_ITEM_TELEVISION);
    }

    /**
     *
     * @return boolean
     */
    public function maxExtras()
    {
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

        $controller = new Controller();
        $controller->setPrice($price);
        $controller->setType(ElectronicItem::ELECTRONIC_ITEM_CONTROLLER);
        $controller->setWired($type);
        $this->extras[] = $controller;
    }

}