<?php


namespace App;

interface MovableInterface
{
    public function start();

    public function stop();

    public function up();

    public function down();
}
