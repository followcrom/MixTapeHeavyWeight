<?php
$mixtape = 'Information Centre';
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


            <a href="../audio/db/information_centre.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none">
        <source src="../audio/db/information_centre.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>


<div class="timings" style="display: none">
    0 | Run Tingz Cru ft. Blackout J.A & K.Ners - Informer (Northern Lights Jump Up Remix)
    168 | Modified Motion & Faction - 2 Bags Of Grass
    295 | Kleu - Oddball
    447 | Niney the Observer - Blood & Fire (Gella Remix)
    625 | RMS & DJ Hybrid - Too Bad
    732 | Conrad Dubs - Funk Me Sideways
    845 | Upgrade & Scudd - Gangbeasts
    973 | Vital Elements - Badda
    1069 | Barrington Levy - Shine Eye Girl (Dope Ammo Remix)
    1196 | Top Cat - Ruffest Gunark (Serial Killaz Remix)
    1296 | Brian Brainstorm - Already Dead (Jungle Mix)
    1444 | Breakage - As We Enter (Break Remix)
    1600 | Supa Ape - Raggamuffin
    1742 | Dub Pistols ft. Natty Campbell - Sound Sweet
    1908 | Desmond Dekker & The Aces - 007 (Shanty Town) (Ed Solo Remix)
    2027 | Conrad Subs - Stamina
    2187 | 4K & ALR - Brukshot (Aries & Kelvin 373 Remix)
    2292 | Bladerunner - War Dub
    2424 | Benny Page & Deekline ft. Gappy Ranks - Wartime
    2511 | Jamalboy - Shout it Out
    2618 | Benny Page ft. Mr. Williamz - Top Rank Skank
    2722 | Ed Solo ft. MC Spyda - Soundsystem Entertainer
    2819 | Annix - Crash
    2905 | Benny Page - Rub A Dub
    3038 | Benny Page - Crying Out
    3058 | Blend Mishkin & Roots Evolution ft. Skarra Mucci - Original (Liondub Remix)
    3200 | Psychofreud & Benny Page - Style & Fashion
    3354 | Bukem & The Peshay - 19.5
    3521 | K Jah - Supaclash
    3669 | Rumble, Mr Lexx & Suku Ward - Gyalis (L-Side Remix)
    3810 | Break It Up - High Roll
    3975 | DJ Dextrous - Charged (Serial Killaz Remix)
    4149 | Ellis x Triangle - Every Second (Jamie Bostron Remix)
    4319 | Redlight - Coca Cola Bottle Shape
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

        <div class="playing" id="title">Information Centre (1:14:01)</div>


        <div class="tracklist">
            <div class="track" onclick="updatePosition(this)" data-time="0"><b>Run Tingz Cru ft. Blackout J.A & K.Ners<b> - Informer (Northern Lights Jump Up Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="168"><b>Modified Motion & Faction<b> - 2 Bags Of Grass</div>
            <div class="track" onclick="updatePosition(this)" data-time="295"><b>Kleu<b> - Oddball</div>
            <div class="track" onclick="updatePosition(this)" data-time="447"><b>Niney the Observer<b> - Blood & Fire (Gella Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="625"><b>RMS & DJ Hybrid<b> - Too Bad</div>
            <div class="track" onclick="updatePosition(this)" data-time="732"><b>Conrad Dubs<b> - Funk Me Sideways</div>
            <div class="track" onclick="updatePosition(this)" data-time="845"><b>Upgrade & Scudd<b> - Gangbeasts</div>
            <div class="track" onclick="updatePosition(this)" data-time="973"><b>Vital Elements<b> - Badda</div>
            <div class="track" onclick="updatePosition(this)" data-time="1069"><b>Barrington Levy<b> - Shine Eye Girl (Dope Ammo Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1196"><b>Top Cat<b> - Ruffest Gunark (Serial Killaz Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1296"><b>Brian Brainstorm<b> - Already Dead (Jungle Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1444"><b>Breakage<b> - As We Enter (Break Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1600"><b>Supa Ape<b> - Raggamuffin</div>
            <div class="track" onclick="updatePosition(this)" data-time="1742"><b>Dub Pistols ft. Natty Campbell<b> - Sound Sweet</div>
            <div class="track" onclick="updatePosition(this)" data-time="1908"><b>Desmond Dekker & The Aces<b> - 007 (Shanty Town) (Ed Solo Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2027"><b>Conrad Subs<b> - Stamina</div>
            <div class="track" onclick="updatePosition(this)" data-time="2187"><b>4K & ALR<b> - Brukshot (Aries & Kelvin 373 Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2292"><b>Bladerunner<b> - War Dub</div>
            <div class="track" onclick="updatePosition(this)" data-time="2424"><b>Benny Page & Deekline ft. Gappy Ranks<b> - Wartime</div>
            <div class="track" onclick="updatePosition(this)" data-time="2511"><b>Jamalboy<b> - Shout it Out</div>
            <div class="track" onclick="updatePosition(this)" data-time="2618"><b>Benny Page ft. Mr. Williamz<b> - Top Rank Skank</div>
            <div class="track" onclick="updatePosition(this)" data-time="2722"><b>Ed Solo ft. MC Spyda<b> - Soundsystem Entertainer</div>
            <div class="track" onclick="updatePosition(this)" data-time="2819"><b>Annix<b> - Crash</div>
            <div class="track" onclick="updatePosition(this)" data-time="2905"><b>Benny Page<b> - Rub A Dub</div>
            <div class="track" onclick="updatePosition(this)" data-time="3038"><b>Benny Page<b> - Crying Out</div>
            <div class="track" onclick="updatePosition(this)" data-time="3058"><b>Blend Mishkin & Roots Evolution ft. Skarra Mucci<b> - Original (Liondub Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3200"><b>Psychofreud & Benny Page<b> - Style & Fashion</div>
            <div class="track" onclick="updatePosition(this)" data-time="3354"><b>Bukem & The Peshay<b> - 19.5</div>
            <div class="track" onclick="updatePosition(this)" data-time="3521"><b>K Jah<b> - Supaclash</div>
            <div class="track" onclick="updatePosition(this)" data-time="3669"><b>Rumble, Mr Lexx & Suku Ward<b> - Gyalis (L-Side Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3810"><b>Break It Up<b> - High Roll</div>
            <div class="track" onclick="updatePosition(this)" data-time="3975"><b>DJ Dextrous<b> - Charged (Serial Killaz Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="4149"><b>Ellis x Triangle<b> - Every Second (Jamie Bostron Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="4319"><b>Redlight<b> - Coca Cola Bottle Shape</div>
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