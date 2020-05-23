<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>duapune.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'partials/links.php'; ?>

</head>
<body>



<?php include 'process/login.php'; ?>


<!-- start include data-->
<?php include 'partials/data/job-items.php'; ?>
<?php include 'partials/data/proffesion-data.php'; ?>
<!-- end include data-->

<!--Navbar -->
<?php include 'partials/header.php'; ?>

<!-- Head (Regjistrohu / Identifikohu)-->
<div class="text-center mt-5" style="height: 160px; background: #0099cb;">
    <div class="container">
        <?php if (!isset($_SESSION['user'])) { ?>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="bg-#0099cb">
                    <div class="card-body pt-5">
                        <div class="btn btn-lg btn-outline-light stretched-link" data-toggle="modal" data-target="#modal_punekerkues"><i class="fas fa-user-tie"></i> Punekerkues</div>

                        <!-- Modal -->
                        <div class="modal fade" id="modal_punekerkues" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Punekerkues</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <form method="POST" action="https://(KUR TE KRIJOHET FILE PHP)" accept-charset="UTF-8">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="email" placeholder="Adresa Email" name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" id="paswd" placeholder="Fjalekalimi" name="pswd">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 float-left">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-outline-success">Identifikohu</button>
                                                            </div>
                                                            <div class="clearfix">
                                                                <input name="remember_me" type="checkbox" id="remember_me" value="true">
                                                                <label for="remember_me" class="pull-left checkbox-inline">Me mbaj mend</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 float-right">
                                                            <a href="#"><small>Keni harruar paswordin?</small></a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a class="float-left mr-5" href=""><small>Nuk keni llogari ne Duapune.com?</small></a>
                                        <label><a href="" class="btn btn-primary" data-toggle="modal" data-target="#sideModalTLInfo">Regjistrohu</a></label>

                                        <!-- Regjistrohu si Punekerkues modal -->
                                        <div class="modal fade left" id="sideModalTLInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog modal-notify modal-info modal-side modal-top-left" role="document">
                                                <!--Content-->
                                                <div class="modal-content">
                                                    <!--Header-->
                                                    <div class="modal-header">
                                                        <p class="heading lead"><b>Regjistrohu si Punekerkues</b></p>

                                                        <button type="button" class="close" onclick="$('#sideModalTLInfo').modal('hide')" aria-label="Close">
                                                            <span aria-hidden="true" class="white-text">&times;</span>
                                                        </button>
                                                    </div>

                                                    <!--Body-->
                                                    <div class="modal-body">

                                                        <!-- Card -->
                                                        <div class="card">

                                                            <!-- Card body -->
                                                            <div class="card-body">

                                                                <!-- Material form register -->
                                                                <form>

                                                                    <!-- Material input text -->
                                                                    <div class="md-form">
                                                                        <i class="fa fa-user prefix grey-text"></i>
                                                                        <input type="text" id="materialFormCardNameEx" class="form-control">
                                                                        <label for="materialFormCardNameEx" class="font-weight-light">Emri</label>
                                                                    </div>

                                                                    <!-- Material input email -->
                                                                    <div class="md-form">
                                                                        <i class="fa fa-envelope prefix grey-text"></i>
                                                                        <input type="email" id="materialFormCardEmailEx" class="form-control">
                                                                        <label for="materialFormCardEmailEx" class="font-weight-light">Email</label>
                                                                    </div>

                                                                    <!-- Material input email -->
                                                                    <div class="md-form">
                                                                        <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                                                                        <input type="email" id="materialFormCardConfirmEx" class="form-control">
                                                                        <label for="materialFormCardConfirmEx" class="font-weight-light">Konfirmoni emailin</label>
                                                                    </div>

                                                                    <!-- Material input password -->
                                                                    <div class="md-form">
                                                                        <i class="fa fa-lock prefix grey-text"></i>
                                                                        <input type="password" id="materialFormCardPasswordEx" class="form-control">
                                                                        <label for="materialFormCardPasswordEx" class="font-weight-light">Paswordi</label>
                                                                    </div>

                                                                </form>
                                                                <!-- Material form register -->

                                                            </div>
                                                            <!-- Card body -->

                                                        </div>
                                                        <!-- Card -->
                                                    </div>

                                                    <!--Footer-->
                                                    <div class="modal-footer justify-content-center">
                                                        <a href="" class="btn btn-outline-primary" data-toggle="modal">Regjistrohu</a>
                                                        <a type="button" class="btn btn-outline-danger " onclick="$('#sideModalTLInfo').modal('hide')">Jo, faleminderit</a>
                                                    </div>
                                                </div>
                                                <!--/.Content-->
                                            </div>
                                        </div>
                                        <!-- Central Modal Medium Info-->

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <p class="card-text text-white">Regjistrohu / Identifikohu</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="bg-#0099cb">
                    <div class="card-body pt-5">
                        <div class="btn btn-lg btn-outline-light stretched-link" data-toggle="modal" data-target="#modal_punedhenes"><i class="fas fa-briefcase"></i> Punedhenes</div>

                        <!-- Modal -->
                        <div class="modal fade" id="modal_punedhenes" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Punedhenes</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <form method="POST" action="https://(KUR TE KRIJOHET FILE PHP)" accept-charset="UTF-8">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="email" placeholder="Adresa Email" name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" id="paswd" placeholder="Fjalekalimi" name="pswd">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 float-left">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-outline-success">Identifikohu</button>
                                                            </div>
                                                            <div class="clearfix">
                                                                <input name="remember_me" type="checkbox" id="remember_me" value="true">
                                                                <label for="remember_me" class="pull-left checkbox-inline">Me mbaj mend</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 float-right">
                                                            <a href="#"><small>Keni harruar paswordin?</small></a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a class="float-left mr-5" href=""><small>Nuk keni llogari ne Duapune.com?</small></a>
                                        <label><a href="" class="btn btn-primary" data-toggle="modal" data-target="#sideModalTLInfo2">Regjistrohu</a></label>

                                        <!-- Regjistrohu si Punedhenes modal -->
                                        <div class="modal fade left" id="sideModalTLInfo2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog modal-notify modal-info modal-side modal-top-left" role="document">
                                                <!--Content-->
                                                <div class="modal-content">
                                                    <!--Header-->
                                                    <div class="modal-header">
                                                        <p class="heading lead"><b>Regjistrohu si Punedhenes</b></p>

                                                        <button type="button" class="close" onclick="$('#sideModalTLInfo2').modal('hide')" aria-label="Close">
                                                            <span aria-hidden="true" class="white-text">&times;</span>
                                                        </button>
                                                    </div>

                                                    <!--Body-->
                                                    <div class="modal-body">

                                                        <!-- Card -->
                                                        <div class="card">

                                                            <!-- Card body -->
                                                            <div class="card-body">

                                                                <!-- Material form register -->
                                                                <form>

                                                                    <!-- Material input text -->
                                                                    <div class="md-form">
                                                                        <i class="fa fa-user prefix grey-text"></i>
                                                                        <input type="text" id="emripunedhenesit" class="form-control">
                                                                        <label for="emripunedhenesit" class="font-weight-light">Emri</label>
                                                                    </div>

                                                                    <!-- Material input email -->
                                                                    <div class="md-form">
                                                                        <i class="fa fa-envelope prefix grey-text"></i>
                                                                        <input type="email" id="emailpunedhenesit" class="form-control">
                                                                        <label for="emailpunedhenesit" class="font-weight-light">Email</label>
                                                                    </div>

                                                                    <!-- Material input email -->
                                                                    <div class="md-form">
                                                                        <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                                                                        <input type="email" id="emailConfirm" class="form-control">
                                                                        <label for="emailConfirm" class="font-weight-light">Konfirmoni emailin</label>
                                                                    </div>

                                                                    <!-- Material input password -->
                                                                    <div class="md-form">
                                                                        <i class="fa fa-lock prefix grey-text"></i>
                                                                        <input type="password" id="password" class="form-control">
                                                                        <label for="password" class="font-weight-light">Paswordi</label>
                                                                    </div>

                                                                </form>
                                                                <!-- Material form register -->

                                                            </div>
                                                            <!-- Card body -->

                                                        </div>
                                                        <!-- Card -->
                                                    </div>

                                                    <!--Footer-->
                                                    <div class="modal-footer justify-content-center">
                                                        <a href="" class="btn btn-outline-primary" data-toggle="modal">Regjistrohu</a>
                                                        <a type="button" class="btn btn-outline-danger " onclick="$('#sideModalTLInfo2').modal('hide')">Jo, faleminderit</a>
                                                    </div>
                                                </div>
                                                <!--/.Content-->
                                            </div>
                                        </div>
                                        <!-- Central Modal Medium Info-->

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <p class="card-text text-white">Regjistrohu / Identifikohu</p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</div>
<hr>

<!-- butonat posht head -->
<div class="container text-center">
    <?php
    foreach ($proffesionsData as $index => $proffesiondata) {
        include 'partials/proffesions.php';
    }
    ?>
</div>
<br>

<!--Format-->
<div class="mb-3 container-fluid page-container">
    <div class="row">

        <!-- Search form -->
        <?php include 'partials/home_search.php'; ?>


        <!-- Shfaqja e puneve NE MES-->
        <div class="col-sm-12 col-md-6 customlistinghome">
            <div class="row">

                <!--job item 1-->
                <?php
                foreach ($jobItems as $index => $jobItem) {
                    include 'partials/jobs/job-item.php';
                }
                ?>

            </div>
        </div>




        <!--Forma Identifikohu-->
        <div class="col-sm-12 col-md-3">
            <?php if (!isset($_SESSION['user'])) { ?>
            <form method="POST" action="/" accept-charset="UTF-8">
                <h4>Identifikohu</h4>
                <hr>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Adresa Email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="paswd" placeholder="Fjalekalimi" name="pswd">
                </div>
                <div class="form-group">
                    <?php if(isset($errors['loginError'])) { ?>
                        <span class="text-danger"><small><b><?php echo $errors['loginError']; ?></b></small></span>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-outline-success">Identifikohu</button>
                </div>
                <div class="clearfix">
                    <input name="remember_me" type="checkbox" id="remember_me" value="true">
                    <label for="remember_me" class="pull-left checkbox-inline">Me mbaj mend</label>
                    <hr>
                </div>
                <label><a class="btn btn-outline-primary" href="register_form.php">Regjistrohu</a></label>
            </form>
            <?php } ?>
            <!-- Statistikat-->
            <?php include 'partials/statistikat.php'?>

        </div>

    </div>
</div>

<!--Footer-->
<?php include 'partials/footer.php'; ?>

<script>
    <?php include 'partials/scripts.php'; ?>
</script>

</body>
