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


<div class="container-fluid" style="background-color: #f4f8fa;">

    <?php include 'partials/header_search.php'; ?>

    <!--Faqja ime text-->
    <div class="row">
        <div class="col-md-12 container" style="background-color: #f4f8fa">
            <div class="row">
                <div class="col-md-12 mb-4 mt-5 text-center">
                    <h1 style="color: #005a8c">Te dhena personale</h1>
                    <h5><a style="color: #0056b3" href="index.php">Kreu</a> > <a style="color: #0056b3" href="my_account.php">Profili</a> > Informacion personal</h5>
                </div>
            </div>

            <!--Format-->
            <div class="mb-3">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="container">
                            <div class="card border border-0 mb-5 shadow">
                                <div class="card-header" style="border-radius: 10px 10px 0px 0px; background-color: #005a8c; color: white; font-size: 20px">
                                    Te dhena personale
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Emri *</b></small></label>
                                            <input type="text" class="form-control" placeholder="Emri">
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Mbiemri *</b></small></label>
                                            <input type="text" class="form-control" placeholder="Mbiemri">
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Gjinia *</b></small></label>
                                            <select class="browser-default custom-select">
                                                <option selected>Gjinia</option>
                                                <option value="1">Mashkull</option>
                                                <option value="2">Femer</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Gjendja civile</b></small></label>
                                            <select class="browser-default custom-select">
                                                <option selected>Gjendja civile</option>
                                                <option value="1">Beqar</option>
                                                <option value="2">i/e martuar</option>
                                                <option value="2">i/e ve</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Datelindja</b></small></label>
                                            <input type="date" class="form-control" placeholder="dd-mm-yyyy">
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Adresa</b></small></label>
                                            <input type="text" class="form-control" placeholder="psh: Rr.Deshmoret e Kombit">
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Shteti</b></small></label>
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
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Qyteti</b></small></label>
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
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Telefon</b></small></label>
                                            <input type="tel" class="form-control" placeholder="psh: +355 222222">
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Celular</b></small></label>
                                            <input type="tel" class="form-control" placeholder="psh: +355 698488011">
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Fotografi</b></small></label>
                                            <form class="md-form">
                                                <div class="file-field">
                                                    <a class="btn-floating purple-gradient mt-0 float-left">
                                                        <input type="file">
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Leje drejtimi</b></small></label>
                                            <select class="browser-default custom-select">
                                                <option selected>Zgjidhni patenten</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="2">C</option>
                                                <option value="2">D</option>
                                                <option value="2">BE</option>
                                                <option value="2">CE</option>
                                                <option value="2">DE</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <label for=""><small><b>Username</b></small></label>
                                            <input type="email" class="form-control" placeholder="kacarudi@gmail.com">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for=""><small><b>Username i ri</b></small></label>
                                            <input type="email" class="form-control" placeholder="New Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 col-md-12 col-sm-12">
                                    <small>
                                        <strong>Kujdes!:</strong> Ky email përdoret për tu identifikuar në portalin e duapune.com. Nëse e ndryshoni, sigurohuni që ta konfirmoni kete adresë nëpërmjet emailit që do tju dërgohet dhe më pas të përdorni adresën e re për të hyrë në portal.
                                    </small>
                                </div>
                            </div>
                            <div class="card border border-0 mb-5 shadow">
                                <div class="card-header" style="border-radius: 10px 10px 0px 0px; background-color: #005a8c; color: white; font-size: 20px">
                                    Eksperienca dhe Pritshmeri
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <label for=""><small><b>Statusi i punesimit</b></small></label>
                                            <select class="form-control" id="employment_status" name="employment_status">
                                                <option value="" selected="selected">Zgjidhni statusin e punësimit</option>
                                                <option value="1">Part-Time Employed</option>
                                                <option value="2">Full - Time Employed</option>
                                                <option value="3">Freelance</option>
                                                <option value="4">Consulent / Advisor</option>
                                                <option value="5">Self-employed</option>
                                                <option value="6">Unemployed</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for=""><small><b>Niveli i arsimit</b></small></label>
                                            <select class="form-control" id="education_level" name="education_level">
                                                <option value="" selected="selected">Zgjidhni nivelin e edukimit</option>
                                                <option value="1">Shkolle e Mesme</option>
                                                <option value="2">Shkolle e Mesme Profesionale</option>
                                                <option value="3">Universitet ne vazhdim</option>
                                                <option value="4">Universitet</option>
                                                <option value="5">Master profesional ne vazhdim</option>
                                                <option value="6">Master profesional</option>
                                                <option value="7">Master shkencor ne vazhdim</option>
                                                <option value="8">Master shkencor</option>
                                                <option value="9">Doktorature ne proces</option>
                                                <option value="10">Doktorature</option>
                                                <option value="11">Post-doktorature</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for=""><small><b>Niveli i eksperiences</b></small></label>
                                            <select class="form-control" id="experience_level" name="experience_level">
                                                <option value="" selected="selected">Zgjidhni nivelin e eksperiencës</option>
                                                <option value="1">Student</option>
                                                <option value="2">Little (0 - 2 years)</option>
                                                <option value="3">Average (3 - 10 years)</option>
                                                <option value="4">High (11+ years)</option>
                                                <option value="5">Managerial</option>
                                                <option value="6">Executive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <label for=""><small><b>Paga</b></small></label>
                                            <select class="form-control" id="salary" name="salary"><option value="" selected="selected">Zgjidhni rrogën</option>
                                                <option value="1">100 - 300</option>
                                                <option value="2">300 - 400</option>
                                                <option value="3">400 - 700</option>
                                                <option value="4">700 - 1000</option>
                                                <option value="5">1000 - 1500</option>
                                                <option value="6">1500 - 2500</option>
                                                <option value="7">2500 - 5000</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for=""><small><b>Zgjidh monedhen</b></small></label>
                                            <select class="form-control" id="currency_id" name="currency_id">
                                                <option value="" selected="selected">Zgjidh monedhën</option>
                                                <option value="1">USD</option>
                                                <option value="2">ALL</option>
                                                <option value="3">EURO</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for=""><small><b>Profesioni</b></small></label>
                                            <input type="text" class="form-control" placeholder="psh: Inxhinier">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border border-0 mb-4 shadow">
                                <div class="card-header" style="border-radius: 10px 10px 0px 0px; background-color: #005a8c; color: white; font-size: 20px">
                                    Preferencat e pozicioneve te punes
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Zgjidhni preference 1</b></small></label>
                                            <select class="form-control" id="job_preference_3" name="job_preference_3">
                                                <option value="" selected="selected">Zgjidhni preferencë</option>
                                                <option value="1">Administrator rrjeti</option>
                                                <option value="2">Administrim biznesi</option>
                                                <option value="3">Agronom</option>
                                                <option value="4">Arkeolog</option>
                                                <option value="5">Arkitekt</option>
                                                <option value="6">Artist</option>
                                                <option value="7">Audit</option>
                                                <option value="8">Biolog</option>
                                                <option value="9">Diplomat</option>
                                                <option value="10">Dizajner</option>
                                                <option value="11">Ekonomist</option>
                                                <option value="12">Farmacist</option>
                                                <option value="13">Financier</option>
                                                <option value="14">Fizikant</option>
                                                <option value="15">Gjeograf</option>
                                                <option value="16">Historian</option>
                                                <option value="17">Informaticien</option>
                                                <option value="18">Inxhinier</option>
                                                <option value="19">Inxhinier elektrik</option>
                                                <option value="20">Inxhinier elektronik</option>
                                                <option value="21">Inxhinier hidro</option>
                                                <option value="22">Inxhinier mekanik</option>
                                                <option value="23">Inxhinier mjedisi</option>
                                                <option value="24">Inxhinier ndertimi</option>
                                                <option value="25">Inxhinier pyjor</option>
                                                <option value="26">Inxhinier telekomunikacioni</option>
                                                <option value="27">Jurist</option>
                                                <option value="28">Kimist</option>
                                                <option value="29">Linguistike</option>
                                                <option value="30">Menaxhim</option>
                                                <option value="31">Marketing</option>
                                                <option value="32">Matematicien</option>
                                                <option value="33">Mesues</option>
                                                <option value="34">Mjek i pergjithshem</option>
                                                <option value="35">Mjek i specializuar</option>
                                                <option value="36">Perkthyes</option>
                                                <option value="37">Programues</option>
                                                <option value="38">Psikolog</option>
                                                <option value="39">Punonjes social</option>
                                                <option value="40">Shitje</option>
                                                <option value="41">Shkenca politike</option>
                                                <option value="42">Sociolog</option>
                                                <option value="43">Sportist</option>
                                                <option value="44">Statisticien</option>
                                                <option value="45">Stomatolog</option>
                                                <option value="46">Turizem</option>
                                                <option value="47">Veteriner</option>
                                                <option value="48">Informatike ekonomike</option>
                                                <option value="49">Marredhenie me publikun dhe komunikim</option>
                                                <option value="50">Infermier/ Ndihmesmjek</option>
                                                <option value="51">Logjistike</option>
                                                <option value="52">Sherbim Transporti dhe Shperndarje</option>
                                                <option value="53">Shkenca te komunikimit</option>
                                                <option value="54">Burime njerezore</option>
                                                <option value="55">Operator</option>
                                                <option value="56">Pedagog</option>
                                                <option value="57">Specialist Prokurimi</option>
                                                <option value="58">Sekretar/Asistent zyre</option>
                                                <option value="59">Cilesi dhe Procedura</option>
                                                <option value="60">Aktor</option>
                                                <option value="61">Analist kredie</option>
                                                <option value="62">Asistent Fluturimi</option>
                                                <option value="63">Agjent Udhetimi</option>
                                                <option value="64">Artizan</option>
                                                <option value="65">Agjent Imobiliar</option>
                                                <option value="66">Fotograf</option>
                                                <option value="67">Topograf</option>
                                                <option value="68">Analist sistemi</option>
                                                <option value="69">Gazetar</option>
                                                <option value="70">Inxhinier Civil</option>
                                                <option value="71">Inxhinier Gjeologji/Miniera</option>
                                                <option value="72">Inxhinier Nafte</option>
                                                <option value="73">Specialist sigurimi</option>
                                                <option value="74">Statisticien specialist </option>
                                                <option value="75">Recepsionist</option>
                                                <option value="76">Zolog</option>
                                                <option value="77">Noter</option>
                                                <option value="78">Menaxhim i Projekteve</option>
                                                <option value="79">Menaxhim shitjeve</option>
                                                <option value="80">Menaxhim i Projekteve</option>
                                                <option value="81">Programues ne Web</option>
                                                <option value="82">Trajnim dhe zhvillim</option>
                                                <option value="83">Intervistues ne terren</option>
                                                <option value="84">TIK - Teknologjia e Informacionit dhe Komunikacionit</option>
                                                <option value="85">OSS - Sisteme te Mbeshtetjes se Veprimeve </option>
                                                <option value="86">NCM - Kontrolli dhe Monitorimi i rrjetave</option>
                                                <option value="87">CRM - Menaxhimi i marredhenieve me klientin</option>
                                                <option value="88">Specialist per sisteme elektrike dhe elektro mekanike</option>
                                                <option value="89">Inxhinieri Kimike</option>
                                                <option value="90">Dizajn dhe Pikture</option>
                                                <option value="91">Koordinim Projektesh</option>
                                                <option value="92">Industria mekanike</option>
                                                <option value="93">Asistente per Emision Televiziv</option>
                                                <option value="94">Inxhiner sistemesh</option>
                                                <option value="95">Projekt</option>
                                                <option value="96">Inxhinier mekatronik</option>
                                                <option value="97">Administrator te dhenash</option>
                                                <option value="98">Specialist</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Zgjidhni preference 2</b></small></label>
                                            <select class="form-control" id="job_preference_3" name="job_preference_3">
                                                <option value="" selected="selected">Zgjidhni preferencë</option>
                                                <option value="1">Administrator rrjeti</option>
                                                <option value="2">Administrim biznesi</option>
                                                <option value="3">Agronom</option>
                                                <option value="4">Arkeolog</option>
                                                <option value="5">Arkitekt</option>
                                                <option value="6">Artist</option>
                                                <option value="7">Audit</option>
                                                <option value="8">Biolog</option>
                                                <option value="9">Diplomat</option>
                                                <option value="10">Dizajner</option>
                                                <option value="11">Ekonomist</option>
                                                <option value="12">Farmacist</option>
                                                <option value="13">Financier</option>
                                                <option value="14">Fizikant</option>
                                                <option value="15">Gjeograf</option>
                                                <option value="16">Historian</option>
                                                <option value="17">Informaticien</option>
                                                <option value="18">Inxhinier</option>
                                                <option value="19">Inxhinier elektrik</option>
                                                <option value="20">Inxhinier elektronik</option>
                                                <option value="21">Inxhinier hidro</option>
                                                <option value="22">Inxhinier mekanik</option>
                                                <option value="23">Inxhinier mjedisi</option>
                                                <option value="24">Inxhinier ndertimi</option>
                                                <option value="25">Inxhinier pyjor</option>
                                                <option value="26">Inxhinier telekomunikacioni</option>
                                                <option value="27">Jurist</option>
                                                <option value="28">Kimist</option>
                                                <option value="29">Linguistike</option>
                                                <option value="30">Menaxhim</option>
                                                <option value="31">Marketing</option>
                                                <option value="32">Matematicien</option>
                                                <option value="33">Mesues</option>
                                                <option value="34">Mjek i pergjithshem</option>
                                                <option value="35">Mjek i specializuar</option>
                                                <option value="36">Perkthyes</option>
                                                <option value="37">Programues</option>
                                                <option value="38">Psikolog</option>
                                                <option value="39">Punonjes social</option>
                                                <option value="40">Shitje</option>
                                                <option value="41">Shkenca politike</option>
                                                <option value="42">Sociolog</option>
                                                <option value="43">Sportist</option>
                                                <option value="44">Statisticien</option>
                                                <option value="45">Stomatolog</option>
                                                <option value="46">Turizem</option>
                                                <option value="47">Veteriner</option>
                                                <option value="48">Informatike ekonomike</option>
                                                <option value="49">Marredhenie me publikun dhe komunikim</option>
                                                <option value="50">Infermier/ Ndihmesmjek</option>
                                                <option value="51">Logjistike</option>
                                                <option value="52">Sherbim Transporti dhe Shperndarje</option>
                                                <option value="53">Shkenca te komunikimit</option>
                                                <option value="54">Burime njerezore</option>
                                                <option value="55">Operator</option>
                                                <option value="56">Pedagog</option>
                                                <option value="57">Specialist Prokurimi</option>
                                                <option value="58">Sekretar/Asistent zyre</option>
                                                <option value="59">Cilesi dhe Procedura</option>
                                                <option value="60">Aktor</option>
                                                <option value="61">Analist kredie</option>
                                                <option value="62">Asistent Fluturimi</option>
                                                <option value="63">Agjent Udhetimi</option>
                                                <option value="64">Artizan</option>
                                                <option value="65">Agjent Imobiliar</option>
                                                <option value="66">Fotograf</option>
                                                <option value="67">Topograf</option>
                                                <option value="68">Analist sistemi</option>
                                                <option value="69">Gazetar</option>
                                                <option value="70">Inxhinier Civil</option>
                                                <option value="71">Inxhinier Gjeologji/Miniera</option>
                                                <option value="72">Inxhinier Nafte</option>
                                                <option value="73">Specialist sigurimi</option>
                                                <option value="74">Statisticien specialist </option>
                                                <option value="75">Recepsionist</option>
                                                <option value="76">Zolog</option>
                                                <option value="77">Noter</option>
                                                <option value="78">Menaxhim i Projekteve</option>
                                                <option value="79">Menaxhim shitjeve</option>
                                                <option value="80">Menaxhim i Projekteve</option>
                                                <option value="81">Programues ne Web</option>
                                                <option value="82">Trajnim dhe zhvillim</option>
                                                <option value="83">Intervistues ne terren</option>
                                                <option value="84">TIK - Teknologjia e Informacionit dhe Komunikacionit</option>
                                                <option value="85">OSS - Sisteme te Mbeshtetjes se Veprimeve </option>
                                                <option value="86">NCM - Kontrolli dhe Monitorimi i rrjetave</option>
                                                <option value="87">CRM - Menaxhimi i marredhenieve me klientin</option>
                                                <option value="88">Specialist per sisteme elektrike dhe elektro mekanike</option>
                                                <option value="89">Inxhinieri Kimike</option>
                                                <option value="90">Dizajn dhe Pikture</option>
                                                <option value="91">Koordinim Projektesh</option>
                                                <option value="92">Industria mekanike</option>
                                                <option value="93">Asistente per Emision Televiziv</option>
                                                <option value="94">Inxhiner sistemesh</option>
                                                <option value="95">Projekt</option>
                                                <option value="96">Inxhinier mekatronik</option>
                                                <option value="97">Administrator te dhenash</option>
                                                <option value="98">Specialist</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Zgjidhni preference 3</b></small></label>
                                            <select class="form-control" id="job_preference_3" name="job_preference_3">
                                                <option value="" selected="selected">Zgjidhni preferencë</option>
                                                <option value="1">Administrator rrjeti</option>
                                                <option value="2">Administrim biznesi</option>
                                                <option value="3">Agronom</option>
                                                <option value="4">Arkeolog</option>
                                                <option value="5">Arkitekt</option>
                                                <option value="6">Artist</option>
                                                <option value="7">Audit</option>
                                                <option value="8">Biolog</option>
                                                <option value="9">Diplomat</option>
                                                <option value="10">Dizajner</option>
                                                <option value="11">Ekonomist</option>
                                                <option value="12">Farmacist</option>
                                                <option value="13">Financier</option>
                                                <option value="14">Fizikant</option>
                                                <option value="15">Gjeograf</option>
                                                <option value="16">Historian</option>
                                                <option value="17">Informaticien</option>
                                                <option value="18">Inxhinier</option>
                                                <option value="19">Inxhinier elektrik</option>
                                                <option value="20">Inxhinier elektronik</option>
                                                <option value="21">Inxhinier hidro</option>
                                                <option value="22">Inxhinier mekanik</option>
                                                <option value="23">Inxhinier mjedisi</option>
                                                <option value="24">Inxhinier ndertimi</option>
                                                <option value="25">Inxhinier pyjor</option>
                                                <option value="26">Inxhinier telekomunikacioni</option>
                                                <option value="27">Jurist</option>
                                                <option value="28">Kimist</option>
                                                <option value="29">Linguistike</option>
                                                <option value="30">Menaxhim</option>
                                                <option value="31">Marketing</option>
                                                <option value="32">Matematicien</option>
                                                <option value="33">Mesues</option>
                                                <option value="34">Mjek i pergjithshem</option>
                                                <option value="35">Mjek i specializuar</option>
                                                <option value="36">Perkthyes</option>
                                                <option value="37">Programues</option>
                                                <option value="38">Psikolog</option>
                                                <option value="39">Punonjes social</option>
                                                <option value="40">Shitje</option>
                                                <option value="41">Shkenca politike</option>
                                                <option value="42">Sociolog</option>
                                                <option value="43">Sportist</option>
                                                <option value="44">Statisticien</option>
                                                <option value="45">Stomatolog</option>
                                                <option value="46">Turizem</option>
                                                <option value="47">Veteriner</option>
                                                <option value="48">Informatike ekonomike</option>
                                                <option value="49">Marredhenie me publikun dhe komunikim</option>
                                                <option value="50">Infermier/ Ndihmesmjek</option>
                                                <option value="51">Logjistike</option>
                                                <option value="52">Sherbim Transporti dhe Shperndarje</option>
                                                <option value="53">Shkenca te komunikimit</option>
                                                <option value="54">Burime njerezore</option>
                                                <option value="55">Operator</option>
                                                <option value="56">Pedagog</option>
                                                <option value="57">Specialist Prokurimi</option>
                                                <option value="58">Sekretar/Asistent zyre</option>
                                                <option value="59">Cilesi dhe Procedura</option>
                                                <option value="60">Aktor</option>
                                                <option value="61">Analist kredie</option>
                                                <option value="62">Asistent Fluturimi</option>
                                                <option value="63">Agjent Udhetimi</option>
                                                <option value="64">Artizan</option>
                                                <option value="65">Agjent Imobiliar</option>
                                                <option value="66">Fotograf</option>
                                                <option value="67">Topograf</option>
                                                <option value="68">Analist sistemi</option>
                                                <option value="69">Gazetar</option>
                                                <option value="70">Inxhinier Civil</option>
                                                <option value="71">Inxhinier Gjeologji/Miniera</option>
                                                <option value="72">Inxhinier Nafte</option>
                                                <option value="73">Specialist sigurimi</option>
                                                <option value="74">Statisticien specialist </option>
                                                <option value="75">Recepsionist</option>
                                                <option value="76">Zolog</option>
                                                <option value="77">Noter</option>
                                                <option value="78">Menaxhim i Projekteve</option>
                                                <option value="79">Menaxhim shitjeve</option>
                                                <option value="80">Menaxhim i Projekteve</option>
                                                <option value="81">Programues ne Web</option>
                                                <option value="82">Trajnim dhe zhvillim</option>
                                                <option value="83">Intervistues ne terren</option>
                                                <option value="84">TIK - Teknologjia e Informacionit dhe Komunikacionit</option>
                                                <option value="85">OSS - Sisteme te Mbeshtetjes se Veprimeve </option>
                                                <option value="86">NCM - Kontrolli dhe Monitorimi i rrjetave</option>
                                                <option value="87">CRM - Menaxhimi i marredhenieve me klientin</option>
                                                <option value="88">Specialist per sisteme elektrike dhe elektro mekanike</option>
                                                <option value="89">Inxhinieri Kimike</option>
                                                <option value="90">Dizajn dhe Pikture</option>
                                                <option value="91">Koordinim Projektesh</option>
                                                <option value="92">Industria mekanike</option>
                                                <option value="93">Asistente per Emision Televiziv</option>
                                                <option value="94">Inxhiner sistemesh</option>
                                                <option value="95">Projekt</option>
                                                <option value="96">Inxhinier mekatronik</option>
                                                <option value="97">Administrator te dhenash</option>
                                                <option value="98">Specialist</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <label for=""><small><b>Ke degjuar per ne?</b></small></label>
                                            <select class="form-control" id="referal" name="referal">
                                                <option value="" selected="selected">Zgjidhni referuesin</option>
                                                <option value="1">Motor kërkimi ( google,yahoo etj)</option>
                                                <option value="2">Nga një i/e njohur</option>
                                                <option value="3">Panair </option>
                                                <option value="4">Trajnim / Seminare</option>
                                                <option value="5">Rrjete Sociale </option>
                                                <option value="6">nga faqja www.dm-consulting.biz</option>
                                                <option value="7">Nga fletepalosjet </option>
                                                <option value="8">Media ( TV, Radio)</option>
                                            </select>
                                        </div>
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
    </div>
</div>

<!--Footer-->
<?php include 'partials/footer.php'; ?>

<script>
    <?php include 'partials/scripts.php'; ?>
</script>

</body>


