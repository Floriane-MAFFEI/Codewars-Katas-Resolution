-- Write a program that finds the summation of every number from 1 to num. The number will always be a positive integer greater than 0.

SELECT n, n * (n + 1) / 2 AS res
FROM kata;