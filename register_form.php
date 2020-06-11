<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Register / duapune.com</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'partials/links.php'; ?>
    <?php include 'process/is_authenticated.php'; ?>

</head>
<body style="font-family: Arial, Helvetica, sans-serif">



<!-- START PHP LOGIC FOR REGISTER -->
<?php include 'process/handle_register.php'; ?>
<!-- END PHP LOGIC FOR REGISTER -->



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

                <!--Punëdhënës-->
                <form method="POST" action="register_form.php" accept-charset="UTF-8">

                    <input name="user_type" type="hidden" value="punedhenes">

                    <label for="company_name"><small><b>Emri i kompanisë *</b></small></label>
                    <?php if(isset($errors['company_name'])) { ?>
                        <span class="float-right text-danger"><small><b><?php echo $errors['company_name']; ?></b></small></span>
                    <?php } ?>
                    <input class="form-control" placeholder="Emri i kompanisë" name="company_name" type="text" id="company_name" value="<?php echo ( isset($company_name) && ($user_type == 'punedhenes') ? $company_name : '' ); ?>">


                    <label for="business_number"><small><b>NIPT *</b></small></label>
                    <?php if(isset($errors['business_number'])) { ?>
                        <span class="float-right text-danger"><small><b><?php echo $errors['business_number']; ?></b></small></span>
                    <?php } ?>
                    <input class="form-control" placeholder="NIPT" name="business_number" type="text" id="business_number" value="<?php echo (isset($business_number) ? $business_number : ''); ?>">


                    <label for="email"><small><b>Email *</b></small></label>
                    <?php if(isset($errors['email']) && ($user_type == 'punedhenes')) { ?>
                        <span class="float-right text-danger"><small><b><?php echo $errors['email']; ?></b></small></span>
                    <?php } ?>
                    <input class="form-control" placeholder="E-mail" name="email" type="email" id="email" value="<?php echo (isset($email) && ($user_type == 'punedhenes') ? $email : ''); ?>">



                    <label for="phone"><small><b>Telefon *</b></small></label>
                    <?php if(isset($errors['phone'])) { ?>
                        <span class="float-right text-danger"><small><b><?php echo $errors['phone']; ?></b></small></span>
                    <?php } ?>
                    <input class="form-control" placeholder="Shembull: 0694567345" name="phone" type="text" id="phone" value="<?php echo (isset($phone) ? $phone : ''); ?>">


                    <label for="password"><small><b>Fjalëkalim *</b></small></label>
                    <?php if(isset($errors['password']) && ($user_type == 'punedhenes')) { ?>
                        <span class="float-right text-danger"><small><b><?php echo $errors['password']; ?></b></small></span>
                    <?php } ?>
                    <input class="form-control" placeholder="Fjalëkalim" name="password" type="password" id="password">


                    <label for="password_confirmation"><small><b>Përsërit fjalëkalimin *</b></small></label>
                    <?php if(isset($errors['password_confirmation']) && ($user_type == 'punedhenes')) { ?>
                        <span class="float-right text-danger"><small><b><?php echo $errors['password_confirmation']; ?></b></small></span>
                    <?php } ?>
                    <input class="form-control" placeholder="Përsërit fjalëkalimin" name="password_confirmation" type="password" id="password_confirmation">



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

            <!--Punëkërkues-->
            <div class="col-md-5 register-form-2">
                <h2 class="main-title">Punëkërkues?
                    <small>/ Individ</small>
                </h2>
                <form method="POST" action="register_form.php" accept-charset="UTF-8">

                    <input name="user_type" type="hidden" value="punekerkues">

                    <label for="first_name"><small><b>Emri *</b></small></label>
                    <?php if(isset($errors['first_name'])) { ?>
                        <span class="float-right text-danger"><small><b><?php echo $errors['first_name']; ?></b></small></span>
                    <?php } ?>
                    <input class="form-control" placeholder="Emri" name="first_name" type="text" id="first_name" value="<?php echo ( isset($first_name) ? $first_name : '' ); ?>">


                    <label for="last_name"><small><b>Mbiemri *</b></small></label>
                    <?php if(isset($errors['last_name'])) { ?>
                        <span class="float-right text-danger"><small><b><?php echo $errors['last_name']; ?></b></small></span>
                    <?php } ?>
                    <input class="form-control" placeholder="Mbiemri" name="last_name" type="text" id="last_name" value="<?php echo (isset($last_name) ? $last_name : ''); ?>">


                    <label for="email"><small><b>E-mail *</b></small></label>
                    <?php if(isset($errors['email']) && ($user_type == 'punekerkues' )) { ?>
                        <span class="float-right text-danger"><small><b><?php echo $errors['email']; ?></b></small></span>
                    <?php } ?>
                    <input class="form-control" placeholder="E-mail" name="email" type="email" id="email" value="<?php echo (isset($email) && ($user_type == 'punekerkues') ? $email : ''); ?>">


                    <label for="password"><small><b>Fjalëkalim *</b></small></label>
                    <?php if(isset($errors['password']) && ($user_type == 'punekerkues')) { ?>
                        <span class="float-right text-danger"><small><b><?php echo $errors['password']; ?></b></small></span>
                    <?php } ?>
                    <input class="form-control" placeholder="Fjalëkalim" name="password" type="password" value="" id="password">


                    <label for="password_confirmation"><small><b>Përsërit fjalëkalimin *</b></small></label>
                    <?php if(isset($errors['password_confirmation']) && ($user_type == 'punekerkues')) { ?>
                        <span class="float-right text-danger"><small><b><?php echo $errors['password_confirmation']; ?></b></small></span>
                    <?php } ?>
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