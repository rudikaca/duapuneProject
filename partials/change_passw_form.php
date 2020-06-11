<?php

if (isset($_POST['submit'])) {

    $currentpass = $_POST['CurrPass'];
    $newpass = $_POST['NewPass'];
    $confpass = ($_POST['NewPassRepeat']);
    $md5 = md5($currentpass);

    $check = mysqli_query($conn, "select * from users where password = '$md5' and id=" . $_SESSION['user']['id'] . " ");
    $rows = mysqli_num_rows($check);

    $errors = [];

    if ($rows > 0) {
        if (strlen($newpass) > 4) {
            if ($confpass == $newpass){
                $newpass = md5($newpass);
                if ($query = mysqli_query($conn, "UPDATE users SET password = '$newpass' WHERE id=". $_SESSION['user']['id']." ")){
                    $errors['success'] = "Password changed successfully!";
                } else {
                    $errors['error'] = "Error updating password, try again later!";
                }
            } else {
                $errors['NewPassRepeat'] = "New password do not match!";
            }
        }else {
            $errors['NewPass'] = "New password must be longer than 4 characters!";
        }
    }else {
        $errors['CurrPass'] = "Your current password do not match";
    }
}

?>


<div class="container col-md-12 mx-auto mt-5">
    <div class="row">

        <div class="col-md-4"></div>

        <div class="col-md-4">
            <h2 class="m-5">Ndrysho fjalëkalimin</h2>
            <form class="form-horizontal mx-auto col-12" method="post" action="">

                <fieldset>

                    <!-- Success message-->
                    <?php if (isset($errors['success'])) { ?>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="alert alert-success"><?php echo $errors['success']; ?></div>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if (isset($errors['error'])) { ?>
                    <!-- Error message-->
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="alert alert-danger"><?php echo $errors['error']; ?></div>
                        </div>
                    </div>
                    <?php } ?>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="CurrPass">Vendosni fjalëkalimin aktual</label>
                        <div class="col-md-12">
                            <input id="CurrPass" name="CurrPass" type="password" placeholder="" class="form-control input-md" required="">
                            <span class="text-danger"><?php echo (isset($errors['CurrPass']) ? $errors['CurrPass'] : '') ?></span>
                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="NewPass">Vendosni një fjalëkalim të ri</label>
                        <div class="col-md-12">
                            <input id="NewPass" name="NewPass" type="password" placeholder="" class="form-control input-md" required="">
                            <span class="text-danger"><?php echo (isset($errors['NewPass']) ? $errors['NewPass'] : '') ?></span>
                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="NewPassRepeat">Rivendosni fjalëkalimin e ri</label>
                        <div class="col-md-12">
                            <input id="NewPassRepeat" name="NewPassRepeat" type="password" placeholder="" class="form-control input-md" required="">
                            <span class="text-danger"><?php echo (isset($errors['NewPassRepeat']) ? $errors['NewPassRepeat'] : '') ?></span>
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="Cancel"></label>
                        <div class="col-md-12">
                            <button id="Cancel" name="Cancel" class="btn btn-danger">Anullo</button>
                            <input type="submit" id="Godkend" value="Mirato" name="submit" class="btn btn-success">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

        <div class="col-md-4"></div>

    </div>
</div>

