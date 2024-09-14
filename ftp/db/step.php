<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">B: Step for Step (57:21)</div>

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


                <a href="https://mthw.s3.eu-west-2.amazonaws.com/db/step.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
<audio id="audio" preload="none" crossorigin="anonymous">
        <source src="https://mthw.s3.eu-west-2.amazonaws.com/db/step.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | TC - Tap Ho
    176 | Serial Killaz - Killa Clash
    396 | DJ Nut Nut ft. Top Cat - Special Dedication (Sigma Mix)
    529 | Jo - F Zero
    576 | Rusko - Everyday (Netsky VIP)
    781 | Birdy Nam Nam - Goin' In (Skrillex Mix)
    880 | TC - Psycho
    992 | Rollz - The Music (Be Strong)
    1059 | Stanza - Colonel Vibenhoff
    1080 | Benny Page ft. Mr. Williamz - Top Rank Skank
    1278 | Dub Pistols ft. Rodney P - Mucky Weekend
    1480 | Calyx & Teebee ft. Kemo - Pure Gold
    1625 | Crystal Clear & Zen - Heavy (VIP)
    1800 | Dub Phizix & Skeptical ft. Strategy - Marka (Dark Stranger Mix)
    1978 | Sub Focus - Tidal Wave (Kill Sonik Mix)
    2150 | Mr Explicit - Dirty Bitch
    2268 | Stooshe - Waterfalls (Drifta Mix)
    2440 | Die & Break - Grand Funk Hustle
    2530 | Benny Page ft. Solo Banton - Dangerous
    2716 | Dub Pistols ft. Rodney P - Rock Steady (Turntable Dubbers Mix)
    2970 | Dub Pistols ft. Darrison & Rodney P - Gunshot
    3032 | Benny Page ft. Top Cat - You've Been Boasting
    3241 | Ed Sheeran ft. Mic Righteous - Give Me Love (New Machine Mix)
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>TC</b> - Tap Ho</div>
        <div class="track" onclick="updatePosition(this)" data-time="176"><b>Serial Killaz</b> - Killa Clash</div>
        <div class="track" onclick="updatePosition(this)" data-time="396"><b>DJ Nut Nut ft.
                Top Cat </b> - Special Dedication (Sigma Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="529"><b>Jo</b> - F Zero</div>
        <div class="track" onclick="updatePosition(this)" data-time="576"><b>Rusko</b> - Everyday (Netsky VIP)</div>
        <div class="track" onclick="updatePosition(this)" data-time="781"><b>Birdy Nam Nam</b> - Goin' In (Skrillex
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="880"><b>TC</b> - Psycho</div>
        <div class="track" onclick="updatePosition(this)" data-time="992"><b>Rollz</b> - The Music (Be Strong)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1059"><b>Stanza</b> - Colonel Vibenhoff</div>
        <div class="track" onclick="updatePosition(this)" data-time="1080"><b>Benny Page ft. Mr. Williamz</b> - Top
            Rank Skank</div>
        <div class="track" onclick="updatePosition(this)" data-time="1278"><b>Dub Pistols ft. Rodney P</b> - Mucky
            Weekend</div>
        <div class="track" onclick="updatePosition(this)" data-time="1480"><b>Calyx & Teebee ft. Kemo</b> - Pure
            Gold</div>
        <div class="track" onclick="updatePosition(this)" data-time="1625"><b>Crystal Clear
                & Zen</b> - Heavy (VIP)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1800"><b>Dub Phizix & Skeptical ft.
                Strategy</b> - Marka (Dark Stranger Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1978"><b>Sub Focus</b>
            - Tidal Wave (Kill Sonik Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2150"><b>Mr Explicit</b> - Dirty Bitch</div>
        <div class="track" onclick="updatePosition(this)" data-time="2268"><b>Stooshe </b> - Waterfalls (Drifta Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2440"><b>Die & Break</b> - Grand Funk Hustle
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2530"><b>Benny Page ft. Solo Banton</b> -
            Dangerous</div>
        <div class="track" onclick="updatePosition(this)" data-time="2716"><b>Dub Pistols ft. Rodney P</b> - Rock
            Steady (Turntable Dubbers Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2970"><b>Dub Pistols ft. Darrison & Rodney
                P</b> - Gunshot</div>
        <div class="track" onclick="updatePosition(this)" data-time="3032"><b>Benny Page ft. Top Cat</b> - You've
            Been Boasting</div>
        <div class="track" onclick="updatePosition(this)" data-time="3241"><b>Ed Sheeran ft. Mic Righteous</b> -
            Give Me Love (New Machine Mix)</div>
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

$query = "INSERT INTO bcjt (stars, comments, date) VALUES ($stars, '$comments', '$date')";
mysqli_query($link, $query);
}
}


$returned = "SELECT * FROM bcjt ORDER BY date DESC";
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