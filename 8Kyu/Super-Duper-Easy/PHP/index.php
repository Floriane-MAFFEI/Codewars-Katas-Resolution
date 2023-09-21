<?php

// Make a function that returns the value multiplied by 50 and increased by 6. If the value entered is a string it should return "Error".

function problem($x){
    if (is_numeric($x)) {
          $result = ($x * 50) + 6;
          return $result;
      } else {
          return "Error";
      }
  }