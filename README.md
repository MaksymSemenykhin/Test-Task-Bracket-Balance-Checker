
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

4. Link to test [sandbox](https://onlinephp.io?s=jZRta9swEMdfL5DvcAuB2K1J1r5c-jAogxUKK1vfhRBU5VKLOJKR5K6hzXevTpJjOwvd9Mo-nf73uwfp4rrMy36v35ucnPR7cAIPuTCwqiS3QkngOfK1AbECmyM8asbXaN2_9P9P4hklMC1svkErOOBLqdEYOsk0AldaI7fFFh5ZwSTH5Zhi-DjfSqbZBozVQj7BsHXywSkf17QqAI2DgkZbaVlL_PJ_BgY3IeqAqPfEhFNDZKAcvf4jDMLgVkbKgVedUC266S9qkaRFmcJrv_fJnXBrMoF7JrQB1Qq4UhqQmW3QcIDj4DyMHuHEJcyCmdYoHcHlFYySUdYyzoNx1jHugvF1FGzzKRC31zfW6ZOwMxKab2gwuo_K4JLquEYswRIKUVMzVYmS6lhnMK4VncaNkk5BxrRi3Z9ZUaGp04pVdIH3DZjGLSFbm029p60Ad0o5nFyr6il3ZeO5K5ubD25R18PW1D6GJJRkKJzol6kLAhc0CQXKTpto5_TUd6su3pCk3amW22wo5nuciHS7ajO4CZKHJcqgrEwOwoKSrqQE6es8bnTcCCZCLpjWbJv4wFl3AtIOGi3vuyDlJPQyC8TptPHbwceowAtlOqR-Cn3JhOuib4EplVyS00FadcEPc8HCIOUTANe4XeCLMHQt_iuvwLkXJk7clHYLjmmp0MiRhZw9o3fZMMvzI2xZPXwH97a1CJGrStpYvhQu3YTA21sXcOap5_DZ7caSq7I-8hc8rRi5Gedp12fX6k_43LUm_HjubEUtK7XiNIguTz_p0gqN8V3Lui9v-x2LiUeuIzlfN9fya5fbk_kLcEaXcpa87tI53UhvOw-2WTAhz9XRl_AshTHc_7hffP95F96a37mqiuW-R_VD8IHG-b80mj4T8vXVOw%2C%2C&v=8.2.10) 
