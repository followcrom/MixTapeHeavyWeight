<?php
$mixtape = 'Noodles';
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


            <a href="../audio/gf/noodles.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="../audio/gf/noodles.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Beastie Boys - Make Some Noise (Mr Ours & WBBL Remix)
    125 | Dubra & Arteo - Bounce With Me
    218 | Wicked City - Furious
    359 | Jack U ft. Oliver - To U (Dubra Booty)
    524 | Marvin Gaye - Let's Get It On (X-Ray Tedit)
    681 | The Captain - Bam!
    867 | Rufus Thomas - Fried Chicken (Slynk Mix)
    1005 | WBBL & Father Funk - The Recipe For Concentrated Dark Matter
    1146 | Mat Zo - The Enemy (Dubra Edit)
    1297 | Father Funk - Twistin'
    1372 | Funkdoobiest ft. B-Real - Wopbabalubop (Sammy Senior Booty)
    1512 | Cut La Roc - Sunday Morning People (Herbgrinder Mix)
    1629 | Yolanda Be Cool & DCUP - Soul Makossa (Wide Awake Mix)
    1748 | Eek-A-Mouse - Wa-Do-Dem (Father Funk Booty)
    1874 | Defkline & Red Polo vs. Dancefloor Outlaws - Wonderful World
    1978 | Ohio Players - Love Rollercoaster (Father Funk Booty)
    2089 | Daytoner - Move Me More
    2258 | Illvis Freshly - Til It's Gone (Father Funk Remix)
    2352 | Sammy Senior - No Biggie
    2445 | The Doors - Peace Frog (The Captain Mix)
    2678 | Dubra & Arteo - Fat Ass Beat
    2789 | Slynk - You're The Fool (2014 Remaster)
    2970 | Dubra & Arteo - The Funk Phenomenon
    3087 | Pimpsoul ft. Pat Fulgon - Is This Love?
    3202 | Mooqee & Beatvandals - Back Up (2015 Re-edit)
    3289 | Mr Stabalina - Roll Up The Flava
    3420 | Kool & The Gang - Get Down On It (Dubra Booty)
    3571 | Porter Robinson - Flicker (Featurecast Edit)
    3722 | Dubra & Arteo - Blind
    3855 | Dubra & Arteo - Sexy Back
    3931 | Rufus Thomas - Push & Pull (Forrest Funk Rework)
    4111 | Dubra & Arteo - Kill A Man
    4240 | Featurecast - Sniper
    4428 | Lack Jemmon - Uncle Funky
    4541 | Joe Cuba vs Awesome 3 - Kicks Like Bang Bang (Nappy Riddem Mash-Up)
    4708 | Los Charlys Orchestra - My Barrio (Jimi Needles Mix)
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

        <div class="playing" id="title">Noodles (1:22:27)</div>


        <div class="tracklist">
            <div class="track" onclick="updatePosition(this)" data-time="0"><b>Beastie Boys</b> - Make Some Noise (Mr
                Ours & WBBL Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="125"><b>Dubra & Arteo</b> - Bounce With Me
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="218"><b>Wicked City</b> - Furious</div>
            <div class="track" onclick="updatePosition(this)" data-time="359"><b>Jack U ft. Oliver</b> - To U (Dubra
                Booty)</div>
            <div class="track" onclick="updatePosition(this)" data-time="524"><b>Marvin Gaye</b> - Let's Get It On
                (X-Ray Tedit)</div>
            <div class="track" onclick="updatePosition(this)" data-time="681"><b>The Captain</b> - Bam!</div>
            <div class="track" onclick="updatePosition(this)" data-time="867"><b>Rufus Thomas</b> - Fried Chicken (Slynk
                Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1005"><b>WBBL & Father Funk</b> - The Recipe
                For Concentrated Dark Matter</div>
            <div class="track" onclick="updatePosition(this)" data-time="1146"><b>Mat Zo</b> - The Enemy (Dubra Edit)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="1297"><b>Father Funk</b> - Twistin'</div>
            <div class="track" onclick="updatePosition(this)" data-time="1372"><b>Funkdoobiest ft. B-Real</b> -
                Wopbabalubop (Sammy Senior Booty)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1512"><b> Cut La Roc</b> - Sunday Morning
                People (Herbgrinder Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1629"><b>Yolanda Be Cool & DCUP</b> - Soul
                Makossa (Wide Awake Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1748"><b>Eek-A-Mouse</b> - Wa-Do-Dem (Father
                Funk Booty)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1874"><b>Defkline & Red Polo
                    vs. Dancefloor Outlaws</b> - Wonderful World</div>
            <div class="track" onclick="updatePosition(this)" data-time="1978"><b>Ohio Players</b> - Love Rollercoaster
                (Father Funk Booty)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2089"><b>Daytoner</b> - Move
                Me More</div>
            <div class="track" onclick="updatePosition(this)" data-time="2258"><b>Illvis Freshly</b> - Til It's Gone
                (Father Funk Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2352"><b>Sammy Senior</b> - No Biggie</div>
            <div class="track" onclick="updatePosition(this)" data-time="2445"><b>The Doors</b> - Peace Frog (The
                Captain Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2678"><b>Dubra & Arteo</b> -
                Fat Ass Beat</div>
            <div class="track" onclick="updatePosition(this)" data-time="2789"><b>Slynk</b> - You're
                The Fool (2014 Remaster)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2970"><b>Dubra & Arteo</b> -
                The Funk Phenomenon</div>
            <div class="track" onclick="updatePosition(this)" data-time="3087"><b>Pimpsoul ft. Pat Fulgon</b> - Is This
                Love?</div>
            <div class="track" onclick="updatePosition(this)" data-time="3202"><b>Mooqee & Beatvandals</b> - Back Up
                (2015 Re-edit)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3289"><b>Mr Stabalina</b> - Roll Up The Flava
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="3420"><b>Kool & The Gang</b>
                - Get Down On It (Dubra Booty)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3571"><b>Porter Robinson</b>
                - Flicker (Featurecast Edit)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3722"><b>Dubra & Arteo</b> -
                Blind</div>
            <div class="track" onclick="updatePosition(this)" data-time="3855"><b>Dubra & Arteo</b> -
                Sexy Back</div>
            <div class="track" onclick="updatePosition(this)" data-time="3931"><b>Rufus Thomas</b> - Push & Pull
                (Forrest Funk Rework)</div>
            <div class="track" onclick="updatePosition(this)" data-time="4111"><b>Dubra & Arteo</b> -
                Kill A Man</div>
            <div class="track" onclick="updatePosition(this)" data-time="4240"><b> Featurecast</b> - Sniper</div>
            <div class="track" onclick="updatePosition(this)" data-time="4428"><b>Lack Jemmon</b> - Uncle Funky</div>
            <div class="track" onclick="updatePosition(this)" data-time="4541"><b>Joe Cuba vs Awesome
                    3</b> - Kicks Like Bang Bang (Nappy Riddem Mash-Up)</div>
            <div class="track" onclick="updatePosition(this)" data-time="4708"><b>Los Charlys Orchestra</b> - My Barrio
                (Jimi Needles Mix)</div>

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