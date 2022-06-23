<?php

class BEVERAGE
{

    public string $color;
    public float $price;
    public string $temperature;

    /**
     * @param string $color
     * @param float $price
     * @param string $temperature
     */
    public function __construct(string $color, float $price, string $temperature='cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    public function getInfo() :string {
        return "This beverage is  $this->$temperature and  $this->$color";
    }
}