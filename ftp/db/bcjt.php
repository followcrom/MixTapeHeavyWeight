<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">Side 2: Groño Don (1:14:11)</div>

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


                <a href="https://mthw.s3.eu-west-2.amazonaws.com/db/bcjt.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
<audio id="audio" preload="none" crossorigin="anonymous">
        <source src="https://mthw.s3.eu-west-2.amazonaws.com/db/bcjt.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Bladerunner - Interceptor
    129 | Upgrade - Terrorick
    240 | JFB - 5 On It
    383 | Bladerunner - Spartan Law (VIP)
    521 | Alpha - Frozen Black (Upgrade Mix)
    595 | K Jah - Heavy Hitter
    721 | Jam Thieves - Minimal Funk
    863 | Annix - Crash
    918 | DJ Marky & Makoto - Roundabout
    1094 | K Jah - Get Out Of My Life
    1266 | Brother Culture - Sound Killer (Ed Solo Remix)
    1430 | Beast Mode - Original Junglist
    1528 | Dope Ammo - Big Summer (Panik & M-Rode Mix)
    1630 | Beast Mode - Cool It Down
    1780 | The Wildlife Collective - Ragga Tip
    1956 | Heist & Turno - Glad You Came
    2060 | Taxman - Nightshade (Upgrade Remix)
    2215 | Beast Mode - Twisted Creatures
    2281 | Veak - Land Of Gold
    2424 | Blend Mishkin ft. Peppery - Foundation Style (Danny T, Tradesman & Jakey Banton Mix)
    2532 | Dope Ammo - Warning (Serum Mix)
    2685 | K Jah - All Rhodes Lead Here
    2798 | DJ SS - Lighter (Bladerunner Remix)
    2995 | DJ Hybrid - Lickshot
    3101 | K Jah - Destination
    3259 | Sub Zero & Majistrate - Weapon of Choice
    3418 | Serum - The Finger
    3592 | Upgrade - Blow
    3772 | Serum & Voltage - Offline
    3897 | Marvellous Cain ft. Cutty Ranks - The Hit Man (Jungle Citizenz Remix)
    4027 | Ed Solo ft. MC Spyda - Soundsystem Entertainer
    4159 | Beast Mode - Bossman
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Bladerunner</b> - Interceptor</div>
        <div class="track" onclick="updatePosition(this)" data-time="129"><b>Upgrade</b> - Terrorick</div>
        <div class="track" onclick="updatePosition(this)" data-time="240"><b>JFB</b> - 5 On
            It</div>
        <div class="track" onclick="updatePosition(this)" data-time="383"><b>Bladerunner</b> - Spartan Law (VIP)</div>
        <div class="track" onclick="updatePosition(this)" data-time="521"><b>Alpha</b> - Frozen Black (Upgrade Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="595"><b>K Jah </b> - Heavy Hitter</div>
        <div class="track" onclick="updatePosition(this)" data-time="721"><b>Jam Thieves </b> - Minimal Funk</div>
        <div class="track" onclick="updatePosition(this)" data-time="863"><b>Annix</b> - Crash</div>
        <div class="track" onclick="updatePosition(this)" data-time="918"><b>DJ Marky & Makoto</b> - Roundabout</div>
        <div class="track" onclick="updatePosition(this)" data-time="1094"><b>K Jah</b> - Get Out Of My Life</div>
        <div class="track" onclick="updatePosition(this)" data-time="1266"><b>Brother Culture</b> - Sound Killer (Ed
            Solo Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1430"><b>Beast Mode</b> - Original Junglist</div>
        <div class="track" onclick="updatePosition(this)" data-time="1528"><b>Dope Ammo </b> - Big Summer (Panik &
            M-Rode Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1630"><b>Beast Mode</b> - Cool It Down</div>
        <div class="track" onclick="updatePosition(this)" data-time="1780"><b>The Wildlife Collective</b> - Ragga Tip
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1956"><b>Heist & Turno</b> - Glad You Came</div>
        <div class="track" onclick="updatePosition(this)" data-time="2060"><b>Taxman</b> - Nightshade (Upgrade Remix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2215"><b>Beast Mode</b> - Twisted Creatures</div>
        <div class="track" onclick="updatePosition(this)" data-time="2281"><b>Veak</b> - Land Of Gold</div>
        <div class="track" onclick="updatePosition(this)" data-time="2424"><b>Blend Mishkin
                ft. Peppery</b> - Foundation Style (Danny T, Tradesman & Jakey Banton Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2532"><b>Dope Ammo</b>
            - Warning (Serum Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2685"><b>K Jah</b> - All Rhodes Lead Here</div>
        <div class="track" onclick="updatePosition(this)" data-time="2798"><b>DJ SS</b> - Lighter (Bladerunner Remix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2995"><b>DJ Hybrid</b>
            - Lickshot</div>
        <div class="track" onclick="updatePosition(this)" data-time="3101"><b>K Jah</b> - Destination</div>
        <div class="track" onclick="updatePosition(this)" data-time="3259"><b>Sub Zero & Majistrate</b> - Weapon of
            Choice</div>
        <div class="track" onclick="updatePosition(this)" data-time="3418"><b>Serum</b> - The Finger</div>
        <div class="track" onclick="updatePosition(this)" data-time="3592"><b>Upgrade</b> -
            Blow</div>
        <div class="track" onclick="updatePosition(this)" data-time="3772"><b>Serum & Voltage</b> - Offline</div>
        <div class="track" onclick="updatePosition(this)" data-time="3897"><b>Marvellous Cain ft. Cutty Ranks</b> - The
            Hit Man (Jungle Citizenz Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4027"><b>Ed Solo ft. MC Spyda</b> - Soundsystem
            Entertainer</div>
        <div class="track" onclick="updatePosition(this)" data-time="4159"><b>Beast Mode</b> - Bossman</div>

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