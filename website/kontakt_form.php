<?php

include_once("db.php"); // Upewnij się, że plik connect.php istnieje i zawiera poprawne połączenie

// Sprawdzamy połączenie z bazą danych
if ($conn->connect_error) {
    die("Połączenie z bazą danych nie powiodło się: " . $conn->connect_error);
}

// Sprawdzamy, czy formularz został wysłany
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobieramy dane z formularza
    $name = $_POST['name_surname'];
    $email = $_POST['email'];
    $mess = $_POST['mess'];
    $phone = $_POST['tel'];

    // Przygotowanie zapytania SQL
    $sql = "INSERT INTO message (name_surname, email, mess, tel) VALUES (?, ?, ?, ?)";

    // Przygotowanie i wykonanie zapytania
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssss", $name, $email, $mess, $phone);
        
        if ($stmt->execute()) {
           
            header("location:thanku2.php");
        } else {
            // Błąd przy zapisie danych
            echo "Błąd przy zapisie do bazy danych.";
        }

        $stmt->close();
    } else {
        // Błąd w zapytaniu SQL
        echo "Błąd w zapytaniu: " . $conn->error;
    }
}

// Zamknięcie połączenia
$conn->close();
?>