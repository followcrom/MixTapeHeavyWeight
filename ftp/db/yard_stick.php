<?php
$mixtape = 'Yard Stick';
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


            <a href="../audio/db/yard_stick.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="../audio/db/yard_stick.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Bassface Sascha & DJ Phlex - Yard Clart
    196 | Wilkinson - Decompression
    348 | Zen - Turnstyle (Baron Mix)
    480 | Brian Brainstorm - Inside The Vaults (Bassface Sascha & DJ Phlex Mix)
    659 | Dope Ammo & Tonedef - Rollin' (Sub Zero Mix)
    720 | Dope Ammo & Marvellous Cain - Everyday Jump Up
    892 | Punky Donch - Balang Beng (Mystic Pulse Mix)
    1066 | Truespirit - Deep In The Jungle
    1255 | Beastmode - Redfox
    1464 | Rowney & Trigga - Dark Business
    1539 | Upgrade - Handle It
    1648 | Rowney - Rice an' Pea
    1735 | Taxman - Original Ninja (Bass Brothers Mix)
    1970 | Supa Ape - Greenfinch
    2133 | Bladerunner - 48K Soundboy
    2264 | Bassface Sascha - Killa Instinct
    2420 | Benny Page - Rub A Dub
    2657 | DJ Rap - Spiritual Aura (Neumatic Mix)
    2723 | DJ Rap - Spiritual Aura (Bladerunner & Saxxon Mix)
    2854 | Veak - Shadow
    3039 | Brian Brainstorm - Nuh Matta
    3179 | Om Unit ft. Jehst - The War
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

    <div class="playing" id="title">Yard Stick (57:07)</div>


    <div class="tracklist">
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Bassface Sascha & DJ Phlex</b> - Yard Clart
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="196"><b>Wilkinson</b> - Decompression</div>
        <div class="track" onclick="updatePosition(this)" data-time="348"><b>Zen</b> - Turnstyle (Baron Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="480"><b>Brian Brainstorm</b> - Inside The Vaults
            (Bassface Sascha & DJ Phlex Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="659"><b>Dope Ammo & Tonedef</b> - Rollin' (Sub Zero
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="720"><b>Dope Ammo & Marvellous Cain</b> - Everyday
            Jump Up</div>
        <div class="track" onclick="updatePosition(this)" data-time="892"><b>Punky Donch</b> - Balang Beng (Mystic Pulse
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1066"><b>Truespirit</b> - Deep In The Jungle</div>
        <div class="track" onclick="updatePosition(this)" data-time="1255"><b>Beastmode</b> - Redfox</div>
        <div class="track" onclick="updatePosition(this)" data-time="1464"><b>Rowney & Trigga</b> - Dark Business</div>
        <div class="track" onclick="updatePosition(this)" data-time="1539"><b>Upgrade</b> - Handle It</div>
        <div class="track" onclick="updatePosition(this)" data-time="1648"><b>Rowney</b> - Rice an' Pea</div>
        <div class="track" onclick="updatePosition(this)" data-time="1735"><b>Taxman</b> - Original Ninja (Bass Brothers
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1970"><b>Supa Ape</b> - Greenfinch</div>
        <div class="track" onclick="updatePosition(this)" data-time="2133"><b>Bladerunner</b> - 48K Soundboy</div>
        <div class="track" onclick="updatePosition(this)" data-time="2264"><b>Bassface Sascha</b> - Killa Instinct</div>
        <div class="track" onclick="updatePosition(this)" data-time="2420"><b>Benny Page</b> - Rub A Dub</div>
        <div class="track" onclick="updatePosition(this)" data-time="2657"><b>DJ Rap</b> - Spiritual Aura (Neumatic Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2723"><b>DJ Rap</b> - Spiritual Aura (Bladerunner &
            Saxxon Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2854"><b>Veak</b> - Shadow</div>
        <div class="track" onclick="updatePosition(this)" data-time="3039"><b>Brian Brainstorm</b> - Nuh Matta</div>
        <div class="track" onclick="updatePosition(this)" data-time="3179"><b>Om Unit ft. Jehst</b> - The War</div>
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