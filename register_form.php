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
    $company_name = $_POST['company_name'];
    $business_number = $_POST['business_number'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password_1 = $_POST['password_1'];
    $password_confirmation = $_POST['password_confirmation'];



    // Validate data
    $errors = [];

    if (empty($company_name)) {
        $errors['company_name'] = 'Company name is required';
    }
    if (empty($business_number)) {
        $errors['business_number'] = 'Business number is required';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }

    $sql = "SELECT COUNT(id) as total FROM users WHERE email = '$email';";
    $countUsers = $conn->query($sql)->fetch_assoc();
    if($countUsers['total'] > 0) {
        $errors['email'] = 'Email already exists! Please type another email';
    }

    if (empty($phone)) {
        $errors['phone'] = 'Invalid phone format';
    }
    if (empty($password_1)) {
        $errors['password_1'] = 'Password is required';
    }
    if ($password_1 != $password_confirmation) {
        $errors['password_confirmation'] = 'The two passwords do not match!';
    }
    // end validate data



    //if there are no errors, save user to database
    if (empty($errors)) {

        $password = md5($password_1);//encrypt password before storing in db (security)

        // insert data to db
        $sql = "INSERT INTO users (company_name, business_number, email, phone, type_user , password ) 
                  VALUES ('$company_name', '$business_number', '$email', '$phone', 'punedhenes', '$password')";

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

                <!-- Display SQL errors -->
                <?php if(isset($errors['global'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $errors['global']; ?>
                    </div>
                <?php } ?>
                <!-- Display SQL errors -->

                <form method="POST" action="register_form.php" accept-charset="UTF-8">
                    <input name="_token" type="hidden" value="Msb5OEzqhmwj7SBlt1QYFHh9FIuPYHcNTN4IerFg">
                    <label for="company_name">Emri i kompanisë *</label>
                    <input class="form-control" placeholder="Emri i kompanisë" name="company_name" type="text" id="company_name" value="<?php echo ( isset($company_name) ? $company_name : '' ); ?>">
                    <?php if(isset($errors['company_name'])) { ?>
                        <span class="text-danger"><?php echo $errors['company_name']; ?></span>
                    <?php } ?>

                    <br><label for="business_number">NIPT *</label> <i>Nëse ju jeni një kompani e huaj ju lutem <a href="">Na kontaktoni</a></i>
                    <input class="form-control" placeholder="NIPT" name="business_number" type="text" id="business_number" value="<?php echo (isset($business_number) ? $business_number : ''); ?>">
                    <?php if(isset($errors['business_number'])) { ?>
                        <span class="text-danger"><?php echo $errors['business_number']; ?></span>
                    <?php } ?>

                    <br><label for="email">Email *</label>
                    <input class="form-control" placeholder="E-mail" name="email" type="email" id="email" value="<?php echo (isset($email) ? $email : ''); ?>">
                    <?php if(isset($errors['email'])) { ?>
                        <span class="text-danger"><?php echo $errors['email']; ?></span>
                    <?php } ?>


                    <br><label for="phone">Telefon *</label>
                    <input class="form-control" placeholder="Telefon" name="phone" type="text" id="phone" value="<?php echo (isset($phone) ? $phone : ''); ?>">
                    <?php if(isset($errors['phone'])) { ?>
                        <span class="text-danger"><?php echo $errors['phone']; ?></span>
                    <?php } ?>

                    <br><label for="password_1" style="font-size: 12px">Fjalëkalim *</label>
                    <input class="form-control" placeholder="Fjalëkalim" name="password_1" type="password" id="password_1">
                    <?php if(isset($errors['password_1'])) { ?>
                        <span class="text-danger"><?php echo $errors['password_1']; ?></span>
                    <?php } ?>

                    <br><label for="password_confirmation" style="font-size: 12px">Përsërit fjalëkalimin *</label>
                    <input class="form-control" placeholder="Përsërit fjalëkalimin" name="password_confirmation" type="password" id="password_confirmation">
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