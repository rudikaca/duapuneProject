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
        <div class="mb-0 col-md-12 container" style="font-family: Arial, Helvetica, sans-serif; background-color: #f4f8fa">

            <!--Kreu-->
            <div class="row">
                <div class="col-md-12 mt-5 text-center">
                    <h4><a style="color: #0056b3" href="index.php">Kreu</a> > <a style="color: #0056b3" href="">Punët</a> > Kodi Punes:</h4>
                </div>
            </div>

            <!--kolonat 3-6-3-->
            <div class="mb-3">
                <div class="row tex mx-auto">

                    <!--colona  1-->
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
                                <h5 style="font-family: Arial, Helvetica, sans-serif"><b>Company name</b></h5>
                                <p class="text-muted" style="font-family: Dialog">Japanese company that operates all over the world. One of the largest online English language schools in Japan. Native Camp is one of the best ESL online tutoring school in Japan.Lessons are provided via unique language platform developed by our company. Native Camp is one of the rare online schools in the world that does not use Skype.</p>
                                <h5 style="font-family: Arial, Helvetica, sans-serif"><b>INFORMACIONE KONTAKTI</b></h5>
                                <br>
                                <button class="col-md-12 col-sm-12 mb-3 btn btn-outline-primary" onclick="" style="padding: 10px 32px 10px 32px;margin-right: 10px;" type="button">Profili i Kompanisë</button>
                                <br>
                                <button class="col-md-12 col-sm-12  btn btn-outline-primary" onclick="" style="padding: 10px 32px 10px 32px;margin-right: 10px;" type="button">Punët aktive të kompanisë</button>
                            </div>
                        </div>
                    </div>

                    <!--colona  2-->
                    <div class="col-md-6 mt-3">
                        <div class="card col-md-12 border-2 m-2 shadow-sm">
                            <div class="job-listing col-md-12 mt-5 mr-3">
                                <!--Kodi i punes-->
                                <div class="mb-5 mid-content">
                                    <h4>
                                        <small class="text-muted" style="border-style: dashed; padding: 7px ;">Kodi Punës:</small>
                                        <div class="text-muted float-right mt-2 social-icons-share">
                                            <!-- Facebook -->
                                            <a href="">
                                                <i class="text-muted fab fa-facebook-f mr-4"> </i>
                                            </a>
                                            <!-- Twitter -->
                                            <a href="">
                                                <i class="text-muted fab fa-twitter mr-4"> </i>
                                            </a>
                                            <!-- Google +-->
                                            <a href="">
                                                <i class="text-muted fab fa-google-plus-g mr-4"> </i>
                                            </a>
                                            <!--Linkedin -->
                                            <a href="">
                                                <i class="text-muted fab fa-linkedin-in mr-4"> </i>
                                            </a>
                                            <!--Instagram-->
                                            <a href="">
                                                <i class="text-muted fab fa-instagram mr-4"> </i>
                                            </a>
                                        </div>
                                        <br><br>
                                        <a style="color: black" href="#">Inxhinier Mekanik (work from home)&nbsp;</a>
                                    </h4>
                                    <span class="p-1 rounded bg-secondary"><a class="text-white" href="">Inxhinier</a></span>
                                    <br><br>
                                    <div>
                                        <!--location-->
                                        <div class="col-md-12 ">
                                            <small class="text-muted">
                                                <a href="" style="color: black" target="_blank"><i class="text-muted fa fa-location-arrow" aria-hidden="true"></i> Tirane, Shqipëri</a>
                                            </small>
                                        </div>

                                        <!--clock-->
                                        <div class="col-md-12 ">
                                            <small class="text-muted"><i class="fa fa-clock" aria-hidden="true"></i> <?php echo date("Y-m-d"); ?></small>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="" class="text-muted inlineBlock"><i class="text-danger far fa-heart"></i> Shtoje tek të preferuarat</a>
                                    <a href="" class="ml-5 text-muted inlineBlock"><i class="text-danger far fa-envelope"></i> Dërgoja një miku</a>
                                </div>
                                <hr>

                                <!--Detaje të pozicionit-->
                                <div>
                                    <h5><b>Detaje të pozicionit</b></h5>
                                    <br>
                                    <small>
                                        <div class="ml-0 row">
                                            <div class="col-md-6 ">
                                                <div class="row">
                                                    <div class="col-xs-6 mr-auto">
                                                        <span class="detail-label">Kategoria e Punës / Profesioni</span>
                                                    </div>
                                                    <div class="col-xs-6 mr-5">
                                                        <span class="text-muted detail-value">Mësues</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6 mr-auto">
                                                        <span class="detail-label">Tipi i punës</span>
                                                    </div>
                                                    <div class="col-xs-6 mr-5">
                                                        <span class="text-muted detail-value">Kohe e plote </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6 mr-auto">
                                                        <span class="detail-label">Eksperiencë</span>
                                                    </div>
                                                    <div class="text-muted col-xs-6 mr-5">
                                                        ---
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6 mr-auto">
                                                        <span class="detail-label">Kërkohet foto</span>
                                                    </div>
                                                    <div class="text-muted col-xs-6 mr-5">
                                                        Jo
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 ">
                                                <div class="row">
                                                    <div class="col-xs-6 mr-auto">
                                                        <span class="detail-label">Letër interesi</span>
                                                    </div>
                                                    <div class="text-muted col-xs-6 mr-5">
                                                        <span class="detail-value">
                                                        Jo
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6 mr-auto">
                                                        <span class="detail-label">Rroga mujore</span>
                                                    </div>
                                                    <div class="text-muted col-xs-6 mr-5">
                                                        <span class="detail-value">
                                                        ---
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6 mr-auto">
                                                        <span class="detail-label">Data e përfundimit</span>
                                                    </div>
                                                    <div class="text-muted col-xs-6 mr-5">
                                                        <span class="detail-value">08-06-2020</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6 mr-auto">
                                                        <span class="detail-label">Data e fillimit të punës</span>
                                                    </div>
                                                    <div class="text-muted col-xs-6 mr-5">
                                                        <span class="detail-value"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </small>
                                </div>
                                <hr>

                                <!--Pershkrimi-->
                                <div class="main-content-wrap">
                                    <h4 class="headtitle-inner">Përshkrimi</h4>
                                    <p>NativeCamp. is one of the largest English schools and one of the best online tutoring schools in Japan. Teachers are from all over the world, spreading their knowledge and experience with students. Lessons are provided via a unique language platform developed by our company.&nbsp;</p>
                                    <p>What we offer:</p>
                                    <ul>
                                        <li>FLEXIBILITY 100%</li>
                                        <li>NO minimum hours per week required</li>
                                        <li>Work from any location</li>
                                        <li>Work whenever you want (24/7)</li>
                                        <li>PERFORMANCE-BASED SALARY</li>
                                        <li>You earn how much you work</li>
                                        <li>Join the incentives' activities and competitions</li>
                                        <li>Salary on time, secured payment</li>
                                        <li>ONLINE SUPPORT ALWAYS AVAILABLE</li>
                                    </ul>
                                    <h4 class="headtitle-inner">Kualifikimet</h4>
                                    <p>Requirements:</p>
                                    <ul>
                                        <li>Good knowledge of English Laptop or PC with webcam</li>
                                        <li>Headset with microphone</li>
                                        <li>Stable Internet connection and speed</li>
                                        <li>Quiet environment and plain background</li>
                                    </ul>
                                    <h4 class="headtitle-inner">Shënime</h4>
                                    <br>
                                    <p>Application Process:</p>
                                    <p><a href="">https://nativecamp.net/tutors/?cc=gb-dpune</a></p>
                                    <ul>
                                        <li>External URL for apply now</li>
                                        <li>English Proficiency Test</li>
                                        <li>System Check and Demo Lesson</li>
                                        <li>Start Teaching :)</li>
                                    </ul>
                                    <hr>
                                </div>

                                <!--Buttons-->
                                <div class="job-listing mid-content-mod col-md-12 second">
                                    <div class="row">
                                        <a href="#" class="btn btn-outline-primary mr-3" target="_blank">Aplikoni</a>
                                        <a href="#" class="btn btn-outline-primary mr-3" rel="nofollow">Printoni</a>
                                        <a href="#" data-izimodal-open="#helpJobModal" data-izimodal-transitionin="fadeInDown" class="apply-job"><i class="fa fa-question-circle"></i> </a>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>

                    <!--colona  3-->
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
