<?php

function orderPizza($pizzaType, $person)
{

    $price = calculatePrice($pizzaType);

    $toPrint = '';
    $toPrint .= 'Creating new order... <br>';
    $toPrint .= 'A ' . $pizzaType . ' pizza should be sent to ' . $person . ".<br>";
    $toPrint .= 'The address: ' . getAddress($person) . '.<br>';
    $toPrint .= 'The bill is €' . $price . '.<br>';
    $toPrint .= 'Order finished.<br><br>';

    echo $toPrint;
}

function getAddress($person)
{
    switch ($person) {
        case 'koen':
            return 'a yacht in Antwerp';
        case 'manuele':
            return 'somewhere in Belgium';
        case 'students':
            return 'BeCode office';
        default:
            return 'unknown';
    }
}

function calculatePrice($pizzaType)
{
    switch ($pizzaType) {
        case 'marguerita':
            return 5;
        case 'golden':
            return 100;
        case 'calzone':
            return 10;
        case 'hawai':
            throw new Exception('Computer says no');
    }
}

function orderPizzaForAll()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

orderPizzaForAll();