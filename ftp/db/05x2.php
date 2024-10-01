<?php
$mixtape = '0.5 x 2';
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


            <a href="../audio/db/05x2.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none">
        <!-- <source src="../audio/supafly.ogg" type="../audio/ogg"> -->
        <source src="../audio/db/05x2.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Saber - Conundrum
    145 | Marvellous Cain - Dub Plate Style (Aries & Tuffist Mix)
    310 | Delta Heavy - Ghost (Zomboy Mix)
    472 | Madd-Inc ft. Frisky Don - Lock Dem Off (Serial Killaz Mix)
    605 | Serum - Easy Does It
    736 | Firefox - Let's Go
    844 | Far Too Loud & Yookie - Shockwave (KNYD Mix)
    962 | DJ Snake & Lil Jon - Turn Down For What?
    1016 | Dillinja - Gangsta (Serum Remix)
    1168 | Firefox - Keep It Raw
    1243 | Eptic - Gun Finga (Revenge Of The Amen Edit)
    1383 | Glamour Gold - Bass Switch (Serum Remix)
    1513 | Hitimpulse - I'm In Love With The Coco
    1690 | Gorgon City - Smile (Star One Mix)
    1787 | Firefox - Buck Rogers (Bladerunner Remix)
    1896 | Boombox Cartel ft. Ian Everson - B2U
    2068 | Chase & Status - International
    2278 | Flybear - Hollowed
    2407 | Porter Robinson - Flicker (Mat Zo Mix)
    2486 | Glamour Gold - You Can Run (Serum Remix)
    2607 | Firefox and 4-Tree - Warning (Serum Remix)
    2765 | Modified Motion & Faction - 2 Bags Of Grass
    2957 | Cash+David - Funn (Daktyl Mix)
    3120 | Cain 1 ft. Angelo Pantin - Young Love (Seral Killaz Mix)
    3271 | Serial Killaz - Fresh Styles
    3379 | Geek Boy - Fool
    3583 | Decimal Bass - Work For Nothing
    3679 | Kiiara ft. Felix Snow - Whippin'
    3800 | Too Bad - Too Bad (Remix)
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

        <div class="playing" id="title">0.5 x 2 (1:05:58)</div>


        <div class="tracklist">
            <div class="track" onclick="updatePosition(this)" data-time="0"><b>Saber</b> - Conundrum</div>
            <div class="track" onclick="updatePosition(this)" data-time="145"><b>Marvellous Cain</b> - Dub Plate Style
                (Aries & Tuffist Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="310"><b>Delta Heavy</b> - Ghost (Zomboy Mix)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="472"><b>Madd-Inc ft. Frisky Don</b> - Lock Dem
                Off (Serial Killaz Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="605"><b>Serum</b> - Easy Does It</div>
            <div class="track" onclick="updatePosition(this)" data-time="736"><b>Firefox</b> - Let's Go</div>
            <div class="track" onclick="updatePosition(this)" data-time="844"><b>Far Too
                    Loud & Yookie</b> - Shockwave (KNYD Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="962"><b>DJ Snake & Lil Jon</b> - Turn Down For
                What?</div>
            <div class="track" onclick="updatePosition(this)" data-time="1016"><b>Dillinja</b> - Gangsta (Serum Remix)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="1168"><b>Firefox</b> - Keep It Raw</div>
            <div class="track" onclick="updatePosition(this)" data-time="1243"><b>Eptic</b> - Gun Finga (Revenge Of The
                Amen Edit)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1383"><b>Glamour Gold</b> - Bass Switch (Serum
                Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1513"><b>Hitimpulse</b> - I'm In Love With The
                Coco</div>
            <div class="track" onclick="updatePosition(this)" data-time="1690"><b>Gorgon
                    City</b> - Smile (Star One Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1787"><b>Firefox</b> - Buck Rogers (Bladerunner
                Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1896"><b>Boombox Cartel ft. Ian Everson</b> -
                B2U</div>
            <div class="track" onclick="updatePosition(this)" data-time="2068"><b>Chase & Status</b> - International
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="2278"><b>Flybear</b> - Hollowed</div>
            <div class="track" onclick="updatePosition(this)" data-time="2407"><b>Porter
                    Robinson</b> - Flicker (Mat Zo Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2486"><b>Glamour Gold</b> - You Can Run (Serum
                Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2607"><b>Firefox and 4-Tree</b> - Warning
                (Serum Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2765"><b>Modified Motion & Faction</b> - 2 Bags
                Of Grass</div>
            <div class="track" onclick="updatePosition(this)" data-time="2957"><b>Cash+David</b> - Funn (Daktyl Mix)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="3120"><b>Cain 1
                    ft. Angelo Pantin</b> - Young Love (Seral Killaz Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3271"><b>Serial
                    Killaz</b> - Fresh Styles</div>
            <div class="track" onclick="updatePosition(this)" data-time="3379"><b>Geek Boy</b> - Fool</div>
            <div class="track" onclick="updatePosition(this)" data-time="3583"><b>Decimal Bass</b> - Work For Nothing
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="3679"><b>Kiiara
                    ft. Felix Snow</b> - Whippin'</div>
            <div class="track" onclick="updatePosition(this)" data-time="3800"><b>Too Bad</b> - Too Bad (Remix)</div>
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