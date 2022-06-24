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
        $this->temperature = 'cold';        //default value set inside the construct
    }
    public function getInfo(): string
    {
        //echoing temperature and color from the getter
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '.';
    }
}


/* EXERCISE 1
    done: Create a class beverage.
    done: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
    done: Have a default value "cold" in the construct for temperature.
Remember for now we will use properties and methods that can be accessed from everywhere.
    done: Make a getInfo function which returns "This beverage is <temperature> and <color>."
    done: Instantiate an object which represents cola. Make sure that the color is set to black,
            the price equals 2 euro and the temperature to cold automatically print the getInfo on the screen.
    done: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/

$cola = new Beverage('black', 2);
echo $cola->getInfo();
