<?php

// Make a simple function called greet that returns the most-famous "hello world!".

// Style Points
// Sure, this is about as easy as it gets. But how clever can you be to create the most creative "hello world" you can think of? What is a "hello world" solution you would want to show your friends?

// Creative Solution
function greet() {
    $greeting = "h";
    $greeting .= "e";
    $greeting .= str_repeat("l", 2);
    $greeting .= "o ";
    $greeting .= "w";
    $greeting .= "o";
    $greeting .= "r";
    $greeting .= "l";
    $greeting .= "d!";
    
    return $greeting;
}

echo greet();