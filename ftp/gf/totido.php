<?php include '../header.html'; ?>

<div class="tape">
    <div class="top_label">A: Turn On, Tune In, Drop Out (1:14:56)</div>

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


                <a href="../audio/gf/totido.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="../audio/gf/totido.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Copycat - Funkbox Party
    194 | Nas ft. Dougie Fresh & Ludacris - Virgo (Qdup's Virgogo Re-Rub)
    274 | The Dixie Cups - Iko Iko (Qdup's Future Go-Go Edit)
    309 | Rita Marley - One Draw (Father Funk Mix)
    483 | J-Sound - I Scream Sound
    605 | The Niceguys - Stand Up
    740 | Kool & The Gang - Let's Go Dancin' (Shaka Loves You Booty)
    897 | Slynk - Boomin' (DCDJ Calypso Mix)
    1043 | Pete Rock & C.L Smooth - T.R.O.Y (Father Funk Booty)
    1264 | Featurecast - My Thing
    1386 | Steppenwolf - Magic Carpet Ride (Shaka Loves You Booty)
    1572 | Father Funk - Jungle Strut
    1663 | James Brown - Payback (B-Side Booty)
    1756 | The Niceguys - Yonder
    1916 | DJ Marky & XRS - The Way (Featurecast Mix)
    2078 | Public Enemy - Harder Than You Think (Featurecast Booty)
    2267 | 2C - Happy (J-Sound Remix)
    2474 | Joss Stone - Put Your Hands On Me (Beat Fatigue Mix)
    2759 | The Great Flood Catastrophe - Fallen Love (Kill Paris Mix)
    2925 | Shaka Loves You - Flip The Funk
    3079 | Father Funk - Don't Stop
    3129 | Nirvana - Smells Like Teen Spirit (Phibes Booty)
    3309 | B-Side & Detta - Rock 'Em Right
    3402 | The Commmitments - Mustang Sally (Bezwun Booty)
    3598 | The Niceguys - Funky Bird
    3780 | Bobby C Sound TV - Papa Grande
    3890 | Rockwell - I Need U (Featurecast & WBBL Mix)
    4115 | Father Funk - Party Rocker
    4222 | Chris Malinchak - So Good To Me (Chamber Mix)
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Copycat</b> - Funkbox Party</div>
        <div class="track" onclick="updatePosition(this)" data-time="194"><b>Nas ft. Dougie
                Fresh & Ludacris</b> - Virgo (Qdup's Virgogo Re-Rub)</div>
        <div class="track" onclick="updatePosition(this)" data-time="274"><b>The Dixie Cups</b> - Iko Iko (Qdup's Future
            Go-Go Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="309"><b>Rita Marley</b> - One Draw (Father Funk
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="483"><b>J-Sound</b> - I Scream Sound</div>
        <div class="track" onclick="updatePosition(this)" data-time="605"><b>The Niceguys</b> - Stand Up</div>
        <div class="track" onclick="updatePosition(this)" data-time="740"><b>Kool & The Gang</b> - Let's Go Dancin'
            (Shaka Loves You Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="897"><b>Slynk</b> - Boomin' (DCDJ Calypso Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1043"><b>Pete Rock & C.L Smooth</b> - T.R.O.Y
            (Father Funk Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1264"><b>Featurecast</b> - My Thing</div>
        <div class="track" onclick="updatePosition(this)" data-time="1386"><b>Steppenwolf</b> - Magic Carpet Ride (Shaka
            Loves You Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1572"><b>Father Funk</b> - Jungle Strut</div>
        <div class="track" onclick="updatePosition(this)" data-time="1663"><b>James Brown</b> - Payback (B-Side Booty)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1756"><b>The Niceguys</b> - Yonder</div>
        <div class="track" onclick="updatePosition(this)" data-time="1916"><b>DJ Marky & XRS</b> - The Way (Featurecast
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2078"><b>Public Enemy</b> - Harder Than You Think
            (Featurecast Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2267"><b>2C</b> - Happy (J-Sound Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2474"><b>Joss Stone</b> - Put Your Hands On Me
            (Beat Fatigue Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2759"><b>The Great Flood Catastrophe</b> - Fallen
            Love (Kill Paris Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2925"><b>Shaka Loves You</b> - Flip The Funk</div>
        <div class="track" onclick="updatePosition(this)" data-time="3079"><b>Father Funk</b> - Don't Stop</div>
        <div class="track" onclick="updatePosition(this)" data-time="3129"><b>Nirvana</b> -
            Smells Like Teen Spirit (Phibes Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3309"><b>B-Side & Detta</b> - Rock 'Em Right</div>
        <div class="track" onclick="updatePosition(this)" data-time="3402"><b>The Commmitments</b> - Mustang Sally
            (Bezwun Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3598"><b>The Niceguys</b> - Funky Bird</div>
        <div class="track" onclick="updatePosition(this)" data-time="3780"><b>Bobby C Sound
                TV</b> - Papa Grande</div>
        <div class="track" onclick="updatePosition(this)" data-time="3890"><b>Rockwell</b> - I Need U (Featurecast &
            WBBL Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4115"><b>Father Funk</b> - Party Rocker</div>
        <div class="track" onclick="updatePosition(this)" data-time="4222"><b>Chris Malinchak</b> - So Good To Me
            (Chamber Mix)</div>
    </div>
</div>


<div class="reviewsStrip">
    <?php include '../reviewForm.php'; ?>

    <div class="reviewsBox">

        <?php
        $mixtape = 'Turn On, Tune In, Drop Out';
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