# PHP Type Juggling Bug

This repository demonstrates a common bug in PHP related to type juggling. When performing arithmetic operations with mixed data types (e.g., integers and strings), PHP's implicit type coercion can lead to unexpected and incorrect results.  The `bug.php` file shows the incorrect behavior, while `bugSolution.php` provides a corrected version.

## Bug Description

The core issue lies in PHP's loose typing system.  When a numerical operation involves a string, PHP attempts to convert the string to a number.  However, if the string cannot be parsed as a number, unexpected behavior occurs.  This can lead to errors that are hard to track down.

## Solution

The solution involves explicit type checking and conversion.  Before performing arithmetic operations, ensure that all operands are of the correct numeric type.  The `bugSolution.php` file shows how to use type checking and casting to prevent this type of error.