// In this Kata we are passing a number (n) into a function.

// Your code will determine if the number passed is even (or not).

// The function needs to return either a true or false.

// Numbers may be positive or negative, integers or floats.

// Floats with decimal part non equal to zero are considered UNeven for this kata.

function testEven(n) {
  if (Number.isInteger(n) || (Number(n) === n && n % 1 !== 0)) {
    return n % 2 === 0;
  } else {
    throw new Error(
      "Veuillez fournir un nombre entier ou un nombre décimal non égal à zéro."
    );
  }
}
