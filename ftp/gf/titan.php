<?php
$mixtape = 'Titan Spinning';
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


            <a href="../audio/gf/titan.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="../audio/gf/titan.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | WBBL - Keep Me
    141 | D'Angelo - Brown Sugar (Father Funk Mix)
    256 | Cut La Roc - Bassheads (Mr. No Hands Remix)
    376 | Crash Party - Dread Or Alive
    498 | Major Lazer ft. Bad Royale - My Number (Dub:ra Edit)
    609 | Father Funk - Nomesayin'
    750 | Father Funk ft. Timothy Wisdom - Get Happy
    836 | Kibosh - No Matter
    955 | Liberty Chaps - Fun Addict
    1092 | Beat Le Juice - Day After Day
    1246 | Visual - The Music Got Me (Frankee More Mix)
    1403 | Outkast - Roses (The Niceguys Mix)
    1569 | Arteo - Funky Technician
    1657 | Sammy Senior - Break It Down
    1851 | Slynk - Dancefloor Silly
    1992 | Griz & Big Gigantic - Come On (Featurecast Mix)
    2110 | Jimi Needles - Biggie Banger
    2235 | Arteo - You'll Never Know with Born To Roll (Acapella)
    2411 | Lords of the Underground - Funky Child (Featurecast Booty)
    2488 | Trashmen vs. Yuri Viroj - Surfing Bird Dreams (Featurecast Mash-Up)
    2605 | Sammy Senior - Mandela Effect
    2753 | Skeewiff - No Puede Esperar
    2885 | Father Funk - Golden Era
    2954 | De La Soul - Ring Ring Ring (Frankee More Re-Funk) with Spam (Acapella)
    3115 | Slynk - Lady Pepper Groove
    3217 | Slynk - Holy Calamity
    3356 | Jimi Hendrix - Voodoo Child (Father Funk Mix)
    3492 | Captain Flatcap - Awakening (Liberty Chaps Mix)
    3650 | Grandmaster Flash and the Furious 5 - The Message (WBBL Rekt Remix)
    3829 | De La Soul - Eye Know (X-Ray Tedit)
    3996 | Cookin' On 3 Burners - This Girl (Father Funk Mix)
    4170 | The Clash - Train In Vain (Bobby C Sound TV Mix)
    4359 | Rolling Stones - Sympathy For The Devil (The Captain & Goodgroove Mix)
    4689 | Skeewiff - Mr Debonair (Instrumental)
    4809 | Skeewiff ft. Vanessa Contenay - Mr Debonair
    4947 | J Hus - Did You See?
    5132 | Fetty Wap ft. Monty - Way You Are
</div>


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

    <div class="playing" id="title">Titan Spinning (1:29:55)</div>


    <div class="tracklist">
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>WBBL</b> - Keep Me</div>
        <div class="track" onclick="updatePosition(this)" data-time="141"><b>D'Angelo</b> - Brown Sugar (Father Funk
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="256"><b>Cut La Roc</b> - Bassheads (Mr. No Hands
            Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="376"><b>Crash Party</b>
            - Dread Or Alive</div>
        <div class="track" onclick="updatePosition(this)" data-time="498"><b>Major Lazer ft. Bad Royale</b> - My
            Number (Dub:ra Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="609"><b>Father Funk</b>
            - Nomesayin'</div>
        <div class="track" onclick="updatePosition(this)" data-time="750"><b>Father Funk ft. Timothy Wisdom</b> - Get
            Happy</div>
        <div class="track" onclick="updatePosition(this)" data-time="836"><b>Kibosh</b> - No
            Matter</div>
        <div class="track" onclick="updatePosition(this)" data-time="955"><b>Liberty Chaps</b> - Fun Addict</div>
        <div class="track" onclick="updatePosition(this)" data-time="1092"><b>Beat Le Juice</b> - Day After Day</div>
        <div class="track" onclick="updatePosition(this)" data-time="1246"><b>Visual</b> - The Music Got Me (Frankee
            More Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1403"><b>Outkast</b> - Roses (The Niceguys Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1569"><b>Arteo</b> - Funky Technician</div>
        <div class="track" onclick="updatePosition(this)" data-time="1657"><b>Sammy Senior</b> - Break It Down</div>
        <div class="track" onclick="updatePosition(this)" data-time="1851"><b>Slynk</b> - Dancefloor Silly</div>
        <div class="track" onclick="updatePosition(this)" data-time="1992"><b>Griz & Big Gigantic</b> - Come On
            (Featurecast Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2110"><b>Jimi Needles</b> - Biggie Banger</div>
        <div class="track" onclick="updatePosition(this)" data-time="2235"><b>Arteo</b> - You'll Never Know with Born
            To Roll (Acapella)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2411"><b>Lords of the Underground</b> - Funky
            Child (Featurecast Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2488"><b>Trashmen vs. Yuri Viroj</b> - Surfing
            Bird Dreams (Featurecast Mash-Up)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2605"><b>Sammy Senior</b> - Mandela Effect</div>
        <div class="track" onclick="updatePosition(this)" data-time="2753"><b>Skeewiff</b> -
            No Puede Esperar</div>
        <div class="track" onclick="updatePosition(this)" data-time="2885"><b>Father Funk</b> - Golden Era</div>
        <div class="track" onclick="updatePosition(this)" data-time="2954"><b>De La Soul</b>
            - Ring Ring Ring (Frankee More Re-Funk) with Spam (Acapella)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3115"><b>Slynk</b> - Lady Pepper Groove</div>
        <div class="track" onclick="updatePosition(this)" data-time="3217"><b>Slynk</b> - Holy Calamity</div>
        <div class="track" onclick="updatePosition(this)" data-time="3356"><b>Jimi Hendrix</b> - Voodoo Child (Father
            Funk Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3492"><b>Captain Flatcap</b> - Awakening
            (Liberty Chaps Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3650"><b>Grandmaster Flash and the Furious 5</b>
            - The Message (WBBL Rekt Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3829"><b>De La Soul</b>
            - Eye Know (X-Ray Tedit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3996"><b>Cookin' On 3 Burners</b> - This Girl
            (Father Funk Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4170"><b>The Clash</b> - Train In Vain (Bobby C
            Sound TV Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4359"><b>Rolling Stones</b> - Sympathy For The
            Devil (The Captain & Goodgroove Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4689"><b>Skeewiff</b> -
            Mr Debonair (Instrumental)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4809"><b>Skeewiff ft. Vanessa Contenay</b> - Mr
            Debonair</div>
        <div class="track" onclick="updatePosition(this)" data-time="4947"><b>J Hus</b> - Did You See?</div>
        <div class="track" onclick="updatePosition(this)" data-time="5132"><b>Fetty Wap ft.
                Monty</b> - Way You Are</div>
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