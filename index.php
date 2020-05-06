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
<?php include 'partials/data/job-items.php'; ?>
<?php include 'partials/data/proffesion-data.php'; ?>
<!-- end include data-->

<!--Navbar -->
<?php include 'partials/header.php'; ?>

<!-- Head (Regjistrohu / Identifikohu)-->
<div class="row text-center mt-5" style="height: 160px; background: #0099cb">
    <div class="col-sm-6 ">
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
    <div class="col-sm-6">
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

        <!-- Forma Kerkimi i avancuar -->
        <div class="col-3 ">
            <form method="GET" action="https://(KUR TE KRIJOHET FILE PHP)" accept-charset="UTF-8">
                <h4 class="text-center" >Kerkim i avancuar</h4>
                <hr>
                <div class="form-group">
                    <label for="fjalkyc"><small><b>Fjale kyce ose kodin e punes</b></small></label>
                    <input type="text" class="form-control" id="fjalkyc"  name="fjale">
                </div>
                <div class="form-group">
                    <label for="emrikomp"><small><b>Emri i kompanise</b></small></label>
                    <input type="text" class="form-control" id="emrikomp"  name="kompani">
                </div>
                <div class="form-group">
                    <label for="country"><small><b>Shteti</b></small></label>
                    <select class="form-control select-opt" id="country" name="country">
                            <option value="" selected="selected">Zgjidhni shtetin</option>
                            <option value="1">Shqipëri</option><option value="2">Kosovë</option>
                            <option value="3">Maqedoni</option><option value="4">Mali i zi</option>
                            <option value="5">Serbi</option><option value="6">Afganistan</option>
                            <option value="7">Ishujt Aland</option><option value="8">Algjeri</option>
                            <option value="9">Samoa Amerikane</option><option value="10">Andorra</option>
                            <option value="11">Angola</option><option value="12">Anguilla</option>
                            <option value="13">Antarktida</option><option value="14">Antigua and Barbuda</option>
                            <option value="15">Argjentina</option><option value="16">Armenia</option>
                            <option value="17">Aruba</option><option value="18">Australia</option>
                            <option value="19">Austria</option><option value="20">Azerbaixhan</option>
                            <option value="21">Bahamas</option><option value="22">Bahrein</option>
                            <option value="23">Bangladesh</option><option value="24">Barbados</option>
                            <option value="25">Bjellorusi</option><option value="26">Belgjika</option>
                            <option value="27">Belize</option><option value="28">Benin</option>
                            <option value="29">Bermuda</option><option value="30">Butan</option>
                            <option value="31">Bolivi</option><option value="32">Bosnja dhe Hercegovina</option>
                            <option value="33">Botsuana</option><option value="34">Ishujt Buve</option>
                            <option value="35">Brazil</option><option value="36">Territori Britanik në Oqeanin Indian</option>
                            <option value="37">Brunei Darussalam</option><option value="38">Bullgaria</option>
                            <option value="39">Burkina Faso</option><option value="40">Burundi</option>
                            <option value="41">Kamboxha</option><option value="42">Kamerun</option>
                            <option value="43">Kanada</option><option value="44">Kepi i Gjelbër</option>
                            <option value="45">Ishujt Kajman</option><option value="46">Republika e Afrikës Qendrore</option>
                            <option value="47">Cad</option><option value="48">Kili</option><option value="49">Kinë</option>
                            <option value="50">Ishujt e Krishtlindjeve</option><option value="51">Ishujt Kokos</option>
                            <option value="52">Kolumbia</option><option value="53">Komoros</option>
                            <option value="54">Kongo</option><option value="55">Republika Demokratike e Kongos</option>
                            <option value="56">Ishujt Kuk</option><option value="57">Kosta Rika</option>
                            <option value="58">Bregu i Fildishte</option><option value="59">Kroacia</option>
                            <option value="60">Kuba</option><option value="61">Qipro</option>
                            <option value="62">Republika Ceke</option><option value="63">Danimark</option>
                            <option value="64">Dibuti</option><option value="65">Dominika</option>
                            <option value="66">Republika Domenikane</option><option value="67">Ekuador</option>
                            <option value="68">Egjipt</option><option value="69">El Salvador</option>
                            <option value="70">Ginea Ekuatoriale</option><option value="71">Eritrea</option>
                            <option value="72">Estonia</option><option value="73">Etiopia</option>
                            <option value="74">Ishujt Folkland</option><option value="75">Ishujt Faroe</option>
                            <option value="76">Fixhi</option><option value="77">Finland</option>
                            <option value="78">Francë</option><option value="79">Ginea Franceze</option>
                            <option value="80">Polinezia Franceze</option><option value="81">Territoret Franceze Jugore</option>
                            <option value="82">Gabon</option><option value="83">Gambia</option>
                            <option value="84">Gjeorgji</option><option value="85">Gjermani</option>
                            <option value="86">Gana</option><option value="87">Gjibraltar</option>
                            <option value="88">Greqi</option><option value="89">Groenland</option>
                            <option value="90">Grenada</option><option value="91">Guadelupe</option>
                            <option value="92">Guam</option><option value="93">Guatemala</option>
                            <option value="94">Guernsei</option><option value="95">Ginea</option>
                            <option value="96">Ginea-Bisau</option><option value="97">Guana (Guyana)</option>
                            <option value="98">Haiti</option><option value="99">Ishulli Herd dhe Ishulli Mek Donald</option>
                            <option value="100">Qytet Shteti i Vatikanit</option><option value="101">Honduras</option>
                            <option value="102">Hong Kong</option><option value="103">Hungari</option>
                            <option value="104">Island</option><option value="105">Indi</option>
                            <option value="106">Indonezi</option><option value="107">Republika Islamike e Iranit</option>
                            <option value="108">Irak</option><option value="109">Irlandë</option>
                            <option value="110">Ishulli i Njeriut</option><option value="111">Izrael</option>
                            <option value="112">Itali</option><option value="113">Xhamaika</option>
                            <option value="114">Japoni</option><option value="115">Xherzi</option>
                            <option value="116">Jordani</option><option value="117">Kazakistan</option>
                            <option value="118">Kenia</option><option value="119">Kiribati</option>
                            <option value="120">Korea, Republika Demokratike Popullore e</option>
                            <option value="121">Republika e Koresë</option><option value="122">Kuvait</option>
                            <option value="123">Kirgizstan</option><option value="124">Lao, Republika Demokratike Popullore e</option>
                            <option value="125">Letoni</option><option value="126">Liban</option>
                            <option value="127">Lesoto</option><option value="128">Liberia</option>
                            <option value="129">Jamahiria</option><option value="130">Lihtenshtajn</option>
                            <option value="131">Lituani</option><option value="132">Luksemburg</option>
                            <option value="133">Makao</option><option value="134">Madagaskar</option>
                            <option value="135">Malaui</option><option value="136">Malaizia</option>
                            <option value="137">Maldive</option><option value="138">Mali</option>
                            <option value="139">Malta</option><option value="140">Ishujt Marshall</option>
                            <option value="141">Martinik</option><option value="142">Mavritani</option>
                            <option value="143">Mauritius</option><option value="144">Maiote</option>
                            <option value="145">Meksikë</option><option value="146">Mikronezi</option>
                            <option value="147">Moldavi</option><option value="148">Monako</option>
                            <option value="149">Mongoli</option><option value="150">Montserrat</option>
                            <option value="151">Marok</option><option value="152">Mozambik</option>
                            <option value="153">Mianmar</option><option value="154">Namibia</option>
                            <option value="155">Nauru</option><option value="156">Nepal</option>
                            <option value="157">Hollandë</option><option value="158">Antilet Hollandeze</option>
                            <option value="159">Kaledonia e Re</option><option value="160">Zelanda e Re</option>
                            <option value="161">Nikaragua</option><option value="162">Niger</option>
                            <option value="163">Nigeria</option><option value="164">Niue</option>
                            <option value="165">Ishujt Norfolk</option><option value="166">Ishujt Veriore të Marianas</option>
                            <option value="167">Norvegji</option><option value="168">Oman</option>
                            <option value="169">Pakistan</option><option value="170">Palau</option>
                            <option value="171">Territory Palestinez</option><option value="172">Panama</option>
                            <option value="173">Papua Ginea e Re</option><option value="174">Paraguai</option>
                            <option value="175">Peru</option><option value="176">Filipinë</option>
                            <option value="177">Pitkairn</option><option value="178">Poloni</option>
                            <option value="179">Portugali</option><option value="180">Puerto Riko</option>
                            <option value="181">Katar</option><option value="182">Ishulli i Bashkimit</option>
                            <option value="183">Rumania</option><option value="184">Rusi</option>
                            <option value="185">Ruanda</option><option value="186">Shën Bartolemi</option>
                            <option value="187">Shën Helena</option><option value="188">Shën Kits dhe Nevis</option>
                            <option value="189">Shën Lusia</option><option value="190">Shën Martini</option>
                            <option value="191">Shën Pier and Mikuelon</option><option value="192">ShÃ«n Vinsent dhe Grenadinet</option>
                            <option value="193">Samoa</option><option value="194">San Marino</option>
                            <option value="195">Sao Tome dhe Principe</option><option value="196">Arabia Saudite</option>
                            <option value="197">Senegal</option><option value="198">Sishel</option>
                            <option value="199">Sierra Leon</option><option value="200">Singapor</option>
                            <option value="201">Sllovaki</option><option value="202">Slloveni</option>
                            <option value="203">Ishujt Solomon</option><option value="204">Somali</option>
                            <option value="205">Afrika Jugore</option>
                            <option value="206">South Georgia and the South Sandwich Islands</option>
                            <option value="207">Spanjë</option><option value="208">Sri Lanka</option>
                            <option value="209">Sudan</option><option value="210">Suriname</option>
                            <option value="211">Svalbard and Jan Mayen</option><option value="212">Svaziland</option>
                            <option value="213">Suedi</option><option value="214">Zvicër</option>
                            <option value="215">Republika Arabe e SirisÃ«</option><option value="216">Taivan</option>
                            <option value="217">Taxhikistan</option><option value="218">Republika e Bashkuar e Tanzanisë</option>
                            <option value="219">Tailandë</option><option value="220">Timor-Leste</option>
                            <option value="221">Togo</option><option value="222">Tokelau</option>
                            <option value="223">Tonga</option><option value="224">Trinidad dhe Tobago</option>
                            <option value="225">Tunizi</option><option value="226">Turqi</option>
                            <option value="227">Turkmenistan</option><option value="228">Ishujt Turks dhe Kaiko </option>
                            <option value="229">Tuvalu</option><option value="230">Uganda</option>
                            <option value="231">Ukrainë</option><option value="232">Emiratet e Bashkuara</option>
                            <option value="233">Mbretëria e Bashkuara</option><option value="234">ShBA</option>
                            <option value="235">Shtetet e Bashkuara Ishujt e vegjÃ«l periferik</option>
                            <option value="236">Uruguai</option><option value="237">Yzbekistan</option>
                            <option value="238">Vanuatu</option><option value="239">Venezuela</option>
                            <option value="240">Viet Nam</option><option value="241">Ishujt të Virgjëra Britanike</option>
                            <option value="242">Ishujt të Virgjëra ShBA</option><option value="243">Uallis dhe Futuna</option>
                            <option value="244">Saharaja Perendimore</option><option value="245">Jemen</option>
                            <option value="246">Zambia</option><option value="247">Zimbabue</option>
                            <option value="248">Republika Ceke</option><option value="249">Libia</option><option value="250">Mjanmar</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="qyteti"><small><b>Qyteti</b></small></label>
                    <input type="text" class="form-control" id="qyteti"  name="qyteti">
                </div>
                <div class="form-group">
                    <label for="category"><small><b>Kategoria</b></small></label>
                    <select class="form-control select-opt" id="category" name="category">
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
                <div class="form-group">
                    <label for="job_type"><small><b>Lloji i punës</b></small></label>
                    <select class="form-control select-opt" id="job_type" name="job_type">
                        <option value="" selected="selected">Zgjidhni llojin e punës</option>
                        <option value="1">Kohe e pjesshme</option>
                        <option value="2">Kohe e plote </option>
                        <option value="3">E perkohshme</option>
                        <option value="4">Internship</option>
                        <option value="5">Tjeter</option>
                        <option value="6">Konsulent</option>
                        <option value="7">Kontrate me kohe te caktuar</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-success" style="width: 100%">Kerko</button>
            </form>
        </div>

        <!-- Shfaqja e puneve NE MES-->
        <div class="col-6 customlistinghome">
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
        <div class="col-3 text-center">
            <form method="POST" action="https://(KUR TE KRIJOHET FILE PHP)" accept-charset="UTF-8">
                <h4>Identifikohu</h4>
                <hr>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Adresa Email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="paswd" placeholder="Fjalekalimi" name="pswd">
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

        <!-- Statistikat-->
            <div class="statistika col-12 mt-4" style="padding-left: 0px;padding-right: 0px;">
                <div class="btn-group btn-group-lg rounded-lg w-75 text-white" style="background-image: url('img/statistics.png');">

                    <div class="btn-group-vertical w-75" >
                        <button type="button" class="btn text-left" >
                            <div><i>361</i></div>
                            <div><small><b>Pune aktive</b></small></div>
                        </button>
                        <button type="button" class="btn text-left"><div><i>10008901</i></div>
                            <div><small><b>Punekerkues</b></small></div>
                        </button>
                        <button type="button" class="btn text-left">
                            <div><i>8539</i></div>
                            <div><small><b>Punedhenes</b></small></div>
                        </button>
                    </div>

                    <button type="button" class="btn">Statistika</button>

                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'partials/footer.php'; ?>

<script>
    <?php include 'partials/scripts.php'; ?>
</script>

</body>
