<?php 
session_start();
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE login = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION['user_name'] = $user['name'];
                header("Location: zakup2.php");
                exit();
            } else {
                $_SESSION['e_zal'] = "Nieprawidłowe hasło lub login";
                header("Location: zaloguj.php");
                exit();
            }
        } else {
            $_SESSION['e_zal'] = "Nieprawidłowe hasło lub login";
            header("Location: zaloguj.php");
            exit();
        }

        $stmt->close();
    } else {
        $_SESSION['e_zal'] = "Błąd serwera. Spróbuj ponownie później.";
        header("Location: zaloguj.php");
    }
}
?>
