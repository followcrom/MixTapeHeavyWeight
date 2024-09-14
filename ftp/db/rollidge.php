<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">Side B: Rollidge (1:14:45)</div>

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


                <a href="https://mthw.s3.eu-west-2.amazonaws.com/db/rollidge.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
<audio id="audio" preload="none" crossorigin="anonymous">
        <source src="https://mthw.s3.eu-west-2.amazonaws.com/db/rollidge.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Adam F & T.K.O - Therapy
    199 | Bal - Disappearing Girl
    274 | Jahiem - Put That Woman First (Calibre Mix)
    501 | Marky & Bungle - 25th Floor (VIP)
    760 | Break - Authentic
    923 | Zebedee - Alien Threat
    1126 | Mos Def - The Panties (D&B Mix)
    1214 | Munk - Sunset
    1492 | Sabre - Riverside
    1601 | Skitty - True Blue
    1750 | Mist-I-Cal - Memory Jog
    1994 | Brookes Brothers - Hard Knocks
    2124 | Calibre - Carry Me Away
    2356 | Breakage & Rohan - Ruff Dub
    2529 | Eddy Woo & Moving Fusion - Black Hawk Down
    2744 | High Contrast - Everything's Different
    2896 | Cyantific - Power Surge (Concept Mix)
    3072 | Logistics - City Life
    3273 | Mutt - Butterscotch
    3340 | Mutt - The Same We Always Feel
    3620 | Total Science - Be My Twin
    3945 | Klute - Hell Hath No Fury
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Adam F & T.K.O</b> - Therapy</div>
        <div class="track" onclick="updatePosition(this)" data-time="199"><b>Bal</b> - Disappearing Girl</div>
        <div class="track" onclick="updatePosition(this)" data-time="274"><b>Jahiem</b> - Put That Woman First (Calibre
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="501"><b>Marky & Bungle</b> - 25th Floor (VIP)</div>
        <div class="track" onclick="updatePosition(this)" data-time="760"><b>Break</b> - Authentic</div>
        <div class="track" onclick="updatePosition(this)" data-time="923"><b>Zebedee</b> - Alien Threat</div>
        <div class="track" onclick="updatePosition(this)" data-time="1126"><b>Mos Def</b> -
            The Panties (D&B Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1214"><b>Munk</b> - Sunset</div>
        <div class="track" onclick="updatePosition(this)" data-time="1492"><b>Sabre</b> - Riverside</div>
        <div class="track" onclick="updatePosition(this)" data-time="1601"><b>Skitty</b> - True Blue</div>
        <div class="track" onclick="updatePosition(this)" data-time="1750"><b>Mist-I-Cal</b> - Memory Jog</div>
        <div class="track" onclick="updatePosition(this)" data-time="1994"><b>Brookes Brothers</b> - Hard Knocks</div>
        <div class="track" onclick="updatePosition(this)" data-time="2124"><b>Calibre</b> -
            Carry Me Away</div>
        <div class="track" onclick="updatePosition(this)" data-time="2356"><b>Breakage & Rohan</b> - Ruff Dub</div>
        <div class="track" onclick="updatePosition(this)" data-time="2529"><b>Eddy Woo & Moving Fusion</b> - Black Hawk
            Down</div>
        <div class="track" onclick="updatePosition(this)" data-time="2744"><b>High Contrast</b> - Everything's Different
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2896"><b>Cyantific</b>
            - Power Surge (Concept Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3072"><b>Logistics</b>
            - City Life</div>
        <div class="track" onclick="updatePosition(this)" data-time="3273"><b>Mutt</b> - Butterscotch</div>
        <div class="track" onclick="updatePosition(this)" data-time="3340"><b>Mutt</b> - The Same We Always Feel</div>
        <div class="track" onclick="updatePosition(this)" data-time="3620"><b>Total Science</b> - Be My Twin</div>
        <div class="track" onclick="updatePosition(this)" data-time="3945"><b>Klute</b> - Hell Hath No Fury</div>

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