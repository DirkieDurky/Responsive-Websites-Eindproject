<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <a class="header-image-link" href="index.html">
        <img class="header-image" src="assets/logo.png" alt="Celeste logo">
    </a>
    <?php require("src/header.php"); ?>

    <main class="home">
        <h1>Over deze website</h1>
        <p>
            Hoi, Hallo, je bevindt je nu op onze inzending van het eindproject van <u title="ATD Responsive Websites (HTML/CSS) 2023-24 P1">ATD Responsive websites</u>.<br />
            Dit kan betekenen dat je hier bent omdat je dit project moet beoordelen, of misschien ben je hier op een andere manier terecht gekomen, in ieder geval welkom!<br />
            Het doel van dit project was om een website te maken met een coole layout die op alle platformen werkt.<br />
            We hebben gebruik gemaakt van "lorem ipsum". Dat is meningloze tekst die er in dit geval voor zorgt dat je niet wordt afgeleid door de tekst.
        </p>
        <p>
            Nou zit je mischien te denken: "Wat een grote site, waar moet ik nu beginnen?". Geen zorgen!<br />
            Hieronder hebben we al een aantal interesante pagina's staan die je naar de belangerijkste punten van de site brengen.<br />
            Binnen een aantal van deze pagina's kan je zelfs nog navigeren naar nog meer pagina's, natuurlijk kan je ook altijd nog gebruik maken van het navigatiemenu hierboven.
        </p>
        <p>
            Deze site heeft de stijl van een wiki voor de game <a href="https://www.celestegame.com/">Celeste</a>, het is zeker een aanrader. Veel plezier!
        </p>
        <div class=" grid">
            <div class="container">
                <h1><a href="mechanics">Mechanics</a></h1>
                <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
            </div>
            <div class="container">
                <h1><a href="techniques">Technieken</a></h1>
                <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
            </div>
            <div class="container">
                <h1><a href="story">Verhaal</a></h1>
                <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
            </div>
            <div class="container">
                <h1><a href="photo-gallery">Fotogallerij</a></h1>
                <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
            </div>
            <div class="container">
                <h1><a href="about-us">Over ons</a></h1>
                <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
            </div>
            <div class="container">
                <h1><a href="contact">Contact</a></h1>
                <p><?= Lorem::text(2, 3, 15, "</p><p>") ?></p>
            </div>
        </div>
        <div class="sources">
            De afbeeldingen en gifs op deze website komen van <a href="https://celeste.ink/w/index.php?title=Main_Page&oldid=5600">Celeste Wiki</a><br>
            Het Renogare font is van <a href="https://www.dafont.com/renogare.font">Dafont.com</a><br>
            Icoontjes komen van <a href="https://fontawesome.com/icons">FontAwesome</a>
        </div>
    </main>
</body>

</html>
