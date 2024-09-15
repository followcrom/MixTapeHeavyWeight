<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">A: Mrs. Winslow's Soothing Syrup (1:02:11)</div>

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


                <a href="../audio/mwss.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
<audio id="audio" preload="none">
        <source src="../audio/mwss.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | Withnail & I - Intro
    31 | Kool Hertz - Supadupa Bad
    150 | A Skillz vs Beatvandals - Hot Dogg
    245 | The Funk Hunters - Rollin Young
    396 | Kool Hertz - Originator
    465 | WBBL - Buggin'
    599 | The Funk Hunters - Shoop Booty
    739 | Dusty Springfield - Spooky (Jayl Funk Booty)
    874 | Beat Fatigue - Smudged Fudge
    1033 | WBBL - Give It Up
    1167 | Stevie Wonder - Livin' For The City (Grinny Grandad Booty)
    1352 | Stylust Beats & Neon Steve - Heavy Metal Shit
    1499 | Father Funk - Dance Til You Drop
    1589 | Dusty Springfield - Son Of A Preacher Man (Basschimp Booty)
    1745 | The Ohio Players - Fire (The Funk Hunters & Qdup Remix)
    1891 | Pimpsoul - Pimp Deep
    2056 | Betty Wright - Clean Up Woman (Father Funk Booty)
    2218 | Sammy Senior - Sweet Funk
    2355 | WBBL - Got That Feeling
    2520 | Roast Beatz - Think 2wice
    2665 | Father Funk & X Ray Ted - Jarreubics
    2849 | A Skillz vs Beatvandals - $19.99
    2999 | Etta James - Tell Mama (Copycat Booty)
    3125 | CMC & Silenta - Let's Dance
    3266 | The Phunk Junkies - Big Spender
    3490 | Peggy Lee vs. Ludacris - Hallelujah
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>Withnail & I</b>
            - Intro</div>
        <div class="track" onclick="updatePosition(this)" data-time="31"><b>Kool Hertz</b> - Supadupa Bad</div>
        <div class="track" onclick="updatePosition(this)" data-time="150"><b>A Skillz vs Beatvandals</b> - Hot Dogg
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="245"><b>The Funk Hunters</b> - Rollin Young
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="396"><b>Kool Hertz</b>
            - Originator</div>
        <div class="track" onclick="updatePosition(this)" data-time="465"><b>WBBL</b> - Buggin'</div>
        <div class="track" onclick="updatePosition(this)" data-time="599"><b>The Funk Hunters</b> - Shoop Booty
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="739"><b>Dusty Springfield</b> - Spooky (Jayl
            Funk Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="874"><b>Beat Fatigue</b> - Smudged Fudge</div>
        <div class="track" onclick="updatePosition(this)" data-time="1033"><b>WBBL</b> - Give It Up</div>
        <div class="track" onclick="updatePosition(this)" data-time="1167"><b>Stevie Wonder</b> - Livin' For The
            City (Grinny Grandad Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1352"><b>Stylust Beats
                & Neon Steve</b> - Heavy Metal Shit</div>
        <div class="track" onclick="updatePosition(this)" data-time="1499"><b>Father Funk</b> - Dance Til You Drop
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1589"><b>Dusty Springfield</b> - Son Of A
            Preacher Man (Basschimp Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1745"><b>The Ohio Players</b> - Fire (The Funk
            Hunters & Qdup Remix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1891"><b>Pimpsoul</b> - Pimp Deep</div>
        <div class="track" onclick="updatePosition(this)" data-time="2056"><b>Betty Wright</b> - Clean Up Woman
            (Father Funk Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2218"><b>Sammy Senior</b> - Sweet Funk</div>
        <div class="track" onclick="updatePosition(this)" data-time="2355"><b>WBBL</b> - Got That Feeling</div>
        <div class="track" onclick="updatePosition(this)" data-time="2520"><b>Roast Beatz</b> - Think 2wice</div>
        <div class="track" onclick="updatePosition(this)" data-time="2665"><b>Father Funk &
                X Ray Ted</b> - Jarreubics</div>
        <div class="track" onclick="updatePosition(this)" data-time="2849"><b>A Skillz vs Beatvandals</b> - $19.99
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2999"><b>Etta James</b> - Tell Mama (Copycat
            Booty)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3125"><b>CMC & Silenta</b> - Let's Dance</div>
        <div class="track" onclick="updatePosition(this)" data-time="3266"><b>The Phunk Junkies</b> - Big Spender
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3490"><b>Peggy Lee vs.
                Ludacris</b> - Hallelujah</div>

    </div>
</div>


<div class="reviewsStrip">

<?php include '../reviewForm.php'; ?>


    <div class="reviewsBox">

    <?php
$config = include('../config.php');

$host_name = $config['host_name'];
$database = $config['database'];
$user_name = $config['user_name'];
$password = $config['password'];

// Create a connection
$link = new mysqli($host_name, $user_name, $password, $database);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

// Set the mixtape label manually for each page
$mixtape = 'Soothing Syrup';  // Change this value for each PHP page to reflect the mixtape

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['stars']) && isset($_POST['comments'])) {
        $stars = intval($_POST['stars']);
        $comments = $link->real_escape_string($_POST['comments']); // Use real_escape_string

        $date = date("Y-m-d H:i:s");

        // Prepare and execute the INSERT query
        $stmt = $link->prepare("INSERT INTO reviews (mixtape, stars, comments, date) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $mixtape, $stars, $comments, $date);
        $stmt->execute();
        $stmt->close();
    }
}

// Prepare and execute the SELECT query
$stmt = $link->prepare("SELECT stars, comments, date FROM reviews WHERE mixtape = ? ORDER BY date DESC");
$stmt->bind_param("s", $mixtape);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $num = $row['stars'];
        echo "<div class='review-container'>";
        echo "<div class='stars_div'>" . str_repeat("*", $num) . "</div>";
        echo "<div class='comments_div'><i>" . htmlspecialchars($row['comments']) . "</i></div>"; // Use htmlspecialchars for output
        echo "<div class='date_div'>" . htmlspecialchars($row['date']) . "</div>"; // Use htmlspecialchars for output
        echo "</div>";
    }
} else {
    echo "No reviews found.";
}

$stmt->close();
$link->close();
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