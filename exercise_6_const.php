<?php

declare(strict_types=1);
class Beverage
{
    static string $ADDRESS = "Melkmarkt 9, 2000 Antwerpen";
    protected string $color;
    protected float $price;
    protected string $temperature;
    function __construct(string $color, float $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = 'cold';
    }
    function getAddress():string{
        return self::$ADDRESS;
    }
    function getInfo(): string
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '.';
    }
    function getColor(): string
    {
        return $this->color;
    }
    function setColor(string $color)
    {
        $this->color = $color;
    }
    function getPrice():float{
        return $this->price;
    }
    function setPrice(float $price){
        if($price<0){
            return Error('You really THINK I will pay for your DRINK?');
        }
        $this->price = $price;
    }
    function getBar(){
        return BARNAME;
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
/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/

define('BARNAME','Het Vervolg');
print_r(BARNAME);
$cola = new Beverage('black', -2);
echo '<br/>';
echo '<br/>';
print_r($cola->getBar());
$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);
echo '<br/>';
echo '<br/>';
print_r($duvel->getBar());
