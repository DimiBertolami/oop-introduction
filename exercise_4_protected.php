<?php

declare(strict_types=1);
class Beverage
{
    protected string $color;
    protected float $price;
    protected string $temperature;
    function __construct(string $color, float $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = 'cold';
    }
    public function getInfo(): string
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '.';
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color)
    {
        $this->color = $color;
    }
    function getPrice():float{
        return $this->price;
    }
    function setPrice(float $price){
        if($price<0){
            return Error('Tried to set price to negative number');
        }
        $this->price = $price;
    }
}

class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;
    function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }
    function beerInfo(): string
    {
        return "Hi i'm " . $this->name . " and have an alcochol percentage of " . $this->alcoholPercentage . " and I have a " . $this->color . " color.";
    }
}
/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

done: Make all properties protected.
done: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/


$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);

print_r('AlcoholPercentage: ' . $duvel->getAlcoholPercentage() . "%");
echo '<br/>';
print_r('color: ' . $duvel->getColor());
echo '<br/>';
print_r('Info:' . $duvel->getInfo());
echo '<br/>';
echo '<br/>';
$duvel->setColor('light');
print_r($duvel->getColor());
echo '<br/>';
echo '<br/>';
print_r($duvel->beerInfo());