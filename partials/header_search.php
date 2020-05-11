<!-- Head-Search-->
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
                                    <div class="col-lg-3 col-md-3 col-sm-12 p-0 ">
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