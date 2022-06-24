<?php

declare(strict_types=1);
class Beverage
{
    private string $color;        //needed for the getcolor to work!
    private float $price;
    private string $temperature;
    function __construct(string $color, float $price)
    {
        $this->color = $color;
        echo "color: ".$this->color;
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
            return Error('Dont think i will pay for your drink!');
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
        //just using $color won't work, we need to use the getColor getter method
        return "Hi i'm " . $this->name . " and have an alcochol percentage of " . $this->alcoholPercentage . " and I have a " . $this->getColor() . " color.";
    }
}
/* EXERCISE 3

done: Copy the code of exercise 2 to here and delete everything related to cola.
done: Make all properties private.
done: Make all the other prints work without error.
done: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
done: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

done: Print this method on the screen on a new line.

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
