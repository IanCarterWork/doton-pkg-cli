<?php

namespace DotonCli\Commands\Serve;


use DotonCli\Terminal\Render;
use DotonCli\Command;
use Doton\Core\Utilities\Cli;
use DotonCli\Console;

use function Doton\config;

class Run extends Command{



    
    public function Run(?array $argv = [], ?object $config = null) : ?Render{


        switch( strtolower($argv[0] ?: '') ){
            
            /**
             * Run Dev Serve
             */
            
            case '-run':


                $config = config();



                $host = ( isset( $argv[1] ) ? $argv[1] : (

                    ( isset( $config->development ) )

                    ? (

                        $config->development->host . ':' . 
                        
                        $config->development->port . ''

                    )

                    : 'localhost:8019'
                    
                ) );
                

                $url = ( isset( $config->development ) )

                    ? ($config->development->protocol ?: 'http') . '://' . $host

                    : "http://" . $host
                    
                ;
                    
                
                $public = ( isset( $argv[2] ) 
                
                    ? $_SERVER['PWD'] . DIRECTORY_SEPARATOR .  $argv[2] 
                    
                    : $_SERVER['PWD'] 
                
                );


                $index = isset( $argv[3] )
                
                    ? $argv[3]

                    : ''
                    
                ;


                Console::Success("Directory : " . $public);

                Console::Success("Host : " . $host);

                Console::Success("URL : " . $url);

                exec(

                    'cd ' . $public . 
                    
                    ' && ' . Cli::OpenURL($url, false) . '' .
                    
                    ' && php -S ' . $host . " " . $index

                );

            break;
            



            default:

                echo "::Serve Module Helper" . PHP_EOL;

                echo "-run              Run development server" . PHP_EOL;

            break;
            
        }
        

        return null;
        
    }
    
    
    
}

// var_dump( readline_info() );