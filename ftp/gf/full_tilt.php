<?php include '../header.html';?>

<div class="tape">
    <div class="top_label">A: Full Tilt Boogie (01:05:51)</div>

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


                <a href="https://mthw.s3.eu-west-2.amazonaws.com/gf/full_tilt.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none" crossorigin="anonymous">
        <source src="https://mthw.s3.eu-west-2.amazonaws.com/gf/full_tilt.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>






<div class="timings" style="display: none">
    0 | DJ Kool vs Cutty Ranks - Limb By Limb (DJ Maars Mash-Up)
    107 | El Bomba - Never Dibby Dibby
    179 | Arthur Conley - Funky Street (Odjbox Edit)
    331 | DJ Maars - Smokin' Funk
    529 | Father Funk - Sayer What
    681 | WBBL - Talkin' Bout My Baby
    861 | Slynk - Boomin'
    977 | Jackson 5 - A.B.C (A.Skillz Edit)
    1083 | Duke Dumont ft. AME - Need U 100% (WBBL Mix)
    1248 | Public Enemy - Bring The Noise (Phibes Mix)
    1352 | NOG & Perkulator - Surfin' Supernatural
    1467 | Johnny Cash - Get Rhythm (Sammy Senior Edit)
    1674 | Parliament - Flash Light (Slynk Mix)
    1776 | Featurecast - Make You Happy
    1858 | Father Funk - Emperor Groove
    1960 | Featurecast - Rock Ya Body
    2150 | Prince - 1999 (Warp 9 Edit)
    2329 | Father Funk - Juggernaut
    2420 | Featurecast - Dread
    2528 | Howla & WBBL - Crazy Pavers
    2609 | The Captain - In The Summertime
    2822 | Uncle Louie - Full Tilt Boogie (Slynk & Stickybuds Mix)
    2954 | Dephicit & The Fritz - Shaker
    3084 | Nick Thayer & Ali B - N.E Way
    3190 | DJ LBR & Big Ali - Real Party (Slynk Mix)
    3315 | General Narco - Oh Well
    3422 | Mooqee & Beatvandals - Back Up
    3618 | Kidda - Wanna Be Loved (Dancefloor Outlaws Mix)
    3812 | Basement Freaks - Mo Diggity
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
        <div class="track" onclick="updatePosition(this)" data-time="0"><b>DJ Kool vs Cutty Ranks</b> - Limb By Limb
            (DJ Maars Mash-Up)</div>
        <div class="track" onclick="updatePosition(this)" data-time="107"><b>El Bomba</b> - Never Dibby Dibby</div>
        <div class="track" onclick="updatePosition(this)" data-time="179"><b>Arthur Conley</b> - Funky Street
            (Odjbox Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="331"><b>DJ Maars</b> - Smokin' Funk</div>
        <div class="track" onclick="updatePosition(this)" data-time="529"><b>Father Funk</b> - Sayer What</div>
        <div class="track" onclick="updatePosition(this)" data-time="681"><b>WBBL</b> - Talkin' Bout My Baby</div>
        <div class="track" onclick="updatePosition(this)" data-time="861"><b>Slynk</b> - Boomin'</div>
        <div class="track" onclick="updatePosition(this)" data-time="977"><b>Jackson 5</b> - A.B.C (A.Skillz Edit)
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="1083"><b>Duke Dumont ft. AME</b> - Need U 100%
            (WBBL Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1248"><b>Public Enemy</b> - Bring The Noise
            (Phibes Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1352"><b>NOG & Perkulator</b> - Surfin'
            Supernatural</div>
        <div class="track" onclick="updatePosition(this)" data-time="1467"><b>Johnny Cash</b> - Get Rhythm (Sammy
            Senior Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1674"><b>Parliament</b> - Flash Light (Slynk
            Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="1776"><b>Featurecast</b> - Make You Happy</div>
        <div class="track" onclick="updatePosition(this)" data-time="1858"><b>Father Funk</b> - Emperor Groove</div>
        <div class="track" onclick="updatePosition(this)" data-time="1960"><b>Featurecast</b> - Rock Ya Body</div>
        <div class="track" onclick="updatePosition(this)" data-time="2150"><b>Prince</b> - 1999 (Warp 9 Edit)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2329"><b>Father Funk</b> - Juggernaut</div>
        <div class="track" onclick="updatePosition(this)" data-time="2420"><b>Featurecast</b> - Dread</div>
        <div class="track" onclick="updatePosition(this)" data-time="2528"><b>Howla & WBBL</b> - Crazy Pavers</div>
        <div class="track" onclick="updatePosition(this)" data-time="2609"><b>The Captain</b> - In The Summertime
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="2822"><b>Uncle Louie</b> - Full Tilt Boogie
            (Slynk & Stickybuds Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="2954"><b>Dephicit & The Fritz</b> - Shaker
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3084"><b>Nick Thayer & Ali B</b> - N.E Way
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3190"><b>DJ LBR & Big Ali</b> - Real Party
            (Slynk Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3315"><b>General Narco</b> - Oh Well</div>
        <div class="track" onclick="updatePosition(this)" data-time="3422"><b>Mooqee & Beatvandals</b> - Back Up
        </div>
        <div class="track" onclick="updatePosition(this)" data-time="3618"><b>Kidda</b> - Wanna Be Loved (Dancefloor
            Outlaws Mix)</div>
        <div class="track" onclick="updatePosition(this)" data-time="3812"><b>Basement Freaks</b> - Mo Diggity</div>

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

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['stars']) && isset($_POST['comments'])) {
            $stars = intval($_POST['stars']);
            $comments = $link->real_escape_string($_POST['comments']); // Use real_escape_string

            $date = date("Y-m-d H:i:s");

            // Prepare and execute the INSERT query
            $stmt = $link->prepare("INSERT INTO reviews (stars, comments, date) VALUES (?, ?, ?)");
            $stmt->bind_param("iss", $stars, $comments, $date);
            $stmt->execute();
            $stmt->close();
        }
    }

    // Prepare and execute the SELECT query
    $stmt = $link->prepare("SELECT stars, comments, date FROM reviews ORDER BY date DESC");
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