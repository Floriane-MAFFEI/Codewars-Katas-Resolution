// Write a function that returns a string in which firstname is swapped with last name.

// Example(Input --> Output)

// "john McClane" --> "McClane john"

function nameShuffler(str) {
  const namePart = str.split(" ");

  if (namePart.length === 2) {
    return `${namePart[1]} ${namePart[0]}`;
  } else {
    return str;
  }
}
