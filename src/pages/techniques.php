<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeste - Techniques</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require("src/header.php"); ?>

    <main class="techniques">
        <h1>Techniques</h1>
        <p>
            Techniques, often simply known as tech, are special moves Madeline can do to enhance her mountain-climbing
            ability. They come in a wide range of uses and difficulties. Many can be used to skip sections of a room, or
            multiple rooms at once.

        </p>
        <h2 id="dash-tech">Dash Tech</h2>
        <div class="column">
            Dash Techs require a dash to perform them.
            <br>
            "Extending" a dash tech allows ample time (10 to 15 frames) touching the ground to restore the dash. "Reversing"
            a dash
            tech creates a launch trajectory opposite of the direction dashed to by pressing the opposite direction key
            in-between
            dashing and jumping.
            <br>
            Superdashes and Hyperdashes can be extended. All dash techs except for Demodashes and Wallbounces can be
            reversed.
            Trajectory height can be adjusted by holding down the Jump key for different durations.
        </div>
        <h3>Superdash (Super)</h3>
        <div class="hor-flex">
            <div class="column">
                Supers are the most basic dash tech. Compared to Hyperdashes, they travel in a higher and shorter arc.
                <br>
                To perform a Superdash, dash parallel to the ground and press Jump before the dash ends.
                <br>
                Superdashes can be extended or reversed.
            </div>
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/techniques/super-dash.gif" alt="Super dash showcase">
            </div>
        </div>
        <h3>Hyperdash (Hyper)</h3>
        <div class="hor-flex">
            <div class="column">
                Hypers are a quick and easy way to move quickly on flat ground or traverse large gaps. Compared to
                Superdashes,
                they
                travel in a lower but farther-reaching arc.
                <br>
                To perform a Hyperdash, dash diagonally down along the ground and press Jump before the dash ends. To
                perform a
                Hyper
                mid-air, see Demodash below.
                <br>
                Hyperdashes can be extended or reversed.
            </div>
        </div>
        <h3>Wavedash</h3>
        <div class="hor-flex">
            <div class="column">
                Wavedashes are functionally identical to Hyperdashes in that they provide the same speed, however,
                Wavedashes can be
                done on smaller surfaces. Wavedashing is taught in Farewell.
                To perform a Wavedash, dash diagonally down towards the ground and press Jump as you touch it. If you don't
                regain a
                dash, dash from higher up before jumping. If you don't travel far, dash from lower before jumping.
                <br>
                Wavedashes can be reversed.
            </div>
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/techniques/wavedash.gif" alt="Wavedash showcase">
            </div>
        </div>
        <h3>Ultradash (Ultra)</h3>
        <div class="hor-flex">
            <div class="column">
                An Ultradash, commonly referred to as an Ultra, is a diagonal-down (↘) dash performed when Madeline is
                traveling with a
                high horizontal velocity. By doing it, she gains a 1.2x multiplier to her horizontal speed upon touching the
                ground.
                Unlike every other dash, an ultra doesn't reset Madeline's speed to 0 provided it ends mid-air. Thus, it
                allows going
                very fast on suitable terrain.
                The simplest and most common way to perform an Ultra is to perform a hyperdash and dash down-diagonally as
                soon as
                possible. The dash must end before Madeline touches the ground to maintain the momentum, so players should
                start from
                high enough up that it will end before they land. It's important to jump right after you touch the ground to
                lose as
                little speed to friction as possible. Players should aim not to buffer the jump input because this is likely
                to prevent
                the 1.2x boost, and instead should try to press jump after landing on the ground.
                <br><br>
                Grounded Ultras: Grounded Ultras are the fastest way to move on flat terrain (390 speed optimally). Dashing
                down-diagonally while on or very close to the ground will still give the 1.2x speed boost, but all of it
                will be lost
                when the dash ends.
                <br><br>
                To perform a Grounded Ultra, do an extended Hyper and down-diagonally dash as soon as possible (extended
                Super also
                works but is slower). This results in a dash with 390 speed optimally and floor correction if dashing in the
                first two
                frames after jumping. Because this is essentially the same input as a Hyper (a down-diagonal dash into the
                ground),
                players can jump before the dash ends to perform a Hyper and be given 325 speed and Hyper height. This can
                be chained
                infinitely on flat terrain by dashing down diagonally right after jumping. It's more optimal to jump as late
                as
                possible, on the 14th frame optimally.
                <br><br>
                Chained Ultras: Multiple Ultras can be done in a row. This requires a very specific terrain, but Madeline
                can quickly
                reach incredible speeds due to the multiplicative speed gain of Ultras.
            </div>
        </div>
        <h3>Demodash (Demo)</h3>
        <div class="hor-flex">
            <div class="column">
                Demodashes, also known as crouch dashes in-game, is a technique that allows the player to dash with the
                crouched hurtbox
                (4 pixels instead of 9), allowing you to slip through spinners, dust bunnies, and other obstacles unharmed,
                provided the
                gap between them is at least 4 pixels.
                You can bind a Demo button in-game since the 1.4.0.0 version of the game. You can manually do Demos by
                pressing the Down
                key before (within 4 frames or 0.068 seconds) - but not during - a dash. There are no advantages to doing
                them manually,
                but it can be the only way to perform them on a console with a version prior to 1.4.0.0.
                <br><br>
                Demohyper: Jumping during a Demo will result in a Hyper because of the crouched state needed for the Demo in
                the first
                place, allowing you to start a Hyper mid-air. Demohypers have a higher dash speed (240 instead of 169) than
                regular
                Hypers since they're horizontal and not diagonal dashes, although this can make them harder or even
                impossible to extend
                in some cases.
            </div>
        </div>
        <h3>Wallbounce (wb)</h3>
        <div class="hor-flex">
            <div class="column">
                Wallbounces are a technique mainly used to gain height. They are functionally identical to Supers, but are
                performed by
                doing a dash upwards. Unlike Supers, they will not restore your dash since you aren't touching the ground.
                <br><br>
                To do a Wallbounce, dash up and walljump during the dash duration. It is to be noted that Wallbounces
                vertical speed is
                slightly lower than the updash's. Thus, wallbouncing as late as possible is more optimal for gaining height.
                <br><br>
                Bubble Wallbounce: Wallbounces can be performed directly out of a green or a red bubble.
                <br><br>
                Transition Wallbounce: Since the game keeps your dash state through transitions, it is possible to updash
                into a
                transition and Wallbounce in the next room while still in the dash state. Because the game restores your
                dash(es)
                between screen transitions, you'll still have your dash after doing such Wallbounce.
            </div>
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/techniques/wallbouncing.gif" alt="Wallbounce showcase">
            </div>
        </div>
        <h2 id="dashless-tech">Dashless Tech</h2>
        <div class="column">
            Dashless Tech refers to techniques that don't need a dash to perform. They tend to be more complex or precise.
        </div>
        <h3>Bunnyhop (Bhop)</h3>
        <div class="hor-flex">
            <div class="column">
                A bunnyhop is loosely defined as jumping the moment Madeline hits the ground. Because there is more friction
                on the ground than in the air, bunnyhops allow Madeline to conserve speed over longer distances.
                Bunnyhops are often used after a Wavedash or a Hyper to get a greater height and keep the speed received.
                <br><br>
                Chained Bunnyhop: Because each jump gives Madeline a short burst of speed (+40 speed), repeating bunnyhops
                is the fastest method of dashless movement along flat ground. They are frequently used by speedrunners in
                Prologue, as it is not possible to dash there.
            </div>
        </div>
        <h3>Cornerkick</h3>
        <div class="hor-flex">
            <div class="column">
                A bunnyhop is loosely defined as jumping the moment Madeline hits the ground. Because there is more friction
                on the ground than in the air, bunnyhops allow Madeline to conserve speed over longer distances.
                Bunnyhops are often used after a Wavedash or a Hyper to get a greater height and keep the speed received.
                <br><br>
                Chained Bunnyhop: Because each jump gives Madeline a short burst of speed (+40 speed), repeating bunnyhops
                is the fastest method of dashless movement along flat ground. They are frequently used by speedrunners in
                Prologue, as it is not possible to dash there.
            </div>
        </div>
        <h3>Crouch Jump / Crouch Climb</h3>
        <div class="hor-flex">
            <div class="column">
                A bunnyhop is loosely defined as jumping the moment Madeline hits the ground. Because there is more friction
                on the ground than in the air, bunnyhops allow Madeline to conserve speed over longer distances.
                Bunnyhops are often used after a Wavedash or a Hyper to get a greater height and keep the speed received.
                <br><br>
                Chained Bunnyhop: Because each jump gives Madeline a short burst of speed (+40 speed), repeating bunnyhops
                is the fastest method of dashless movement along flat ground. They are frequently used by speedrunners in
                Prologue, as it is not possible to dash there.
            </div>
        </div>
        <h3>Neutral Jump (Neutral)</h3>
        <div class="hor-flex">
            <div class="column">
                A bunnyhop is loosely defined as jumping the moment Madeline hits the ground. Because there is more friction
                on the ground than in the air, bunnyhops allow Madeline to conserve speed over longer distances.
                Bunnyhops are often used after a Wavedash or a Hyper to get a greater height and keep the speed received.
                <br><br>
                Chained Bunnyhop: Because each jump gives Madeline a short burst of speed (+40 speed), repeating bunnyhops
                is the fastest method of dashless movement along flat ground. They are frequently used by speedrunners in
                Prologue, as it is not possible to dash there.
            </div>
            <div class="celeste-image-container">
                <img class="celeste-image" src="../assets/techniques/neutral-jumping.gif" alt="Neutral jump showcase">
            </div>
        </div>
        <h3>5 Jump</h3>
        <div class="hor-flex">
            <div class="column">
                A bunnyhop is loosely defined as jumping the moment Madeline hits the ground. Because there is more friction
                on the ground than in the air, bunnyhops allow Madeline to conserve speed over longer distances.
                Bunnyhops are often used after a Wavedash or a Hyper to get a greater height and keep the speed received.
                <br><br>
                Chained Bunnyhop: Because each jump gives Madeline a short burst of speed (+40 speed), repeating bunnyhops
                is the fastest method of dashless movement along flat ground. They are frequently used by speedrunners in
                Prologue, as it is not possible to dash there.
            </div>
        </div>
        <h3>Cornerboost (cb)</h3>
        <div class="hor-flex">
            <div class="column">
                When climbjumping on the top of a corner with horizontal momentum, it is possible to conserve all of her
                previous
                momentum while also gaining +40 speed if the climbjump is done before touching the wall. This is called a
                cornerboost.
                They also cancel dashes, so their speed is preserved instead of lost at the end of the dash. If going above
                180 speed,
                it isn't assured that you can climbjump before touching the wall, even if you're buffering it.
                <br><br>
                Downward Cornerboosts: Doing a cornerboost while Madeline has downward momentum works differently than when
                she has
                upward or horizontal momentum: Madeline loses all her speed and does a regular climbjump unless there are 2
                pixels
                separating Madeline from the wall, making those cornerboosts horizontally pixel perfect.
                <br><br>
                6 Jump: 6 Jumps utilize cornerboosts as a dashless tech, where a 5 Jump is done while already having
                horizontal
                momentum. To do a 6 Jump, get some horizontal motion to the wall corner and climbjump on it as if you were
                doing the
                second half of a 5 Jump. A cornerboost will be done instead, spanning 6 tiles.
            </div>
        </div>
        <h3>Throwable Backboost (Backboost)</h3>
        <div class="hor-flex">
            <div class="column">
                Throwing an object opposite the direction Madeline is moving gives her a little speed boost.
            </div>
        </div>
    </main>
</body>
