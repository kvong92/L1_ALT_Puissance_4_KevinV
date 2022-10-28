<?php
require_once('./includes/init.php');

// if (isset($_POST['message_text'])) {
//     $inputMessage = $_POST;
//     // $data = $conn->prepare('INSERT INTO messages FROM messages');
//     // $data->fetchAll();
//     echo json_encode($inputMessage);
// }

echo json_encode($_POST);
?>
