<?php


namespace DotonCli\Commands\Serve;




class Router{



    static public function AllowFakeStaticAssets(){

        define('DOTON_CLI_SERVE_RUN', true );

        if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {

            return false;

        }

        return true;
        
    }
    
    
}