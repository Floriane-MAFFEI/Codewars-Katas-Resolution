<?php

// Complete the function that accepts a string parameter, and reverses each word in the string. All spaces in the string should be retained.

// Examples
// "This is an example!" ==> "sihT si na !elpmaxe"
// "double  spaces"      ==> "elbuod  secaps"

function reverseWords($str) {

    $words = explode(" ", $str);
    
    $reversedWords = [];
    
    foreach ($words as $word) {
        $reversedWord = strrev($word);
        $reversedWords[] = $reversedWord;
    }
    
    $reversedStr = implode(" ", $reversedWords);
    
    return $reversedStr;
}