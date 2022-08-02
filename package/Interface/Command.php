<?php


namespace DotonCli\Interface;

use DotonCli\Terminal\Render;


interface Command{

    public function Run(?array $argv, ?object $config) : ?Render;
    
}