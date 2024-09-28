<?php include '../header.html'; ?>

<div class="tape">
    <div class="top_label">Side A: Supafly (40:01)</div>

    <div class="tapeReelBox">

        <div class="tape_reel-container" id="music-container">

            <div class="img-container">
                <img src="../images/tape_cog.png" alt="Spinning tape cog" id="cover" />
            </div>

            <div class="progress-container" id="progress-container">


                <div class="progress-background" id="progress-background">

                    <div class="progress" id="progress"></div>
                </div>

                <div class="currTime" id="currTime">00:00:00</div>
            </div>



            <div class="img-container">
                <img src="../images/tape_cog.png" alt="Spinning tape cog" id="cover" />
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


                <a href="../audio/db/supafly.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="../audio/db/supafly.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Deekline & Specimen A - Click Clack
    238 | Upgrade - Stop Talking
    320 | Sizzla - Blessed (Benny Page Remix)
    480 | Shaggy ft. Jovi Rockwell - I Got You (Benny Page Remix)
    643 | Gorillaz - Clint Eastwood (Phibes Remix)
    725 | Serum & Voltage - Cyber Funkin'
    859 | Marvellous Cain ft. Cutty Ranks - Hit Man (T.I Mix)
    949 | Deekline - Don't Smoke (Deekline & Ed Solo vs System Mix)
    1075 | Serial Killaz - Walk 'n' Skank (2017 Version)
    1204 | DJ Mixjah & DJ Embassy - Drop The Bass
    1399 | Kickback - Something There
    1491 | Optymun - Bullet Proof
    1614 | Serum - Square Root
    1761 | Filthy Habits - Abandoned
    1938 | Kosine - Kill Them Now
    2168 | Blue Hill - Too Much Informers
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
            <b>Deekline & Specimen A</b> - Click Clack
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="238">
            <b>Upgrade</b> - Stop Talking
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="320">
            <b>Sizzla</b> - Blessed (Benny Page Remix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="480">
            <b>Shaggy</b> - I Got You (Benny Page Remix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="643">
            <b>Gorillaz</b> - Clint Eastwood (Phibes Remix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="725">
            <b>Serum & Voltage</b> - Cyber Funkin'
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="859">
            <b>Marvellous Cain ft. Cutty Ranks</b> - Hit Man (T.I Mix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="949">
            <b>Deekline</b> - Don't Smoke (Deekline & Ed Solo vs System Mix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="1075">
            <b>Serial Killaz</b> - Walk 'n' Skank (2017 Version)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="1204">
            <b>DJ Mixjah & DJ Embassy</b> - Drop The Bass
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="1399">
            <b>Kickback</b> - Something There
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="1491">
            <b>Optymun</b> - Bullet Proof
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="1614">
            <b>Serum</b> - Square Root
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="1761">
            <b>Filthy Habits</b> - Abandoned
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="1938">
            <b>Kosine</b> - Kill Them Now
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="2168">
            <b>Blue Hill</b> - Too Much Informers
        </div>
    </div>
</div>


<div class="reviewsStrip">
    <?php include '../reviewForm.php'; ?>

    <div class="reviewsBox">

        <?php
        $mixtape = 'Supafly';
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