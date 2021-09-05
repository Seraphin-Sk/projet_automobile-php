<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Website-automobile</title>
</head>

<body>
    <!-- Start header -->
    <header>
        <nav>
            <div class="nav-bar">
                <a href="#acceuil">About</a>
                <a href="#service">Service</a>
                <a href="#assurance">Assurance</a>
                <a href="#image">Images</a>
                <a href="#connexion">Connexion</a>
            </div>
        </nav>

        <div class="head-log">
            <img src="assets/images/images-24.jpeg" alt="">
        </div>
        <div class="head-title">
            <h1 id="acceuil">ASSURANCE AUTOMOBILE-SK</h1>
            <p>Lorem ipsum dolor sit,possimus non sequi laboriosam, consectetur,</p>
        </div>
        <div class="head-liens">
            <a href="#"><i class="fab fa-github" style="font-size: 27px; color: rgb(184, 165, 131);"></i></a>
            <a href="#"><i class="fab fa-linkedin" style="font-size: 27px; color: rgb(184, 165, 131);"></i></a>
            <a href="#"><i class="fas fa-envelope-open" style="font-size: 27px; color: rgb(184, 165, 131);"></i></a>
        </div>
    </header>
    <!-- End header -->

    <!-- Start section -->
    <section>
        <div class="sect-title">
            <h2 id="service">SERVICES</h2>
            <hr class="hrr">
        </div>
        <div class="sect-liens">
            <div class="liens1">
                <a href="#"><i class="fas fa-car" style="font-size: 70px; color:aliceblue"></i></a><br>
                <h4>AUTOMOBILE</h4>
                <p>
                    Lorem, ipsum dolor sit amet consectetur. <br> Accusantium tempora asperiores magni sit <br> pariatur cumque a, earum, eveniet! <br>
                </p>
            </div>
            <div class="liens2">
                <a href="#"><i class="fas fa-shuttle-van" style="font-size: 70px; color: aliceblue;"></i></a><br>
                <h4>AUTOMOBILE</h4>
                <p>
                    Lorem, ipsum dolor sit amet consectetur. <br> Accusantium tempora asperiores magni sit <br> pariatur cumque a, earum, eveniet! <br>
                </p>
            </div>
            <div class="liens3">
                <a href="#"><i class="fas fa-truck-monster" style="font-size: 70px; color: aliceblue;"></i></a><br>
                <h4>AUTOMOBILE</h4>
                <p>
                    Lorem, ipsum dolor sit amet consectetur. <br> Accusantium tempora asperiores magni sit <br> pariatur cumque a, earum, eveniet! <br>
                </p>
            </div>
        </div>
    </section>
    <!-- Start section 2 -->
    <section class="head">

        <!-- code php -->
        <div class="bar">
            <?php
                if(isset($_POST['envoie'])){
                if(empty($_POST['ageCon']) AND empty($_POST['annPer']) AND empty($_POST['acc'])){
                    echo "<p>Veuillez remplir les champs...</p>";
                }elseif ($_POST['ageCon'] < 25 AND $_POST['annPer'] < 2 AND $_POST['acc'] == 0 ) {
                    echo "<p>Votre tarif est rouge.</p>";
                }elseif ($_POST['ageCon'] < 25 AND $_POST['annPer'] > 2 AND $_POST['acc'] == 0 ){
                    echo "<p>Orange seulement.</p>";
                }elseif($_POST['ageCon'] > 25 AND $_POST['annPer'] < 2 AND $_POST['acc'] == 1 ){
                    echo "<p>Le rouge.</p>";
                }elseif($_POST['ageCon'] > 25 AND $_POST['annPer'] > 2 AND $_POST['acc'] == 0 ){
                    echo "<p>Votre tarif est vert.</p>";
                }elseif($_POST['ageCon'] > 25 AND $_POST['annPer'] > 2  AND $_POST['acc'] == 1 ){
                    echo "<p>Votre tarif est orange.</p>";
                }elseif($_POST['ageCon'] > 25 AND $_POST['annPer'] > 2 AND $_POST['acc'] == 2 ){
                    echo "<p>Dernière rouge.</p>";
                }else{
                    echo "<p>Désolé, la compagnie ne peut pas vous assurer.</p>";
                }
                }
            ?>
        </div>
         <!-- code php -->

        <div class="headd-title">
            <h1 id="assurance"><a href="#assur"></a> ASSURANCE AUTOMOBILE-SK</h1>
        </div>
        <div class="loginbox">
            <div class="logi">
                <div class="logi-logo">
                    <img src="assets/images/images-24.jpeg" alt="">
                </div>
                <div class="logi-post">
                    <form method="POST">
                        <input type="text" name="ageCon" placeholder="Age du Conducteur" autocomplete="off">
                        <input type="text" name="annPer" placeholder="Durée d'optention de premis" autocomplete="off">
                        <input type="text" name="acc" placeholder="Nombre d'accident" autocomplete="off">
                        <input id="assur" type="submit" name="envoie" value="Assurer" autocomplete="off">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End section 2 -->

    <!-- Start main -->
    <main>
        <div class="container">
            <div class="cont-title">
                <h2 id="image">IMAGES</h2>
                <hr class="hrrr">
            </div>
            <div class="cont-images">
                <div class="cont-img1">
                    <h4>Image</h4>
                    <img src="assets/images/images-60.jpeg" alt="">
                </div>
                <div class="cont-img1">
                    <h4>Image</h4>
                    <img src="assets/images/images-58.jpeg" alt="">
                </div>
                <div class="cont-img1">
                    <h4>Image</h4>
                    <img src="assets/images/images-59.jpeg" alt="">
                </div>
                <div class="cont-img1">
                    <h4>Image</h4>
                    <img src="assets/images/images-36.jpeg" alt="">
                </div>
                <div class="cont-img1">
                    <h4>Image</h4>
                    <img src="assets/images/images-56.jpeg" alt="">
                </div>
                <div class="cont-img1">
                    <h4>Image</h4>
                    <img src="assets/images/images-48.jpeg" alt="">
                </div>
                <div class="cont-img1">
                    <h4>Image</h4>
                    <img src="assets/images/images-57.jpeg" alt="">
                </div>
            </div>
        </div>
    </main>
    <!-- End main -->

    <!-- End section 2 -->
    <footer>
        <div class="foot">
            <h5 id="connexion">Retrouvez nous sur ces comptes</h5>
            <div class="foot-connexion">
                <div class="foot-conn">
                    <a href="#" > Connexion</a>
                    <a href="#" > Confidentalité</a>
                    <a href="#" > sitemap</a>
                </div>
                <div class="foot-liens">
                    <a href="#" title="Instagram"><i class="fab fa-instagram" style="font-size: 20px;color: rgba(197, 0, 164, 0.767);"></i></a>
                    <a href="#" title="Whatsapp"><i class="fab fa-whatsapp" style="font-size: 20px; color: rgba(0, 100, 0, 0.705);"></i></a>
                    <a href="#" title="Facebook"><i class="fab fa-facebook-square" style="font-size: 20px; color: rgba(65, 105, 225, 0.788);"></i></a>
                    <a href="#" title="Twitter"><i class="fab fa-twitter" style="font-size: 20px; color: rgba(30, 143, 255, 0.733);"></i></a>
                    <a href="#" title="Telegram"><i class="fab fa-telegram-plane" style="font-size: 20px; color: rgba(30, 143, 255, 0.74);"></i></a>
                </div>
            </div>

            <hr>
            <div class="foot-lang">
                <div class="foot-copy">
                    <p>Copyright@2021 Automobile-Sk. Tous droits réservés.</p>
                </div>
                <div class="foot-select">
                    <select name="langues">
                    <option value="RD.Congo"> Français</option>
                    <option value="RD.Congo"> English</option>
                    <option value="RD.Congo"> Espagnol</option>
                    <option value="RD.Congo"> Deutsch</option>
                    <option value="RD.Congo"> Italiano</option>
                    <option value="RD.Congo"> Portugués</option>
                    <option value="RD.Congo"> Pyccknn</option>
                 </select>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>