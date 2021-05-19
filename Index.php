<?php

//set display mode mode
ini_set('display_errors', 1);

// include all the required files
require_once('src/ElectronicItem.php');
require_once('src/LimitExtras.php');
require_once('src/Controller.php');
require_once('src/Console.php');
require_once('src/Television.php');
require_once('src/Microwave.php');
require_once('src/ElectronicItems.php');

// all items 
$items = [];

//intantiate console object
$console = new Console();
$console->setPrice(99.99);

//set the 4 extras
$console->setExtra(10.99, 'wired');
$console->setExtra(10.99, 'wired');
$console->setExtra(20.99, 'remote');
$console->setExtra(20.99, 'remote');

$items[] = $console;

//intantiate TV objects
$televison1 = new Televesion();
$televison1->setPrice(199.99);

$televison2 = new Televesion();
$televison2->setPrice(399.99);

//set the extras
$televison1->setExtra(20.99, 'remote');
$televison1->setExtra(20.99, 'remote');
$televison2->setExtra(20.99, 'remote');

array_push($items, $televison1, $televison2);


//intantiate console object
$microwave = new Microwave();
$microwave->setPrice(49.99);

$items[] = $microwave;


// output
$cart = new ElectronicItems($items);

echo "Answer to the first question \n";
$data = $cart->getSortedItems();
echo "The Sorted items Are \n";
var_dump($data['sortedItems']);
echo "The price for all items is  {$data['totalPrice']} \n";

echo "Answer to the second question \n";
$itemPrice = $cart->getItemPrice(ElectronicItem::ELECTRONIC_ITEM_CONSOLE);
echo "The full price of ". ElectronicItem::ELECTRONIC_ITEM_CONSOLE. " is {$itemPrice} \n";



