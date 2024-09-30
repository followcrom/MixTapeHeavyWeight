<?php
$mixtape = 'Intelligentsia';
include '../header.html'; ?>

<div class="tapeReelBox">

    <div class="tape_reel-container" id="music-container">

        <div class="img-container">
            <img src="../images/tape_cog.png" alt="Spinning tape cog" id="cover">
        </div>

        <div class="progress-container" id="progress-container">


            <div class="progress-background" id="progress-background">

                <div class="progress" id="progress"></div>
            </div>

            <div class="currTime" id="currTime">00:00:00</div>
        </div>



        <div class="img-container">
            <img src="../images/tape_cog.png" alt="Spinning tape cog" id="cover">
        </div>
    </div>

</div>

<div class="transportContainer">

    <div class="transportControls">

        <div class="navigation" id="navigation">
            <button class="action-btn" id="stop">
                <i class="fas fa-stop"></i>
            </button>
            <button id="prev" class="action-btn">
                <i class="fas fa-backward"></i>
            </button>
            <button id="play" class="action-btn action-btn-big">
                <i class="fas fa-play"></i>
            </button>
            <button id="next" class="action-btn">
                <i class="fas fa-forward"></i>
            </button>


            <input type="range" min="-1" max="1" step="0.1" value="-0.1" id="volume-slider">


            <a href="../audio/db/intelligentsia.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="../audio/db/intelligentsia.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Klute - Hell Hath No Fury
    172 | Artificial Intelligence</b> - Desperado
    407 | Fred V & Grafix - Major Happy
    545 | Sigma - Nobody To Love
    703 | High Contrast</b> - Tutti Frutti
    860 | Serial Killaz - Put It On
    980 | Liz-E - The Last Time
    1083 | Q Project</b> - Milk And Honey
    1214 | Lauren Pritchard - Not The Drinking (Sigma Mix)
    1353 | Jahiem - Put That Woman First (Calibre Mix)
    1521 | M.I.S.T - Nu Wave
    1665 | Mutt - The Same We Always Feel
    1831 | Calibre - Carry Me Away
    1996 | High Contrast</b> - Lovesick
    2095 | Skitty - True Blue
    2152 | Breakage & Rohan - Ruff Dub
    2348 | Deep Blue - The Helicopter Tune
    2490 | DJ Marky & Makoto - Roundabout
    2639 | London Elektricity</b> - Great Drum Bass Swindle (Logistics Mix)
    2847 | Michael Jackson - Human Nature (Makoto & Specialist VIP)
    3044 | Bungle & Marky - 13th Floor
    3162 | Matrix & Futurebound - American Beauty
    3340 | Utah Jazz - Only One
    3528 | Artificial Intelligence - Moving On
    3672 | Logistics - City Life
    3786 | Marky & Bungle - 25th Floor (VIP)
    3965 | Liz-E - Something Inside
    4044 | Pascal - P-Funk Era (Kickback Booty)
    4150 | Alix Perez ft. Peven Everett & Spectrasoul - Forsaken
    4272 | Mr Probz - Waves (Sektor Bootleg Remix)
    4444 | LSB - The Hurting
    4551 | Artificial Intelligence ft. Steo - Forgotten Truths
    4738 | NuTone - Three Bags Full
</div>


