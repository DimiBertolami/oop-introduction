<?php

declare(strict_types=1);

/* EXERCISE 2

done: Make class beer that extends from Beverage.
done: Create the properties name (string) and alcoholPercentage (float).
done: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
done: Make a getAlcoholPercentage function which returns the alocoholPercentage.
done: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
done: Also the name equal to Duvel and the alcohol percentage to 8,5%
done: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/
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
        echo "Alcohol % = ".$this->alcoholPercentage."<br>";        //display alcohol% 1
    }
    function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }
    function beerInfo(): string
    {
        //alcohol % 2
        return "Hi i'm " . $this->name . " and have an alcochol percentage of " . $this->alcoholPercentage . " and I have a " . $this->color . " color.";
    }
}
$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);

print_r('AlcoholPercentage: ' . $duvel->getAlcoholPercentage() . "%");
echo '<br/>';
print_r('color: ' . $duvel->getColor());
echo '<br/>';
print_r(
    'Info:' . $duvel->getInfo()
);
