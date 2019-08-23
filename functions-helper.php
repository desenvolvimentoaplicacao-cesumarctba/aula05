<?php

function debug($var, $continue = true) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	
	if (!$continue) {
		die();
	}
}


if(!function_exists("readline")) {
    function readline($prompt = null){
        if($prompt){
            echo $prompt;
        }
        $fp = fopen("php://stdin","r");
        $line = rtrim(fgets($fp, 1024));
        return $line;
    }
}
