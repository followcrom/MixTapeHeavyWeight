<?php
$mixtape = 'Beyond the Silver Lake';
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


            <a href="../audio/db/lake.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="../audio/db/lake.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | RAW - Lock Up
    182 | Jayline - Anglo Saxxon (VIP)
    277 | Selecta J-Man ft. Blackout JA, Da Fuchaman, YT & Solo Banton - The Takeover
    509 | Serial Killaz - My Sound A Champion
    616 | T Kay - Soundboy
    727 | Salaryman - Ring The Alarm (VIP)
    949 | AMC - Mind The Gap
    1051 | Brookes Brothers - Good Thing
    1174 | Chopstick Dubplate - Uber Ride Version
    1378 | Protoje ft. Chronixx - Who Knows (Shy FX Mix)
    1561 | Pasco - Pussyhole
    1670 | Damian Marley - Is It Worth It? (Jamie Bostron Remix)
    1843 | Deekline - Brick City with Bounce
    1997 | Popcaan - Ravin' (J Bostron Bootleg Remix)
    2152 | Benny Page ft. Mr Williamz - Pass The Kutchie
    2274 | Mr Explicit - The Unknown
    2378 | Masker - Jungle Lick
    2489 | Rodney P & Skitz - Left (Serial Killaz Mix)
    2694 | MA2 - Hearing is Believing (Serum Remix)
    2803 | Upgrade - Get Excited
    2959 | Dubtime - Badman Nuh Inna Dat
    3097 | Java - Tune Fe Tune
    3229 | Chopstick Dubplatet. Mr Williamz - Saturday Night (Jungle Mix)
    3425 | Agent Sasco - Give Thanks (Jinx Remix)
    3569 | Selecta J-Man & Vinyl Junkie - Buss It
    3707 | Nitty Gritty - Sweet Reggae Music (Jamie Bostron Remix)
    3813 | Major Lazer - Can't Stop Now (Serial Killaz Version)
    3908 | Chronixx - Out Deh (Jamie Bostron Mix)
    4071 | Serial Killaz - Who the Bombaclart
    4204 | London Elektricity - Harlesden
    4386 | Chase & Status - Disaster
    4494 | 6Blocc - Valley of the Rollers
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

        <div class="playing" id="title">Beyond the Silver Lake (1:18:32)</div>


        <div class="tracklist">
            <div class="track" onclick="updatePosition(this)" data-time="0"><b>RAW</b> - Lock Up</div>
            <div class="track" onclick="updatePosition(this)" data-time="182"><b>Jayline</b> - Anglo Saxxon (VIP)</div>
            <div class="track" onclick="updatePosition(this)" data-time="277"><b>Selecta J-Man ft. Blackout JA, Da Fuchaman,
                    YT, Rev Monks Man, Raphael
                    & Solo.Banton</b> - The Takeover</div>
            <div class="track" onclick="updatePosition(this)" data-time="509"><b>Serial Killaz</b> - My Sound A Champion
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="616"><b>T Kay</b> - Soundboy</div>
            <div class="track" onclick="updatePosition(this)" data-time="727"><b>Salaryman</b> - Ring The Alarm (VIP)</div>
            <div class="track" onclick="updatePosition(this)" data-time="949"><b>AMC</b> - Mind The Gap</div>
            <div class="track" onclick="updatePosition(this)" data-time="1051"><b>Brookes Brothers</b> - Good Thing</div>
            <div class="track" onclick="updatePosition(this)" data-time="1174"><b>Chopstick Dubplate</b> - Uber Ride Version
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="1378"><b>Protoje ft. Chronixx</b> - Who Knows (Shy
                FX Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1561"><b>Pasco</b> - Pussyhole</div>
            <div class="track" onclick="updatePosition(this)" data-time="1670"><b>Damian Marley</b> - Is It Worth It? (Jamie
                Bostron Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1843"><b>Deekline</b> - Brick City with Bounce</div>
            <div class="track" onclick="updatePosition(this)" data-time="1997"><b>Popcaan</b> - Ravin' (J Bostron Bootleg
                Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2152"><b>Benny Page ft. Mr Williamz</b> - Pass The
                Kutchie</div>
            <div class="track" onclick="updatePosition(this)" data-time="2274"><b>Mr Explicit</b> - The Unknown</div>
            <div class="track" onclick="updatePosition(this)" data-time="2378"><b>Masker</b> - Jungle Lick</div>
            <div class="track" onclick="updatePosition(this)" data-time="2489"><b>Rodney P & Skitz</b> - Left (Serial Killaz
                Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2694"><b>MA2</b> - Hearing is Believing (Serum
                Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2803"><b>Upgrade</b> - Get Excited</div>
            <div class="track" onclick="updatePosition(this)" data-time="2959"><b>Dubtime</b> - Badman Nuh Inna Dat</div>
            <div class="track" onclick="updatePosition(this)" data-time="3097"><b>Java</b> - Tune Fe Tune</div>
            <div class="track" onclick="updatePosition(this)" data-time="3229"><b>Chopstick Dubplatet. Mr Williamz</b> -
                Saturday Night (Jungle Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3425"><b>Agent Sasco</b> - Give Thanks (Jinx Remix)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="3569"><b>Selecta J-Man & Vinyl Junkie</b> - Buss It
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="3707"><b>Nitty Gritty</b> - Sweet Reggae Music
                (Jamie Bostron Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3813"><b>Major Lazer</b> - Can't Stop Now (Serial
                Killaz Version)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3908"><b>Chronixx</b> - Out Deh (Jamie Bostron Mix)
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="4071"><b>Serial Killaz</b> - Who the Bombaclart
            </div>
            <div class="track" onclick="updatePosition(this)" data-time="4204"><b>London Elektricity</b> - Harlesden</div>
            <div class="track" onclick="updatePosition(this)" data-time="4386"><b>Chase & Status</b> - Disaster</div>
            <div class="track" onclick="updatePosition(this)" data-time="4494"><b>6Blocc</b> - Valley of the Rollers</div>

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