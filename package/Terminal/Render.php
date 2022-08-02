<?php

namespace DotonCli\Terminal;

use DotonCli\Response\JSON\Responses;

class Render{


    public $Data;

    
    public function __construct($Data) {

        $this->Data = $Data;
        
    }




    public function Show(){

        $Param = func_get_args();

        $Data = isset($Param[0]) ? $Param[0] : $this->Data;

        echo (new Responses())->BuildText('', $Data);
        
    }
    
    
    
}