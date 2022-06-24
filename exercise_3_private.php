<?php


declare(strict_types=1);
class Beverage
{

    protected string $color;
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
    }

    public function getInfo(): string
    {
        return "This beverage is  " . $this->temperature . " and  " . $this->color;
    }
}
class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholPercentage;

    /*
     * @param string $name
     * @param float $alcoholPercentage
     */
    public function __construct(string $name, float $alcoholPercentage, string $color, float $price)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
//        echo $alcoholPercentage;
//        echo "\n";
    }

    /**
     * @return float
     */
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    /**
     * @return string
     */
    public function beerInfo(): string
    {
        return "Hi i'm ".$this->name." and have an alcochol percentage of ".$this->alcoholPercentage." and I have a ".$this->color." color.";
    }

}

$Jupiler = new Beer('Jupiler', 5, 'yellow', 2);
//echo "Alcohol % ="." ".$Jupiler->getAlcoholPercentage();
echo "\n<br>";
$duvel = new Beer('Duvel', 8.5, 'Yellow', 1.5);
echo $duvel->beerInfo();
echo "\n<br>";
$duvel = new Beer('Duvel', 8.5, 'Blonde', 3.5);
echo $duvel->beerInfo();
echo "\n<br>";
//echo "Alcohol % ="." ".$duvel->getAlcoholPercentage();
echo "\n<br>";
$rootbeer = new Beverage('yellow', 3.5);
//echo $rootbeer->getInfo();


/* EXERCISE 3

        TODO: Copy the code of exercise 2 to here and delete everything related to cola.
        TODO: Make all properties private.
        TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/