<?php include '../header.html'; ?>

<div class="tape">
    <div class="top_label">Side B: The Original (1:15:03)</div>

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


                <a href="../audio/db/original.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>

            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none">
        <source src="../audio/db/original.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>



<div class="timings" style="display: none">
    0 | Veak - The Original
    120 | Marcus Visionary ft. Hopeton James - Number 1 Sound
    208 | Desmond Dekker & The Aces - Israelites (JFB Remix)
    340 | Isaac Maya ft. King Toppa & Gento Jamal - Sound Di Alarm
    456 | Chopstick Dubplate ft. Ragga Twins & Bunny Lye Lye - Give Me a Dubplate
    641 | Brian Brainstorm & Ricky Tuff - Gunshot
    751 | Sikka - Alright
    884 | DJ Hybrid - Run Tune Now (Formula Remix)
    1016 | Shumba Youth & Sleepy Time Ghost - Right Way (Aries & Nicky Blackmarket Remix)
    1190 | Herve - Together (Deekline & Benny Page Remix)
    1365 | DJ Brockie ft. MC Det - BBC
    1520 | Veak - Resistant
    1651 | JFB - Shake It
    1770 | Serial Killaz - Put It On
    1892 | Uzimon - The Rum Anthem (Father Funk Remix)
    2125 | Rumble ft. Junior Dangerous - I Like (Liondub & Chatta B Remix)
    2298 | Marcus Visionary ft. Sugar Minott - Ruff & Tuff (Rollers Mix)
    2430 | Ricky Tuff - Good Ol' Days
    2561 | Marcus Visionary ft. Pad Anthony - Murder
    2695 | Origin8a & Propa ft. Benny Page - Harmony (Instrumental)
    2879 | Benny Page ft. Topcat - Sound Fi Dead (Aries & Tuffist Remix)
    3031 | Brian Brainstorm - So Easy
    3221 | Kumo - Signal
    3308 | Delly Ranx - Move Left The Crowd (Jamie Bostron Remix)
    3470 | Rise - Respect
    3528 | Ed Solo ft. General Levy - Junglist
    3659 | Luciano - Computerize (Jamie Bostron Remix)
    3760 | Chopstick Dubplate ft. General Jah Mikey - My Sound Ah Murda
    3900 | Wrongtom - Jump + Move + Rock (Benny Page Remix)
    3990 | Dave & Ansel Collins - Double Barrel (Ed Solo Remix)
    4121 | Dub Pistols ft. Natty Campbell - Wicked & Wild (King Yoof Remix)
    4244 | LTJ Bukem - Atlantis (Marky & S.P.Y. Rework)
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Veak<b> - The Original</div>
        <div class="track" onclick="updatePosition(this)" data-time="120"><b>Marcus Visionary ft. Hopeton James<b> - Number 1 Sound</div>
        <div class="track" onclick="updatePosition(this)" data-time="208"><b>Desmond Dekker & The Aces<b> - Israelites (JFB Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="340"><b>Isaac Maya ft. King Toppa & Gento Jamal <b> - Sound Di Alarm</div>
        <div class="track" onclick="updatePosition(this)" data-time="456"><b>Chopstick Dubplate ft. Ragga Twins & Bunny Lye Lye<b> - Give Me a Dubplate</div>
        <div class="track" onclick="updatePosition(this)" data-time="641"><b>Brian Brainstorm & Ricky Tuff<b> - Gunshot</div>
        <div class="track" onclick="updatePosition(this)" data-time="751"><b>Sikka<b> - Alright</div>
        <div class="track" onclick="updatePosition(this)" data-time="884"><b>DJ Hybrid<b> - Run Tune Now (Formula Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1016"><b>Shumba Youth & Sleepy Time Ghost<b> - Right Way (Aries & Nicky Blackmarket Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1190"><b>Herve<b> - Together (Deekline & Benny Page Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1365"><b>DJ Brockie ft. MC Det<b> - BBC</div>
        <div class="track" onclick="updatePosition(this)" data-time="1520"><b>Veak<b> - Resistant</div>
        <div class="track" onclick="updatePosition(this)" data-time="1651"><b>JFB<b> - Shake It</div>
        <div class="track" onclick="updatePosition(this)" data-time="1770"><b>Serial Killaz<b> - Put It On</div>
        <div class="track" onclick="updatePosition(this)" data-time="1892"><b>Uzimon<b> - The Rum Anthem (Father Funk Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2125"><b>Rumble ft. Junior Dangerous<b> - I Like (Liondub & Chatta B Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2298"><b>Marcus Visionary ft. Sugar Minott<b> - Ruff & Tuff (Rollers Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2430"><b>Ricky Tuff<b> - Good Ol' Days</div>
        <div class="track" onclick="updatePosition(this)" data-time="2561"><b>Marcus Visionary ft. Pad Anthony<b> - Murder</div>
        <div class="track" onclick="updatePosition(this)" data-time="2695"><b>Origin8a & Propa ft. Benny Page<b> - Harmony (Instrumental)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2879"><b>Benny Page ft. Topcat<b> - Sound Fi Dead (Aries & Tuffist Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3031"><b>Brian Brainstorm<b> - So Easy</div>
        <div class="track" onclick="updatePosition(this)" data-time="3221"><b>Kumo<b> - Signal</div>
        <div class="track" onclick="updatePosition(this)" data-time="3308"><b>Delly Ranx<b> - Move Left The Crowd (Jamie Bostron Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3470"><b>Rise<b> - Respect</div>
        <div class="track" onclick="updatePosition(this)" data-time="3528"><b>Ed Solo ft. General Levy<b> - Junglist</div>
        <div class="track" onclick="updatePosition(this)" data-time="3659"><b>Luciano<b> - Computerize (Jamie Bostron Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3760"><b>Chopstick Dubplate ft. General Jah Mikey<b> - My Sound Ah Murda</div>
        <div class="track" onclick="updatePosition(this)" data-time="3900"><b>Wrongtom<b> - Jump + Move + Rock (Benny Page Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3990"><b>Dave & Ansel Collins<b> - Double Barrel (Ed Solo Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4121"><b>Dub Pistols ft. Natty Campbell<b> - Wicked & Wild (King Yoof Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4244"><b>LTJ Bukem<b> - Atlantis (Marky & S.P.Y. Rework)</div>
    </div>
</div>


<div class="reviewsStrip">
    <?php include '../reviewForm.php'; ?>

    <div class="reviewsBox">

        <?php
        $mixtape = 'The Original';
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