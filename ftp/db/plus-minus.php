<?php
$mixtape = 'Plus or Minus';
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


            <a href="../audio/db/+or-.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none">
        <!-- <source src="../audio/supafly.ogg" type="../audio/ogg"> -->
        <source src="../audio/db/+or-.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Secondcity - What Can I Do? (Fred V & Grafix Mix)
    242 | Marky & Bungle - 25th Floor (VIP)
    530 | Liz-E - Something Inside
    662 | Artificial Intelligence - Movin' On
    924 | Mr Prob - Waves (Sektor Bootleg)
    1146 | LSB - The Hurting
    1412 | Artificial Intelligence ft. Steo - Forgotten Truths
    1611 | Funky Technicians - Legends of Love
    1854 | Bungle - 13th Floor
    2115 | Brookes Brothers ft. Camille - Anthem (Cyantific Mix)
    2245 | Gorgon City ft. Laura Welsh - Here For You (Roni Size Mix)
    2400 | Pascal - P Funk Era (Kickback Bootleg)
    2587 | Alix Perez ft. Peven Everett & SpectraSoul - Forsaken
    2808 | Liz-E - The Last Time
    3007 | Artificial Intelligence - Desperado
    3220 | Fred V & Grafix - Major Happy
    3382 | Sigma - Nobody To Love
    3661 | M.I.S.T - Nu Wave
    3914 | High Contrast - Tutti Frutti
    4058 | High Contrast - Lovesick
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

        <div class="playing" id="title">Plus or Minus (1:14:41)</div>


        <div class="tracklist">
            <div class="track" onclick="updatePosition(this)" data-time="0"><b>Secondcity</b> -
                What Can I Do? (Fred V & Grafix Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="242"><b>Marky & Bungle</b> - 25th Floor (VIP)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="530"><b>Liz-E</b> - Something Inside</div>
            <div class="track" onclick="updatePosition(this)" data-time="662"><b>Artificial Intelligence</b> - Movin' On
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="924"><b>Mr Prob</b> - Waves (Sektor Bootleg)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="1146"><b>LSB</b> - The
                Hurting</div>
            <div class="track" onclick="updatePosition(this)" data-time="1412"><b>Artificial Intelligence ft. Steo</b> -
                Forgotten Truths</div>
            <div class="track" onclick="updatePosition(this)" data-time="1611"><b>Funky Technicians</b> - Legends of
                Love</div>
            <div class="track" onclick="updatePosition(this)" data-time="1854"><b>Bungle</b> - 13th Floor</div>
            <div class="track" onclick="updatePosition(this)" data-time="2115"><b>Brookes Brothers ft. Camille</b> -
                Anthem (Cyantific Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2245"><b>Gorgon City ft. Laura Welsh</b> - Here
                For You (Roni Size Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2400"><b>Pascal</b> - P Funk Era (Kickback
                Bootleg)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2587"><b>Alix Perez ft. Peven Everett &
                    SpectraSoul</b> - Forsaken</div>
            <div class="track" onclick="updatePosition(this)" data-time="2808"><b>Liz-E</b> - The Last Time</div>
            <div class="track" onclick="updatePosition(this)" data-time="3007"><b>Artificial Intelligence</b> -
                Desperado</div>
            <div class="track" onclick="updatePosition(this)" data-time="3220"><b>Fred V & Grafix</b> - Major Happy
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="3382"><b>Sigma</b> - Nobody To Love</div>
            <div class="track" onclick="updatePosition(this)" data-time="3661"><b>M.I.S.T</b> -
                Nu Wave</div>
            <div class="track" onclick="updatePosition(this)" data-time="3914"><b>High Contrast</b> - Tutti Frutti</div>
            <div class="track" onclick="updatePosition(this)" data-time="4058"><b>High Contrast</b> - Lovesick</div>
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