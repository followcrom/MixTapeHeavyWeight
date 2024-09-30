<?php
$mixtape = 'The Way';
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


            <a href="../audio/db/way.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="../audio/db/way.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Danny Byrd ft. MC GQ</b> - Salute
    147 | RMS</b> - About The Music
    258 | Parly B & G Duppy</b> - Dem Sick (Serial Killaz Mix)
    419 | Veak</b> - Masta Blasta
    488 | Marcus Visionary ft. Sugar Minott</b> - Ruff & Tuff
    687 | Fleck & Selecta J-Man</b> - Rockstone
    839 | Ikon B & Crisis</b> - Jah Warrior
    1048 | Leaf</b> - Dub Tang
    1256 | Benny Page</b> - That Girl
    1382 | Symptom</b> - Stay Tough
    1559 | Sanxion</b> - System 16
    1708 | Sanxion</b> - Dope Stories (Ikon B & Crisis Mix)
    1875 | Taktix</b> - It's The Way (Serum Mix)
    2134 | Secure Unit</b> - Lionheart Bizzness
    2243 | Serum</b> - Lumberjack
    2406 | Twisted Individual</b> - F Word (Twisted Individual 2017 Mix)
    2560 | Twisted Individual</b> - Galloping Elephant (DJ Limited Mix)
    2744 | Dublic</b> - The Butcher
    2884 | Truespirit</b> - Kill It Properly (Fleck Mix)
    2986 | Didak</b> - African
    3147 | Nicky Blackmarket</b> - This Way (Brian Brainstorm Mix)
    3321 | 6Blocc</b> - Artikal Junglist
    3419 | Ed Solo & Deekline ft. Yolanda</b> - Bam Bam (Serial Killaz Mix)
    3558 | Selecta J-Man ft. Blackout JA & Raphael</b> - Unite
    3703 | Aries & Jacky Murda</b> - Clash 77
    3851 | Aries & Jacky Murda ft. Spyda</b> - Jungle Style
    3982 | Chopstick Dubplate ft. Jah Roamy</b> - 50 Pound a Weed
    4092 | Rumble ft. Blackout JA</b> - Dancehall Crown
    4220 | Rumble ft. Blackout JA</b> - Weed Weed
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

    <div class="playing" id="title">The Way (1:13:14)</div>


    <div class="tracklist">
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Danny Byrd ft. MC GQ</b><b> - Salute
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="147"><b>RMS</b><b> - About The Music</div>
        <div class="track" onclick="updatePosition(this)" data-time="258"><b>Parly B & G Duppy</b><b> - Dem Sick
                (Serial Killaz Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="419"><b>Veak</b><b> - Masta Blasta</div>
        <div class="track" onclick="updatePosition(this)" data-time="488"><b>Marcus Visionary ft. Sugar
                Minott</b><b> - Ruff & Tuff</div>
        <div class="track" onclick="updatePosition(this)" data-time="687"><b>Fleck & Selecta J-Man</b><b> -
                Rockstone</div>
        <div class="track" onclick="updatePosition(this)" data-time="839"><b>Ikon B & Crisis</b><b> - Jah Warrior
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1048"><b>Leaf</b><b> -
                Dub Tang</div>
        <div class="track" onclick="updatePosition(this)" data-time="1256"><b>Benny Page</b><b> - That Girl</div>
        <div class="track" onclick="updatePosition(this)" data-time="1382"><b>Symptom</b><b> - Stay Tough</div>
        <div class="track" onclick="updatePosition(this)" data-time="1559"><b>Sanxion</b><b> - System 16</div>
        <div class="track" onclick="updatePosition(this)" data-time="1708"><b>Sanxion</b><b> - Dope Stories (Ikon B
                & Crisis Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1875"><b>Taktix</b><b>
                - It's The Way (Serum Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2134"><b>Secure Unit</b><b> - Lionheart
                Bizzness</div>
        <div class="track" onclick="updatePosition(this)" data-time="2243"><b>Serum</b><b> - Lumberjack</div>
        <div class="track" onclick="updatePosition(this)" data-time="2406"><b>Twisted Individual</b><b> - F Word
                (Twisted Individual 2017 Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2560"><b>Twisted Individual</b><b> - Galloping
                Elephant (DJ Limited Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2744"><b>Dublic</b><b>
                - The Butcher</div>
        <div class="track" onclick="updatePosition(this)" data-time="2884"><b>Truespirit</b><b> - Kill It Properly
                (Fleck Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2986"><b>Didak</b><b> - African</div>
        <div class="track" onclick="updatePosition(this)" data-time="3147"><b>Nicky Blackmarket</b><b> - This Way
                (Brian Brainstorm Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3321"><b>6Blocc</b><b>
                - Artikal Junglist</div>
        <div class="track" onclick="updatePosition(this)" data-time="3419"><b>Ed Solo & Deekline ft. Yolanda</b><b>
                - Bam Bam (Serial Killaz Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3558"><b>Selecta J-Man
                ft. Blackout JA & Raphael</b><b> - Unite</div>
        <div class="track" onclick="updatePosition(this)" data-time="3703"><b>Aries & Jacky
                Murda</b><b> - Clash 77</div>
        <div class="track" onclick="updatePosition(this)" data-time="3851"><b>Aries & Jacky
                Murda ft. Spyda</b><b> - Jungle Style</div>
        <div class="track" onclick="updatePosition(this)" data-time="3982"><b>Chopstick Dubplate ft. Jah
                Roamy</b><b> - 50 Pound a Weed</div>
        <div class="track" onclick="updatePosition(this)" data-time="4092"><b>Rumble ft. Blackout JA</b><b> -
                Dancehall Crown</div>
        <div class="track" onclick="updatePosition(this)" data-time="4220"><b>Rumble ft. Blackout JA</b><b> - Weed
                Weed</div>
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