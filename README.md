# Maximum Call Stack Size Exceeded in PHP

This repository demonstrates a common error in recursive functions: exceeding the maximum call stack size.  The `bug.php` file contains a recursive function that lacks a proper termination condition, leading to infinite recursion. The `bugSolution.php` file shows how to correct this by adding a more robust base case to stop the recursion.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`. You'll observe a fatal error indicating that the maximum call stack size has been exceeded.
3. Run `bugSolution.php` to see the corrected version.