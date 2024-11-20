<?php 
session_start();
require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE login = ? AND password = ?";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user_name'] = $user['name'];
        header("Location: index.php");
        exit();
    } else {
        echo "Błędny login lub hasło.";
    }
    $stmt->close();
}

$conn->close();
?>
