<?php

declare(strict_types=1);
class Beverage
{

    private string $color;
    private float $price;
    private string $temperature;

    /**
     * @param string $color
     * @param float $price
     * @param string $temperature
     */
    public function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        echo $price;
    }

    public function getInfo(): string
    {
        return "This beverage is  " . $this->temperature . " and  " . $this->color;
    }
}

$rootbeer = new Beverage('yellow', 3.5);
echo $rootbeer->getInfo()."<br>";
$cola = new Beverage('black', 2);
echo $cola->getInfo()."<br>";
/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/