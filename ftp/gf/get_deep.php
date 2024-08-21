<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">Side 2: Gettin' Deep (59:55)</div>

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


                <a href="../audio/get_deep.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none">
        <!-- <source src="../audio/supafly.ogg" type="../audio/ogg"> -->
        <source src="../audio/get_deep.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Butch - Drummer's Drama
    282 | Julio Bashmore - Ensnare
    436 | Perseus - Seychelles
    652 | Tensnake - Coma Cat (Mark Knight Mix)
    760 | Swedish House Mafia - Don't You Worry Child (Joris Voorn Mix)
    1049 | Passion Pit - Little Secrets (Felix Da Housecat Pink Enemy Mix)
    1263 | South Street Player - Who Keeps Changing Your Mind (Daniel Bovie & Roy Rox Mix)
    1646 | Busy Signal - Da Style Deh (Douster Dagga Mix)
    1800 | Screendeath - Packback
    1992 | Emkyu ft. DDB - Gabrielle (Matt Jam Lamont & Scott Diaz Mix)
    2334 | Gary Caos - My Love Is Free 2010
    2563 | Sultan & Ned Shepard - Walls
    2725 | Heren - Never Let Me Go
    2934 | Arkarna - Left Is Best (So Called Scumbags Dub)
    3166 | Zamali - Little Buddha (Slynk Mix)
    3312 | Jessie J - Who You Are (Exemen Mix)
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Butch</b> - Drummer's Drama</div>
        <div class="track" onclick="updatePosition(this)" data-time="282"><b>Julio Bashmore</b> - Ensnare</div>
        <div class="track" onclick="updatePosition(this)" data-time="436"><b>Perseus</b> - Seychelles</div>
        <div class="track" onclick="updatePosition(this)" data-time="652"><b>Tensnake</b> -
            Coma Cat (Mark Knight Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="760"><b>Swedish House Mafia</b> - Don't You Worry
            Child (Joris Voorn Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1049"><b>Passion Pit</b> - Little Secrets (Felix Da
            Housecat Pink Enemy Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1263"><b>South Street Player</b> - Who Keeps
            Changing Your Mind (Daniel Bovie & Roy Rox Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1646"><b>Busy Signal</b> - Da Style Deh (Douster
            Dagga Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1800"><b>Screendeath</b> - Packback</div>
        <div class="track" onclick="updatePosition(this)" data-time="1992"><b>Emkyu ft. DDB</b> - Gabrielle (Matt Jam
            Lamont & Scott Diaz Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2334"><b>Gary Caos</b>
            - My Love Is Free 2010</div>
        <div class="track" onclick="updatePosition(this)" data-time="2563"><b>Sultan & Ned Shepard</b> - Walls</div>
        <div class="track" onclick="updatePosition(this)" data-time="2725"><b>Heren</b> - Never Let Me Go</div>
        <div class="track" onclick="updatePosition(this)" data-time="2934"><b>Arkarna</b> - Left Is Best (So Called
            Scumbags Dub)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3166"><b>Zamali</b> - Little Buddha (Slynk Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3312"><b>Jessie J</b> - Who You Are (Exemen Mix)
        </div>
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

$query = "INSERT INTO rufus_sound (stars, comments, date) VALUES ($stars, '$comments', '$date')";
mysqli_query($link, $query);
}
}


$returned = "SELECT * FROM rufus_sound ORDER BY date DESC";
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