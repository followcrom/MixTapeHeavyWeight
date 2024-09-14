<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">A: Love in the House (1:22:26)</div>

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


                <a href="https://mthw.s3.eu-west-2.amazonaws.com/gf/lovehouse.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
<audio id="audio" preload="none" crossorigin="anonymous">
        <source src="https://mthw.s3.eu-west-2.amazonaws.com/gf/lovehouse.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | SG Lewis ft. Gallant - Holding Back
    74 | Honne & Izzy Bizu - Someone That Loves You
    221 | Captain Cuts - Love Like We Used To (Lenno Mix)
    412 | Calvin Harris ft. Frank Ocean & Migos - Slide
    601 | Lana Del Rey - Ride (Le Youth Mix)
    763 | Autograf - You Might Be Feat. Lils
    941 | Neikid - Sexual (Oliver Nelson Mix)
    1138 | Cheat Codes ft. Kris Kross Amsterdam - Sex
    1281 | Blonde ft. Ryan Ashley - Foolish (KAASI Mix)
    1434 | Aquilo - Losing You (Wayward Mix)
    1667 | The Knocks ft. Alex Newell - Collect My Love (Mat Zo Mix)
    1963 | Gang Starr - Full Clip (Tony Quattro Booty)
    2010 | Alma - Dye My Hair (Lenno Mix)
    2289 | Emeli Sande - Highs & Lows (The Wild Mix)
    2464 | Gabrielle Aplin - Night Bus
    2650 | Cadenza ft. Stylo G & Busy Signal - Foundation (Zed Bias Mix)
    2778 | Ellie Goulding - Army (Mike Mago Mix)
    2922 | WBBL - Street Playa
    3036 | Le Youth - C.O.O.L
    3188 | L'Tric - This Feeling (Purple Disco Machine Mix)
    3372 | Jessie Ware - Say You Love Me (Alex Adiar Mix)
    3528 | The Chainsmokers ft. Halsey - Closer (Danny Dove & Nathan C Mix)
    3732 | Mausi - My Friend Has A Swimming Pool
    3901 | Kid n Play - My Way (DJIJK Mix)
    4022 | Dillon Francis ft. Will Heard - Anywhere (Felix Cartal Mix)
    4214 | Galantis - In My Head (Glover Mix)
    4350 | Sam Smith - Stay With Me (Soul Clap Mix)
    4541 | Birdy - Words (Blonde Mix)
    4748 | Galantis & Hook N Sling - Love On Me (Peter Bjorn & John Mix)
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>SG Lewis ft. Gallant<b> - Holding Back</div>
        <div class="track" onclick="updatePosition(this)" data-time="74"><b>Honne & Izzy Bizu<b> - Someone That Loves
                    You</div>
        <div class="track" onclick="updatePosition(this)" data-time="221"><b>Captain Cuts<b> - Love Like We Used To
                    (Lenno Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="412"><b>Calvin Harris ft. Frank Ocean & Migos<b> -
                    Slide</div>
        <div class="track" onclick="updatePosition(this)" data-time="601"><b>Lana Del Rey<b> - Ride (Le Youth Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="763"><b>Autograf<b> - You Might Be Feat. Lils</div>
        <div class="track" onclick="updatePosition(this)" data-time="941"><b>Neikid<b> - Sexual (Oliver Nelson Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1138"><b>Cheat Codes ft. Kris Kross Amsterdam<b> -
                    Sex</div>
        <div class="track" onclick="updatePosition(this)" data-time="1281"><b>Blonde ft. Ryan Ashley<b> - Foolish (KAASI
                    Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1434"><b>Aquilo<b> - Losing You (Wayward Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1667"><b>The Knocks ft. Alex Newell<b> - Collect My
                    Love (Mat Zo Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1963"><b>Gang Starr<b>
                    - Full Clip (Tony Quattro Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2010"><b>Alma<b> - Dye
                    My Hair (Lenno Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2289"><b>Emeli Sande<b> - Highs & Lows (The Wild
                    Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2464"><b> Gabrielle Aplin<b> - Night Bus</div>
        <div class="track" onclick="updatePosition(this)" data-time="2650"><b>Cadenza ft. Stylo G & Busy Signal<b> -
                    Foundation (Zed Bias Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2778"><b>Ellie Goulding<b> - Army (Mike Mago Mix)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2922"><b>WBBL<b> - Street Playa</div>
        <div class="track" onclick="updatePosition(this)" data-time="3036"><b>Le Youth<b> -
                    C.O.O.L</div>
        <div class="track" onclick="updatePosition(this)" data-time="3188"><b>L'Tric<b> - This Feeling (Purple Disco
                    Machine Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3372"><b>Jessie Ware<b> - Say You Love Me (Alex
                    Adiar Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3528"><b>The Chainsmokers ft. Halsey<b> - Closer
                    (Danny Dove & Nathan C Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3732"><b>Mausi<b> - My
                    Friend Has A Swimming Pool</div>
        <div class="track" onclick="updatePosition(this)" data-time="3901"><b>Kid n Play<b>
                    - My Way (DJIJK Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4022"><b>Dillon Francis ft. Will Heard<b> -
                    Anywhere (Felix Cartal Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4214"><b>Galantis<b> -
                    In My Head (Glover Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4350"><b>Sam Smith<b> - Stay With Me (Soul Clap
                    Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4541"><b>Birdy<b> - Words (Blonde Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="4748"><b>Galantis & Hook N Sling<b> - Love On Me
                    (Peter Bjorn & John Mix)</div>

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