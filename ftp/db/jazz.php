<?php
$mixtape = "Jazz 'n' All That";
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


            <a href="../audio/db/jazz.mp3" download><button class="action-btn action-btn-big">
                    <i class="fas fa-download"></i>
                </button></a>
        </div>

    </div>
</div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none">
        <!-- <source src="../audio/supafly.ogg" type="../audio/ogg"> -->
        <source src="/audio/db/jazz.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>


<div class="timings" style="display: none">
    0 | Deekline - It's a Jazz Thing
    140 | Makoto - Show Me
    265 | Technimatic - Sunburst
    430 | Freestylers - Entertainer (Serial Killaz Remix)
    582 | Dirty Skank Beats - Babylon
    705 | Dope Ammo & Run Tingz Cru ft. Redders - Badman Inna My Ends (Levela Remix)
    824 | Deekline & Ed Solo ft. General Levy - VIP Sound (Benny Page Remix)
    910 | DJ Hybrid - Love The Vibe
    1043 | JFB - Active Transmission
    1150 | Aries, Gold Dubs & Bladerunner ft. Navigator & Cheshire Cat - Bust Them Up (Kleu Remix)
    1324 | Marcus Visionary ft. Johnny Osbourne - Jah Promise (Jungle VIP)
    1423 | Technimatic - Bristol (Break Remix)
    1596 | Gardna ft. Tiffani Juno - See The Vibe (Ed Solo Remix)
    1750 | Freestylers & Deekline - Jungle Champion
    1924 | DJ Slinke & DJ Hybrid - 99 Dub (Rollers VIP)
    2060 | Dave & Ansel Collins - Double Barrel (Phibes Remix)
    2166 | Veak - Bubble Up Dub
    2251 | Brian Brainstorm - Anything & Everything
    2404 | Serani - No Games (Subtifuge Mix)
    2504 | Conrad Subs & DJ Hybrid - Rinse It
    2634 | Ricky Tuff - It's All Love
    2768 | Serum - G Funk
    2939 | Benny Page ft. Troublesome - Jungle Time
    3052 | The Urbanizer ft. Dee Bo General - Big Up Di Yout Dem
    3268 | Shy FX - This Style
    3447 | Serial Killaz - Badman Selecta
    3618 | Ed Solo ft. Navigator - Soundboy Dying (Ed Solo 2020 Remix)
    3715 | PsychoFreud ft. Demolition Man - High Grade (Liondub Remix)
    3890 | Veak - Roots Reality
    4000 | 6Blocc - Pretty Girl (Steppin' Mix)
    4218 | Serum & Voltage - 8 Bit (Taxman Remix)
    4350 | Dijeyow - Brush Me
    4523 | Isaac Maya - Peace & Unity
    4720 | Brookes Brothers - Tear You Down
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

        <div class="playing" id="title">Jazz 'n' All That (1:22:32)</div>


        <div class="tracklist">
            <div class="track" onclick="updatePosition(this)" data-time="0"><b>Deekline<b> - It's a Jazz Thing</div>
            <div class="track" onclick="updatePosition(this)" data-time="140"><b>Makoto<b> - Show Me</div>
            <div class="track" onclick="updatePosition(this)" data-time="265"><b>Technimatic<b> - Sunburst</div>
            <div class="track" onclick="updatePosition(this)" data-time="430"><b>Freestylers<b> - Entertainer (Serial Killaz Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="582"><b>Dirty Skank Beats<b> - Babylon</div>
            <div class="track" onclick="updatePosition(this)" data-time="705"><b>Dope Ammo & Run Tingz Cru ft. Redders<b> - Badman Inna My Ends (Levela Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="824"><b>Deekline & Ed Solo ft. General Levy<b> - VIP Sound (Benny Page Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="910"><b>DJ Hybrid<b> - Love The Vibe</div>
            <div class="track" onclick="updatePosition(this)" data-time="1043"><b>JFB<b> - Active Transmission</div>
            <div class="track" onclick="updatePosition(this)" data-time="1150"><b>Aries, Gold Dubs & Bladerunner ft. Navigator & Cheshire Cat<b> - Bust Them Up (Kleu Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1324"><b>Marcus Visionary ft. Johnny Osbourne<b> - Jah Promise (Jungle VIP)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1423"><b>Technimatic<b> - Bristol (Break Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1596"><b>Gardna ft. Tiffani Juno<b> - See The Vibe (Ed Solo Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="1750"><b>Freestylers & Deekline<b> - Jungle Champion</div>
            <div class="track" onclick="updatePosition(this)" data-time="1924"><b>DJ Slinke & DJ Hybrid<b> - 99 Dub (Rollers VIP)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2060"><b>Dave & Ansel Collins<b> - Double Barrel (Phibes Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2166"><b>Veak<b> - Bubble Up Dub</div>
            <div class="track" onclick="updatePosition(this)" data-time="2251"><b>Brian Brainstorm<b> - Anything & Everything</div>
            <div class="track" onclick="updatePosition(this)" data-time="2404"><b>Serani<b> - No Games (Subtifuge Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="2504"><b>Conrad Subs & DJ Hybrid<b> - Rinse It</div>
            <div class="track" onclick="updatePosition(this)" data-time="2634"><b>Ricky Tuff<b> - It's All Love</div>
            <div class="track" onclick="updatePosition(this)" data-time="2768"><b>Serum<b> - G Funk</div>
            <div class="track" onclick="updatePosition(this)" data-time="2939"><b>Benny Page ft. Troublesome<b> - Jungle Time</div>
            <div class="track" onclick="updatePosition(this)" data-time="3052"><b>The Urbanizer ft. Dee Bo General<b> - Big Up Di Yout Dem</div>
            <div class="track" onclick="updatePosition(this)" data-time="3268"><b>Shy FX<b> - This Style</div>
            <div class="track" onclick="updatePosition(this)" data-time="3447"><b>Serial Killaz<b> - Badman Selecta</div>
            <div class="track" onclick="updatePosition(this)" data-time="3618"><b>Ed Solo ft. Navigator<b> - Soundboy Dying (Ed Solo 2020 Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3715"><b>PsychoFreud ft. Demolition Man<b> - High Grade (Liondub Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="3890"><b>Veak<b> - Roots Reality</div>
            <div class="track" onclick="updatePosition(this)" data-time="4000"><b>6Blocc<b> - Pretty Girl (Steppin' Mix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="4218"><b>Serum & Voltage<b> - 8 Bit (Taxman Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="4350"><b>Dijeyow<b> - Brush Me</div>
            <div class="track" onclick="updatePosition(this)" data-time="4523"><b>Isaac Maya<b> - Peace & Unity</div>
            <div class="track" onclick="updatePosition(this)" data-time="4720"><b>Brookes Brothers<b> - Tear You Down</div>
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