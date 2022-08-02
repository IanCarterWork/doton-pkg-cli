<?php

use DotonCli\Terminal;


/**
 * 
 * --------------------------------------
 * |                                    |
 * |    Launch Doton AutoLoader         |
 * |                                    |
 * --------------------------------------
 * 
 */

require_once __DIR__ . "/doton/autoload.php";




/**
 * 
 * --------------------------------------
 * |                                    |
 * |    Sandbox                         |
 * |                                    |
 * --------------------------------------
 * 
 */


 var_dump( 
    
    Terminal::name, 
    
    Terminal::version, 
    
    Terminal::serie 
    
);