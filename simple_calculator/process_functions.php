<?php

include('global/header.php'); // Include the header
include('..global/nav.php');    // Include the navigation
include('nav.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and validate input
    $num1 = isset($_POST['num1']) ? trim($_POST['num1']) : '';
    $num2 = isset($_POST['num2']) ? trim($_POST['num2']) : '';
    $operation = isset($_POST['operation']) ? trim($_POST['operation']) : '';

    if (!is_numeric($num1) || !is_numeric($num2)) {
        $error = "Both inputs must be valid numbers.";
    } elseif ($operation === 'division' && $num2 == 0) {
        $error = "Cannot divide by zero!";
    } elseif (empty($operation)) {
        $error = "Please select an operation.";
    }

    // If there are errors, display them
    if (isset($error)) {
        echo "<h2 class='text-danger'>Error</h2>";
        echo "<p class='text-warning'>$error</p>";
    } else {
        // Perform calculation using switch
        $result = null;
        switch ($operation) {
            case 'addition':
                $result = $num1 + $num2;
                $operationText = "addition";
                break;
            case 'subtraction':
                $result = $num1 - $num2;
                $operationText = "subtraction";
                break;
            case 'multiplication':
                $result = $num1 * $num2;
                $operationText = "multiplication";
                break;
            case 'division':
                $result = $num1 / $num2;
                $operationText = "division";
                break;
            case 'exponentiation':
                $result = pow($num1, $num2);
                $operationText = "exponentiation";
                break;
            default:
                echo "<h2 class='text-danger'>Error</h2>";
                echo "<p class='text-warning'>Invalid operation selected.</p>";
                exit;
        }

        // Display the result
        echo "<h2 class='text-success'>$operationText</h2>";
        echo "<p class='text-primary'>$num1 $operationText $num2 = $result</p>";
    }
} else {
    echo "<h2 class='text-danger'>Error</h2>";
    echo "<p class='text-warning'>Invalid request method.</p>";
}

// Include the footer file
?>
