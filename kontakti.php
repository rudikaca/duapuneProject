<!DOCTYPE html>
<html lang="en">
<head>
    <title>Na kontaktoni</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'partials/links.php'; ?>

</head>
<body>

<!--Navbar -->
<?php include 'partials/header.php'; ?>

<!--kontaktet dhe maps-->
<div class="mb-3 container-fluid" style="width:90%">
    <div class="pt-5 row">

        <!--Kontaktoni-->
        <div class="p-3 col-6">

            <!--Section: Contact v.2-->
            <section class="mb-4">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center pb-2 my-4">Na Kontaktoni</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">A keni ndonje pyetje? Ju lutemi mos hezitoni te na kontaktoni menjehere.
                    Stafi jone do te pergjigjet ne me pak se nje ore per tju ardhur ne ndihme.</p>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                            <!--Grid row-->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <i class="fas fa-user"></i><br>
                                        <input type="text" id="name" name="name" placeholder="Emri" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <i class="fas fa-envelope"></i>
                                        <input type="text" id="email" name="email" placeholder="e-mail" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <i class="fas fa-tag"></i>
                                        <input type="text" id="subject" name="subject" placeholder="Subjekti" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12 mb-3">

                                    <div class="md-form">
                                        <i class="fas fa-comment-alt"></i>
                                        <textarea type="text" id="message" name="message" rows="3" placeholder="Mesazhi juaj" class="form-control md-textarea"></textarea>
                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->

                        </form>

                        <div class="text-center text-md-left">
                            <a class="btn btn-primary" onclick="validateForm();">Dergo</a>
                        </div>
                        <div class="status"></div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>Tirane, Selite 1060, AL</p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>+ 355 84 88 011</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>kacarudi@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                </div>

            </section>
        </div>

        <!--Map-->
        <div class="p-5 col-6">
            <!--<h1>My First Google Map</h1>-->
            <div class="mapouter col-md-12">
                <div class="gmap_canvas">
                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=tirana&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a>
                </div>
                <style>
                    .mapouter{
                        position:relative;
                        text-align:right;
                        height:500px;
                        width:1200px;
                    }
                    .gmap_canvas {
                        overflow:hidden;
                        background:none!important;
                        height:500px;
                        width:600px;
                    }
                </style>
            </div>
        </div>
    </div>
</div>
<br>

<?php include 'partials/footer.php'; ?>

<script></script>
</body>
</html>