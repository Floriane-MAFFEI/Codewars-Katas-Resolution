// Write a function that merges two sorted arrays into a single one. The arrays only contain integers. Also, the final outcome must be sorted and not have any duplicate.

function mergeArrays(a, b) {
  let mergedArray = [...a, ...b];
  let uniqueSet = new Set(mergedArray);
  let uniqueArray = Array.from(uniqueSet);
  uniqueArray.sort((a, b) => a - b);

  return uniqueArray;
}
