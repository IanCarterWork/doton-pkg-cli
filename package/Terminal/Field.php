<?php


namespace DotonCli\Terminal;

use DotonInterface\CObject;


class Field extends CObject{

    public $Name;

    public $Label;

    public $Require = false;

    public $Type = "string";
    
}

