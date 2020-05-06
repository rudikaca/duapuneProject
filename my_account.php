<!--te dhena personale-->
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>duapune.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'partials/links.php'; ?>

</head>
<body>

<!-- start include data-->
<?php include 'partials/data/proffesion-data.php'; ?>
<!-- end include data-->

<!--Navbar -->
<?php include 'partials/header.php'; ?>

<div class="" style=" background-color: #f4f8fa;">

    <!-- Head -->
    <div class="row text-center mt-5" style="height: 160px; background-image: url('img/img2.jpeg');">
        <div class="col-sm-12 mt-5 mx-auto">
            <section class="search-sec">
                <div class="container">
                    <form action="#" method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="search-container-transparent btn-group">
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <input class="form-control search-slt" placeholder="Fjalë kyçe ose kodin e punës" name="keyword" type="text" value="">
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="form-control search-slt" id="exampleFormControlSelect1" name="category">
                                                <option value="" selected="selected">Zgjidhni kategorinë</option>
                                                <option value="1">Kontabel-Finance</option>
                                                <option value="2">Administrative-Zyre</option>
                                                <option value="3">Ndërtim-Aftesi</option>
                                                <option value="4">Biznes-Menaxhim Strategjik</option>
                                                <option value="5">Krijuese-Dizajn </option>
                                                <option value="6">Perkujdesje-Ndihme për Klientin</option>
                                                <option value="7">Editoriale-Shkrim</option>
                                                <option value="8">Inxhinieri</option>
                                                <option value="9">HOREKA - Hoteleri-Restorant-Kafe</option>
                                                <option value="10">Burime Njerezore</option>
                                                <option value="11">Instalime-Mirembajtje-Riparime</option>
                                                <option value="12">IT-Zhvillim softesh</option>
                                                <option value="13">Ligjore</option>
                                                <option value="14">Logjistike dhe Transport</option>
                                                <option value="15">Marketing-Produkte</option>
                                                <option value="16">Mjekesore-Shendetsore</option>
                                                <option value="17">Tjeter</option>
                                                <option value="18">Prodhim dhe Operacional</option>
                                                <option value="19">Menaxhim Projektesh-Programesh</option>
                                                <option value="20">Sigurim i Cilësise-Siguria</option>
                                                <option value="21">Shkencore</option>
                                                <option value="22">Shitje-Zhvillim Biznesi</option>
                                                <option value="23">Siguria fizike-Sherbime Mbrojtese</option>
                                                <option value="24">Trajnim-Instruksione </option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <input class="form-control search-slt" placeholder="Vendndodhje" name="city" type="text" value="">
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 ml-auto">
                                            <button type="submit" class="btn btn-danger w-100">Kërko</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <br>


            <!-- butonat posht head -->
            <div class="" >
                <div class="container text-center">
                    <?php
                    foreach ($proffesionsData as $index => $proffesiondata) {
                        include 'partials/proffesions.php';
                    }
                    ?>
                </div>
                <br>
            </div>
        </div>
    </div>

    <!--Faqja ime text-->
    <div class="row">
        <div class="mb-0 col-md-12 container" style="background-color: #f4f8fa">
            <div class="row">
                <div class="col-md-12 mt-5 text-center">
                    <h1 style="color: #004085">Faqja ime</h1>
                    <h5><a style="color: #0056b3" href="">Kreu</a> > Profili</h5>
                </div>
            </div>

            <!--Format-->
            <div class="mb-3 pl-5 pr-5 container-fluid page-container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="container">
                            <div class="card border border-0 mb-4 shadow">
                                <div class="card-header" style="border-radius: 10px 10px 0px 0px; background-color: #0092cc; color: white; font-size: 20px">
                                    CV
                                </div>
                                <div class="card-body" >
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="border border-0  card bg-light mb-3" style="max-width: 18rem;">

                                                <div class="w-100 card-body bg-white disabled">
                                                    <img style="width: 80px; height: 80px; background-color:#0092cc" class="mx-auto card-img-overlay rounded-circle " src="https://duapune.com/img/2-cv.svg" alt="Card image cap">
                                                </div>

                                                <div class="w-100 card-body p-0" style="background-color: #efefef">
                                                    <p class="mt-5 text-center card-text-overlay">
                                                        <a href="" style="color: black">Krijoni CV të re</a>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="border border-0  card bg-light mb-3" style="max-width: 18rem;">

                                                <div class="w-100 card-body bg-white disabled">
                                                    <img style="width: 80px; height: 80px; background-color:#0092cc" class="mx-auto card-img-overlay rounded-circle logo" src="https://duapune.com/img/3-list-cv.svg" alt="Card image cap">
                                                </div>

                                                <div class="w-100 card-body p-0" style="background-color: #efefef">
                                                    <p class="mt-5 text-center card-text-overlay">
                                                        <a href="" style="color: black">Listoni CV-të (1 cope)</a>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="border border-0  card bg-light mb-3" style="max-width: 18rem;">

                                                <div class="w-100 card-body bg-white disabled">
                                                    <img style="width: 80px; height: 80px; background-color:#0092cc" class="mx-auto card-img-overlay rounded-circle logo" src="https://duapune.com/img/4-letra-e-motivimit.svg" alt="Card image cap">
                                                </div>

                                                <div class="w-100 card-body p-0" style="background-color: #efefef">
                                                    <p class="mt-5 text-center card-text-overlay"><a href="" style="color: black">Letrat e motivimit (0 cope) </a></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="border border-0  card bg-light mb-3" style="max-width: 18rem;">

                                                <div class="w-100 card-body bg-white disabled">
                                                    <img style="width: 80px; height: 80px; background-color:#0092cc" class="mx-auto card-img-overlay rounded-circle logo" src="https://duapune.com/img/5-dokumenta.svg" alt="Card image cap">
                                                </div>

                                                <div class="w-100 card-body p-0" style="background-color: #efefef">
                                                    <p class="mt-5 text-center card-text-overlay"><a href="" style="color: black">Dokumenta (0 cope)</a></p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border border-0 mb-4 shadow">
                                <div class="card-header" style="border-radius: 10px 10px 0px 0px; background-color: #0092cc; color: white; font-size: 20px">
                                    Punët Aktive
                                </div>
                                <div class="card-body" >
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="border border-0  card bg-light mb-3" style="max-width: 18rem;">

                                                <div class="w-100 card-body bg-white disabled">
                                                    <img style="width: 80px; height: 80px; background-color:#0092cc" class="mx-auto card-img-overlay rounded-circle logo" src="https://duapune.com/img/7-aplikimet.svg" alt="Card image cap">
                                                </div>

                                                <div class="w-100 card-body p-0" style="background-color: #efefef">
                                                    <p class="mt-5 text-center card-text-overlay"><a href="" style="color: black">Aplikimet</a></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="border border-0  card bg-light mb-3" style="max-width: 18rem;">

                                                <div class="w-100 card-body bg-white disabled">
                                                    <img style="width: 80px; height: 80px; background-color:#0092cc" class="mx-auto card-img-overlay rounded-circle logo" src="https://duapune.com/img/8-pune-te-reja.svg" alt="Card image cap">
                                                </div>

                                                <div class="w-100 card-body p-0" style="background-color: #efefef">
                                                    <p class="mt-5 text-center card-text-overlay"><a href="" style="color: black">Punët Aktive</a></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="border border-0  card bg-light mb-3" style="max-width: 18rem;">

                                                <div class="w-100 card-body bg-white disabled">
                                                    <img style="width: 80px; height: 80px; background-color:#0092cc" class="mx-auto card-img-overlay rounded-circle logo" src="https://duapune.com/img/9-punet-e-preferuara.svg" alt="Card image cap">
                                                </div>

                                                <div class="w-100 card-body p-0" style="background-color: #efefef">
                                                    <p class="mt-5 text-center card-text-overlay"><a href="" style="color: black">Punët Aktive Favorite</a></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="border border-0  card bg-light mb-3" style="max-width: 18rem;">

                                                <div class="w-100 card-body bg-white disabled">
                                                    <img style="width: 80px; height: 80px; background-color:#0092cc" class="mx-auto card-img-overlay rounded-circle logo" src="https://duapune.com/img/10-pune-sipas-preferences.svg" alt="Card image cap">
                                                </div>

                                                <div class="w-100 card-body p-0" style="background-color: #efefef">
                                                    <p class="mt-5 text-center card-text-overlay"><a href="" style="color: black">Punët e Sygjeruara</a></p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border border-0 mb-4 shadow">
                                <div class="card-header" style="border-radius: 10px 10px 0px 0px; background-color: #0092cc; color: white; font-size: 20px">
                                    Informacione dhe statistika
                                </div>
                                <div class="card-body" >
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="border border-0  card bg-light mb-3" style="max-width: 18rem;">

                                                <div class="w-100 card-body bg-white disabled">
                                                    <h1 style="width: 80px; height: 80px; color: white; background-color:#0092cc" class="mx-auto card-img-overlay rounded-circle logo">11</h1>
                                                </div>

                                                <div class="w-100 card-body p-0" style="background-color: #efefef">
                                                    <p class="mt-5 text-center card-text-overlay"><a href="" style="color: black">Punë të Reja</a></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="border border-0  card bg-light mb-3" style="max-width: 18rem;">

                                                <div class="w-100 card-body bg-white disabled">
                                                    <h1 style="width: 80px; height: 80px; color: white; background-color:#0092cc" class="mx-auto card-img-overlay rounded-circle logo">1</h1>
                                                </div>

                                                <div class="w-100 card-body p-0" style="background-color: #efefef">
                                                    <p class="mt-5 text-center card-text-overlay"><a href="" style="color: black">Numri total i aplikimeve</a></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="border border-0  card bg-light mb-3" style="max-width: 18rem;">

                                                <div class="w-100 card-body bg-white disabled">
                                                    <img style="width: 80px; height: 80px; background-color:#0092cc" class="mx-auto card-img-overlay rounded-circle logo" src="https://duapune.com/img/3-list-cv.svg" alt="Card image cap">
                                                </div>

                                                <div class="w-100 card-body p-0" style="background-color: #efefef">
                                                    <p class="mt-5 text-center card-text-overlay"><a href="" style="color: black">Punët sipas kategorive </a></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="border border-0  card bg-light mb-3" style="max-width: 18rem;">

                                                <div class="w-100 card-body bg-white disabled">
                                                    <img style="width: 80px; height: 80px; background-color:#0092cc" class="mx-auto card-img-overlay rounded-circle logo" src="https://duapune.com/img/3-list-cv.svg" alt="Card image cap">
                                                </div>

                                                <div class="w-100 card-body p-0" style="background-color: #efefef">
                                                    <p class="mt-5 text-center card-text-overlay"><a href="" style="color: black">Punët sipas Qyteteve</a></p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <h2 class="mb-5 text-center site-name" style="color: #0092cc">Keni nevoje për ndihmë?</h2>
                            <div class="mb-3 text-center">
                                <button class="btn btn-primary shadow" onclick="" style="padding: 10px 32px 10px 32px;background-color: #0092cc;margin-right: 10px;" type="button">Flisni me duapune.com</button>
                                <button class="btn btn-primary shadow" style="padding: 10px 32px 10px 32px;background-color: #FF9B54;margin-left: 10px;" onclick="" type="button">Ndihmë dhe Suport</button>
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
