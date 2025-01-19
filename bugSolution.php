function calculateSum(a, b) {
  //Explicit type checking and conversion
  $a = (float) $a;
  $b = (float) $b;
  return $a + $b;
}

function calculateProduct(a, b) {
  //Explicit type checking and conversion
  $a = (float) $a;
  $b = (float) $b;
  return $a * b;
}

//Correct usage
$sum = calculateSum(10, '20'); //Output: 30
$product = calculateProduct(10, '20'); //Output: 200

echo "Sum: " . $sum . "\n";
echo "Product: " . $product; 