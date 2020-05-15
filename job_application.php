<!--te dhena personale-->
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>duapune.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'partials/links.php'; ?>
    <?php include 'process/is_not_authenticated.php'; ?>

</head>
<body>

<!-- start include data-->
<?php include 'partials/data/proffesion-data.php'; ?>
<!-- end include data-->

<!--Navbar -->
<?php include 'partials/header.php'; ?>

<div class="container-fluid" style=" background-color: #f4f8fa;">

    <?php include 'partials/header_search.php'; ?>

    <!--Kreu-->
    <div class="row">
        <div class="mb-0 col-md-12 container" style="background-color: #f4f8fa">

            <!--Kreu-->
            <div class="row">
                <div class="col-md-12 mt-5 text-center">
                    <h4><a style="color: #0056b3" href="index.php">Kreu</a> > <a style="color: #0056b3" href="">Punët</a> > Kodi Punes:</h4>
                </div>
            </div>

            <!--kolonat 3-6-3-->
            <div class="mb-3">
                <div class="row tex mx-auto">
                    <div class="col-md-3 mt-3">
                        <div class="card col-md-12 border-2 m-2 shadow-sm">
                            <div class="m-4">
                                <a class="text-center">
                                    <div class="mx-auto col-sm-12">
                                        <img src="img/202.jpg" class="card-img rounded-circle logo"
                                             style="width: 90px; height: 90px;
                                                    border-radius: 150px;
                                                    border: 1px solid #cecfcf;
                                                    background-repeat: no-repeat; "
                                             alt="foto">
                                    </div>
                                </a>
                                <br>
                                <div class="col-md-12">
                                    <h4>Vleresimi</h4>
                                    <div style="color: orange;">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <hr>
                                <h4 style="font-family: Arial, Helvetica, sans-serif"><b>Company name</b></h4>
                                <p style="font-family: Dialog">Japanese company that operates all over the world. One of the largest online English language schools in Japan. Native Camp is one of the best ESL online tutoring school in Japan.Lessons are provided via unique language platform developed by our company. Native Camp is one of the rare online schools in the world that does not use Skype.</p>
                                <h5 style="font-family: Arial, Helvetica, sans-serif"><b>INFORMACIONE KONTAKTI</b></h5>
                                <br>
                                <button class="col-md-12 col-sm-12 mb-3 btn btn-outline-primary" onclick="" style="padding: 10px 32px 10px 32px;margin-right: 10px;" type="button">Profili i Kompanisë</button>
                                <br>
                                <button class="col-md-12 col-sm-12  btn btn-outline-primary" onclick="" style="padding: 10px 32px 10px 32px;margin-right: 10px;" type="button">Punët aktive të kompanisë</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="card col-md-12 border-2 m-2 shadow-sm">
                            <div class="m-4">
                                <h5 style="font-family: Arial, Helvetica, sans-serif">Punë të ngjashme në kategorinë Inxhinier</h5>
                                <hr>
                                <div>
                                    <a href="">Inxhinier</a>
                                    <span>Tirane, Shqipëri</span>
                                </div>
                                <a href="">Shiko te gjitha punet e ngjashme</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mt-3">
                        <div class="card col-md-12 border-2 m-2 shadow-sm">
                            <div class="m-4">
                                <h5 style="font-family: Arial, Helvetica, sans-serif">Punë të ngjashme në kategorinë Inxhinier</h5>
                                <hr>
                                <div>
                                    <a href="">Inxhinier</a>
                                    <div><small>Tirane, Shqipëri</small></div>
                                </div>
                                <hr>
                                <a href="">Shiko te gjitha punet e ngjashme</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<?php include 'partials/footer.php'; ?>

<script>
    <?php include 'partials/scripts.php'; ?>
</script>

</body>
