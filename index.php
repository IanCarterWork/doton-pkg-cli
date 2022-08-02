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


echo "<h1>DotonCli Terminal</h1> ";

echo "<div>Name : " . Terminal::name . "</div> ";

echo "<div>Version : " . Terminal::version . "</div> ";

echo "<div>Serie : " . Terminal::serie . "</div> ";
