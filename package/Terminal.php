<?php


namespace DotonCli;



use DotonCli\Terminal\Render;
use Doton\Core\Utilities\IArray;

use const Doton\DOTON_NAME;
use const Doton\DOTON_SERIE;
use const Doton\DOTON_VERSION;

class Terminal{


    const name = DOTON_NAME;

    const version = DOTON_VERSION;

    const serie = DOTON_SERIE;


    static public function Is(){

        return php_sapi_name() === 'cli' || php_sapi_name() === 'cli-server';
    
    }
    


    static public function AvailablesModules() : ?object{

        $get = json_decode( file_get_contents( DOTON_PROJECT_CONFIG_FILE ) );

        if(isset($get->bin)){

            return $get->bin;
            
        }

        return null;
        
    }




    public function Module(string $name) : ?Command {

        $modules = self::AvailablesModules() ?: (object) [];

        $module = null;

        foreach($modules as $command => $nsclass){

            if($command == $name){

                $module = new $nsclass;

                break;
                
            }
            
        }
        
        return $module;

    }
    
    


    public function Run(array $argv) : bool{

        $module = $this->Module( isset( $argv[1] ) ? $argv[1] : '' );

        
        if($module instanceof Command){

            
            if( method_exists($module, "Run") ){

                $Render = $module->Run( 
                    
                    IArray::Range($argv, 2, 0)
                
                );

                if($Render instanceof Render){

                    $Render->Show();
                    
                }

                return true;
            
            }
                
            
        }

        return false;

    }
    
    


    
}