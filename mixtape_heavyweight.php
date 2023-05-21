<!-- include your HTML header here. Alternatively, remove the reviewsStrip section and use HTML -->
<?php include 'header.html';?>

<div class="tape">
    <div class="track-info" id="title">A: Noodles - Breakbeat mix (1:22:27)</div>

    <div class="tapeReelBox">

        <div class="tape_reel-container" id="music-container">

            <div class="img-container">
                <img src="images/tape_cog.png" alt="Spinning tape cog" id="cover" />
            </div>

            <div class="progress-container" id="progress-container">


                <div class="progress-background" id="progress-background">

                    <div class="progress" id="progress"></div>
                </div>

                <div class="currTime" id="currTime">00:00:00</div>
            </div>


            <div class="img-container">
                <img src="images/tape_cog.png" alt="Spinning tape cog" id="cover" />
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

                <!-- link to your audio source file -->
                <a href="audio/xxx.mp3" download><button class="action-btn action-btn-big">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

        </div>
    </div>

</div>


<div class="audioPlayer">
    <audio id="audio" preload="none">
        <!-- link to your audio source file -->
        <source src="audio/xxx.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</div>


<div class="timings" style="display: none">
    <!-- these serve as the time markers to change the 'div class="track-info" id="title"' div. Note they will not appear on the page. -->
    0 | Beastie Boys - Make Some Noise (Mr Ours & WBBL Remix)
    125 | Dubra & Arteo - Bounce With Me
</div>


<div class=colorStrip>
    <div class="visuals_box">
        <div id="canvas-container">
            <canvas id="canvas1"></canvas>
        </div>


        <div class="tracklist">
            <h1>Tracklist (click to jump to a song):</h1>
            <!-- follow the below format for the tracklistings that will appear on the page -->
            <div class="track" onclick="updatePosition(this)" data-time="0"><b>Beastie Boys</b> - Make Some Noise (Mr
                Ours & WBBL Remix)</div>
            <div class="track" onclick="updatePosition(this)" data-time="125"><b>Dubra & Arteo</b> - Bounce With Me
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
  $host_name = 'xxx';
  $database = 'xxx';
  $user_name = 'xxx';
  $config = parse_ini_file('config.ini');
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
      $date = date("Y-m-d H:i:s");
  
      $query = "INSERT INTO dB (stars, comments, date) VALUES ($stars, '$comments', '$date')";
      mysqli_query($link, $query);
    }
  }


    $returned = "SELECT * FROM dB ORDER BY date DESC";
    $result = mysqli_query($link, $returned);

    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $num = $row['stars'];
        echo "<div class='review-container'>";
            echo "<div class='stars_div'>" . str_repeat("*", $num) . "</div>";
            echo "<div class='comments_div'><i>" . $row['comments'] . "</i></div>";
            echo "<div class='date_div'>Reviewed on: " . $row['date'] . "</div>";
        echo "</div>";
    }
    } else {
        echo "No reviews found.";
    }

    ?>

        </div>


        <!-- some mobile browsers disable Web Audio API. This media query can handle those exceptions -->
        <script>
        if (window.matchMedia("(max-width: 320px)").matches) {
            document.write('<script src="./js/djMixPlayer_Sma.js"><\/script>');
        }
        </script>

        <script src="./js/djMixPlayer.js"></script>

        </body>

        </html>