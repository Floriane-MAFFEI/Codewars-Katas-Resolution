<?php

// Complete the square sum function so that it squares each number passed into it and then sums the results together.

// For example, for [1, 2, 2] it should return 9 because 
// 1² + 2² + 2² =9.

function square_sum($numbers) : int {
    $sum = 0;
     foreach ($numbers as $number) {
         $sum += pow($number, 2);
     }
     return $sum;
 }
 