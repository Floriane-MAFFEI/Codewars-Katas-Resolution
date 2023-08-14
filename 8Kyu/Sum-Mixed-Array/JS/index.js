// Given an array of integers as strings and numbers, return the sum of the array values as if all were numbers.

// Return your answer as a number.

function sumMix(x){
    let totalSum = 0;
  
    for (let i = 0; i < x.length; i++) {
      totalSum += parseInt(x[i]);
    }
    
    return(totalSum);
  }
  