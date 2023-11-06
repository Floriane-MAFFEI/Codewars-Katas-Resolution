// Write a function which calculates the average of the numbers in a given list.

// Note: Empty arrays should return 0.

function findAverage(array) {
  if (array.length === 0) {
    return 0;
  } else {
    const sum = array.reduce((acc, val) => acc + val, 0);
    return sum / array.length;
  }
}
