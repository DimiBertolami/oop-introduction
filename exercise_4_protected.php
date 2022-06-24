<?php

declare(strict_types=1);

class Beverage
{

    protected string $color;
    protected float $price;
    protected string $temperature;

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
    }

    public function getInfo(): string
    {
        return "This beverage is  " . $this->temperature . " and  " . $this->color;
    }
}
//class "Beer.php" extends "BEVERAGE.php";
class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholPercentage;

    /**
     * @param string $name
     * @param float $alcoholPercentage
     */
    public function __construct(string $name, float $alcoholPercentage, string $color, float $price)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        echo "Alcohol % (shoutout from within the construct)= ".$alcoholPercentage;
        echo "\n";
    }

    /**
     * @return float
     */
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }
}

$Jupiler = new Beer('Jupiler', 5, 'yellow', 2);
//echo "Alcohol % ="." ".$Jupiler->getAlcoholPercentage();
echo "\n<br>";
$duvel = new Beer('Duvel', 8.5, 'Yellow', 3.5);
echo "\n<br>";
//echo "Alcohol % = (hi from getAlcoholPercentage method)".$duvel->getAlcoholPercentage();
//echo "\n<br>";
$rootbeer = new Beverage('yellow', 3.5);
//echo "rootbeer getInfo Method: ".$rootbeer->getInfo();

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/