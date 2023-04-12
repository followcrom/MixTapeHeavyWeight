<!-- include your HTML header here. Alternatively, remove the review section and use plain HTML -->
<?php include 'header.html';?>


<div class="control_box">

    <div class="header">

        <p>The <b>Mixtape Heavyweight</b> presents
            <br>
            <b>Supafly</b>: a Drum & Bass mix (40:01)
        </p>
        <img src="images/supafly.jpg" alt="Supafly">
    </div>


    <div class="music-container" id="music-container">
        <div class="img-container">
            <img src="images/covers/fc_logo.png" alt="Spinning record" id="cover" />
        </div>


        <div class="transport-container">



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

                <a href="audio/supafly.mp3" download><button class="action-btn action-btn-big" id="start">
                        <i class="fas fa-download"></i>
                    </button></a>
            </div>

            <div class="progress-container" id="progress-container">

                <div class="progress-background" id="progress-background">

                    <div class="progress" id="progress"></div>
                </div>

                <div class="currTime" id="currTime">00:00:00</div>
            </div>



        </div>

        <div class="img-container">
            <img src="images/covers/fc_logo.png" alt="Spinning record" id="cover" />
        </div>

    </div>

    <div class="audioPlayer">
        <audio id="audio" preload="none">
            <source src="audio/supafly.ogg" type="audio/ogg">
            <source src="audio/supafly.mp3" type="audio/mpeg">
            Your browser does not support the audio tag.
        </audio>
    </div>




    <div class="track-info" id="title">Now playing: </div>


    <div class="timings" style="display: none">
        0 | Deekline & Specimen A - Click Clack
        238 | Upgrade - Stop Talking
        320 | Sizzla - Blessed (Benny Page Remix)
        480 | Shaggy ft. Jovi Rockwell - I Got You (Benny Page Remix)
        643 | Gorillaz - Clint Eastwood (Phibes Remix)
        725 | Serum & Voltage - Cyber Funkin'
        859 | Marvellous Cain ft. Cutty Ranks - Hit Man (T.I Mix)
        949 | Deekline - Don't Smoke (Deekline & Ed Solo vs System Mix)
        1075 | Serial Killaz - Walk 'n' Skank (2017 Version)
        1204 | DJ Mixjah & DJ Embassy - Drop The Bass
        1399 | Kickback - Something There
        1491 | Optymun - Bullet Proof
        1614 | Serum - Square Root
        1761 | Filthy Habits - Abandoned
        1938 | Kosine - Kill Them Now
        2168 | Blue Hill - Too Much Informers
    </div>
</div>


<div class="content_box">
    <div id="canvas-container">
        <canvas id="canvas1"></canvas>
    </div>


    <div class="tracklist">
        Tracklist:
        <div class="track" onclick="updatePosition(this)" data-time="0">
            <b>Deekline & Specimen A</b> - Click Clack
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="238">
            <b>Upgrade</b> - Stop Talking
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="320">
            <b>Sizzla</b> - Blessed (Benny Page Remix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="480">
            <b>Shaggy</b> - I Got You (Benny Page Remix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="643">
            <b>Gorillaz</b> - Clint Eastwood (Phibes Remix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="725">
            <b>Serum & Voltage</b> - Cyber Funkin'
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="859">
            <b>Marvellous Cain ft. Cutty Ranks</b> - Hit Man (T.I Mix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="949">
            <b>Deekline</b> - Don't Smoke (Deekline & Ed Solo vs System Mix)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="1075">
            <b>Serial Killaz</b> - Walk 'n' Skank (2017 Version)
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="1204">
            <b>DJ Mixjah & DJ Embassy</b> - Drop The Bass
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="1399">
            <b>Kickback</b> - Something There
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="1491">
            <b>Optymun</b> - Bullet Proof
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="1614">
            <b>Serum</b> - Square Root
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="1761">
            <b>Filthy Habits</b> - Abandoned
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="1938">
            <b>Kosine</b> - Kill Them Now
        </div>

        <div class="track" onclick="updatePosition(this)" data-time="2168">
            <b>Blue Hill</b> - Too Much Informers
        </div>


    </div>
</div>



<div class="content_box">
    <form id="form" method="post">
        <div style="display: inline-flex;">
            <fieldset class="rating">
                <input type="radio" id="star1" name="stars" value="5" /><label for="star1" title="5 stars">star</label>
                <input type="radio" id="star2" name="stars" value="4" /><label for="star2" title="4 stars">star</label>
                <input type="radio" id="star3" name="stars" value="3" /><label for="star3" title="3 stars">star</label>
                <input type="radio" id="star4" name="stars" value="2" /><label for="star4" title="2 stars">star</label>
                <input type="radio" id="star5" name="stars" value="1" /><label for="star5" title="1 star">star</label>
            </fieldset>

        </div>
        <div>
            <input type="text" name="comments" id="comments" placeholder="Leave your comments" required>
        </div>
        <input type="submit" value="Submit">
    </form>

    <div id="review-feedback"></div>
</div>

<div class="content_box">

    <?php
  $host_name = 'db5011559101.hosting-data.io';
  $database = 'dbs9747952';
  $user_name = 'dbu626955';
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
  
      $query = "INSERT INTO rainbow (stars, comments, date) VALUES ($stars, '$comments', '$date')";
      mysqli_query($link, $query);
    }
  }


    $returned = "SELECT * FROM rainbow ORDER BY date DESC";
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