<?php


namespace App\Engine;


trait Transmision
{
private string $position = "D";

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }


}