<div class="restack">
    <div class=stack2>
        <div class="eq_viz">

            <canvas id="canvas1"></canvas>
        </div>
        <div class="eqSliders">
            <div>
                <label for="lows-slider">Lows</label>
                <input type="range" min="0" max="100" step="1" value="30" id="lows-slider">
            </div>
            <div>
                <label for="mids-slider">Mids</label>
                <input type="range" min="0" max="100" step="1" value="30" id="mids-slider">
            </div>
            <div>
                <label for="highs-slider">Highs</label>
                <input type="range" min="0" max="100" step="1" value="30" id="highs-slider">
            </div>
        </div>

    </div>

    <div class=stack3>

        <div class="playing" id="title">Intelligentsia (1:20:57)</div>


        <div class="tracklist">
            <div class="track" onclick="updatePosition(this)" data-time="0"><b>Klute</b> - Hell Hath No Fury</div>
            <div class="track" onclick="updatePosition(this)" data-time="172"><b>Artificial Intelligence</b> - Desperado
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="407"><b>Fred V & Grafix</b> - Major Happy</div>
            <div class="track" onclick="updatePosition(this)" data-time="545"><b>Sigma</b> - Nobody To Love</div>
            <div class="track" onclick="updatePosition(this)" data-time="703"><b>High Contrast</b> - Tutti Frutti</div>
            <div class="track" onclick="updatePosition(this)" data-time="860"><b>Serial Killaz</b> - Put It On</div>
            <div class="track" onclick="updatePosition(this)" data-time="980"><b>Liz-E</b> - The Last Time</div>
            <div class="track" onclick="updatePosition(this)" data-time="1083"><b>Q Project</b> - Milk And Honey</div>
            <div class="track" onclick="updatePosition(this)" data-time="1214"><b>Lauren Pritchard</b> - Not The Drinking
                (Sigma Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1353"><b>Jahiem</b> - Put That Woman First (Calibre
                Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1521"><b>M.I.S.T</b> - Nu Wave</div>
            <div class="track" onclick="updatePosition(this)" data-time="1665"><b>Mutt</b> - The Same We Always Feel</div>
            <div class="track" onclick="updatePosition(this)" data-time="1831"><b>Calibre</b> - Carry Me Away</div>
            <div class="track" onclick="updatePosition(this)" data-time="1996"><b>High Contrast</b> - Lovesick</div>
            <div class="track" onclick="updatePosition(this)" data-time="2095"><b>Skitty</b> - True Blue</div>
            <div class="track" onclick="updatePosition(this)" data-time="2152"><b>Breakage & Rohan</b> - Ruff Dub</div>
            <div class="track" onclick="updatePosition(this)" data-time="2348"><b>Deep Blue</b> - The Helicopter Tune</div>
            <div class="track" onclick="updatePosition(this)" data-time="2490"><b>DJ Marky & Makoto</b> - Roundabout</div>
            <div class="track" onclick="updatePosition(this)" data-time="2639"><b>London Elektricity</b> - Great Drum
                Bass Swindle (Logistics Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2847"><b>Michael Jackson</b> - Human Nature (Makoto
                & Specialist VIP)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3044"><b>Bungle & Marky</b> - 13th Floor</div>
            <div class="track" onclick="updatePosition(this)" data-time="3162"><b>Matrix & Futurebound</b> - American Beauty
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="3340"><b>Utah Jazz</b> - Only One</div>
            <div class="track" onclick="updatePosition(this)" data-time="3528"><b>Artificial Intelligence</b> - Moving On
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="3672"><b>Logistics</b> - City Life</div>
            <div class="track" onclick="updatePosition(this)" data-time="3786"><b>Marky & Bungle</b> - 25th Floor (VIP)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="3965"><b>Liz-E</b> - Something Inside</div>
            <div class="track" onclick="updatePosition(this)" data-time="4044"><b>Pascal</b> - P-Funk Era (Kickback Booty)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="4150"><b>Alix Perez ft. Peven Everett &
                    Spectrasoul</b> - Forsaken</div>
            <div class="track" onclick="updatePosition(this)" data-time="4272"><b>Mr Probz</b> - Waves (Sektor Bootleg
                Remix)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="4444"><b>LSB</b> - The Hurting</div>
            <div class="track" onclick="updatePosition(this)" data-time="4551"><b>Artificial Intelligence ft. Steo</b> -
                Forgotten Truths</div>
            <div class="track" onclick="updatePosition(this)" data-time="4738"><b>NuTone</b> - Three Bags Full</div>
        </div>
    </div>
</div>


<div class="reviewsStrip">
    <?php include '../reviewForm.php'; ?>

    <div class="reviewsBox">

        <?php
        include('../review_handler.php');
        ?>


    </div>
</div>


<script>
    (function() {
        var script = document.createElement('script');
        script.type = 'text/javascript';

        if (window.matchMedia("(max-width: 480px)").matches) {
            script.src = "../js/djMixPlayer_Sma.js";
        } else {
            script.src = "../js/djMixPlayer.js";
        }

        document.head.appendChild(script);
    })();
</script>

</body>

</html>