<?php
class Car{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $eneryLevel;

    
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;

        return $this;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

   
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }

    public function getEneryLevel()
    {
        return $this->eneryLevel;
    }
 
    public function setEneryLevel($eneryLevel)
    {
        $this->eneryLevel = $eneryLevel;

        return $this;
    }

    public function start(): string
    {
        $this->currentSpeed = 0;
    
        return "Start !";
    }
    public function forward(): string
    {
        $this->currentSpeed = 15;
    
        return "Go !";
    }
    
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
    



}