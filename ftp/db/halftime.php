<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">A: Mixtape Heavyweight - Halftime</div>

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


                <a href="https://mthw.s3.eu-west-2.amazonaws.com/db/halftime.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
<audio id="audio" preload="none" crossorigin="anonymous">
        <source src="https://mthw.s3.eu-west-2.amazonaws.com/db/halftime.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Poly Pines - Let's Escape
    154 | Après - Chicago (Technimatic Mix)
    308 | Wilkinson ft. Thabo - Hopelessly Coping
    515 | Erykah Badu - Soldier (Supa Ape Mix)
    735 | Sigma ft. Birdy - Find Me (Sigma VIP)
    855 | Showtek & Justin Prime ft. Matthew Koma - Cannonball (Matrix & Futurebound Mix)
    998 | Rico Tubbs - Chemistry
    1111 | RZA & Method Man - Built For This (Serial Killaz Mix)
    1200 | M.I.A - Paper Planes (Phibes Booty)
    1420 | A.M Sniper ft. Currency - Hype (Dope Ammo Mix)
    1573 | DJ Krome & Mr. Time - The Licence (Serial Killaz Mix)
    1769 | DJ Hazard - Machete
    1987 | Sigala - Easy Love (Danny Byrd Mix)
    2265 | Jam Thieves - Out Of Memory
    2330 | Culture Shock ft. Josh Parkinson - No More (Back To You)
    2516 | Dillon Francis ft. Will Heard - Anywhere (Fred V & Grafix Mix)
    2780 | Aphrodite - Stalker (Benny Page Mix)
    2933 | Jeff Wayne - War Of The Worlds (Drumsound & Bassline Smith Mix)
    3164 | Timmokk - Helicopter
    3262 | Critical - Hype The Funk (Rhythmicon Mix)
    3375 | Serial Killaz - Traffic Blocking
    3595 | Emeli Sande - Breathing Underwater (Matrix & Futurebound Mix)
    3846 | The 1975 - You (Andrea Mix)
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Poly Pines</b> -
            Let's Escape</div>
        <div class="track" onclick="updatePosition(this)" data-time="154"><b>Après</b> - Chicago (Technimatic Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="308"><b>Wilkinson ft. Thabo</b> - Hopelessly
            Coping</div>
        <div class="track" onclick="updatePosition(this)" data-time="515"><b>Erykah Badu</b> - Soldier (Supa Ape
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="735"><b>Sigma ft. Birdy</b> - Find Me (Sigma
            VIP)</div>
        <div class="track" onclick="updatePosition(this)" data-time="855"><b>Showtek & Justin Prime ft. Matthew Koma
            </b> - Cannonball (Matrix & Futurebound Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="998"><b>Rico Tubbs </b> - Chemistry</div>
        <div class="track" onclick="updatePosition(this)" data-time="1111"><b>RZA & Method Man </b> - Built For This
            (Serial Killaz Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1200"><b>M.I.A</b> - Paper Planes (Phibes
            Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1420"><b>A.M Sniper ft. Currency</b> - Hype
            (Dope Ammo Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1573"><b>DJ Krome & Mr. Time</b> - The Licence
            (Serial Killaz Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1769"><b>DJ Hazard</b>
            - Machete</div>
        <div class="track" onclick="updatePosition(this)" data-time="1987"><b>Sigala</b> - Easy Love (Danny Byrd
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2265"><b>Jam Thieves</b> - Out Of Memory</div>
        <div class="track" onclick="updatePosition(this)" data-time="2330"><b>Culture Shock
                ft. Josh Parkinson </b> - No More (Back To You)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2516"><b>Dillon Francis ft. Will Heard</b> -
            Anywhere (Fred V & Grafix Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2780"><b>Aphrodite</b>
            - Stalker (Benny Page Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2933"><b>Jeff Wayne</b> - War Of The Worlds
            (Drumsound & Bassline Smith Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3164"><b>Timmokk</b> -
            Helicopter</div>
        <div class="track" onclick="updatePosition(this)" data-time="3262"><b>Critical</b> - Hype The Funk
            (Rhythmicon Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3375"><b>Serial Killaz</b> - Traffic Blocking
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3595"><b>Emeli Sande</b> - Breathing Underwater
            (Matrix & Futurebound Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3846"><b>The 1975</b> - You (Andrea Mix)</div>

    </div>
</div>


<div class="reviewsStrip">


    <div class="reviewContainer">
        <h1>Leave a comment without stopping playback. (Reload the page to view.)</h1>
        <form id="form" method="post">
            <div style="display: inline-flex;">
                <fieldset class="rating">
                    <input type="radio" id="star1" name="stars" value="5" /><label for="star1"
                        title="5 stars">star</label>
                    <input type="radio" id="star2" name="stars" value="4" /><label for="star2"
                        title="4 stars">star</label>
                    <input type="radio" id="star3" name="stars" value="3" /><label for="star3"
                        title="3 stars">star</label>
                    <input type="radio" id="star4" name="stars" value="2" /><label for="star4"
                        title="2 stars">star</label>
                    <input type="radio" id="star5" name="stars" value="1" /><label for="star5"
                        title="1 star">star</label>
                </fieldset>

            </div>
            <div>
                <textarea name="comments" id="comments" rows="12" cols="40" required></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>

        <div class="reviewFeedback" id="review-feedback"></div>
    </div>


    <div class="reviewsBox">

        <?php
$host_name = 'db5011559101.hosting-data.io';
$database = 'dbs9747952';
$user_name = 'dbu626955';
$config = parse_ini_file('../config.ini');
$password = $config['password'];

$link = new mysqli($host_name, $user_name, $password, $database);


if (!$link) {
// Handle database connection errors
$response = array(
'success' => false,
'message' => 'Database connection error'
);
echo json_encode($response);
exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['stars']) && isset($_POST['comments'])) {
$stars = intval($_POST['stars']);
$comments = mysqli_escape_string($link, $_POST['comments']);
//   date_default_timezone_set('Europe/London');
$date = date("Y-m-d H:i:s");

$query = "INSERT INTO halftime (stars, comments, date) VALUES ($stars, '$comments', '$date')";
mysqli_query($link, $query);
}
}


$returned = "SELECT * FROM halftime ORDER BY date DESC";
$result = mysqli_query($link, $returned);

if ($result) {
while ($row = mysqli_fetch_array($result)) {
    // $row = array_reverse($row);
    $num = $row['stars'];
echo "<div class='review-container'>";
    echo "<div class='stars_div'>" . str_repeat("*", $num) . "</div>";
    echo "<div class='comments_div'><i>" . $row['comments'] . "</i></div>";
    echo "<div class='date_div'>" . $row['date'] . "</div>";
echo "</div>";
}
} else {
echo "No reviews found.";
}

?>

    </div>
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