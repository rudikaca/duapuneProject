<?php

if (!empty($_POST)) {

    $user_type = $_POST['user_type'];

    /**
     *
     * [
     *      'field_name' => 'error_message',
     *      'field_name' => 'error_message',
     *      ...
     *      ...
     *
     *      // example if error needs to be object
     *      'field_name' => [
     *          'error' => 'error_message',
     *          'class' => 'class_name'
     *      ],
     * ]
     *
     */
    $errors = [];

    if ($user_type == 'punekerkues'){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $company_name = '';
        $business_number = '';
        $phone = '';

        if (empty($first_name)) {
            $errors['first_name'] = 'Fusha Emri është e detyrueshme!';
        }

        if (empty($last_name)) {
            $errors['last_name'] = 'Fusha Mbiemri është e detyrueshme!';
        }

    } else {
        $company_name = $_POST['company_name'];
        $business_number = $_POST['business_number'];
        $phone = $_POST['phone'];
        $first_name = '';
        $last_name = '';

        if (empty($company_name)) {
            $errors['company_name'] = 'Fusha Emri i kompanisë  është e detyrueshme!';
        }
        if (empty($business_number)) {
            $errors['business_number'] = 'Fusha NIPT është e detyrueshme!';
        }
        if (empty($phone)) {
            $errors['phone'] = 'Fusha Telefon është e detyrueshme!';
        } else {
            if (!preg_match('/^[0-9]{10}+$/', $phone)) {
                $errors['phone'] = 'Format i gabuar i fushes Telefon!';
            }
        }

    }

    //punedhenes---punekerkues
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['password_confirmation'];



    //Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Fusha email është e detyrueshme!';
    } else {
        $sql = "SELECT COUNT(id) as total FROM users WHERE email = '$email';";
        $countUsers = $conn->query($sql)->fetch_assoc();
        if($countUsers['total'] > 0) {
            $errors['email'] = 'Emaili ekziston! Ju lutem vendosni email tjeter!';
        }
    }


    // password validation
    if (empty($password)) {
        $errors['password'] = 'Fusha Fjalëkalim është e detyrueshme!';
    } else {
        // check password length
        if (strlen($password) < 6) {
            $errors['password'] = 'Fjalëkalimi duhet te kete te pakten 6 karaktere!';
        }
    }
    // password confirmation
    if ($password != $password_confirmation) {
        $errors['password_confirmation'] = 'Fjalëkalimi nuk perputhet!';
    }
    // end validate data



    //if there are no errors, save user to database
    if (empty($errors)) {

        $password = md5($password);//encrypt password before storing in db (security)

        // insert data to db
        $sql = "INSERT INTO users (company_name, business_number, email, phone, type_user , password, first_name, last_name) 
                  VALUES ('$company_name', '$business_number', '$email', '$phone', '$user_type', '$password', '$first_name', '$last_name')";

        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            $sql = "SELECT * FROM users WHERE id = '$last_id' ";
            $loggedUser = $conn->query($sql)->fetch_assoc();

            $_SESSION['user'] = $loggedUser;
            $_SESSION['success'] = "You are now logged in";
            header('location: my_account.php');
        } else {
            $errors['global'] = $conn->error;
        }
        // end insert data to db
    }

}

?>