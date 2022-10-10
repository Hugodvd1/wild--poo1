<?php

class Car

{

private  int $nbWheels = 4;
private float $currentSpeed = 0;
private string $color;
private int $nbSeats = 5;
private string $energy;
private int $energyLevel;


public function __construct(string $color, int $nbSeats, string $energy)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;

}

public function forward(): string
{
    $this->currentSpeed = 30;

    return "Go !";
}
// ----------- Mouvement 


public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}

public function start() : string
{
    $letSentence = "";
    while ($this->currentSpeed == 0) {
        $this->currentSpeed--;
        $letSentence .= "Let's go ! ";
    }
    return $letSentence;
}

// --------- Méthode Get 



public function getNbWheels()
{
return $this->nbWheels;
}


public function getCurrentSpeed()
{
return $this->currentSpeed;
}


public function getColor()
{
return $this->color;
}

public function getNbSeats()
{
return $this->nbSeats;
}


public function getEnergy()
{
return $this->energy;
}

public function getEnergyLevel()
{
return $this->energyLevel;
}
}