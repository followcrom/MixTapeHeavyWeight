<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">B: Dubwise Selection (1:10:30)</div>

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


                <a href="https://mthw.s3.eu-west-2.amazonaws.com/db/dubwise.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
<audio id="audio" preload="none" crossorigin="anonymous">
        <source src="https://mthw.s3.eu-west-2.amazonaws.com/db/dubwise.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Top Cat - Champion DJ (Shy FX Mix)
    154 | Benny Page - Can't Test
    280 | Mist-I-Cal - Just A Little Herb
    425 | Visionary - Gimmie Your Love
    595 | Top Cat - We Love Weh Sess (Congo Natty Mix)
    777 | Aries - Herb Smoke
    1129 | Visionary - Sail On
    1252 | Benny Page - Rub-A-Dub
    1361 | Beenie Man - Gimme Di Gal (D&B Mix)
    1450 | Sizzla - Show Us The Way (D&B Mix)
    1685 | Chase & Status - Duppy Man
    1821 | Heist - Creeping Dub
    1935 | Shout - You Love Me
    2024 | Visionary - Ruling Sound
    2156 | Shy FX - Everyday (Chase & Status Mix)
    2270 | Herbal T - Give It 2 Dem
    2397 | Benny Page - Turn Down The Lights
    2536 | Rhythm Beater - Dub Room (Mix)
    2832 | Collie Budz - Herb Come Around (D&B Mix)
    3148 | I Wayne - Can't Satisfy Her (Shout Mix)
    3362 | Tribe of Issachar - Wardance (Serial Killaz Mix)
    3697 | Damian Marley - Welcome To Jamrock (Roughcut Mix)
    3798 | Ini Kamoze - World A Reggae (D&B Mix)
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Top Cat</b> - Champion DJ (Shy FX Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="154"><b>Benny Page</b> - Can't Test</div>
        <div class="track" onclick="updatePosition(this)" data-time="280"><b>Mist-I-Cal</b> - Just A Little Herb</div>
        <div class="track" onclick="updatePosition(this)" data-time="425"><b>Visionary</b> - Gimmie Your Love</div>
        <div class="track" onclick="updatePosition(this)" data-time="595"><b>Top Cat</b> - We Love Weh Sess (Congo Natty
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="777"><b>Aries</b> - Herb Smoke</div>
        <div class="track" onclick="updatePosition(this)" data-time="1129"><b>Visionary</b> - Sail On</div>
        <div class="track" onclick="updatePosition(this)" data-time="1252"><b>Benny Page</b> - Rub-A-Dub</div>
        <div class="track" onclick="updatePosition(this)" data-time="1361"><b>Beenie
                Man</b> - Gimme Di Gal (D&B Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1450"><b>Sizzla</b> - Show Us The Way (D&B Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1685"><b>Chase & Status</b> - Duppy Man</div>
        <div class="track" onclick="updatePosition(this)" data-time="1821"><b>Heist</b> - Creeping Dub</div>
        <div class="track" onclick="updatePosition(this)" data-time="1935"><b>Shout</b> - You Love Me</div>
        <div class="track" onclick="updatePosition(this)" data-time="2024"><b>Visionary</b> - Ruling Sound</div>
        <div class="track" onclick="updatePosition(this)" data-time="2156"><b>Shy FX</b> - Everyday (Chase & Status Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2270"><b>Herbal
                T</b> - Give It 2 Dem</div>
        <div class="track" onclick="updatePosition(this)" data-time="2397"><b>Benny Page</b> - Turn Down The Lights
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2536"><b>Rhythm
                Beater</b> - Dub Room (Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2832"><b>Collie
                Budz</b> - Herb Come Around (D&B Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3148"><b>I Wayne</b> - Can't Satisfy Her (Shout
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3362"><b>Tribe of Issachar</b> - Wardance (Serial
            Killaz Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3697"><b>Damian
                Marley</b> - Welcome To Jamrock (Roughcut Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3798"><b>Ini Kamoze</b> - World A Reggae (D&B Mix)
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