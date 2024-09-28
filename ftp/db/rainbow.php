<?php include '../header.html'; ?>

<div class="tape">
    <div class="top_label">A: Under the Black Rainbow (1:19:05)</div>

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


                <a href="../audio/db/rainbow.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="../audio/db/rainbow.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Commune intro
    120 | Vital Elements - Pipes Of Thunder
    274 | Leaf - Jah
    394 | Ed Solo - Murderer (Deekline & Specimen A Remix)
    568 | K Jah - Soundbwoy Killing
    701 | Chronixx - Plant It (Jamie Bostron Remix)
    901 | Jimmy Riley - Sweet Sensi (Jamie Bostron Remix)
    984 | K Jah - Dust Off A Soundbwoy
    1103 | Dogger ft. Liam Bailey - Rebels
    1261 | DJ Limited - Sun (Vocal Mix)
    1355 | TC ft. Jakes - Deep
    1495 | Upgrade - Popular
    1648 | Mefjus - The Chase
    1722 | A.M.C & Turno - Alliance (VIP)
    1824 | Run Tingz Crew ft. YT - Born Inna Babylon
    1972 | Goldstar & Marcus Visionary B - Eyes Down
    2061 | Kelvin 373 ft. Navigator - Dubplate Massive
    2175 | Visionary ft. D. Suade - Fall in Love (Refix)
    2303 | Beast Mode - Bossman
    2468 | Cocoa Tea - Christmas is Coming (Jamie Bostron Mix)
    2597 | Deekline - Coach House
    2654 | The Streets - The Escapist (DJ Limited Edit)
    2854 | Vital Elements & Micky Finn - True Guiditance
    3005 | Inner Circle ft. Chronixx & Jacob Miller - Tenement Yard (Jamie Bostron Remix)
    3118 | Sound Energy - Flux
    3189 | 1991 - Midnight
    3344 | Supa Ape ft. Top Cat - Glamour
    3472 | Bladeperunner & Johnny Osbourne - Night Fall Dub
    3601 | Top Cat - Gal A Look Nice (Raz Remix)
    3744 | Screechy Dan & Johnny Osbourne - My Sound Stands Alone (Jamie Bostron Remix)
    3928 | Kyo & Total Science - Murder Tonight
    4059 | Turno - Asylum
    4177 | Vital Elements - Mushroom X
    4322 | Brian Brainstorm - Nuh Ramp
    4518 | Jehst - Euluogy
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

    <div class="playing" id="title">Tracklist (click on a song to play)</div>


    <div class="tracklist">
        <div class="track" onclick="updatePosition(this)" data-time="0">
            <b>Commune</b> intro
        </div>


        <div class="track" onclick="updatePosition(this)" data-time="120"><b>Vital Elements</b> - Pipes Of Thunder
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="274">
            <b>Leaf</b> - Jah
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="394">

            <b>Ed Solo</b> - Murderer (Deekline & Specimen A Remix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="568"><b>K Jah</b> - Soundbwoy Killing</div>

        <div class="track" onclick="updatePosition(this)" data-time="701">
            <b>Chronixx</b> - Plant It (Jamie Bostron Mix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="901 ">
            <b>Jimmy Riley</b> - Sweet Sensi (Jamie Bostron Remix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-name="Boomin’ (DCDJ Calypso Mix)" data-time="984">
            <b>K Jah</b> - Dust Off A Soundbwoy
        </div>

        <div class="track" onclick="updatePosition(this)" data-name="T.R.O.Y (Father Funk Booty)" data-time="1103">
            <b>Dogger ft. Liam Bailey</b> - Rebels
        </div>

        <div class="track" onclick="updatePosition(this)" data-name="My Thing" data-time="1261">
            <b>DJ Limited</b> - Sun (Vocal Mix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-name="Magic Carpet Ride (Shaka Loves You Booty)"
            data-time="1355">
            <b>TC ft. Jakes</b> - Deep
        </div>

        <div class="track" onclick="updatePosition(this)" data-name="Jungle Strut" data-time="1495">
            <b>Upgrade</b> - Popular
        </div>

        <div class="track" onclick="updatePosition(this)" data-name="Payback (B-Side Booty)" data-time="1648">
            <b>Mefjus</b> - The Chase
        </div>

        <div class="track" onclick="updatePosition(this)" data-name="Yonder" data-time="1722 "><b>A.M.C &
                Turno</b> - Alliance (VIP)</div>

        <div class="track" onclick="updatePosition(this)" data-name="The Way (Featurecast Mix)" data-time="1824">
            <b>Run Tingz Crew ft. YT</b> - Born Inna Babylon
        </div>

        <div class="track" onclick="updatePosition(this)" data-name="Harder Than You Think (Featurecast Booty)"
            data-time="1972">
            <b>Goldstar & Marcus Visionary</b> - Eyes Down
        </div>

        <div class="track" onclick="updatePosition(this)" data-name="Happy" data-time="2061"><b>Kelvin 373
                ft. Navigator</b> - Dubplate Massive</div>

        <div class="track" onclick="updatePosition(this)" data-time="2175">
            <b>Visionary ft. D. Suade</b> - Fall in Love (Refix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="2303">
            <b>Beast Mode</b> - Bossman
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="2468">
            <b>Cocoa Tea</b> - Christmas is Coming (Jamie Bostron Mix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="2597"><b>Deekline</b> - Coach House</div>

        <div class="track" onclick="updatePosition(this)" data-time="2654"><b>The
                Streets</b> - The Escapist (DJ Limited Edit)</div>

        <div class="track" onclick="updatePosition(this)" data-time="2854">
            <b>Vital Elements & Micky Finn</b> - True Guidance
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="3005">
            <b>Inner Circle ft. Chronixx & Jacob Miller</b> - Tenement Yard (Jamie Bostron Remix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="3118">
            <b>Sound Energy</b> - Flux
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="3189"><b>1991</b> - Midnight
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="3344">
            <b>Supa Ape ft. Top Cat</b> - Glamour
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="3472">
            <b>Bladerunner & Johnny Osbourne</b> - Night Fall Dub
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="3601">
            <b>Top Cat</b> - Gal A Look Nice (Raz Remix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="3744"><b>Screechy
                Dan & Johnny Osbourne</b> - My Sound Stands Alone (Jamie Bostron Remix)</div>

        <div class="track" onclick="updatePosition(this)" data-time="3928">
            <b>Kyo & Total Science</b> - Murder Tonight
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="4059">
            <b>Turno</b> - Asylum
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="4177"><b>Vital
                Elements</b> - Mushroom X</div>

        <div class="track" onclick="updatePosition(this)" data-time="4322"><b>Brian
                Brainstorm</b> - Nuh Ramp</div>

        <div class="track" onclick="updatePosition(this)" data-time="4518"><b>Jehst</b> - Eulogy</div>
    </div>
</div>


<div class="reviewsStrip">
    <?php include '../reviewForm.php'; ?>

    <div class="reviewsBox">

        <?php
        $mixtape = 'Under the Black Rainbow';
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