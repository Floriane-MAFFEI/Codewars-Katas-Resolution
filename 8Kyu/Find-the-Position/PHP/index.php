<?php

// When provided with a letter, return its position in the alphabet.

// Input :: "a"

// Ouput :: "Position of alphabet: 1"

function position(string $alphabet): string 
{
  $asciiValue = ord($alphabet) - ord('a') + 1;

  return "Position of alphabet: $asciiValue";
}