<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">B: Jump Up, Tear Out (1:16:42)</div>

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


                <a href="https://mthw.s3.eu-west-2.amazonaws.com/db/juto.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
<audio id="audio" preload="none" crossorigin="anonymous">
        <source src="https://mthw.s3.eu-west-2.amazonaws.com/db/juto.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Afro Kid - Spice
    145 | DJ Fresh - X Project
    342 | Tommy Boy - Back Up
    408 | TC - Jump
    562 | Break - Submerged (Calyx & Teebee Mix)
    781 | Rhythm Beater & TI - Innsbruck
    968 | Swabe - Skinflint
    1187 | Roni Size - Friends
    1319 | Drumsound & Bassline Smith - Skumbag
    1450 | Dizzee Rascal - Sirens (Chase & Status Mix)
    1538 | Busta Rhymes - Touch It (D&B Mix)
    1670 | DJ Hazard - Surprise Surprise
    1801 | Tech Step - The Greatest Bassline
    2020 | Total Science - Defcon 69
    2240 | Phetsta - Dutty Funk
    2457 | TC - Love & Happiness
    2724 | Subfocus - Druggy
    2910 | Wyclef Jean - Whitney Houston Dub Plate
    2997 | DJ Fresh - All Strung Out (Thunder VIP)
    3151 | Danny Byrd - Dog Hill
    3381 | Trojan - Sub Dub
    3601 | Q Project - Champion Sound (XLR8 Mix)
    3809 | Break & Survival - No I.D
    3941 | Break - The Quest (Calyx & Teebee Mix)
    4204 | Noisia & Teebee - Shower For An Hour
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Afro Kid</b> - Spice</div>
        <div class="track" onclick="updatePosition(this)" data-time="145"><b>DJ Fresh</b> - X Project</div>
        <div class="track" onclick="updatePosition(this)" data-time="342"><b>Tommy Boy</b> - Back Up</div>
        <div class="track" onclick="updatePosition(this)" data-time="408"><b>TC</b> - Jump</div>
        <div class="track" onclick="updatePosition(this)" data-time="562"><b>Break</b> - Submerged (Calyx & Teebee Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="781"><b>Rhythm Beater & TI</b> - Innsbruck</div>
        <div class="track" onclick="updatePosition(this)" data-time="968"><b>Swabe</b> - Skinflint</div>
        <div class="track" onclick="updatePosition(this)" data-time="1187"><b>Roni Size</b> - Friends</div>
        <div class="track" onclick="updatePosition(this)" data-time="1319"><b>Drumsound & Bassline Smith</b> - Skumbag
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1450"><b>Dizzee
                Rascal</b> - Sirens (Chase & Status Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1538"><b>Busta Rhymes</b> - Touch It (D&B Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1670"><b>DJ Hazard</b> - Surprise Surprise</div>
        <div class="track" onclick="updatePosition(this)" data-time="1801"><b>Tech Step</b> - The Greatest Bassline
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2020"><b>Total Science</b> - Defcon 69</div>
        <div class="track" onclick="updatePosition(this)" data-time="2240"><b>Phetsta</b> - Dutty Funk</div>
        <div class="track" onclick="updatePosition(this)" data-time="2457"><b>TC</b>
            - Love & Happiness</div>
        <div class="track" onclick="updatePosition(this)" data-time="2724"><b>Subfocus</b> - Druggy</div>
        <div class="track" onclick="updatePosition(this)" data-time="2910"><b>Wyclef
                Jean</b> - Whitney Houston Dub Plate</div>
        <div class="track" onclick="updatePosition(this)" data-time="2997"><b>DJ Fresh</b> - All Strung Out (Thunder
            VIP)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3151"><b>Danny Byrd</b> - Dog Hill</div>
        <div class="track" onclick="updatePosition(this)" data-time="3381"><b>Trojan</b> - Sub Dub</div>
        <div class="track" onclick="updatePosition(this)" data-time="3601"><b>Q Project</b> - Champion Sound (XLR8 Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3809"><b>Break & Survival</b> - No I.D</div>
        <div class="track" onclick="updatePosition(this)" data-time="3941"><b>Break</b> - The Quest (Calyx & Teebee Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="4204"><b>Noisia
                & Teebee</b> - Shower For An Hour</div>
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