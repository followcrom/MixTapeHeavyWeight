<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">Side B: The Reload (1:06:43)</div>

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


                <a href="https://mthw.s3.eu-west-2.amazonaws.com/db/reload.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
<audio id="audio" preload="none" crossorigin="anonymous">
        <source src="https://mthw.s3.eu-west-2.amazonaws.com/db/reload.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
0 | Kano - Reload It (High Contrast Mix)
 329 | Logistics - West Country
 485 | Brookes Brothers - Tear You Down
 809 | DJ Zinc ft. Dynamite MC - Creeper
 965 | Nu:Tone - Goofy
 1121 | Rough Cut - Murda Ting
 1278 | Brookes Brothers & Sub Focus - Late Run
 1434 | Rhythm Beater - Masada
 1651 | Bad Company - Planet Dust
 1883 | DJ Frenzy - Drum Tools
 2048 | Q Project - Living With Beaker
 2360 | M.C D - Alright (Benny Page Mix)
 2670 | Top Cat meets D.J. Rap - Ruffest Gun Ark
 2762 | Dillinja - Never Believe
 3031 | Peshay - Take You There
 3277 | DJ Vapour - No Smoke
 3433 | High Contrast - Kiss Kiss, Bang Bang
 3612 | LTJ Bukem - Music
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
    <div class="track" onclick="updatePosition(this)" data-time="0"><b>Kano</b> - Reload It (High Contrast Mix)</div>
<div class="track" onclick="updatePosition(this)" data-time="329"><b>Logistics</b> - West Country</div>
<div class="track" onclick="updatePosition(this)" data-time="485"><b>Brookes Brothers</b> - Tear You Down</div>
<div class="track" onclick="updatePosition(this)" data-time="809"><b>DJ Zinc ft. Dynamite MC</b> - Creeper</div>
<div class="track" onclick="updatePosition(this)" data-time="965"><b>Nu:Tone</b> - Goofy</div>
<div class="track" onclick="updatePosition(this)" data-time="1121"><b>Rough Cut</b> 
- Murda Ting</div>
<div class="track" onclick="updatePosition(this)" data-time="1278"><b>Brookes Brothers & Sub Focus</b> - Late Run</div>
<div class="track" onclick="updatePosition(this)" data-time="1434"><b>Rhythm Beater</b> - Masada</div>
<div class="track" onclick="updatePosition(this)" data-time="1651"><b>Bad Company</b> - Planet Dust</div>
<div class="track" onclick="updatePosition(this)" data-time="1883"><b>DJ Frenzy</b> 
- Drum Tools</div>
<div class="track" onclick="updatePosition(this)" data-time="2048"><b>Q Project</b> 
- Living With Beaker</div>
<div class="track" onclick="updatePosition(this)" data-time="2360"><b>M.C D</b> - Alright (Benny Page Mix)</div>
<div class="track" onclick="updatePosition(this)" data-time="2670"><b>Top Cat meets 
D.J. Rap</b> - Ruffest Gun Ark</div>
<div class="track" onclick="updatePosition(this)" data-time="2762"><b>Dillinja</b> - Never Believe</div>
<div class="track" onclick="updatePosition(this)" data-time="3031"><b>Peshay</b> - Take You There</div>
<div class="track" onclick="updatePosition(this)" data-time="3277"><b>DJ Vapour</b> 
- No Smoke</div>
<div class="track" onclick="updatePosition(this)" data-time="3433"><b>High Contrast</b> - Kiss Kiss, Bang Bang</div>
<div class="track" onclick="updatePosition(this)" data-time="3612"><b>LTJ Bukem</b> 
- Music</div>

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