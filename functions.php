<?php

    function getPsw($lng) {
        
        $charSet = "";
    
        for ($x = ord('a'); $x <= ord('z'); $x++ ) {
            $charSet .= chr($x);
        }
    
        for ($x = ord('A'); $x <= ord('Z'); $x++ ) {
            $charSet .= chr($x);
        }
    
        for ($x = ord('0'); $x <= ord('9'); $x++ ) {
            $charSet .= chr($x);
        }
    
        for ($x = ord('!'); $x <= ord('/'); $x++ ) {
            $charSet .= chr($x);
        }
    
        $psw = "";
        for ($x = 0; $x < $lng; $x++) {
    
            $rndCharIndex = rand(0, strlen($charSet)-1);
            $rndChar = $charSet[$rndCharIndex];
    
            $psw .= $rndChar;
        }

        return $psw;
    }
?>