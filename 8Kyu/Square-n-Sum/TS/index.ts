// Complete the square sum function so that it squares each number passed into it and then sums the results together.

// For example, for [1, 2, 2] it should return 9

export function squareSum(numbers: number[]): number {
  const sum = numbers.reduce((acc, num) => acc + Math.pow(num, 2), 0);
  return sum;
}
