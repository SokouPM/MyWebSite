<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once('view/include/head.html'); ?>
    <script src="./library/js/age.js"></script>
    <title>Présentation - Pierre Marquet</title>
</head>

<body>

    <?php include_once('view/include/nav.html'); ?>

    <main class="container">
        <div class="profile">
            <img class="rounded-circle" id="profilePicture" src="./sources/files/profile.jpg" alt="Photo de profil" width="200" height="200">
            <div class="ml-5 mr-5">
                <h1 id="name">Pierre Marquet</h1>
                <h2 id="job">Infographiste / Développeur Web</h2>
                <h3><i class="fa fa-map-marker"></i> Paris</h3>
            </div>
            <img src="./sources/files/logoBl.png" alt="Mon logo" class="todisappear" id="logo" height="200">
        </div>
        <div class="mt-3">
            <p id="presentation" class="text-justify text-dark">
                Issu du monde de l'<strong>infographie</strong>, j'ai travaillé pendant 5 ans pour la <strong>Gendarmerie Nationale</strong> afin de mettre en forme des parcours d'enseignements à travers l'image et l'animation. je me suis ensuite formé au métier de <strong>développeur web</strong> pour travailler dans un domaine qui me passionne et devenir plus polyvalent.
            </p>
        </div>
        <div class="d-flex flex-wrap justify-content-center">
            <a href="https://www.linkedin.com/in/pierre-marquet-98987b199/" onclick="window.open(this.href); return false;" class="link btn btn-primary btn-lg"><i class="fa fa-linkedin"> | Voir mon linkedin</i></a>
            <a href="https://github.com/SokouPM" onclick="window.open(this.href); return false;" class="link btn btn-secondary btn-lg "><i class="fa fa-github"> | Voir mon github</i></a>
            <a href="mailto:marquet_pierre@yahoo.fr" class="link btn btn-danger btn-lg"><i class="fa fa-envelope">
                    | Contactez-moi</i></a>
            <a href="./sources/files/CV_PierreMarquet.pdf" onclick="window.open(this.href); return false;" class="link btn btn-success btn-lg"><i class="fa fa-file"> | Téléchargez mon CV</i></a>
        </div>

        <!-- carousel -->
        <div id="carouselSlide" class="carousel slide mt-5" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#carouselSlide" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSlide" data-slide-to="1"></li>
                <li data-target="#carouselSlide" data-slide-to="2"></li>
                <li data-target="#carouselSlide" data-slide-to="3"></li>
            </ul>
            <!-- carousel pictures -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./sources/carousel/1.png" alt="Réalisation" width="100%" height="600">
                </div>
                <div class="carousel-item">
                    <img src="./sources/carousel/2.png" alt="Réalisation" width="100%" height="600">
                </div>
                <div class="carousel-item">
                    <img src="./sources/carousel/3.png" alt="Réalisation" width="100%" height="600">
                </div>
                <div class="carousel-item">
                    <img src="./sources/carousel/4.png" alt="Réalisation" width="100%" height="600">
                </div>
            </div>
            <!-- carousel controls -->
            <a class="carousel-control-prev" href="#carouselSlide" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carouselSlide" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

    </main>

    <?php include_once('view/include/footer.html'); ?>

</body>

</html>