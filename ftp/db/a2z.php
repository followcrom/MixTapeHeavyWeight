<?php
$mixtape = 'A 2 Z';
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


            <a href="../audio/db/a2z.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="../audio/db/a2z.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Phace - Reservoir
    114 | Distorted Minds - T-10
    199 | 1X-clusive - Xtra
    296 | K Jah - Destination
    406 | Visionary - Sail On
    538 | Deekline & Fish ft. Blackout JA & Navigator - Champion Sound
    671 | Conrad Subs - XXL
    777 | Voltage - Baddest DJ
    910 | DJ SS - Lighter (Bladerunner Mix)
    1056 | Serial Killaz - Hold On
    1143 | Swabe - Skinflint
    1274 | Roni Size - Friends
    1458 | Break - Submerged (Calyx & Teebee Remix)
    1572 | Heist & Turno - Glad You Came
    1640 | Taxman - Nightshade (Upgrade Remix)
    1765 | K-Warren ft. Ragga Twins - Real Junglists
    1889 | Speaker Louis - 2 Shots
    2013 | Black Samurai ft. Daddy Freddy & The Ragga Twins - Information Critic
    2130 | B.I.A - Hard Drugs
    2328 | Marcus Visionary - Ruler
    2436 | Marcus Visionary ft. Ranking Joe - Ram Dance Selecta
    2546 | Run Tingz Cru ft. Blackout J.A - Jungle Champion (J-Man Remix) 2697 | Marcus Visionary - Badboy Skank
    2786 | Firefox - Who Is It? (Bladerunner Remix)
    2896 | Buju Banton - Trust (Kamoh Bootleg)
    3049 | DJ Hybrid - Wake Up Winston
    3168 | The Heatwave ft. Mr Lexx & Keida - Walk Out Gyal (Aries Remix)
    3276 | Macky Gee - Tour
    3362 | Frenzy - Drum Tools
    3481 | Gella - Itch & Scratch
    3597 | High Hertz - Jungle Rocker
    3686 | Selecta J-Man ft. Rider Shafique - Round Here
    3787 | E-Z Rollers - Walk This Land (Extra Medium Bootleg)
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

        <div class="playing" id="title">A to Z (1:05:46)</div>


        <div class="tracklist">
            <div class="track" onclick="updatePosition(this)" data-time="0"><b>Phace<b> - Reservoir</div>
            <div class="track" onclick="updatePosition(this)" data-time="114"><b>Distorted Minds<b> - T-10</div>
            <div class="track" onclick="updatePosition(this)" data-time="199"><b>1X-clusive<b> - Xtra</div>
            <div class="track" onclick="updatePosition(this)" data-time="296"><b>K Jah<b> - Destination</div>
            <div class="track" onclick="updatePosition(this)" data-time="406"><b>Visionary<b> - Sail On</div>
            <div class="track" onclick="updatePosition(this)" data-time="538"><b>Deekline & Fish ft. Blackout JA &
                    Navigator<b> - Champion Sound</div>
            <div class="track" onclick="updatePosition(this)" data-time="671"><b>Conrad Subs<b> - XXL</div>
            <div class="track" onclick="updatePosition(this)" data-time="777"><b>Voltage<b> - Baddest DJ</div>
            <div class="track" onclick="updatePosition(this)" data-time="910"><b>DJ SS<b> - Lighter (Bladerunner Mix)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="1056"><b>Serial Killaz<b> - Hold On</div>
            <div class="track" onclick="updatePosition(this)" data-time="1143"><b>Swabe<b> - Skinflint</div>
            <div class="track" onclick="updatePosition(this)" data-time="1274"><b>Roni Size<b> - Friends</div>
            <div class="track" onclick="updatePosition(this)" data-time="1458"><b>Break<b> - Submerged (Calyx & Teebee
                        Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1572"><b>Heist & Turno<b> - Glad You Came</div>
            <div class="track" onclick="updatePosition(this)" data-time="1640"><b>Taxman<b> - Nightshade (Upgrade Remix)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="1765"><b>K-Warren ft. Ragga Twins<b> - Real
                        Junglists</div>
            <div class="track" onclick="updatePosition(this)" data-time="1889"><b>Speaker Louis<b> - 2 Shots</div>
            <div class="track" onclick="updatePosition(this)" data-time="2013"><b>Black Samurai ft. Daddy Freddy & The
                    Ragga Twins<b> - Information Critic</div>
            <div class="track" onclick="updatePosition(this)" data-time="2130"><b>B.I.A<b> - Hard Drugs</div>
            <div class="track" onclick="updatePosition(this)" data-time="2328"><b>Marcus Visionary<b> - Ruler</div>
            <div class="track" onclick="updatePosition(this)" data-time="2436"><b>Marcus Visionary ft. Ranking Joe<b> -
                        Ram Dance Selecta</div>
            <div class="track" onclick="updatePosition(this)" data-time="2546"><b>Run Tingz Cru ft. Blackout J.A<b> -
                        Jungle Champion (J-Man Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2697"><b>Marcus Visionary<b> - Badboy Skank
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="2786"><b>Firefox<b> - Who Is It? (Bladerunner
                        Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2896"><b>Buju Banton<b> - Trust (Kamoh Bootleg)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="3049"><b>DJ Hybrid<b> - Wake Up Winston</div>
            <div class="track" onclick="updatePosition(this)" data-time="3168"><b>The Heatwave ft. Mr Lexx & Keida<b> - Walk
                        Out Gyal (Aries Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3276"><b>Macky Gee<b> - Tour</div>
            <div class="track" onclick="updatePosition(this)" data-time="3362"><b>Frenzy<b> - Drum Tools</div>
            <div class="track" onclick="updatePosition(this)" data-time="3481"><b>Gella<b> - Itch & Scratch</div>
            <div class="track" onclick="updatePosition(this)" data-time="3597"><b>High Hertz<b> - Jungle Rocker</div>
            <div class="track" onclick="updatePosition(this)" data-time="3686"><b>Selecta J-Man ft. Rider Shafique<b> -
                        Round Here</div>
            <div class="track" onclick="updatePosition(this)" data-time="3787"><b>E-Z Rollers<b> - Walk This Land (Extra
                        Medium Bootleg)</div>
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