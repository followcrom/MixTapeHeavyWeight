<?php
$mixtape = 'Original Banton';
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


            <a href="../audio/db/og_banton.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="../audio/db/og_banton.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Kamille - Body (Brookes Brothers Mix)
    200 | Deekline - Funky Child
    341 | Veak - Coca Cola Bottle Shape
    460 | Ed Solo & JFB - BBQ
    526 | Pull Up Collective - Big Up (Kartoon Mix)
    588 | Brian Brainstorm - Already Dead (Jump Up Mix)
    775 | Ed Solo - Anye Up
    905 | Ed Solo - Ganja Smuggling
    1014 | Nectax & Scudd - Trouble Riddim (VIP)
    1230 | Preditah - Selecta (Dr Meaker Mix)
    1353 | Smash & Grab ft. Rubi Dan - X Rated
    1480 | Benny Page - Flava
    1568 | King Bee - Back By Dope Demand (Al Pack Bootleg)
    1699 | Ed Solo & Bonnot ft. Mr. Williamz - Raggamuffin DJ
    1860 | Freddie McGregor - Reggae Boom (Ed Solo Mix)
    2061 | Psycho Freud - Boom Wah Dis (Serial Killaz Remix)
    2234 | Rumble ft. Ward 21 - Siren (DnB Mix)
    2376 | Serum - Bad Boys (Serial Killaz Mix)
    2549 | Noah D ft. Anthony B - Good Sound (Benny Page Mix)
    2657 | Bladerunner - Jungle Jungle
    2810 | London's Most Wanted - Girls Dem Want It (Ed Solo Mix)
    2916 | Deekline & Ed Solo - Good Looking Girl
    3079 | Leaf - Shoot Off
    3255 | Morgan Heritage - Down By The River
    3403 | Bunny General - Sound War (Dread Mix)
    3598 | J-Man & Aries ft. Blackout JA & Courtney Melody - Ninja Mi Ninja
    3764 | Navigator ft. Ranking Joe - Junglist Sound (Serial Killaz Mix)
    3915 | Dope Ammo - Jazz Funk (Baron VIP)
    4002 | Burro Banton - No Problem (Riffz Mix)
    4118 | Opius Dapz - After Laughter Comes Tears
    4287 | Fleck & Kings Hi-Fi ft. Demolition Man - Fire
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

    <div class="playing" id="title">Original Banton (1:13:53)</div>


    <div class="tracklist">
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Kamille</b> - Body (Brookes Brothers Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="200"><b>Deekline</b> - Funky Child</div>
        <div class="track" onclick="updatePosition(this)" data-time="341"><b>Veak</b> - Coca Cola Bottle Shape</div>
        <div class="track" onclick="updatePosition(this)" data-time="460"><b>Ed Solo
                & JFB</b> - BBQ</div>
        <div class="track" onclick="updatePosition(this)" data-time="526"><b>Pull Up
                Collective</b> - Big Up (Kartoon Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="588"><b>Brian Brainstorm</b> - Already Dead
            (Jump Up Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="775"><b>Ed Solo</b> - Anye Up</div>
        <div class="track" onclick="updatePosition(this)" data-time="905"><b>Ed Solo</b> - Ganja Smuggling</div>
        <div class="track" onclick="updatePosition(this)" data-time="1014"><b>Nectax
                & Scudd</b> - Trouble Riddim (VIP)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1230"><b>Preditah</b> - Selecta (Dr Meaker Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1353"><b>Smash & Grab ft. Rubi Dan</b> - X
            Rated</div>
        <div class="track" onclick="updatePosition(this)" data-time="1480"><b>Benny Page</b> - Flava</div>
        <div class="track" onclick="updatePosition(this)" data-time="1568"><b>King Bee</b> - Back By Dope Demand (Al
            Pack Bootleg)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1699"><b>Ed Solo & Bonnot ft. Mr. Williamz</b>
            - Raggamuffin DJ</div>
        <div class="track" onclick="updatePosition(this)" data-time="1860"><b>Freddie McGregor</b> - Reggae Boom (Ed
            Solo Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2061"><b>Psycho
                Freud</b> - Boom Wah Dis (Serial Killaz Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2234"><b>Rumble
                ft. Ward 21</b> - Siren (DnB Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2376"><b>Serum</b> - Bad Boys (Serial Killaz
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2549"><b>Noah D
                ft. Anthony B</b> - Good Sound (Benny Page Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2657"><b>Bladerunner</b> - Jungle Jungle</div>
        <div class="track" onclick="updatePosition(this)" data-time="2810"><b>London's Most Wanted</b> - Girls Dem
            Want It (Ed Solo Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2916"><b>Deekline & Ed Solo</b> - Good Looking
            Girl</div>
        <div class="track" onclick="updatePosition(this)" data-time="3079"><b>Leaf</b> - Shoot Off</div>
        <div class="track" onclick="updatePosition(this)" data-time="3255"><b>Morgan
                Heritage</b> - Down By The River</div>
        <div class="track" onclick="updatePosition(this)" data-time="3403"><b>Bunny General</b> - Sound War (Dread
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3598"><b>J-Man & Aries ft. Blackout JA &
                Courtney Melody</b> - Ninja Mi Ninja</div>
        <div class="track" onclick="updatePosition(this)" data-time="3764"><b>Navigator ft. Ranking Joe</b> -
            Junglist Sound (Serial Killaz Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3915"><b>Dope Ammo</b> - Jazz Funk (Baron VIP)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="4002"><b>Burro Banton</b> - No Problem (Riffz
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4118"><b>Opius Dapz</b> - After Laughter Comes
            Tears</div>
        <div class="track" onclick="updatePosition(this)" data-time="4287"><b>Fleck & Kings Hi-Fi ft. Demolition
                Man</b> - Fire</div>
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