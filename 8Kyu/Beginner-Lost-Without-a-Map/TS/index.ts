// Given an array of integers, return a new array with each value doubled.

// For example:

// [1, 2, 3] --> [2, 4, 6]

export function maps(x: number[]): number[]{
    return x.map((value) => value * 2);
  }