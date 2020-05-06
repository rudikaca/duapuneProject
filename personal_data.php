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

<div class="" style="background-color: #f4f8fa;">

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
    <div class="col-md-12 container" style="background-color: #f4f8fa">
        <div class="col-md-12 mt-5 text-center">
            <h1 style="color: #004085">Te dhena personale</h1>
            <h5><a style="color: #0056b3" href="">Kreu</a> > <a style="color: #0056b3" href="">Profili</a> > Informacion personal</h5>
        </div>

        <!--Format-->
        <div class="mb-3 pl-5 pr-5 container-fluid page-container">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="container">

                        <div class="card border border-0 mb-4 shadow">
                            <div class="card-header" style="border-radius: 10px 10px 0px 0px; background-color: #0092cc; color: white; font-size: 20px">
                                Te dhena personale
                            </div>

                            <div class="col-md-12 mb-3 mt-3 row mx-auto">
                                <div class="col-3">
                                    <label for="">Emri *</label>
                                    <input type="text" class="form-control" placeholder="Emri">
                                </div>
                                <div class="col-3">
                                    <label for="">Mbiemri *</label>
                                    <input type="text" class="form-control" placeholder="Mbiemri">
                                </div>
                                <div class="col-3">
                                    <label for="">Gjinia *</label>
                                    <select class="browser-default custom-select">
                                        <option selected>Gjinia</option>
                                        <option value="1">Mashkull</option>
                                        <option value="2">Femer</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="">Gjendja civile</label>
                                    <select class="browser-default custom-select">
                                        <option selected>Gjendja civile</option>
                                        <option value="1">Beqar</option>
                                        <option value="2">i/e martuar</option>
                                        <option value="2">i/e ve</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 mt-3 row mx-auto">
                                <div class="col-3">
                                    <label for="">Datelindja</label>
                                    <input type="text" class="form-control" placeholder="dd-mm-yyyy">
                                </div>
                                <div class="col-3">
                                    <label for="">Adresa</label>
                                    <input type="text" class="form-control" placeholder="psh: Rr.Deshmoret e Kombit">
                                </div>
                                <div class="col-3">
                                    <label for="">Shteti</label>
                                    <select class="browser-default custom-select">
                                        <option selected="selected" value="">Zgjidhni shtetin</option>
                                        <option value="1">Shqipëri</option><option value="2">Kosovë</option>
                                        <option value="3">Maqedoni</option><option value="4">Mali i zi</option>
                                        <option value="5">Serbi</option><option value="6">Afganistan</option>
                                        <option value="8">Algjeri</option><option value="15">Argjentina</option>
                                        <option value="16">Armenia</option><option value="18">Australia</option>
                                        <option value="19">Austria</option><option value="20">Azerbaixhan</option>
                                        <option value="22">Bahrein</option><option value="23">Bangladesh</option>
                                        <option value="25">Bjellorusi</option><option value="26">Belgjikë</option>
                                        <option value="32">Bosnja dhe Hercegovina</option><option value="35">Brazil</option>
                                        <option value="38">Bullgaria</option><option value="43">Kanada</option>
                                        <option value="46">Republika e Afrikës Qendrore</option><option value="49">Kinë</option>
                                        <option value="52">Kolumbia</option><option value="59">Kroacia</option>
                                        <option value="61">Qipro</option><option value="63">Danimark</option>
                                        <option value="68">Egjipt</option><option value="70">Ginea Ekuatoriale</option>
                                        <option value="72">Estonia</option><option value="73">Etiopia</option>
                                        <option value="77">Finland</option><option value="78">Francë</option>
                                        <option value="84">Gjeorgji</option><option value="85">Gjermani</option>
                                        <option value="86">Gana</option><option value="87">Gjibraltar</option>
                                        <option value="88">Greqi</option><option value="103">Hungari</option>
                                        <option value="104">Island</option><option value="105">Indi</option>
                                        <option value="106">Indonezi</option><option value="107">Republika Islamike e Iranit</option>
                                        <option value="108">Irak</option><option value="109">Irlandë</option>
                                        <option value="111">Izrael</option><option value="112">Itali</option>
                                        <option value="114">Japoni</option><option value="116">Jordani</option>
                                        <option value="117">Kazakistan</option><option value="118">Kenia</option>
                                        <option value="120">Korea, Republika Demokratike Popullore e</option>
                                        <option value="121">Republika e Koresë</option><option value="122">Kuvait</option>
                                        <option value="123">Kirgizstan</option><option value="125">Letoni</option>
                                        <option value="126">Liban</option><option value="128">Liberia</option>
                                        <option value="130">Lihtenshtajn</option><option value="131">Lituani</option>
                                        <option value="132">Luksemburg</option><option value="136">Malaizia</option>
                                        <option value="138">Mali</option><option value="139">Malta</option>
                                        <option value="145">Meksikë</option><option value="147">Moldavi</option>
                                        <option value="148">Monako</option><option value="157">Hollandë</option>
                                        <option value="160">Zelanda e Re</option><option value="163">Nigeria</option>
                                        <option value="167">Norvegji</option><option value="168">Oman</option>
                                        <option value="169">Pakistan</option><option value="175">Peru</option>
                                        <option value="176">Filipinë</option><option value="178">Poloni</option>
                                        <option value="179">Portugali</option><option value="181">Katar</option>
                                        <option value="183">Rumania</option><option value="184">Rusi</option>
                                        <option value="194">San Marino</option><option value="196">Arabia Saudite</option>
                                        <option value="197">Senegal</option><option value="199">Sierra Leon</option>
                                        <option value="200">Singapor</option><option value="201">Sllovaki</option>
                                        <option value="202">Slloveni</option><option value="204">Somali</option>
                                        <option value="205">Afrika Jugore</option><option value="207">Spanjë</option>
                                        <option value="208">Sri Lanka</option><option value="209">Sudan</option>
                                        <option value="213">Suedi</option><option value="214">Zvicër</option>
                                        <option value="215">Republika Arabe e Sirisë</option><option value="216">Taivan</option>
                                        <option value="217">Taxhikistan</option><option value="218">Republika e Bashkuar e Tanzanisë</option>
                                        <option value="219">Tailandë</option><option value="225">Tunizi</option>
                                        <option value="226">Turqi</option><option value="230">Uganda</option>
                                        <option value="231">Ukrainë</option><option value="232">Emiratet e Bashkuara</option>
                                        <option value="233">Mbretëria e Bashkuar</option><option value="234">ShBA</option>
                                        <option value="237">Yzbekistan</option><option value="240">Viet Nam</option>
                                        <option value="245">Jemen</option><option value="246">Zambia</option><option value="247">Zimbabue</option>
                                        <option value="248">Republika Ceke</option><option value="249">Libia</option><option value="250">Mjanmar</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="">Qyteti</label>
                                    <select class="browser-default custom-select">
                                        <option selected>Zgjidhni qytetin</option>
                                        <option value="1">Tirane</option><option value="2">Durres</option>
                                        <option value="3">Elbasan</option><option value="4">Shkodër </option>
                                        <option value="5">Fier </option><option value="6">Korce</option>
                                        <option value="7">Vlore</option><option value="8">Berat </option>
                                        <option value="9">Lushnje</option><option value="10">Kavaje</option>
                                        <option value="11">Bajram Curri</option><option value="12">Ballsh</option>
                                        <option value="13">Bilisht</option><option value="14">Bulqize</option>
                                        <option value="15">Burrel</option><option value="16">Cërrik</option>
                                        <option value="17">Çorovode</option><option value="18">Delvine</option>
                                        <option value="19">Divjake</option><option value="20">Ersekë</option>
                                        <option value="21">Fushë-Arrëz</option>
                                        <option value="22">Fushë-Krujë</option>
                                        <option value="23">Gjirokastër</option><option value="24">Gramsh</option>
                                        <option value="25">Himare</option><option value="26">Kamëz</option>
                                        <option value="27">Këlcyrë</option><option value="28">Klos</option>
                                        <option value="29">Konispol</option><option value="30">Koplik</option>
                                        <option value="31">Krastë</option><option value="32">Krrabë</option>
                                        <option value="33">Krujë</option><option value="34">Krumë</option>
                                        <option value="35">Kuçovë</option><option value="36">Kukës</option>
                                        <option value="37">Kurbnesh</option><option value="38">Lac</option>
                                        <option value="39">Leskovik</option><option value="40">Lezhë</option>
                                        <option value="41">Libohovë</option><option value="42">Librazhd</option>
                                        <option value="43">Maliq</option><option value="44">Mamurras</option>
                                        <option value="45">Memaliaj</option><option value="46">Orikum</option>
                                        <option value="47">Patos</option><option value="48">Peqin</option>
                                        <option value="49">Përmet</option><option value="50">Përrenjas</option>
                                        <option value="51">Peshkopi</option><option value="52">Pogradec</option>
                                        <option value="53">Poliçan</option><option value="54">Pukë</option>
                                        <option value="55">Roskovec</option><option value="56">Rrëshen</option>
                                        <option value="57">Rrogozhinë</option><option value="58">Rubik</option>
                                        <option value="59">Sarandë</option><option value="60">Selenicë</option>
                                        <option value="61">Shëngjin</option><option value="62">Shijak</option>
                                        <option value="63">Tepelenë</option><option value="64">Tropoja</option>
                                        <option value="65">Ulëz</option><option value="66">Urë Vajgurore</option>
                                        <option value="67">Vorë</option><option value="148">Dhërmi</option>
                                        <option value="169">Skrapar</option><option value="172">Sukth</option>
                                        <option value="755">Shkozet</option><option value="854">Voskopoja</option>
                                        <option value="889">Belsh</option><option value="934">Vermosh</option>
                                        <option value="1030">Mallakastër</option><option value="1032">Fan</option>
                                        <option value="1033">Progër</option><option value="1034">Zagorë</option>
                                        <option value="1272">Bishqem</option><option value="1410">Levan</option>
                                        <option value="1439">Mirditë</option><option value="1473">Paskuqan</option>
                                        <option value="1477">Petrelë</option><option value="1496">Qeparo</option>
                                        <option value="1504">Reps</option><option value="1569">Thumanë</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 mt-3 row mx-auto">
                                <div class="col-3">
                                    <label for="">Emri *</label>
                                    <input type="text" class="form-control" placeholder="Emri">
                                </div>
                                <div class="col-3">
                                    <label for="">Mbiemri *</label>
                                    <input type="text" class="form-control" placeholder="Mbiemri">
                                </div>
                                <div class="col-3">
                                    <label for="">Gjinia *</label>
                                    <select class="browser-default custom-select">
                                        <option selected>Gjinia</option>
                                        <option value="1">Mashkull</option>
                                        <option value="2">Femer</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="">Gjendja civile</label>
                                    <select class="browser-default custom-select">
                                        <option selected>Gjendja civile</option>
                                        <option value="1">Beqar</option>
                                        <option value="2">i/e martuar</option>
                                        <option value="2">i/e ve</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <br>
                        <div class="mb-5 text-center">
                           <button class="btn btn-lg btn-primary" style="padding: 10px 32px 10px 32px;background-color: #004f84;margin-left: 10px;" onclick="" type="submit">Përditësoni</button>
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


