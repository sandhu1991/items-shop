<?php

require_once('ElectronicItem.php');
require_once('LimitExtras.php');

class Controller extends ElectronicItem implements LimitExtras
{

    public function __construct()
    {

        $this->setType(ElectronicItem::ELECTRONIC_ITEM_CONTROLLER);
    }

    /**
     *
     * @return boolean
     */
    public function maxExtras()
    {
        return "The controller can't have any extras";
    }

    /**
     *
     * @return array
     */
    public function getExtras()
    {
        return $this->extras;
    }

}