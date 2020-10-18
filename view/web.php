<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once('view/include/head.html'); ?>
    <title>Productions web - Pierre Marquet</title>
</head>

<body>

    <?php include_once('view/include/nav.html'); ?>

    <main class="container">
        <h1 class="text-center">Mes productions web</h1>
        <p class="mb-4 text-center font-italic">Cliquez un élément pour l'agrandir</p>
        <div class=" d-flex flex-wrap justify-content-center">
            <div class="production">
                <a href="./sources/web/MaquetteSiteCPMGN.pdf" onclick="window.open(this.href); return false;"><img src="./sources/web/MaquetteSiteCPMGN.jpg" alt="Réalisation"></a>
                <p class="workTitle">Maquette site Intranet CPMGN</p>
            </div>
            <div class="production">
                <a href="./sources/web/MaquetteSiteCorbieres.pdf" onclick="window.open(this.href); return false;"><img src="./sources/web/MaquetteSiteCorbieres.jpg" alt="Réalisation"></a>
                <p class="workTitle">Maquette site Corbières sauvages</p>
            </div>
            <div class="production">
                <a href="https://www.facebook.com/groups/317800748386555" onclick="window.open(this.href); return false;"><img src="./sources/web/SiteWebTeamRocket.png" alt="Réalisation"></a>
                <p class="workTitle">Site web la Team Rocket <br><span class="text-danger font-bold font-weight-bold">en cours de mise en ligne</span></p>
            </div>
        </div>
    </main>

    <?php include_once('view/include/footer.html'); ?>

</body>

</html>