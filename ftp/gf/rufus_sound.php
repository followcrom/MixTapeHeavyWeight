<?php include '../header.html'; ?>

<div class="tape">
    <div class="top_label">A: The Rufus Sound (1:24:29)</div>

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


                <a href="../audio/gf/rufus_sound.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="https://mthw.s3.eu-west-2.amazonaws.com/gf/rufus_sound.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>


<div class="timings" style="display: none">
    0 | Mr Stabalina - Can We Do It Again?
    216 | The Meters - Cissy Strut (J-Sound Edit)
    320 | Bobby C Sound TV - Last Call
    451 | Bobby C Sound TV - Home Schooled
    569 | Mr Stabalina - Freak The Funk
    747 | Prince - Alphabet Street (DJP Remix)
    956 | Mr Stabalina - Rock The Party
    1076 | Bondi Stereo - Say Hey!
    1201 | Dubra - I Can't Get No Sleep
    1343 | Bondi Stereo - Pretty Girl
    1467 | SkiiTour - The Program
    1598 | WBBL & Joe Revell - Default
    1703 | Mr Stabalina - Don't Stop
    1849 | J-Sound - Shake Ya Funkin' Ass
    1934 | Cockney Nutjob - Sunshine
    2120 | Extra Medium ft. Mr Switch & Cab Canavaral - Size Up
    2244 | Ray Parker Jr. - Ghostbusters (Dusty Tonez Booty)
    2372 | B-Side - Stylin'
    2562 | DJ Fresh ft. Ms. Dynamite - Dibby Dibby Sound (Dubra Remix)
    2720 | De La Soul - Say No Go (Bobby C Sound TV Booty)
    2927 | Bondi Stereo - Hot Summer Bombs
    3066 | J-Sound - Express Yo'Self
    3158 | Dave RMX - Acrobatic Soul
    3310 | Dave RMX - Champ Rocker
    3390 | Cockney Nutjob - I'm Skankin' Out
    3538 | Breach - Jack (DJP Remix)
    3628 | Funktomas - Let Me Clear My Throat (Wobble Edit)
    3858 | Extra Medium - Blues Boogie Bass
    3925 | Dave RMX - Magnetic Funk
    4034 | Cockney Nutjob - Heads Boppin'
    4204 | Sonz Of A Loop Da Loop Era - Far Out (Box Rocket Booty)
    4310 | A Skillz vs Beatvandals - Feelin' Kinda Insane
    4470 | Nina Simone - My Baby Don't (Cockney Nutjob Booty)
    4600 | Extra Medium - Lazy Bones
    4752 | Karen Harding - Open My Eyes (Zed Bias Mix)
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Mr Stabalina</b> - Can We Do
            It Again?</div>
        <div class="track" onclick="updatePosition(this)" data-time="216"><b>The Meters</b> - Cissy Strut (J-Sound
            Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="320"><b>Bobby C Sound TV</b> - Last Call</div>
        <div class="track" onclick="updatePosition(this)" data-time="451"><b>Bobby C Sound TV</b> - Home Schooled
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="569"><b>Mr Stabalina </b> - Freak The Funk
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="747"><b>Prince </b> - Alphabet Street (DJP
            Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="956"><b>Mr Stabalina</b> - Rock The Party</div>
        <div class="track" onclick="updatePosition(this)" data-time="1076"><b>Bondi Stereo</b> - Say Hey!</div>
        <div class="track" onclick="updatePosition(this)" data-time="1201"><b>Dubra</b> - I Can't Get No Sleep</div>
        <div class="track" onclick="updatePosition(this)" data-time="1343"><b>Bondi Stereo</b> - Pretty
            Girl</div>
        <div class="track" onclick="updatePosition(this)" data-time="1467"><b>SkiiTour</b> - The Program</div>
        <div class="track" onclick="updatePosition(this)" data-time="1598"><b>WBBL & Joe Revell</b> - Default</div>
        <div class="track" onclick="updatePosition(this)" data-time="1703"><b>Mr Stabalina</b> - Don't Stop</div>
        <div class="track" onclick="updatePosition(this)" data-time="1849"><b>J-Sound</b> - Shake Ya Funkin' Ass
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1934"><b>Cockney Nutjob</b> - Sunshine</div>
        <div class="track" onclick="updatePosition(this)" data-time="2120"><b>Extra Medium ft. Mr Switch & Cab
                Canavaral</b> - Size Up</div>
        <div class="track" onclick="updatePosition(this)" data-time="2244"><b>Ray Parker Jr.</b> - Ghostbusters
            (Dusty Tonez Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2372"><b>B-Side</b> - Stylin’</div>
        <div class="track" onclick="updatePosition(this)" data-time="2562"><b>DJ Fresh ft. Ms. Dynamite
            </b> - Dibby Dibby Sound (Dubra Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2720"><b>De La Soul</b> - Say No Go (Bobby C
            Sound TV Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2927"><b>Bondi Stereo </b> - Hot Summer Bombs
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3066"><b>J-Sound</b> - Express Yo'Self</div>
        <div class="track" onclick="updatePosition(this)" data-time="3158"><b>Dave RMX</b> - Acrobatic Soul</div>
        <div class="track" onclick="updatePosition(this)" data-time="3310"><b>Dave RMX</b> - Champ Rocker</div>
        <div class="track" onclick="updatePosition(this)" data-time="3390"><b>Cockney Nutjob</b> - I'm Skankin' Out
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3538"><b>Breach</b> - Jack (DJP Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3628"><b>Funktomas</b> - Let Me Clear My Throat
            (Wobble Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3858"><b>Extra Medium</b> - Blues Boogie Bass
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3925"><b>Dave RMX</b> - Magnetic Funk</div>
        <div class="track" onclick="updatePosition(this)" data-time="4034"><b>Cockney Nutjob</b> - Heads Boppin'
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="4204"><b>Sonz Of A Loop Da Loop Era</b> - Far
            Out (Box Rocket Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4310"><b>A Skillz vs Beatvandals</b> - Feelin’
            Kinda Insane</div>
        <div class="track" onclick="updatePosition(this)" data-time="4470"><b>Nina Simone</b> - My Baby
            Don't (Cockney Nutjob Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4600"><b>Extra Medium</b> - Lazy Bones</div>
        <div class="track" onclick="updatePosition(this)" data-time="4752"><b>Karen Harding</b> - Open My Eyes (Zed
            Bias Mix)</div>
    </div>
</div>


<div class="reviewsStrip">
    <?php include '../reviewForm.php'; ?>

    <div class="reviewsBox">

        <?php
        $mixtape = 'Rufus Sound';
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