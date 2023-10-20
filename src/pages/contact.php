<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - Contact</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/pages.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="contact">
        <h1>Contact</h1>
        <hr />
        <div class="content">
            <p>Heb je een vraag, suggestie, of wil je om een andere reden contact met ons opnemen? Dat kan via dit formulier!</p>
            <form class="contact-form container">
                <div class="label-container">
                    <label>
                        Naam<br />
                        <input type="text" placeholder="Naam">
                    </label>
                    <label>
                        Email<br />
                        <input type="text" placeholder="Email">
                    </label>
                </div>
                <label>
                    Bericht<br>
                    <textarea placeholder="Bericht"></textarea>
                </label>
                <input type="submit" value="Versturen">
            </form>
        </div>
    </main>
</body>

</html>
