<?php


namespace App\Engine;
require_once '../../vendor/autoload.php';



class Engine
{

    private string $fuelType;
    private int $power;
    private bool $engineStatus = false;

    public function __construct( string $fuelType, int $power){
        $this->fuelType = $fuelType;
        $this->power = $power;

    }

    /**
     * @return string
     */
    public function getFuelType(): string
    {
        return $this->fuelType;
    }

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->power;
    }

    public function start()
    {
        $this->engineStatus = true;
    }

    public function stop()
    {
        $this->engineStatus = false;
    }

    public function getEngineStatus(): bool
    {
        return $this->engineStatus;
    }



}