<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_input = isset($_POST['user_input']) ? $_POST['user_input'] : '';

    // Example static responses (you can replace or extend with a database)
    $responses = [
        'hello' => 'Hi there! How can I help you today?',
        'how are you' => 'I’m great, thank you for asking! How are you?',
        'bye' => 'Goodbye! See you next time.',
        'what services you provide' =>' we provide a platform for user to find services and providers can post there services',
    ];

    // Lowercase input to make matching easier
    $user_input = strtolower($user_input);

    // Search for a predefined response
    if (array_key_exists($user_input, $responses)) {
        $response = $responses[$user_input];
    } else {
        $response = 'Sorry, I didn’t understand that. Can you please rephrase?';
    }

    echo json_encode(['response' => $response]);
}
?>
