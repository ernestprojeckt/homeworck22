<?php


namespace App\Engine;


class Car implements \App\MovableInterface
{
    use Transmision;

    private int $speed = 0;
    private const  maxSpeed = 155;
    private Engine $engine;
    private Transmision $Drive;


    public function __construct(Engine $engine)
    {
        $this->engine = $engine;

    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return bool
     */
    public function getEngineStatus(): bool
    {
        return $this->engine->getEngineStatus();

    }

    public function up()
    {

     if((self::maxSpeed + 5) >= self::maxSpeed){
         $this->speed+=5;

     }

    }

    public function down()
    {
        $this->speed = 0;
    }

    public function start()
    {
        $this->engine->start();
    }

    public function stop()
    {
        $this->engine->stop();
    }
}