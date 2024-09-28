<?php include '../header.html'; ?>

<div class="tape">
    <div class="top_label">Side A: Junglistical (1:12:35)</div>

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


                <a href="../audio/db/junglistical.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="../audio/db/junglistical.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Visionary ft. D Suade - Change Is Gonna Come
    170 | YT - Save Mi Life
    428 | Chopstick Dubplate ft. Mr Williamz - Girls Dem Dada (Dope Ammo Mix)
    618 | Delano - Big Bad & Heavy (Serial Killaz Mix)
    849 | Stylo G - Move Back (Friction Mix)
    1048 | Aries & Gold Dub - Untitled Dub
    1221 | Chopstick Dubplate ft. Cheshire Cat - Just The Herbs
    1428 | Dem 2 Ruff - Nice Tune (Marvellous Cain Mix)
    1601 | Serial Killaz - Worries In The Dance
    1744 | Chopstick Dubplate ft. Mr Williamz - Holla Fi We (J Man Mix)
    1981 | Conquering Lion - Code Red (Serial Killaz 2015 Mix)
    2159 | Defkline - Magnificent
    2298 | Cadenza ft. Stylo G & Busy Signal - Foundation (Benny Page Mix)
    2458 | DJ Krome & Mr Time - Ganja Man (Serial Killaz Mix)
    2648 | Serial Killaz - Murder Ya Sound (UK Jungle Mix)
    2833 | Chopstick Dubplate ft. Cheshire Cat - Police Officer
    3050 | Killa Mosquito ft. Mr Williamz - Ganja Man Ganja Woman (Marcus Visionary Mix)
    3277 | Audiomission - Soon Forward
    3513 | Benny Page - Know Fi Move Your Waist (Original Mix)
    3676 | Chopstick Dubplate ft. Cheshire Cat - Bounty Hunter
    3851 | Johnny Osbourne - Buddy Bye (D4N Mix)
    4058 | Top Cat - Haul & Pull Up
    4115 | Chase Status ft. Top Cat - Come Back
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b> Visionary ft. D Suade</b> - Change Is
            Gonna Come</div>
        <div class="track" onclick="updatePosition(this)" data-time="170"><b>YT</b> - Save Mi Life</div>
        <div class="track" onclick="updatePosition(this)" data-time="428"><b>Chopstick Dubplate ft. Mr Williamz</b>
            - Girls Dem Dada (Dope Ammo Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="618"><b>Delano </b> - Big Bad & Heavy (Serial
            Killaz Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="849"><b>Stylo G</b> - Move Back (Friction Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1048"><b>Aries & Gold Dub</b> - Untitled Dub
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1221"><b>Chopstick Dubplate ft. Cheshire
                Cat</b> - Just The Herbs</div>
        <div class="track" onclick="updatePosition(this)" data-time="1428"><b>Dem 2 Ruff</b> - Nice Tune (Marvellous
            Cain Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1601"><b>Serial
                Killaz</b> - Worries In The Dance</div>
        <div class="track" onclick="updatePosition(this)" data-time="1744"><b>Chopstick Dubplate ft. Mr Williamz</b>
            - Holla Fi We (J Man Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1981"><b>Conquering Lion</b> - Code Red (Serial
            Killaz 2015 Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2159"><b>Defkline </b> - Magnificent</div>
        <div class="track" onclick="updatePosition(this)" data-time="2298"><b>Cadenza ft. Stylo G & Busy Signal</b>
            - Foundation (Benny Page Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2458"><b>DJ Krome & Mr Time </b> - Ganja Man
            (Serial Killaz Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2648"><b>Serial
                Killaz</b> - Murder Ya Sound (UK Jungle Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2833"><b>Chopstick Dubplate ft. Cheshire
                Cat</b> - Police Officer</div>
        <div class="track" onclick="updatePosition(this)" data-time="3050"><b>Killa Mosquito ft. Mr Williamz</b> -
            Ganja Man Ganja Woman (Marcus Visionary Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3277"><b>Audiomission</b> - Soon Forward</div>
        <div class="track" onclick="updatePosition(this)" data-time="3513"><b>Benny Page</b> - Know Fi Move Your
            Waist (Original Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3676"><b>Chopstick Dubplate ft. Cheshire
                Cat</b> - Bounty Hunter</div>
        <div class="track" onclick="updatePosition(this)" data-time="3851"><b>Johnny
                Osbourne</b> - Buddy Bye (D4N Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4058"><b>Top Cat</b> - Haul & Pull Up</div>
        <div class="track" onclick="updatePosition(this)" data-time="4115"><b>Chase Status ft. Top Cat</b> - Come
            Back</div>

    </div>
</div>


<div class="reviewsStrip">
    <?php include '../reviewForm.php'; ?>

    <div class="reviewsBox">

        <?php
        $mixtape = 'Junglistical';  // Change this value for each PHP page to reflect the mixtape
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