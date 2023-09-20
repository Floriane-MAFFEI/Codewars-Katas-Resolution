<?php

// Complete the solution so that it returns true if the first argument(string) passed in ends with the 2nd argument (also a string).

// Examples:

// solution('abc', 'bc') // returns true
// solution('abc', 'd') // returns false

function solution($str, $ending) {
    
    $len = strlen($ending);
    
      if ($len == 0) {
          return true;
      }
      return (substr($str, -$len) === $ending);
  }

// ou version plus optimisée

function solution($str, $ending) {
    return str_ends_with($str, $ending);
  }
