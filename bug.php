function calculateSum(a, b) {
  return a + b;
}

function calculateProduct(a, b) {
  return a * b;
}

//Incorrect usage
console.log(calculateSum(10, '20')); //Output: 1020 (string concatenation)
console.log(calculateProduct(10, '20')); //Output: NaN (Not a Number)