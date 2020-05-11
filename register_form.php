<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Register / duapune.com</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'partials/links.php'; ?>

</head>
<body>

<?php

if (!empty($_POST)) {
    $companyName = $_POST['company_name'];
    $business_number = $_POST['business_number'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['password_confirmation'];


// Validate data

    $errors = [];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }
    if ($password != $password_confirmation) {
        $errors['password_confirmation'] = 'Passwords are not the same!';
    }
// end validate data


    if (empty($errors)) {
        // insert data to db

        $sql = "INSERT INTO users (email, phone, password) VALUES ('$email', '$phone', '$password')";

        if ($conn->query($sql) === TRUE) {
            header('location: personal_data.php');
        } else {
            $errors['global'] = $conn->error;
        }
        // end insert data to db
    }

}

?>








<!--Navbar -->
<?php include 'partials/header.php'; ?>
<hr>

<!--Form Register-->
<section class="pt-5 main-header-block register">
    <div class="container register-form">
        <h1 class="register-title text-center">Regjistrohu në sistem</h1><br>
        <div class="row">
            <div class="col-md-5 register-form-1">
                <h2 class="main-title">Punëdhënës? <small>/ Kompani</small></h2>

                <?php if(isset($errors['global'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $errors['global']; ?>
                    </div>
                <?php } ?>

                <form method="POST" action="register_form.php" accept-charset="UTF-8">
                    <input name="_token" type="hidden" value="Msb5OEzqhmwj7SBlt1QYFHh9FIuPYHcNTN4IerFg">
                    <label for="company_name">Emri i kompanisë *</label>
                    <input class="form-control" placeholder="Emri i kompanisë" name="company_name" type="text" id="company_name">
                    <label for="business_number">NIPT *</label> <i>Nëse ju jeni një kompani e huaj ju lutem <a href="">Na kontaktoni</a></i>
                    <input class="form-control" placeholder="NIPT" name="business_number" type="text" id="business_number">
                    <label for="email">E-mail *</label>
                    <input class="form-control" placeholder="E-mail" name="email" type="email" id="email">
                    <?php if(isset($errors['email'])) { ?>
                        <span class="text-danger"><?php echo $errors['email']; ?></span>
                    <?php } ?>


                    <br><label for="phone">Telefon *</label>
                    <input class="form-control" placeholder="Telefon" name="phone" type="text" id="phone">
                    <label for="password" style="font-size: 12px">Fjalëkalim *</label>
                    <input class="form-control" placeholder="Fjalëkalim" name="password" type="password" value="" id="password">
                    <label for="password_confirmation" style="font-size: 12px">Përsërit fjalëkalimin *</label>
                    <input class="form-control" placeholder="Përsërit fjalëkalimin" name="password_confirmation" type="password" value="" id="password_confirmation">
                    <?php if(isset($errors['password_confirmation'])) { ?>
                        <span class="text-danger"><?php echo $errors['password_confirmation']; ?></span>
                    <?php } ?>


                    <div class="m-2 checkbox checkbox-primary">
                        <input id="terms_of_usage" name="terms_of_usage" type="checkbox" value="accepted">
                        <label class="mr-5" for="terms_of_usage">Unë i pranoj kushtet e përdorimit *</label>
                        <a c href="" target="_blank" style="display: inline-block; text-decoration: underline;">Më shumë</a>
                    </div>
                    <input class="btn-primary" style="width: 100%" type="submit" value="Regjistrohuni">
                </form>
            </div>
            <div class="col-md-2">
                <div class="vertical-line"></div>
            </div>
            <div class="col-md-5 register-form-2">
                <h2 class="main-title">Punëkërkues?
                    <small>/ Individ</small>
                </h2>
                <form method="POST" action="https://duapune.com/register/jobseeker" accept-charset="UTF-8">
                    <input name="_token" type="hidden" value="Msb5OEzqhmwj7SBlt1QYFHh9FIuPYHcNTN4IerFg">
                    <label for="first_name">Emri *</label>
                    <input class="form-control" placeholder="Emri" name="first_name" type="text" id="first_name">
                    <label for="last_name">Mbiemri *</label>
                    <input class="form-control" placeholder="Mbiemri" name="last_name" type="text" id="last_name">
                    <label for="email">E-mail *</label>
                    <input class="form-control" placeholder="E-mail" name="email" type="email" id="email">
                    <label for="password" style="font-size: 12px">Fjalëkalim *</label>
                    <input class="form-control" placeholder="Fjalëkalim" name="password" type="password" value="" id="password">
                    <label for="password_confirmation" style="font-size: 12px">Përsërit fjalëkalimin *</label>
                    <input class="form-control" placeholder="Përsërit fjalëkalimin" name="password_confirmation" type="password" value="" id="password_confirmation">
                    <div class="m-2 checkbox checkbox-primary">
                        <input id="terms_of_usage2" name="terms_of_usage2" type="checkbox" value="accepted">
                        <label class="mr-5" for="terms_of_usage2">Unë i pranoj kushtet e përdorimit *</label>
                        <a href="" target="_blank" style="display: inline-block; text-decoration: underline;">Më shumë</a>
                    </div>
                    <input class="btn-primary" style="width: 100%" type="submit" value="Regjistrohuni">
                </form>
            </div>
        </div>
    </div>
</section>
<br>

<?php include 'partials/footer.php'; ?>

</body>
</html>