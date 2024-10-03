<?php
$mixtape = 'Dubsmith';
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


            <a href="../audio/db/dubsmith.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none">
        <!-- <source src="../audio/supafly.ogg" type="../audio/ogg"> -->
        <source src="../audio/db/dubsmith.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>


<div class="timings" style="display: none">
    0 | Top Cat - Champion DJ (Shy FX Mix)
    155 | Shout - Can't Satisfy Her
    254 | The Harry J All Stars - Liquidator (Ed Solo Remix)
    407 | Blend Mishkin ft. Peppery - Foundation Style (Danny T, Tradesman & Jakey Banton Mix)
    506 | Liondub - Foundation Special
    606 | Breakage - Ric Flair Strut
    737 | General Levy - Guide & Protect (Ed Solo Remix)
    870 | unior Murvin - Cool Out Son (Brian Brainstorm Remix)
    1022 | Slynk - Bad Duppy Walk
    1177 | Deekline - Alibaba
    1286 | Chopstick Dubplate ft. Cheshire Cat - I'm Sure
    1438 | Ed Solo and Deekline - Untold
    1592 | Mr Vegas, Burro Banton, Carl Meeks, Lukie D & Fuzzy Jones - Sound Exterminata (Ricky Tuff Mix)
    1726 | Cutty Ranks - Limb By Limb (DeJedi Remix)
    1854 | Uzi & Veak - Young Gal Want
    1966 | Marcus Visionary - Hide & Seek
    2163 | Bluntskull & Liondub - Dancehall Terrorist (2020 Remix)
    2306 | Supa Ape - Destroy Dem
    2459 | Conrad Subs - The Rhythm
    2558 | Junior Kelly - Love So Nice (Ted Ganung Remix)
    2656 | Jimi Needles - Na Na Na
    2794 | K Jah - Get Out Of My Life
    2918 | Deekline & Freestylers - Ray Gun
    3050 | Cocoa Tea - Soundclash (Jamie Bostron Remix)
    3162 | RMS & Dublic - Soundboy Test
    3280 | Marcus Visionary ft. Little John - Run For Cover
    3401 | A-Zone ft. Aphrodite - Calling The People (2020 Jungle Mix)
    3587 | DJ Cautious - Tickle
    3708 | Brian Brainstorm ft. Speaker Louis - Soldier Man
    3884 | FeyDer & Steppa Style ft. Nappy Paco - Kill Dem Again
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

        <div class="playing" id="title">Dubsmith (1:08:54)</div>


        <div class="tracklist">
            <div class="track" onclick="updatePosition(this)" data-time="0"><b>Top Cat<b> - Champion DJ (Shy FX Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="155"><b>Shout<b> - Can't Satisfy Her</div>
            <div class="track" onclick="updatePosition(this)" data-time="254"><b>The Harry J All Stars<b> - Liquidator (Ed Solo Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="407"><b>Blend Mishkin ft. Peppery<b> - Foundation Style (Danny T, Tradesman & Jakey Banton Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="506"><b>Liondub<b> - Foundation Special</div>
            <div class="track" onclick="updatePosition(this)" data-time="606"><b>Breakage<b> - Ric Flair Strut</div>
            <div class="track" onclick="updatePosition(this)" data-time="737"><b>General Levy<b> - Guide & Protect (Ed Solo Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="870"><b>unior Murvin<b> - Cool Out Son (Brian Brainstorm Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1022"><b>Slynk<b> - Bad Duppy Walk</div>
            <div class="track" onclick="updatePosition(this)" data-time="1177"><b>Deekline<b> - Alibaba</div>
            <div class="track" onclick="updatePosition(this)" data-time="1286"><b>Chopstick Dubplate ft. Cheshire Cat<b> - I'm Sure</div>
            <div class="track" onclick="updatePosition(this)" data-time="1438"><b>Ed Solo and Deekline<b> - Untold</div>
            <div class="track" onclick="updatePosition(this)" data-time="1592"><b>Mr Vegas, Burro Banton, Carl Meeks, Lukie D & Fuzzy Jones<b> - Sound Exterminata (Ricky Tuff Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1726"><b>Cutty Ranks<b> - Limb By Limb (DeJedi Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1854"><b>Uzi & Veak<b> - Young Gal Want</div>
            <div class="track" onclick="updatePosition(this)" data-time="1966"><b>Marcus Visionary<b> - Hide & Seek</div>
            <div class="track" onclick="updatePosition(this)" data-time="2163"><b>Bluntskull & Liondub<b> - Dancehall Terrorist (2020 Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2306"><b>Supa Ape<b> - Destroy Dem</div>
            <div class="track" onclick="updatePosition(this)" data-time="2459"><b>Conrad Subs<b> - The Rhythm</div>
            <div class="track" onclick="updatePosition(this)" data-time="2558"><b>Junior Kelly<b> - Love So Nice (Ted Ganung Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2656"><b>Jimi Needles<b> - Na Na Na</div>
            <div class="track" onclick="updatePosition(this)" data-time="2794"><b>K Jah<b> - Get Out Of My Life</div>
            <div class="track" onclick="updatePosition(this)" data-time="2918"><b>Deekline & Freestylers<b> - Ray Gun</div>
            <div class="track" onclick="updatePosition(this)" data-time="3050"><b>Cocoa Tea<b> - Soundclash (Jamie Bostron Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3162"><b>RMS & Dublic<b> - Soundboy Test</div>
            <div class="track" onclick="updatePosition(this)" data-time="3280"><b>Marcus Visionary ft. Little John<b> - Run For Cover</div>
            <div class="track" onclick="updatePosition(this)" data-time="3401"><b>A-Zone ft. Aphrodite<b> - Calling The People (2020 Jungle Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3587"><b>DJ Cautious<b> - Tickle</div>
            <div class="track" onclick="updatePosition(this)" data-time="3708"><b>Brian Brainstorm ft. Speaker Louis<b> - Soldier Man</div>
            <div class="track" onclick="updatePosition(this)" data-time="3884"><b>FeyDer & Steppa Style ft. Nappy Paco<b> - Kill Dem Again</div>
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