<?php

if (!empty($_POST)) {

    $email = $_POST['email'];
    $password = $_POST['pswd'];
    $errors = [];

    $sql = "SELECT * FROM users WHERE email = '$email' AND `password` = '".md5($password)."' AND deleted = 0;";
    $loggedUser = $conn->query($sql);
    if($loggedUser->num_rows > 0) {

        $loggedUser = $loggedUser->fetch_assoc();

        $_SESSION['user'] = $loggedUser;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');

    }else {
        $errors['loginError'] = 'Kombinimi username/password eshte i gabuar!';
    }
}

?>