// Get elements from HTML page
const audio = document.getElementById('audio');
const musicContainer = document.getElementById('music-container');
const playBtn = document.getElementById('play');
const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');
const stopBtn = document.getElementById('stop');
const title = document.getElementById('title');
const progressContainer = document.getElementById('progress-container');


// Play/pause button event listener
playBtn.addEventListener('click', () => {
  const isPlaying = musicContainer.classList.contains('play');
  if (isPlaying) {
    pauseSong();
  } else {
    playSong();
  }
});


// Initialize audio context
const audioContext = new (window.AudioContext || window.webkitAudioContext)();


// Stop button event listener
stopBtn.addEventListener('click', () => {
  audio.pause();
  audio.currentTime = 0;
  musicContainer.classList.remove('play');
  playBtn.querySelector('i.fas').classList.add('fa-play');
  playBtn.querySelector('i.fas').classList.remove('fa-pause');
});


// Play song
function playSong() {
  if (audioContext.state === 'suspended') {
    audioContext.resume();
  }  
  musicContainer.classList.add('play');
  playBtn.querySelector('i.fas').classList.remove('fa-play');
  playBtn.querySelector('i.fas').classList.add('fa-pause');

  audio.play();
}



// Pause song
function pauseSong() {
  musicContainer.classList.remove('play');
  playBtn.querySelector('i.fas').classList.add('fa-play');
  playBtn.querySelector('i.fas').classList.remove('fa-pause');

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



// Update position of song
function updatePosition(clicked) {
  var tracktime = clicked.dataset.time;
  audio.currentTime = tracktime;
  playSong()
}


// Update progress bar
function updateProgress(e) {
  const { duration, currentTime } = e.srcElement;
  const progressPercent = ((currentTime.toFixed(2) / duration.toFixed(2)) * 100).toFixed(2);
  progress.style.width = `${progressPercent}%`;
}



// Set progress bar
function setProgress(e) {
  const width = this.clientWidth 
  const clickX = e.offsetX;
  const duration = audio.duration;
  audio.currentTime = (clickX / width) * duration;
}

// Time of song update function
function seektimeupdate(){
  var nt = audio.currentTime;
  var curhours = Math.floor(audio.currentTime / 3600);
  var curmins = Math.floor(audio.currentTime / 60);
  var cursecs = Math.floor(audio.currentTime - curmins * 60);
  if (curhours < 10) { curhours = "0"+curhours; }
  if (curmins < 10) { curmins = "0"+curmins; }
  else if (curmins >= 60) { curmins -= 60; curmins = "0"+curmins; }
  if (cursecs < 10) { cursecs = "0"+cursecs; }
  if (nt >= 4200) { curmins = curmins-"0"; }
  currTime.innerHTML = curhours +':'+ curmins +':'+ cursecs;
}



// Skip button event listeners
prevBtn.addEventListener('click', skipBackward);
nextBtn.addEventListener('click', skipForward);

// Time/song update
audio.addEventListener('timeupdate', updateProgress);

// Click on progress bar
progressContainer.addEventListener('click', setProgress);

// Time of song
audio.addEventListener('timeupdate', seektimeupdate);



// Sync playlist data
const timings = document.querySelector('.timings')
const lines = timings.textContent.trim().split('\n')

let syncData = []

lines.map((line) => {
    const [time, text] = line.trim().split('|')
    syncData.push({'start': time.trim(), 'text': text.trim()})
})

audio.addEventListener('timeupdate', () => {
    syncData.forEach((item) => {
        if (audio.currentTime >= item.start) title.innerText = item.text
    })
})




// Get canvas element and set its width and height to window dimensions
const canvas = document.getElementById("canvas1");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// Get context of the canvas
const ctx = canvas.getContext("2d");

// Create an AnalyserNode
let analyser;

// Create a MediaElementAudioSourceNode and connect it to the audio element
const audioSource = audioContext.createMediaElementSource(audio);

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
  analyser.fftSize = 512;
  
  // Get the frequency data from the AnalyserNode
  const bufferLength = analyser.frequencyBinCount;
  const dataArray = new Uint8Array(bufferLength);

  // Define the width of each bar in the visualizer
  const barWidth = canvas.width;
  let barHeight;
  let x;

  // Define the function to animate the visualizer
  function animate() {
    x = 0;
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    analyser.getByteFrequencyData(dataArray);
    drawVisualiser(bufferLength, x, barWidth, barHeight, dataArray);

    requestAnimationFrame(animate);
  }
  
  // Call animate function to start the animation loop
  animate();
}



// circular analyser
function drawVisualiser(bufferLength, x, barWidth, barHeight, dataArray){
  // Iterate over each item in the dataArray
  for (let i = 0; i < bufferLength; i++) {
    barHeight = dataArray[i]; // Get the value of the current item in the dataArray
    ctx.save(); // Save the current state of the canvas
    ctx.translate(canvas.width/2, canvas.height); // Move the origin to the center of the canvas
    ctx.rotate(i * Math.PI * 10 / bufferLength); // Rotate the canvas by a certain amount based on the index of the current item
    const red = (i * barHeight)/30; // Calculate the red component of the fill color
    const green = i * 1.5; // Calculate the green component of the fill color
    const blue = barHeight * 1.5; // Calculate the blue component of the fill color
    ctx.fillStyle = `rgb(${red}, ${green}, ${blue})`; // Set the fill color
    ctx.fillRect(0, 0, barWidth, barHeight); // Draw a rectangle at the current position with the calculated color and dimensions
    x += barWidth; // Update the x position for the next item
    ctx.restore(); // Restore the canvas to its previous state
  }
}




// Create a GainNode to control the volume
const gainNode = audioContext.createGain();
gainNode.gain.value = -0.1;

// Connect the GainNode to the AudioContext output
audioSource.connect(gainNode);
gainNode.connect(audioContext.destination);


const volumeSlider = document.getElementById("volume-slider");
volumeSlider.addEventListener("input", () => {
  // set gain value to slider value
  gainNode.gain.value = volumeSlider.value;
  // console.log("volumeSlider value: " + volumeSlider.value)
});



// use Fetch API to submit the form without reloading the page
const form = document.getElementById('form');
const reviewFeedback = document.getElementById('review-feedback');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const formData = new FormData(form)

let selected = false;
const rating = document.getElementsByName("stars");
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

  fetch('', {
    method: 'POST',
    body: formData
  })
  .then(response => {
    if (response.ok) {
      // Form submission was successful
      console.log('Form submission successful!');
      reviewFeedback.innerHTML = 'Thanks for your review!';
    } else {
      // Form submission failed
      console.log('Form submission failed.');
    }
  })
  .catch(error => {
    // An error occurred while submitting the form
    console.log('An error occurred while submitting the form:', error);
  });
});