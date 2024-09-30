<?php
$mixtape = '7% Solution';
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


            <a href="../audio/db/solution.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none">
        <!-- <source src="../audio/db/supafly.ogg" type="../audio/db/ogg"> -->
        <source src="../audio/db/solution.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | LTJ Bukem - Music (Technicolour 12" Rework)
    321 | Breakage - Rudeboy Stuff
    439 | Brian Brainstorm - Judgement (D&B Mix)
    548 | Mozey - Lapa Drums
    678 | Clipz - Again (Instrumental)
    831 | Saxxon ft. Navigator - Rollcall (Junglizm)
    931 | T.Kay - Oh! Dread
    989 | Macky Gee - Seduction
    1086 | Kumo - Devils Lettuce
    1226 | Krak In Dub - Original Sample
    1326 | WBBL - Ripgroove
    1423 | Marcus Visionary ft. Bunny General - Sound War
    1591 | King Toppa & Mowty Mahlyka - Kill Dem Already (Isaac Maya Remix)
    1703 | I Wayne & Mr Bertus - They Have No Love (Jamie Bostron Mix)
    1799 | Dubtime - Run for Cover
    1926 | Selecta J-Man - Cuss Cuss
    2030 | Mystic Pulse & Fleck - Chant Dem Down
    2117 | Dope Tingz ft. Top Cat - Shaolin Monk
    2227 | Wickaman ft. Singing Bird - If A War (VIP)
    2388 | Ricky Tuff & Brian Brainstorm - Las Teresitas
    2508 | Jam Thieves - Love Forever
    2649 | Veak - Herb Generation
    2718 | Marcus Visionary & Johnny Osbourne - Rock it Tonight
    2856 | Lost City - We Run the Dance
    2978 | Serial Killaz - Rinse Some Tune
    3112 | Upgrade - The Voice
    3220 | Taxman - Made of Stone
    3370 | Bass Brothers - Oh My
    3534 | LTJ Bukem - Music (Technicolour Reprise)
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

    <div class="playing" id="title">A 7% Solution (1:00:12)</div>


    <div class="tracklist">
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>LTJ Bukem</b> - Music (Technicolour 12"
            Rework)</div>
        <div class="track" onclick="updatePosition(this)" data-time="321"><b>Breakage</b> - Rudeboy Stuff</div>
        <div class="track" onclick="updatePosition(this)" data-time="439"><b>Brian Brainstorm</b> - Judgement (D&B
            Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="548"><b>Mozey</b> - Lapa Drums</div>
        <div class="track" onclick="updatePosition(this)" data-time="678"><b>Clipz</b> - Again (Instrumental)</div>
        <div class="track" onclick="updatePosition(this)" data-time="831"><b>Saxxon ft. Navigator</b> - Rollcall
            (Junglizm)</div>
        <div class="track" onclick="updatePosition(this)" data-time="931"><b>T.Kay</b> - Oh! Dread</div>
        <div class="track" onclick="updatePosition(this)" data-time="989"><b>Macky Gee</b> - Seduction</div>
        <div class="track" onclick="updatePosition(this)" data-time="1086"><b>Kumo</b> - Devils Lettuce</div>
        <div class="track" onclick="updatePosition(this)" data-time="1226"><b>Krak In Dub</b> - Original Sample
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1326"><b>WBBL</b> - Ripgroove</div>
        <div class="track" onclick="updatePosition(this)" data-time="1423"><b>Marcus Visionary ft. Bunny General</b>
            -
            Sound War</div>
        <div class="track" onclick="updatePosition(this)" data-time="1591"><b>King Toppa & Mowty Mahlyka</b> - Kill
            Dem
            Already (Isaac Maya Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1703"><b>I Wayne & Mr Bertus</b> - They Have No
            Love
            (Jamie Bostron Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1799"><b>Dubtime</b> - Run for Cover</div>
        <div class="track" onclick="updatePosition(this)" data-time="1926"><b>Selecta J-Man</b> - Cuss Cuss</div>
        <div class="track" onclick="updatePosition(this)" data-time="2030"><b>Mystic Pulse & Fleck</b> - Chant Dem
            Down
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2117"><b>Dope Tingz ft. Top Cat</b> - Shaolin
            Monk
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2227"><b>Wickaman ft. Singing Bird</b> - If A
            War
            (VIP)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2388"><b>Ricky Tuff & Brian Brainstorm</b> -
            Las
            Teresitas</div>
        <div class="track" onclick="updatePosition(this)" data-time="2508"><b>Jam Thieves</b> - Love Forever</div>
        <div class="track" onclick="updatePosition(this)" data-time="2649"><b>Veak</b> - Herb Generation</div>
        <div class="track" onclick="updatePosition(this)" data-time="2718"><b>Marcus Visionary & Johnny Osbourne</b>
            -
            Rock it Tonight</div>
        <div class="track" onclick="updatePosition(this)" data-time="2856"><b>Lost City</b> - We Run the Dance</div>
        <div class="track" onclick="updatePosition(this)" data-time="2978"><b>Serial Killaz</b> - Rinse Some Tune
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3112"><b>Upgrade</b> - The Voice</div>
        <div class="track" onclick="updatePosition(this)" data-time="3220"><b>Taxman</b> - Made of Stone</div>
        <div class="track" onclick="updatePosition(this)" data-time="3370"><b>Bass Brothers</b> - Oh My</div>
        <div class="track" onclick="updatePosition(this)" data-time="3534"><b>LTJ Bukem</b> - Music (Technicolour
            Reprise)</div>
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