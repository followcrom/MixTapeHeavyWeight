<?php
$mixtape = 'Big Boy Tempo';
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


            <a href="../audio/db/bbtempo.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="../audio/db/bbtempo.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Big T - Intro
    51 | Snow - Informer (Fleck Booty)
    134 | Ruffstuff - Bounce
    226 | WBBL - Oh Please
    391 | Bou - Conclusion
    488 | Twisted Individual - Phlegmtrail
    598 | DJ Evol - Texas Chainsaw
    737 | Subcriminal - Uptown Rebel
    826 | Serial Killaz - Jungle Came First
    951 | Selecta J-Man ft. Blackout JA, Da Fuchaman, YT, Rev Monks Man, Raphael & Solo Banton - The Takeover
    1197 | Dope Ammo - Dub Criminal
    1330 | Specimen A & Deekline - All The Way Up
    1423 | Dossa ft. Deliman - Rock A Dub (Run Tingz Cru Mix)
    1634 | Deekline & Fish ft. Blackout JA & Navigator - Champion Sound
    1798 | Jo - R-Type (Chopstick Dubplate Mix)
    1876 | Vital Elements & Micky Finn - Double Time Swing
    1987 | Tree of Life ft. Richie Urban - Run Come (Inna Culture Mix)
    2175 | Marlon Asher - Ganja Farmer (Aries & Jacky Murda Remix)
    2377 | Serial Killaz ft. Ragga Twins - Duppy Sound
    2538 | Selecta J-Man ft. Daddy Freddy & Blackout JA - Kill Dem Again
    2660 | Selecta J-Man ft. Cheshire Cat - Coconut Chalwa
    2832 | Selecta J-Man ft. Blackout JA - Dancehall Extravaganza
    2996 | Taiwan MC - Dem A Wonder (Fleck & G Duppy Mix)
    3254 | Supa Ape - Feel Me
    3567 | Fleck vs Cutty Ranks - Pon Pause
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

        <div class="playing" id="title">Big Boy Tempo (1:02:59)</div>


        <div class="tracklist">
            <div class="track" onclick="updatePosition(this)" data-time="0"><b>Big T<b> - Intro</div>
            <div class="track" onclick="updatePosition(this)" data-time="51"><b>Snow</b> - Informer (Fleck Booty)</div>
            <div class="track" onclick="updatePosition(this)" data-time="134"><b>Ruffstuff</b> - Bounce</div>
            <div class="track" onclick="updatePosition(this)" data-time="226"><b>WBBL</b> - Oh Please</div>
            <div class="track" onclick="updatePosition(this)" data-time="391"><b>Bou</b> - Conclusion</div>
            <div class="track" onclick="updatePosition(this)" data-time="488"><b>Twisted Individual</b> - Phlegmtrail</div>
            <div class="track" onclick="updatePosition(this)" data-time="598"><b>DJ Evol</b> - Texas Chainsaw</div>
            <div class="track" onclick="updatePosition(this)" data-time="737"><b>Subcriminal</b> - Uptown Rebel</div>
            <div class="track" onclick="updatePosition(this)" data-time="826"><b>Serial Killaz</b> - Jungle Came First</div>
            <div class="track" onclick="updatePosition(this)" data-time="951"><b>Selecta J-Man ft. Blackout JA, Da Fuchaman,
                    YT, Rev Monks Man, Raphael
                    & Solo Banton</b> - The Takeover</div>
            <div class="track" onclick="updatePosition(this)" data-time="1197"><b>Dope Ammo</b> - Dub Criminal</div>
            <div class="track" onclick="updatePosition(this)" data-time="1330"><b>Specimen A & Deekline</b> - All The Way Up
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="1423"><b>Dossa ft. Deliman</b> - Rock A Dub (Run
                Tingz Cru Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1634"><b>Deekline & Fish ft. Blackout JA &
                    Navigator</b> - Champion Sound</div>
            <div class="track" onclick="updatePosition(this)" data-time="1798"><b>Jo</b> - R-Type (Chopstick Dubplate Mix)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="1876"><b>Vital Elements & Micky Finn</b> - Double
                Time Swing</div>
            <div class="track" onclick="updatePosition(this)" data-time="1987"><b>Tree of Life ft. Richie Urban</b> - Run
                Come (Inna Culture Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2175"><b>Marlon Asher</b> - Ganja Farmer (Aries &
                Jacky Murda Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2377"><b>Serial Killaz ft. Ragga Twins</b> - Duppy
                Sound</div>
            <div class="track" onclick="updatePosition(this)" data-time="2538"><b>Selecta J-Man ft. Daddy Freddy & Blackout
                    JA</b> - Kill Dem Again</div>
            <div class="track" onclick="updatePosition(this)" data-time="2660"><b>Selecta J-Man ft. Cheshire Cat</b> -
                Coconut Chalwa</div>
            <div class="track" onclick="updatePosition(this)" data-time="2832"><b>Selecta J-Man ft. Blackout JA & Daddy
                    Freddy</b> - Dancehall Extravaganza</div>
            <div class="track" onclick="updatePosition(this)" data-time="2996"><b>Taiwan MC</b> - Dem A Wonder (Fleck & G
                Duppy Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3254"><b>Supa Ape</b> - Feel Me</div>
            <div class="track" onclick="updatePosition(this)" data-time="3567"><b>Fleck vs Cutty Ranks</b> - Pon Pause</div>
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