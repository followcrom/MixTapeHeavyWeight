const audio = document.getElementById("audio");
console.log(audio);
const musicContainer = document.getElementById("music-container");
const playBtn = document.getElementById("play");
const prevBtn = document.getElementById("prev");
const nextBtn = document.getElementById("next");
const stopBtn = document.getElementById("stop");
const title = document.getElementById("title");
const initialTitle = title.innerText;
const progressContainer = document.getElementById("progress-container");

playBtn.addEventListener("click", () => {
  const isPlaying = musicContainer.classList.contains("play");
  if (isPlaying) {
    pauseSong();
  } else {
    playSong();
  }
});

// Create a MediaElementAudioSourceNode and connect it to the audio element
const audioContext = new (window.AudioContext || window.webkitAudioContext)();
const audioSource = audioContext.createMediaElementSource(audio);

function stopAudio() {
  audio.pause();
  audio.currentTime = 0;
  musicContainer.classList.remove("play");
  playBtn.querySelector("i.fas").classList.add("fa-play");
  playBtn.querySelector("i.fas").classList.remove("fa-pause");
}

stopBtn.addEventListener("click", stopAudio);

audio.addEventListener("ended", function () {
  stopAudio();
});

function playSong() {
  musicContainer.classList.add("play");
  playBtn.querySelector("i.fas").classList.remove("fa-play");
  playBtn.querySelector("i.fas").classList.add("fa-pause");

  audio.play();
}

function pauseSong() {
  musicContainer.classList.remove("play");
  playBtn.querySelector("i.fas").classList.add("fa-play");
  playBtn.querySelector("i.fas").classList.remove("fa-pause");

  audio.pause();
}

// Skip Backward
function skipBackward() {
  const now = audio.currentTime;
  audio.currentTime = now - 10;
}

// Skip Forward
function skipForward() {
  const now = audio.currentTime;
  audio.currentTime = now + 10;
}

function updatePosition(clicked) {
  var tracktime = clicked.dataset.time;
  audio.currentTime = tracktime;
  playSong();
}

function updateProgress(e) {
  const { duration, currentTime } = e.srcElement;
  const progressPercent = (
    (currentTime.toFixed(2) / duration.toFixed(2)) *
    100
  ).toFixed(2);
  progress.style.width = `${progressPercent}%`;
}

// Set progress bar
function setProgress(e) {
  const width = this.clientWidth;
  const clickX = e.offsetX;
  const duration = audio.duration;
  audio.currentTime = (clickX / width) * duration;
}

function seektimeupdate() {
  var nt = audio.currentTime;
  var curhours = Math.floor(audio.currentTime / 3600);
  var curmins = Math.floor(audio.currentTime / 60);
  var cursecs = Math.floor(audio.currentTime - curmins * 60);
  if (curhours < 10) {
    curhours = "0" + curhours;
  }
  if (curmins < 10) {
    curmins = "0" + curmins;
  } else if (curmins >= 60) {
    curmins -= 60;
    curmins = "0" + curmins;
  }
  if (cursecs < 10) {
    cursecs = "0" + cursecs;
  }
  if (nt >= 4200) {
    curmins = curmins - "0";
  }
  currTime.innerHTML = curhours + ":" + curmins + ":" + cursecs;
}

prevBtn.addEventListener("click", skipBackward);
nextBtn.addEventListener("click", skipForward);

// Time/song update
audio.addEventListener("timeupdate", updateProgress);

// Click on progress bar
progressContainer.addEventListener("click", setProgress);

// Time of song
audio.addEventListener("timeupdate", seektimeupdate);

// Song ends
audio.addEventListener("ended", pauseSong);

// Sync playlist data
const timings = document.querySelector(".timings");
const lines = timings.textContent.trim().split("\n");

let syncData = [];

lines.map((line) => {
  const [time, text] = line.trim().split("|");
  // console.log("time:" + time)
  // console.log("text:" + text)
  syncData.push({ start: time.trim(), text: text.trim() });
});

audio.addEventListener("timeupdate", () => {
  if (audio.paused || audio.ended) {
    title.innerText = initialTitle;
  } else {
    syncData.forEach((item) => {
      if (audio.currentTime >= item.start) {
        title.innerText = item.text;
      }
    });
  }
});



// Get canvas element and set its width and height to window dimensions
const canvas = document.getElementById("canvas1");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// Get context of the canvas
const ctx = canvas.getContext("2d");

// Create an AnalyserNode
let analyser;



// Call kickOff function when the audio starts playing
audio.addEventListener("play", kickOff);

