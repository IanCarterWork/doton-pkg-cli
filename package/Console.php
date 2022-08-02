<?php

namespace DotonCli;


class Console{


    static public function Timestamp(){

        return date("Y-m-d H:i:s") . "";
        
    }
    
    

    static public function Parse($value){

        switch(gettype($value)){

            case 'string':
            
            case 'boolean':
            
            case 'integer':
            
            case 'double':
            
            case 'float':
            
                return $value; 

            break;     


            case 'object': 
            case 'array':
                return \print_r($value);
            break;     


            default: return ($value); break;     
            

        }

    }
    
    

    static public function Info(...$values){

        echo "[ " . self::Timestamp() . " ]" ."\x20";

        foreach( $values as $value){
            
            echo self::Parse($value);

        }
        
        echo PHP_EOL;

        return self::class;
        
    }
    
    

    static public function Notice(...$values){

        echo "[ " . self::Timestamp() . " ]" ."\x20";

        foreach( $values as $value){

            echo Terminal::Is() ? "\033[36m" : "";
            
            echo self::Parse($value);
            
            echo Terminal::Is() ? "\033[0m " : "";

        }
        
        echo PHP_EOL;

        return self::class;
        
    }
    
    

    static public function Warning(...$values){

        echo "[ " . self::Timestamp() . " ]" ."\x20";

        foreach( $values as $value){

            echo Terminal::Is() ? "\033[33m" : "";
            
            echo self::Parse($value);
            
            echo Terminal::Is() ? "\033[0m " : "";

        }
        
        echo PHP_EOL;

        return self::class;
        
    }
    
    
    

    static public function Error(...$values){

        echo "[ " . self::Timestamp() . " ]" ."\x20";

        foreach( $values as $value){

            echo Terminal::Is() ? "\033[31m" : "";
            
            echo self::Parse($value);
            
            echo Terminal::Is() ? "\033[0m " : "";

        }
        
        echo PHP_EOL;

        return self::class;
        
    }
    
    
    

    static public function Success(...$values){

        echo "[ " . self::Timestamp() . " ]" ."\x20";

        foreach( $values as $value){

            echo Terminal::Is() ? "\033[32m" : "";
            
            echo self::Parse($value);
            
            echo Terminal::Is() ? "\033[0m " : "";

        }
        
        echo PHP_EOL;

        return self::class;
        
    }
    
    


    
}

