<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">Side A: Connoisseurs (55:41)</div>

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


                <a href="https://mthw.s3.eu-west-2.amazonaws.com/db/connoisseurs.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
<audio id="audio" preload="none" crossorigin="anonymous">
        <source src="https://mthw.s3.eu-west-2.amazonaws.com/db/connoisseurs.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Emeli Sandé - My Kind Of Love (Gemini Mix)
    243 | Sonz Of A Loop Da Loop Era - Far Out (Slag Brothers Mix)
    342 | DJ Seduction - Can You Feel It?
    434 | Slipmatt & MK 1 ft. Ali - Turn Me On
    545 | Marina & The Diamonds - Primadonna (Evian Christ Mix)
    677 | Billy Bunter & Shimano ft. Karen Danzig - How Am I?
    812 | Criminal Minds - Flynny's Theme
    969 | Criminal Minds - Baptised By Dub
    1129 | SL2 - Make A Move
    1205 | LTJ Bukem - Atlantis
    1387 | A Sense Of Summer - On Top
    1528 | DJ Ham - Is Anybody Out There?
    1624 | DJ Chewy - Star Jump
    1717 | Urban Shakedown - Some Justice '95
    1956 | Noise Factory - Breakage #4
    2029 | M.A.2 - Hearing Is Believing
    2102 | Serial Killaz - Put It On
    2303 | Serial Killaz - Walk & Skank
    2408 | Serial Killaz - Walk & Skank (Northern Lights Mix)
    2494 | SMD - SMD #1A
    2546 | SMD - SMD #2A
    2720 | Maverick Sabre - I Used To Have It All (Delta Heavy Mix)
    2946 | SMD - SMD#3 (Slipmatt & Kutski Mix)
    3065 | Rudimental ft. John Newman - Feel The Love
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Emeli Sandé</b> - My Kind Of Love (Gemini
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="243"><b>Sonz Of
                A Loop Da Loop Era</b> - Far Out (Slag Brothers Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="342"><b>DJ Seduction</b> - Can You Feel It?</div>
        <div class="track" onclick="updatePosition(this)" data-time="434"><b>Slipmatt & MK 1 ft. Ali</b> - Turn Me On
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="545"><b>Marina & The Diamonds</b> - Primadonna
            (Evian Christ Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="677"><b>Billy Bunter & Shimano ft. Karen Danzig</b>
            - How Am I?</div>
        <div class="track" onclick="updatePosition(this)" data-time="812"><b>Criminal Minds</b> - Flynny's Theme</div>
        <div class="track" onclick="updatePosition(this)" data-time="969"><b>Criminal Minds</b> - Baptised By Dub</div>
        <div class="track" onclick="updatePosition(this)" data-time="1129"><b>SL2</b> - Make A Move</div>
        <div class="track" onclick="updatePosition(this)" data-time="1205"><b>LTJ Bukem</b> - Atlantis</div>
        <div class="track" onclick="updatePosition(this)" data-time="1387"><b>A Sense Of Summer</b> - On Top</div>
        <div class="track" onclick="updatePosition(this)" data-time="1528"><b>DJ Ham</b> - Is Anybody Out There?</div>
        <div class="track" onclick="updatePosition(this)" data-time="1624"><b>DJ Chewy</b> - Star Jump</div>
        <div class="track" onclick="updatePosition(this)" data-time="1717"><b>Urban Shakedown</b> - Some Justice '95
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1956"><b>Noise Factory</b> - Breakage #4</div>
        <div class="track" onclick="updatePosition(this)" data-time="2029"><b>M.A.2</b> - Hearing Is Believing</div>
        <div class="track" onclick="updatePosition(this)" data-time="2102"><b>Serial
                Killaz</b> - Put It On</div>
        <div class="track" onclick="updatePosition(this)" data-time="2303"><b>Serial
                Killaz</b> - Walk & Skank</div>
        <div class="track" onclick="updatePosition(this)" data-time="2408"><b>Serial
                Killaz</b> - Walk & Skank (Northern Lights Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2494"><b>SMD</b> - SMD #1A</div>
        <div class="track" onclick="updatePosition(this)" data-time="2546"><b>SMD</b> - SMD #2A</div>
        <div class="track" onclick="updatePosition(this)" data-time="2720"><b>Maverick Sabre</b> - I Used To Have It All
            (Delta Heavy Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2946"><b>SMD</b> - SMD#3 (Slipmatt & Kutski Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3065"><b>Rudimental ft. John Newman</b> - Feel The
            Love</div>

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