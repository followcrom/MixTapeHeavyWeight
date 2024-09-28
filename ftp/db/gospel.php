<?php include '../header.html'; ?>

<div class="tape">
    <div class="top_label">A: The Sound of Gospel (1:05:42)</div>

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


                <a href="../audio/db/gospel.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="../audio/db/gospel.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Onmi Trio - Renegade Snares (Bladerunner Mix)
    135 | Marcus Visionary - Blackboard
    267 | 6Blocc - Artikal Junglist
    402 | Brian Brainstorm - Nuh Ramp
    528 | Selecta J-Man - Kill Sound
    630 | Serial Killaz - Kill Tune Time
    752 | Selecta J-Man - Drum Song
    884 | Nico D & Turbulence - Inna Mi Draw (Serial Killaz Remix)
    1013 | Dez - Dubplate
    1122 | Ed Solo & Deekline - Wa Do Dem
    1210 | Aries & Tuffist - Love Has Gone
    1319 | Courtney John & Ticklah - Born to Fly (Upgrade Remix)
    1449 | Brian Brainstorm - Right Now
    1603 | Hoogs - Pussy
    1734 | Upgrade - More (Sub Zero Remix)
    1844 | Janaka Selekta - Good Vibes (Ed Solo & Stickybuds Mix)
    1976 | True Tactix - Bun Up
    2135 | Code Red - Whatever You Want
    2214 | T-Kay ft. Peppery - More Ganja
    2322 | Fleck - Bullet Proof Vest
    2420 | Furniss - Afraid
    2562 | Furniss ft. MC Spyda - Creeping (Serial Killaz Mix)
    2671 | DJ Hybrid - Special Request
    2851 | G Duppy ft. Daddy Freddy - Sen It On (Veak Remix)
    2982 | Liondub & Jah Boogs ft. Blackout JA - Dread
    3092 | Selecta J-Man - Big Bout Ya
    3204 | Deekline ft. Rubi Dan - Murder Them All
    3376 | Selecta J-Man & Cheshire Cat - Coconut Chalwa (Aries Remix)
    3484 | Jamie Bostron - Blaze Up Fiyah
    3656 | Deekline - Hold Up
    3781 | Shy FX ft. Mr Williamz - Raggamuffin
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Onmi Trio</b> - Renegade Snares (Bladerunner
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="135"><b>Marcus Visionary</b> - Blackboard</div>
        <div class="track" onclick="updatePosition(this)" data-time="267"><b>6Blocc</b> - Artikal Junglist</div>
        <div class="track" onclick="updatePosition(this)" data-time="402"><b>Brian Brainstorm</b> - Nuh Ramp</div>
        <div class="track" onclick="updatePosition(this)" data-time="528"><b>Selecta J-Man</b> - Kill Sound</div>
        <div class="track" onclick="updatePosition(this)" data-time="630"><b>Serial Killaz</b> - Kill Tune Time</div>
        <div class="track" onclick="updatePosition(this)" data-time="752"><b>Selecta J-Man</b> - Drum Song</div>
        <div class="track" onclick="updatePosition(this)" data-time="884"><b>Nico D & Turbulence</b> - Inna Mi Draw
            (Serial Killaz Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1013"><b>Dez</b> - Dubplate</div>
        <div class="track" onclick="updatePosition(this)" data-time="1122"><b>Ed Solo & Deekline</b> - Wa Do Dem</div>
        <div class="track" onclick="updatePosition(this)" data-time="1210"><b>Aries & Tuffist</b> - Love Has Gone</div>
        <div class="track" onclick="updatePosition(this)" data-time="1319"><b>Courtney John & Ticklah</b> - Born to Fly
            (Upgrade Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1449"><b>Brian Brainstorm</b> - Right Now</div>
        <div class="track" onclick="updatePosition(this)" data-time="1603"><b>Hoogs</b> - Pussy</div>
        <div class="track" onclick="updatePosition(this)" data-time="1734"><b>Upgrade</b> - More (Sub Zero Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1844"><b>Janaka Selekta</b> - Good Vibes (Ed Solo &
            Stickybuds Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1976"><b>True Tactix</b> - Bun Up</div>
        <div class="track" onclick="updatePosition(this)" data-time="2135"><b>Code Red</b> - Whatever You Want</div>
        <div class="track" onclick="updatePosition(this)" data-time="2214"><b>T-Kay ft. Peppery</b> - More Ganja</div>
        <div class="track" onclick="updatePosition(this)" data-time="2322"><b>Fleck</b> - Bullet Proof Vest</div>
        <div class="track" onclick="updatePosition(this)" data-time="2420"><b>Furniss</b> - Afraid</div>
        <div class="track" onclick="updatePosition(this)" data-time="2562"><b>Furniss ft. MC Spyda</b> - Creeping
            (Serial
            Killaz Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2671"><b>DJ Hybrid</b> - Special Request</div>
        <div class="track" onclick="updatePosition(this)" data-time="2851"><b>G Duppy ft. Daddy Freddy</b> - Sen It On
            (Veak Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2982"><b>Liondub & Jah Boogs ft. Blackout JA</b> -
            Dread</div>
        <div class="track" onclick="updatePosition(this)" data-time="3092"><b>Selecta J-Man</b> - Big Bout Ya</div>
        <div class="track" onclick="updatePosition(this)" data-time="3204"><b>Deekline ft. Rubi Dan</b> - Murder Them
            All
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3376"><b>Selecta J-Man & Cheshire Cat</b> - Coconut
            Chalwa (Aries Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3484"><b>Jamie Bostron</b> - Blaze Up Fiyah</div>
        <div class="track" onclick="updatePosition(this)" data-time="3656"><b>Deekline</b> - Hold Up</div>
        <div class="track" onclick="updatePosition(this)" data-time="3781"><b>Shy FX ft. Mr Williamz</b> - Raggamuffin
        </div>

    </div>
</div>


<div class="reviewsStrip">
    <?php include '../reviewForm.php'; ?>

    <div class="reviewsBox">

        <?php
        $mixtape = 'The Sound of Gospel';  // Change this value for each PHP page to reflect the mixtape
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