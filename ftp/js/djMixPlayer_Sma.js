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

// use Fetch API to submit a form without reloading the page:
const form = document.getElementById("form");
const reviewFeedback = document.getElementById("review-feedback");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  const formData = new FormData(form);

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

  fetch("", {
    method: "POST",
    body: formData,
  })
    .then((response) => {
      if (response.ok) {
        // Form submission was successful
        console.log("Form submission successful!");
        reviewFeedback.innerHTML = "Thanks for your review!";
      } else {
        // Form submission failed
        console.log("Form submission failed.");
        reviewFeedback.innerHTML = "Form submission failed.";
      }
    })
    .catch((error) => {
      // An error occurred while submitting the form
      console.log("An error occurred while submitting the form:", error);
      reviewFeedback.innerHTML = "An error occurred while submitting the form.";
    });
});
