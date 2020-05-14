<!--Navbar -->
<nav class=" navbar navbar-light fixed-top navbar-expand-lg" style="background-color: #e3f2fd;" role="navigation">

    <a class="navbar-brand " href="index.php">♚ duapune.com</a>
    <button class="navbar-toggler" style="background-color: white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#"><strong>Rreth nesh</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><b>Sherbime</b></a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop1" data-hover="dropdown" data-toggle="dropdown">
                    <b>Veprime te shpejta</b>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" disabled=""><b>Punekerkues</b></a>
                    <a class="dropdown-item" href="#">Krijo/Shto CV</a>
                    <a class="dropdown-item" href="../files/CV-Duapune.pdf">Shembull CV-je</a>
                    <a class="dropdown-item" disabled=""><b>Punedhenes</b></a>
                    <a class="dropdown-item" href="#">Posto pune</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-hover="dropdown" data-toggle="dropdown">
                    <b>Na kontaktoni</b>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="kontakti.php">Na kontaktoni</a>
                    <a class="dropdown-item" href="#">Mendimi Juaj</a>
                    <a class="dropdown-item" href="#">Trego historine tende</a>
                </div>
            </li>
        </ul>
        <div class="ml-auto  ">

            <!-- login-->
            <ul class="nav navbar-nav ml-auto">
                <?php if (isset($_SESSION['user'])) { ?>
                    <li class="nav-item dropdown navbar-right">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardroplogin" data-hover="dropdown" data-toggle="dropdown">
                            <img src="img/202.jpg" id="imglogin" style="width: 30px; height: 30px;" class="card-img rounded-circle logo" alt="foto">
                            <span title="<?php echo $_SESSION['user']['type_user'] ?>">
                                <?php echo $_SESSION['user']['first_name'] ?>
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="../my_account.php" class="dropdown-item">Llogaria ime</a>
                            <a href="../personal_data.php" class="dropdown-item">Të dhëna personale</a>
                            <a href="../change_password.php" class="dropdown-item">Ndrysho fjalëkalimin</a>
                            <a href="" class="dropdown-item" target="_blank">Edukim dhe Këshilla</a>
                            <a href="" class="dropdown-item">Punët e Sygjeruara</a>
                            <?php if (isset($_SESSION['user'])) { ?>
                                <a href="process/logout.php" class="dropdown-item">Dilni</a>
                            <?php } ?>
                        </div>
                    </li>
                <?php } ?>
                <li class="nav-item dropdown navbar-right">
                    <a class="nav-link dropdown-toggle" href="#" data-hover="dropdown" data-toggle="dropdown">
                        <img src="img/al.png" class="lang-flag" alt="Shqip"> Shqip
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="">
                            <img src="img/us_en.png" class="lang-flag">&nbsp;<span>English</span>
                        </a>

                        <a class="dropdown-item" href="">
                            <img src="img/it.png" class="lang-flag">&nbsp;<span>Italiano</span>
                        </a>
                    </div>
                </li>
            </ul>

        </div>
    </div>

</nav>