// Define kickOff function
function kickOff() {
  // Create an AnalyserNode
  analyser = audioContext.createAnalyser();
  
  // Connect the audioSource to the analyser node
  audioSource.connect(analyser);
  
  // Connect the audioSource to the AudioContext destination
  audioSource.connect(audioContext.destination);
  
  // Set the size of the Fast Fourier Transform used for frequency analysis
  analyser.fftSize = 64; // Increased to capture more data points
  
  // Get the frequency data from the AnalyserNode
  const bufferLength = analyser.frequencyBinCount;
  const dataArray = new Uint8Array(bufferLength);

  const centerX = canvas.width / 2;
  const centerY = canvas.height / 2;
  const radius = 15; // Distance from the center to start drawing bars

  function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    analyser.getByteFrequencyData(dataArray);
    
    // First visualizer (Radial Bars)
    drawRadialBars(bufferLength, centerX, centerY, radius, dataArray);
    
    // Second visualizer (Pulsing Circles)
    drawPulsingCircles(bufferLength, centerX, centerY, dataArray);

    requestAnimationFrame(animate);
  }
  animate();
}

// First visualizer: Radial Bars (as before)
function drawRadialBars(bufferLength, centerX, centerY, radius, dataArray) {
  const angleStep = (Math.PI * 2) / bufferLength; // Divide 360 degrees into number of bars

  for (let i = 0; i < bufferLength; i++) {
    const barHeight = dataArray[i] * 1.5; // Adjust height multiplier to scale visualization
    const angle = i * angleStep; // Calculate angle for each bar

    // Dynamic color effect
    const red = Math.min(255, (i * barHeight));  // Increase red by adding 100
    const green = Math.min(255, 0 + Math.sin(angle) * 100 + 100);  // Increase green similarly
    const blue = Math.min(255, 0 + Math.cos(angle) * 5 + 100);  // Increase blue

    ctx.save();
    ctx.translate(centerX, centerY); // Move origin to center of canvas
    ctx.rotate(angle); // Rotate the canvas to draw each bar in a circular pattern

    // Draw each bar
    ctx.fillStyle = `rgb(${red}, ${green}, ${blue})`;
    ctx.fillRect(radius, -barHeight / 2, 15, barHeight); // Draw the bar at the calculated angle

    ctx.restore(); // Reset transformations after each bar is drawn
  }
}

// Second visualizer: Pulsing Circles
function drawPulsingCircles(bufferLength, centerX, centerY, dataArray) {
  const maxRadius = 100;
  
  for (let i = 0; i < bufferLength; i++) {
    const intensity = dataArray[i] / 255; // Normalize dataArray values
    const circleRadius = maxRadius * intensity; // Set radius based on intensity
    const alpha = intensity; // Alpha transparency based on intensity

    // Create a colorful gradient for each circle
    const gradient = ctx.createRadialGradient(centerX, centerY, 0, centerX, centerY, circleRadius);
    gradient.addColorStop(0, `rgba(${255 - (i * 5)}, ${i * 5}, 255, ${alpha})`);  // Inner color
    gradient.addColorStop(1, `rgba(${i * 5}, 255, ${255 - (i * 5)}, 0)`);  // Outer color    

    ctx.beginPath();
    ctx.arc(centerX, centerY, circleRadius, 0, Math.PI * 2);
    ctx.fillStyle = gradient;
    ctx.fill();
  }
}



// use Fetch API to submit a form without reloading the page:
const form = document.getElementById("form");
const reviewFeedback = document.getElementById("review-feedback");
const reviewsBox = document.querySelector(".reviewsBox");

form.addEventListener("submit", async (event) => {
    event.preventDefault();

    const rating = document.getElementsByName("stars");
    let selected = false;
    for (let i = 0; i < rating.length; i++) {
        if (rating[i].checked) {
            selected = true;
            break;
        }
    }

    if (!selected) {
        reviewFeedback.innerHTML = "Please select a rating.";
        return false;
    }

    const formData = new FormData(form);

    try {
        // Using the current page URL (which includes review_handler.php)
        const response = await fetch("", {
            method: "POST",
            body: formData
        });

        if (response.ok) {
            const html = await response.text();
            reviewFeedback.innerHTML = "Thanks for your review!";
            form.reset();
            
            // Extract just the reviews content
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = html;
            const newReviewsBox = tempDiv.querySelector('.reviewsBox');
            if (newReviewsBox) {
                reviewsBox.innerHTML = newReviewsBox.innerHTML;
            }
        } else {
            reviewFeedback.innerHTML = "Sorry, we didn't quite get that. Please try again.";
            console.error("HTTP error:", response.status);
        }
    } catch (error) {
        console.error("An error occurred while submitting the form:", error);
        reviewFeedback.innerHTML = "Sorry, we didn't quite get that. Please try again.";
    }
});
