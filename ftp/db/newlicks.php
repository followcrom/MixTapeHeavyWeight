<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">Side 2: Nu:Licks (58:38)</div>

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


                <a href="https://mthw.s3.eu-west-2.amazonaws.com/db/newlicks.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
<audio id="audio" preload="none" crossorigin="anonymous">
        <source src="https://mthw.s3.eu-west-2.amazonaws.com/db/newlicks.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Alix Perez ft. Ursula Rucker - Intersections
    107 | Bent - I Love My Man
    174 | Redlight ft. Ms Dynamite - What You Talking About
    229 | Mz Bratt - Selecta
    350 | Krafty Kuts - Shake Them Hips (Drumsound & Bassline Smith Mix)
    609 | Giggs - Hustle On (Shy FX Mix)
    803 | D Bridge & Fierce - Tyranny
    911 | Ruffige Krew - Monkey Boy
    1007 | Lauren Pritchard - Not The Drinking (Sigma Mix)
    1217 | Top Cat - Sweetest Ting (Marcus Visionary Mix)
    1515 | Benny Page - Crazy Baldheads
    1665 | Break - Cold Sweat
    1688 | Snow Patrol - Open Your Eyes (Marky & Bungle Mix)
    1998 | Dillinja - Expansions
    2107 | High Contrast - Make It Tonight (XRS Mix)
    2214 | Danny Byrd ft. Brookes Brothers - Gold Rush
    2472 | Roni Size & Die - It's A Jazz Thing (Utah Jazz Mix)
    2590 | Jaydan - Ice Scraper
    2656 | Top Cat - Bunn The Sensi (Serial Killaz Mix)
    2862 | EZ Rollers - Rancho Notorious
    3000 | Aphex Twin - Kick Ass Violin Solo
    3150 | C-Mos - 2 Million Ways (Herbal T Mix)
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Alix Perez ft. Ursula Rucker</b> -
            Intersections</div>
        <div class="track" onclick="updatePosition(this)" data-time="107"><b>Bent</b> - I Love My Man</div>
        <div class="track" onclick="updatePosition(this)" data-time="174"><b>Redlight ft. Ms Dynamite</b> - What You
            Talking About</div>
        <div class="track" onclick="updatePosition(this)" data-time="229"><b>Mz Bratt</b> -
            Selecta</div>
        <div class="track" onclick="updatePosition(this)" data-time="350"><b>Krafty Kuts</b> - Shake Them Hips
            (Drumsound & Bassline Smith Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="609"><b>Giggs</b> - Hustle On (Shy FX Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="803"><b>D Bridge & Fierce</b> - Tyranny</div>
        <div class="track" onclick="updatePosition(this)" data-time="911"><b>Ruffige Krew</b> - Monkey Boy</div>
        <div class="track" onclick="updatePosition(this)" data-time="1007"><b>Lauren Pritchard</b> - Not The Drinking
            (Sigma Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1217"><b>Top Cat</b> -
            Sweetest Ting (Marcus Visionary Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1515"><b>Benny Page</b> - Crazy Baldheads</div>
        <div class="track" onclick="updatePosition(this)" data-time="1665"><b>Break</b> - Cold Sweat</div>
        <div class="track" onclick="updatePosition(this)" data-time="1688"><b>Snow Patrol</b> - Open Your Eyes (Marky &
            Bungle Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1998"><b>Dillinja</b> - Expansions</div>
        <div class="track" onclick="updatePosition(this)" data-time="2107"><b>High Contrast</b> - Make It Tonight (XRS
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2214"><b>Danny Byrd ft. Brookes Brothers</b> - Gold
            Rush</div>
        <div class="track" onclick="updatePosition(this)" data-time="2472"><b>Roni Size & Die</b> - It's A Jazz Thing
            (Utah Jazz Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2590"><b>Jaydan</b> - Ice Scraper</div>
        <div class="track" onclick="updatePosition(this)" data-time="2656"><b>Top Cat</b> -
            Bunn The Sensi (Serial Killaz Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2862"><b>EZ Rollers</b> - Rancho Notorious</div>
        <div class="track" onclick="updatePosition(this)" data-time="3000"><b>Aphex Twin</b> - Kick Ass Violin Solo
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3150"><b>C-Mos</b> - 2
            Million Ways (Herbal T Mix)</div>

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