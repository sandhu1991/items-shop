<?php

require_once('ElectronicItem.php');
require_once('LimitExtras.php');

class Microwave extends ElectronicItem implements LimitExtras
{

    public function __construct()
    {

        $this->setType(ElectronicItem::ELECTRONIC_ITEM_MICROWAVE);
    }

    /**
     *
     * @return boolean
     */
    public function maxExtras()
    {
        return  "The microwave can't have any extras";
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