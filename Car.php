<?php 
require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = false;

    public function __construct(string $color,int $nbSeats,string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function start()
    {
        if($this->getHasParkBrake()) {
            throw new Exception("The handbrake is active");
        }
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function show()
    {
        echo '[ color: '. $this->getColor() . ' nb de place: '. $this->getNbSeats() . ' energie: '. $this->getEnergy() .' ]';
    }
        
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake()
    {
        $this->setHasParkBrake(!$this->hasParkBrake);

        return $this;
    }

     
    public function setHasParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
}