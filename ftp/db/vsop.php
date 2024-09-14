<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">Side 2: V.S.O.P (59:49)</div>

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


                <a href="https://mthw.s3.eu-west-2.amazonaws.com/db/vsop.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
<audio id="audio" preload="none" crossorigin="anonymous">
        <source src="https://mthw.s3.eu-west-2.amazonaws.com/db/vsop.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Top Cat - Pirate Radio
    351 | Sub Focus - Out Of The Blue
    590 | TC - Last Frontier
    656 | Youngman - Who Knows (Drumsound & Bassline Smith Mix)
    788 | Serial Killaz - Worries In The Dance
    1034 | Benny Page - Pass The Kutchie
    1201 | Run Tingz Crew - Born Inna Babylon
    1527 | Lana Del Rey - Born To Die (Marcus Intalex Mix)
    1659 | London Elektricity - Harlesden
    1864 | J Frequency - Bam Bam
    2150 | Ramos & Supreme - Crowd Control (Slipmatt Mix)
    2302 | Mike Slammer & DJ Red Alert - In Effect (Slipmatt Mix)
    2479 | Danny Byrd - Shock Out
    2707 | DJ Brisk - Airhead (Slipmatt's SMD Mix)
    2880 | Distorted Minds - T-10
    2977 | Serial Killaz - My Sound A Champion
    3174 | Die & Interface ft. William Cartwright - Bright Lights (Rockers Mix)
    3340 | AKA - Warning (Maximum Style Mix)
    3544 | Firefox & 4 Tree - Warning (Powder Mix)
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Top Cat</b> - Pirate Radio</div>
        <div class="track" onclick="updatePosition(this)" data-time="351"><b>Sub Focus</b> - Out Of The Blue</div>
        <div class="track" onclick="updatePosition(this)" data-time="590"><b>TC</b> - Last Frontier</div>
        <div class="track" onclick="updatePosition(this)" data-time="656"><b>Youngman</b> -
            Who Knows (Drumsound & Bassline Smith Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="788"><b>Serial Killaz</b> - Worries In The
            Dance</div>
        <div class="track" onclick="updatePosition(this)" data-time="1034"><b>Benny Page</b> - Pass The Kutchie
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1201"><b>Run Tingz Crew</b> - Born Inna Babylon
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1527"><b>Lana Del Rey</b> - Born To Die (Marcus
            Intalex Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1659"><b>London Elektricity</b> - Harlesden
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1864"><b>J Frequency</b> - Bam Bam</div>
        <div class="track" onclick="updatePosition(this)" data-time="2150"><b>Ramos & Supreme</b> - Crowd Control
            (Slipmatt Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2302"><b>Mike Slammer & DJ Red Alert</b> - In
            Effect (Slipmatt Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2479"><b>Danny Byrd</b> - Shock Out</div>
        <div class="track" onclick="updatePosition(this)" data-time="2707"><b>DJ Brisk</b> - Airhead (Slipmatt's SMD
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2880"><b>Distorted Minds</b> - T-10</div>
        <div class="track" onclick="updatePosition(this)" data-time="2977"><b>Serial Killaz</b> - My Sound A
            Champion</div>
        <div class="track" onclick="updatePosition(this)" data-time="3174"><b>Die & Interface ft. William
                Cartwright</b> - Bright Lights (Rockers Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3340"><b>AKA</b> - Warning (Maximum Style Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3544"><b>Firefox & 4 Tree</b> - Warning (Powder
            Mix)</div>
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