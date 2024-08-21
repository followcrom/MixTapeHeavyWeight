<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">A: Straight Time (1:17:34)</div>

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


                <a href="../audio/straight_life.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none">
        <!-- <source src="../audio/supafly.ogg" type="../audio/ogg"> -->
        <source src="../audio/straight_life.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Etta James - Leave Your Hat On (Funk Ferret Edit)
    193 | The Meters - Cissy Strut (D-Funk Edit)
    334 | Father Funk - Gotta Be Me
    513 | Marky & XRS ft. Stamina MC - LK ( J Sound Edit)
    658 | Wu-Tang Clan - Da Mystery Of Chessboxin' (Gram of Fun Edit)
    769 | Basement Freaks - Insane Brains
    940 | Phibes - Hold On
    1110 | Extra Medium & Mr Switch - Swinggae
    1245 | N.O.R.E - Nothin' (DJ Scene Mix)
    1332 | WBBL - Danger Machine
    1463 | Bobby McFerrin - Thinking About Your Body (J-Sound Edit)
    1550 | Bobby McFerrin - Don't Worry Be Happy (Father Funk Edit)
    1717 | Leo - You
    1853 | J Sound - Boss DAT!
    1963 | J Sound - On & On
    2071 | Father Funk & Howla - Got Swing
    2171 | Dancefloor Outlaws - Panda
    2255 | Moby - Run On (WBBL Mix)
    2371 | Cockney Nutjob - Firepower
    2518 | Leo - Lovin'
    2592 | J Sound - Funky Flow
    2708 | Lakeshore Drive - Two For The Crates
    2793 | Sammy Senior & WBBL - Soul Rocka
    2935 | WBBL - Penguin Funk
    3085 | Cockney Nutjob - The Master
    3276 | Sammy Senior - Alright Now
    3355 | Aaron Neville v Big L - Hercules 2012 (BadboE Mash-Up)
    3491 | Father Funk - Gringo Lingo
    3685 | The Specials - A Message to You Rudy (J-Sound Edit)
    3800 | Kotch - Funk Out
    3867 | Cat in the Hat ft. Mr Switch - Sax Party
    4017 | Father Funk - Hell Yeah
    4150 | Lack Jemmon - Hello World Hello Lorde
    4375 | Chopstick Dubplate ft. Top Cat & Mr Williamz - Worldwide Traveller
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Etta James</b> -
            Leave Your Hat On (Funk Ferret Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="193"><b>The Meters</b>
            - Cissy Strut (D-Funk Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="334"><b>Father Funk</b> - Gotta Be Me</div>
        <div class="track" onclick="updatePosition(this)" data-time="513"><b>Marky & XRS ft. Stamina MC</b> - LK ( J
            Sound Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="658"><b>Wu-Tang Clan</b> - Da Mystery Of
            Chessboxin' (Gram of Fun Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="769"><b>Basement Freaks</b> - Insane Brains
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="940"><b>Phibes</b> - Hold On</div>
        <div class="track" onclick="updatePosition(this)" data-time="1110"><b>Extra Medium & Mr Switch</b> -
            Swinggae</div>
        <div class="track" onclick="updatePosition(this)" data-time="1245"><b>N.O.R.E</b> -
            Nothin' (DJ Scene Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1332"><b>WBBL</b> - Danger Machine</div>
        <div class="track" onclick="updatePosition(this)" data-time="1463"><b>Bobby McFerrin</b> - Thinking About
            Your Body (J-Sound Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1550"><b>Bobby McFerrin</b> - Don't Worry Be
            Happy (Father Funk Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1717"><b>Leo</b> - You</div>
        <div class="track" onclick="updatePosition(this)" data-time="1853"><b>J Sound</b> -
            Boss DAT!</div>
        <div class="track" onclick="updatePosition(this)" data-time="1963"><b>J Sound</b> -
            On & On</div>
        <div class="track" onclick="updatePosition(this)" data-time="2071"><b>Father Funk &
                Howla</b> - Got Swing</div>
        <div class="track" onclick="updatePosition(this)" data-time="2171"><b>Dancefloor Outlaws</b> - Panda</div>
        <div class="track" onclick="updatePosition(this)" data-time="2255"><b>Moby</b> - Run On (WBBL Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2371"><b>Cockney Nutjob</b> - Firepower</div>
        <div class="track" onclick="updatePosition(this)" data-time="2518"><b>Leo</b> - Lovin'</div>
        <div class="track" onclick="updatePosition(this)" data-time="2592"><b>J Sound</b> -
            Funky Flow</div>
        <div class="track" onclick="updatePosition(this)" data-time="2708"><b>Lakeshore Drive</b> - Two For The
            Crates</div>
        <div class="track" onclick="updatePosition(this)" data-time="2793"><b>Sammy Senior & WBBL</b> - Soul Rocka
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2935"><b>WBBL</b> - Penguin Funk</div>
        <div class="track" onclick="updatePosition(this)" data-time="3085"><b>Cockney Nutjob</b> - The Master</div>
        <div class="track" onclick="updatePosition(this)" data-time="3276"><b>Sammy Senior</b> - Alright Now</div>
        <div class="track" onclick="updatePosition(this)" data-time="3355"><b>Aaron Neville
                v Big L</b> - Hercules 2012 (BadboE Mash-Up)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3491"><b>Father Funk</b> - Gringo Lingo</div>
        <div class="track" onclick="updatePosition(this)" data-time="3685"><b>The Specials</b> - A Message to You
            Rudy (J-Sound Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3800"><b>Kotch</b> - Funk Out</div>
        <div class="track" onclick="updatePosition(this)" data-time="3867"><b>Cat in the Hat ft. Mr Switch</b> - Sax
            Party</div>
        <div class="track" onclick="updatePosition(this)" data-time="4017"><b>Father Funk</b> - Hell Yeah</div>
        <div class="track" onclick="updatePosition(this)" data-time="4150"><b>Lack Jemmon</b> - Hello World Hello
            Lorde</div>
        <div class="track" onclick="updatePosition(this)" data-time="4375"><b> Chopstick Dubplate ft. Top Cat & Mr
                Williamz</b> - Worldwide Traveller</div>
    </div>
</div>


<div class="reviewsStrip">

<?php include '../reviewForm.php'; ?>


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