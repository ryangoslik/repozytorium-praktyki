<?php
session_start();

if(isset($_POST['login1'])){
$wszystko_OK=true;
$login1 = $_POST['login1'];

$username1 = $_POST['username1'];
if(strlen($username1)<3||(strlen($username1)>16)){
    $wszystko_OK=false;
    $_SESSION['e_username1']="Username musi posiadać od 3 do 16 znaków.";
}

if(ctype_alnum($username1)==false){
    $wszystko_OK=false;
    $_SESSION['e_username1']="Username ma składac sie tylko z liter (bez polskich znaków) i cyfr.";
}

$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if((strlen($password1)<6 || strlen($password1)>16)){
    $wszystko_OK = false;
    $_SESSION['e_haslo']="Hasło ma mieć od 6 do 16 znaków.";
}

if($password1!=$password2){
    $wszystko_OK = false;
    $_SESSION['e_haslo']="Hasła nie są takie same.";
}

$haslo_hash = password_hash($password1, PASSWORD_DEFAULT);

if(!isset($_POST['rules'])){
    $wszystko_OK = false;
    $_SESSION['e_rules']="Prosimy o potwierdzenie regulaminu";
}

require_once("conn.php");
mysqli_report(MYSQLI_REPORT_STRICT);
try{
    $conn = new mysqli('localhost', 'root', '', 'db11202024');
    if($conn->connect_errno!=0){
        throw new Exception(mysqli_connect_errno());
    }
    else{
        $rezultat = $conn->query("SELECT id FROM users WHERE login='$login1'");
        if(!$rezultat) throw new Exception($conn->error);

        $ile_tak = $rezultat->num_rows;
        if($ile_tak>0){
            $wszystko_OK = false;
            $_SESSION['e_login']="Istnieje konto z takim loginem";
        }

        $rezultat = $conn->query("SELECT id FROM users WHERE name='$username1'");
        if(!$rezultat) throw new Exception($conn->error);

        $ile_tak = $rezultat->num_rows;
        if($ile_tak>0){
            $wszystko_OK = false;
            $_SESSION['e_username1']="Istnieje konto z takim username";
        }


        if($wszystko_OK==true){
        if($conn->query("INSERT INTO users VALUES (NULL,'$login1','$haslo_hash','$username1')")){
            $_SESSION['udanarejestracja']=true;
            
            header("Location: zaloguj.php");
            exit();
        }else{
            throw new Exception($conn->error);
        }
        }

        $conn->close();
    }
}
catch(Exception $e){
    echo 'Błąd serwera!';
    echo $e;
}

}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona z samochodami</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>

<div class="logo"></div>
    <main>
    <div class="left"><img src="https://ocs-pl.oktawave.com/v1/AUTH_2887234e-384a-4873-8bc5-405211db13a2/autoblog/2019/09/Porsche-Taycan-9.jpg" alt="" srcset=""></div>
    <section class='formularz1'>
    <div class="back1"><a href="index.php"><</a></div>
    <header class="header_1">
        <a href="index.php"> <h1>PORSCHE</h1>
        <hr></a><br>
    </header>
    <p class="rejestr_p">Rejestracja</p>
 <form action="" method="post">
    <input type="text" name="username1" placeholder="Username">

    <?php 
    if(isset($_SESSION['e_username1'])){
        echo'<div class="error">'.$_SESSION['e_username1'].'</div>';
        unset($_SESSION['e_username1']);
    }
    ?>

     <br>
    <input type="text" name="login1" placeholder="Login">
    <?php
    if(isset($_SESSION['e_login'])){
        echo'<div class="error">'.$_SESSION['e_login'].'</div>';
        unset($_SESSION['e_login']);
    }
    ?>
    <br>
    <input type="password" name="password1" placeholder="Hasło">
    <br>

    <input type="password" name="password2" placeholder="Powtórz hasło">
    <br>
    <?php 
    if(isset($_SESSION['e_haslo'])){
        echo'<div class="error">'.$_SESSION['e_haslo'].'</div>';
        unset($_SESSION['e_haslo']);
    }
    ?>

<div class="checkbox">
    <input type="checkbox" id="accept" name="rules">
  <label for="accept"> Akceptuję regulamin prywatności</label><br></div>
  <?php 
    if(isset($_SESSION['e_rules'])){
        echo'<div class="error">'.$_SESSION['e_rules'].'</div>';
        unset($_SESSION['e_rules']);
    }
    ?>
    <br>

    <button class="rejestr_butt" type="submit">Załóż konto</button>
 </form>
  </section>

    </main>

    

    <footer>
        <p>© 2024 Strona z Samochodami. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
