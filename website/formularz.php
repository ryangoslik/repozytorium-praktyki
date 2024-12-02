<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleFormualrz.css">
    <style>
   @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap');
                    body {
                        font-family: Orbitron, sans-serif;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
                        margin: 0;
                        padding: 20px;
                        background-color: #f9f9f9;
                    }
                    .formular {
                        margin: 20px;
                        padding: 40px;
                        background-color: #f2f2f2;
                        border-radius: 10px;
                        width: 29%;
                        margin-top:6vh;
                    }
                    .formular input,
                    .formular textarea {
                        width: 96%;
                        padding: 10px;
                        margin: 10px 0;
                        border-radius: 5px;
                        border: 1px solid #ccc;
                        
                    }
                    .formular button {
                        width: 100%;
                        font-family: Orbitron, sans-serif;
                        color: white;
                        background-color: black;
                        font-size: large;
                        border-radius: 5px;
                        padding: 1%;
                        margin-top: -1vh;
                        cursor: pointer;
                        transition: background-color 0.3s;
                    }
                    .formular button:hover {
                        background-color: white;
                        color: black;
                    }

                     a{
                        text-decoration:none;
                        color: black;
                    }
                        h3{
                        color: black;
                        transition: 0.3s;
                    }
                        h3:hover{
                        color:#cc0000;
                    }
                    @media (max-width: 768px) {
                        .formular {
                            width: 60vw;
                        }
                    }
                    </style>
    <title>Formularz zakupu</title>
</head>
<body>
    <h2>Formularz zakupu</h2>
    <div class="formular">
        <form action="process_form.php" method="POST">
            <label for="name">Imię i nazwisko:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="adress">Adres:</label><br>
            <input type="text" id="adress" name="adress" required><br><br>

            <label for="phone">Numer telefonu:</label><br>
            <input type="tel" id="phone" name="phone" placeholder="000-000-000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required><br><br>

            <button type="submit">Wyślij</button>
        </form>
        <a href="zaloguj.php"><h3>Posiadasz konto? Zaloguj się tutaj.</h3></a>
    </div>
    
</body>
</html>