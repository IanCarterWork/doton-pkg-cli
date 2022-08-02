<?php

namespace DotonCli\Response;

use DotonInterface\CObject;




class ResponseMeta extends CObject{

    public $Status = false;

    public $Title;

    public $About;

    public $Charset = 'utf8';

    public $Type = 'application/json';
    
}