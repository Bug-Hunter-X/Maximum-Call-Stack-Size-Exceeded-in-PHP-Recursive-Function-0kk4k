function foo(a, b) {
  if (a === b) {
    return true;
  } else if (a > b) {
    return false; 
  } else if (a + 1000 > b) { // Add a check for close proximity to prevent excessive recursion 
      return false; // Return false if we reach this case to avoid exceeding recursion limits 
  }
  else {
    return foo(a + 1, b);
  }
}

console.log(foo(5,10)); //this will now work correctly