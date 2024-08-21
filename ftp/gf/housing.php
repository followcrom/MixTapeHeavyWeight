<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">A: Ghetto Housing Project (1:18:30)</div>

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


                <a href="../audio/housing.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none">
        <!-- <source src="../audio/supafly.ogg" type="../audio/ogg"> -->
        <source src="../audio/housing.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | WBBL - Real Thing
    193 | Prince - Funk 'n' Roll (Sammy Senior Edit)
    278 | Phibes - Good People
    499 | Lack Jemmon - Don't Get Stupid
    715 | B-Side & Sammy Senior - Kill Em Wit It
    830 | Dubra & Arteo - Get On Up
    996 | The Chicken Brothers - Funky Chicken
    1234 | The Doors - Soul Kitchen (DJ Inko Booty)
    1386 | Alex Adair - Heaven
    1588 | Bobby C Sound TV - Beatcatcher
    1754 | Kidda - Under The Sun
    1948 | Tough Love ft. Ginuwine - Pony (Leon Lour Remix)
    2140 | OMI - Cheerleader (Felix Jaehn Mix)
    2305 | Purple Disco Machine - This 1994 Feeling (L Tric Switcheroo Bootleg)
    2566 | Stardust - Music Sounds Better With You (WBBL Edit)
    2788 | Alex Schulz - In The Morning Light
    2980 | Sigala - Sweet Lovin'
    3190 | Passion Pit - Little Secrets (Felix Da Housecat Remix)
    3388 | Kissy Sell Out ft. Angie Brown - Ecstasy
    3599 | Vance Joy - Wasted Time (Lost Kings Remix)
    3876 | Disco Fries ft. Hope Murphy - Born Ready (Halogen Mix)
    4044 | Gary Caos - My Love Is Free 2010
    4408 | Serum & Serial Killaz - Shot A Talk
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>WBBL</b> - Real Thing</div>
        <div class="track" onclick="updatePosition(this)" data-time="193"><b>Prince</b> - Funk 'n' Roll (Sammy
            Senior Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="278"><b>Phibes</b> - Good People</div>
        <div class="track" onclick="updatePosition(this)" data-time="499"><b>Lack Jemmon</b> - Don't Get Stupid
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="715"><b>B-Side & Sammy
                Senior</b> - Kill Em Wit It</div>
        <div class="track" onclick="updatePosition(this)" data-time="830"><b>Dubra & Arteo</b> - Get On Up</div>
        <div class="track" onclick="updatePosition(this)" data-time="996"><b>The Chicken Brothers</b> - Funky
            Chicken</div>
        <div class="track" onclick="updatePosition(this)" data-time="1234"><b>The Doors</b>
            - Soul Kitchen (DJ Inko Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1386"><b>Alex Adair</b> - Heaven</div>
        <div class="track" onclick="updatePosition(this)" data-time="1588"><b>Bobby C Sound
                TV</b> - Beatcatcher</div>
        <div class="track" onclick="updatePosition(this)" data-time="1754"><b>Kidda</b> - Under The Sun</div>
        <div class="track" onclick="updatePosition(this)" data-time="1948"><b>Tough Love ft. Ginuwine</b> - Pony
            (Leon Lour Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2140"><b>OMI</b> - Cheerleader (Felix Jaehn
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2305"><b>Purple Disco Machine</b> - This 1994
            Feeling (L Tric Switcheroo Bootleg)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2566"><b>Stardust</b> - Music Sounds Better
            With You (WBBL Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2788"><b>Alex Schulz</b> - In The Morning Light
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2980"><b>Sigala</b> - Sweet Lovin'</div>
        <div class="track" onclick="updatePosition(this)" data-time="3190"><b>Passion Pit</b> - Little Secrets
            (Felix Da Housecat Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3388"><b>Kissy Sell Out ft. Angie Brown</b> -
            Ecstasy</div>
        <div class="track" onclick="updatePosition(this)" data-time="3599"><b>Vance Joy</b>
            - Wasted Time (Lost Kings Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3876"><b>Disco Fries ft. Hope Murphy</b> - Born
            Ready (Halogen Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4044"><b>Gary Caos</b>
            - My Love Is Free 2010</div>
        <div class="track" onclick="updatePosition(this)" data-time="4408"><b>Serum & Serial Killaz</b> - Shot A
            Talk</div>

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

$query = "INSERT INTO ghetto_funk (stars, comments, date) VALUES ($stars, '$comments', '$date')";
mysqli_query($link, $query);
}
}


$returned = "SELECT * FROM ghetto_funk ORDER BY date DESC";
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