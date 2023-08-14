<?php

// Build a function that returns an array of integers from n to 1 where n>0.

// Example : n=5 --> [5,4,3,2,1]

function reverseSeq($n) {
    $result = array();
    
    for ($i = $n; $i >= 1; $i--){
      array_push($result, $i);
    }
    return $result;
  };