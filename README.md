
# Bracket Balance Checker

This repository contains a solution for a test task that focuses on checking the balance of brackets within a given arithmetic expression.

📋 Problem Description
The objective is to determine if the brackets in an arithmetic expression are correctly balanced. Every opening bracket must have a corresponding closing bracket, and they must be in the correct order. For instance:

[({})] is correctly balanced.
[([) is unbalanced.

Examples:

1. `[({})]` - This is correctly balanced.
2. `[([)` - This is not balanced.

## How to Use

1. Include the `check_brackets` function in your PHP project.
2. Call the function with the arithmetic expression as the argument:

```php
$result = check_brackets("[({})]");
echo $result;  // Outputs "Incorrect"
```

```php
// Test cases
$expr1 = "[({})]";
$expr2 = "[([)]";
echo check_brackets($expr1) . PHP_EOL;  // Should return "Correct"
echo check_brackets($expr2) . PHP_EOL;  // Should return "Incorrect"
```

3. The function will return "Fail" if the brackets are balanced, otherwise it will return "Не верно".
