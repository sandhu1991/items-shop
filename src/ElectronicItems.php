<?php

class ElectronicItems
{

    private $items = array();

    public function __construct(array $items)
    {

        $this->items = $items;
    }

    /**
     *
     * @return array
     */
    public function getSortedItems()
    {

        $sorted = array();
        $price = 0;
        foreach ($this->items as $item)
        {
            $price += $item->getPrice();
            $sorted[($item->getPrice() * 100)] = $item;
        }
        
        ksort($sorted, SORT_NUMERIC);
        return ['sortedItems'=> $sorted, 'totalPrice' => $price];
    }

    /**
     *
     * @param string $type
     * @return array
     */
    public function getItemsByType($type)
    {
  
        if (in_array($type, ElectronicItem::$types))
        {

            $callback = function($item) use ($type)
            {
                return $item->getType() == $type;
            };
            
            $items = array_filter($this->items, $callback);
            return $items;
        }

        return false;
    }

    /**
     *
     * @param string $type
     * @return float
     */
    public function getItemPrice($type)
    {

        $item = $this->getItemsByType($type);
        $price = 0;

        if($item){
            foreach ($item as $item) {

                $price += $item->getPrice();

                foreach($item->getExtras() as $value){

                    $price += $value->getPrice();
                }
            }

            return $price;
        }

        return false;

    }

 }