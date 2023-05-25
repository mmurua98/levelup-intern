<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');


require_once 'db.php';



// Decode the JSON data
$_POST = json_decode(file_get_contents("php://input"), true);
//var_dump($_POST);

if (isset($_POST['cardholderName'], $_POST['cardNumber'], $_POST['expirationMonth'], $_POST['expirationYear'], $_POST['cvv'])) {

    $cardNumber = $_POST['cardNumber'];
    $expirationMonth = $_POST['expirationMonth'];
    $expirationYear = $_POST['expirationYear'];
    $cvv = $_POST['cvv'];
    $cardholderName = $_POST['cardholderName'];

    // Combine the month and year into a single expiration date string
    $expirationDate = $expirationMonth . '/' . $expirationYear;

    //--------------------------------------------------------------------------//

    // Perform the validation checks
    $isValid = true;

    $errors = [];

    // Expiry Date Validation
    $currentYear = date('y');
    $currentMonth = date('m');
    if ($expirationYear < $currentYear || ($expirationYear == $currentYear && $expirationMonth <= $currentMonth)) {
        $isValid = false;
        $errors['expiration'] = 'Invalid expiration date';
    }

    // CVV Validation
    $isAmericanExpress = (substr($cardNumber, 0, 2) == '34' || substr($cardNumber, 0, 2) == '37');
    if (($isAmericanExpress && strlen($cvv) != 4) || (!$isAmericanExpress && strlen($cvv) != 3)) {
        $isValid = false;
        $errors['cvv'] = 'Invalid CVV';
    }

    // Card Number Validation
    $cardNumberLength = strlen($cardNumber);
    if ($cardNumberLength < 16 || $cardNumberLength > 19) {
        $isValid = false;
        $errors['cardNumber'] = 'Invalid card number length';
    } 

    // Check if there are any errors
    if (count($errors) > 0) {
        // Send an error response with the errors array
        $response = [
            'success' => false,
            'message' => 'Validation errors',
            'errors' => $errors
        ];
        //var_dump($errors);

        // Set the HTTP response code to 400 (Bad Request)
        http_response_code(400);

        //var_dump($response);
        // Convert the response to JSON and send it back
        echo json_encode($response);
    } else {
        // Insert credit card information into the database
        $sql = "INSERT INTO credit_card (card_number, expiration_date, cvv, card_holder_name)
                VALUES (?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        //ssss=  specifies the data types of the parameters (string)
        $stmt->bind_param("ssss", $cardNumber, $expirationDate, $cvv, $cardholderName);
        //var_dump($stmt);

        if ($stmt->execute()) {
            // Database operation successful

            // Perform additional actions or send a success response
            $response = [
                'success' => true,
                'message' => 'Credit card information stored successfully.'
            ];


            http_response_code(200);

            echo json_encode($response);

        } else {
            // Database operation failed

            // Log the error or perform error handling
            error_log('Database operation failed: ' . $stmt->error);

            // Send an error response
            $response = [
            'success' => false,
            'message' => 'Failed to store credit card information.'
            ];

            // Database operation failed
            // ...

            // Set the HTTP response code to 500 (Internal Server Error)
            http_response_code(500);

            $response['sqlError'] = $stmt->error;
            
            // Convert the response to JSON and send it back
            echo json_encode($response);
        }

        

    }



    
}else{
     // Send an error response
     $response = [
        'success' => false,
        'message' => 'Connection error. I am not getting anything.'
    ];

    // Convert the response to JSON and send it back
    echo json_encode($response);
}


?>
