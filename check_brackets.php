<?php

/**
 * This function checks if the brackets in the given arithmetic expression are correctly balanced.
 *
 * @param string $expression The arithmetic expression to check.
 * @return string Returns "Correct" if brackets are balanced, otherwise "Incorrect".
 */
function check_brackets($expression) {
    $stack = [];  // This stack is used to keep track of the opening brackets.

    // Pairs of brackets for easy checking.
    const BRACKET_PAIRS = [
        ')' => '(',
        ']' => '[',
        '}' => '{'
    ];

    // Constants for return values.
    const CORRECT = "Correct";
    const INCORRECT = "Incorrect";

    // Loop through each character in the expression.
    for ($i = 0; $i < strlen($expression); $i++) {
        $char = $expression[$i];

        // If character is an opening bracket, push it onto the stack.
        if (in_array($char, BRACKET_PAIRS)) {
            array_push($stack, $char);
        } 
        // If character is a closing bracket, check for its corresponding opening bracket in the stack.
        elseif (array_key_exists($char, BRACKET_PAIRS)) {
            // If the stack is empty or doesn't have the matching opening bracket, return "Incorrect".
            if (count($stack) == 0 || BRACKET_PAIRS[$char] !== array_pop($stack)) {
                return INCORRECT;
            }
        }
    }

    // If the stack is empty after processing the entire string, the brackets are balanced.
    return count($stack) == 0 ? CORRECT : INCORRECT;
}
?>
