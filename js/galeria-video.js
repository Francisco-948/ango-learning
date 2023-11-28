function playVideo() {
  document.querySelector('#videoPlayer').play();
}

function pauseVideo() {
  document.querySelector('#videoPlayer').pause();
}

function loadVideo(videoSrc, title, description) {
  document.querySelector('#videoPlayer source').setAttribute('src', videoSrc);
  document.querySelector('#videoPlayer').load();
  document.querySelector('#videoTitle').textContent = title;
  document.querySelector('#videoDescription').textContent = description;
}

const videoList = document.getElementById('videoList');
const videos = videoList.querySelectorAll('a');
let currentVideoIndex = 0;

function loadNextVideo() {
  currentVideoIndex = (currentVideoIndex + 1) % videos.length;
  loadVideo(
      videos[currentVideoIndex].querySelector('video source').getAttribute('src'),
      videos[currentVideoIndex].querySelector('video').getAttribute('title'),
      videos[currentVideoIndex].querySelector('video').getAttribute('data-description')
  );
}

function loadPreviousVideo() {
  currentVideoIndex = (currentVideoIndex - 1 + videos.length) % videos.length;
  loadVideo(
      videos[currentVideoIndex].querySelector('video source').getAttribute('src'),
      videos[currentVideoIndex].querySelector('video').getAttribute('title'),
      videos[currentVideoIndex].querySelector('video').getAttribute('data-description')
  );
}