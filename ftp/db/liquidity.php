<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">A: Liquidity</div>

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


                <a href="https://mthw.s3.eu-west-2.amazonaws.com/db/liquidity.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
<audio id="audio" preload="none" crossorigin="anonymous">
        <source src="https://mthw.s3.eu-west-2.amazonaws.com/db/liquidity.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
0 | Q Project - Milk And Honey
 355 | Nu:Tone - 3 Bags Full
 600 | Alix Perez And Sabre - Solitary Native
 945 | Artificial Intelligence - Desperado
 1210 | Danny Byrd - Control Freak
 1500 | Visionary - After Hours
 1720 | Alix Perez - Dub Rock
 1952 | Michael Jackson - Human Nature (Makoto Mix)
 2220 | Danny Byrd - The French Quarter
 2400 | High Contrast - Lovesick
 2797 | ST:CAL - Henshaw Dub
 3052 | ST:CAL - Red Light
 3252 | Artificial Intelligence - Movin' On
 3564 | Ghostface Killa - Back Like That (Marky & Bungle Mix)
 3850 | Makoto - Eastern Dub (Part 2)
 4051 | Jenna G - In Love
 4272 | London Elektricity - Great Drum And Bass Swindle (Logistics Mix) 
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
    <div class="track" onclick="updatePosition(this)" data-time="0"><b>Q Project</b> - Milk And Honey</div>
<div class="track" onclick="updatePosition(this)" data-time="355"><b>Nu:Tone</b> - 3 Bags Full</div>
<div class="track" onclick="updatePosition(this)" data-time="600"><b>Alix Perez And Sabre</b> - Solitary Native</div>
<div class="track" onclick="updatePosition(this)" data-time="945"><b>Artificial Intelligence</b> - Desperado</div>
<div class="track" onclick="updatePosition(this)" data-time="1210"><b>Danny Byrd</b> - Control Freak</div>
<div class="track" onclick="updatePosition(this)" data-time="1500"><b>Visionary</b> - After Hours</div>
<div class="track" onclick="updatePosition(this)" data-time="1720"><b>Alix Perez</b> - Dub Rock</div>
<div class="track" onclick="updatePosition(this)" data-time="1952"><b>Michael Jackson</b> - Human Nature (Makoto Mix)</div>
<div class="track" onclick="updatePosition(this)" data-time="2220"><b>Danny Byrd</b> - The French Quarter</div>
<div class="track" onclick="updatePosition(this)" data-time="2400"><b>High Contrast</b> - Lovesick</div>
<div class="track" onclick="updatePosition(this)" data-time="2797"><b>ST:CAL</b> - Henshaw Dub</div>
<div class="track" onclick="updatePosition(this)" data-time="3052"><b>ST:CAL</b> - Red Light</div>
<div class="track" onclick="updatePosition(this)" data-time="3252"><b>Artificial Intelligence</b> - Movin' On</div>
<div class="track" onclick="updatePosition(this)" data-time="3564"><b>Ghostface Killa</b> - Back Like That (Marky & Bungle Mix)</div>
<div class="track" onclick="updatePosition(this)" data-time="3850"><b>Makoto</b> - Eastern Dub (Part 2)</div>
<div class="track" onclick="updatePosition(this)" data-time="4051"><b>Jenna G</b> - In Love</div>
<div class="track" onclick="updatePosition(this)" data-time="4272"><b>London 
Elektricity</b> - Great Drum And Bass Swindle (Logistics Mix)</div>

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