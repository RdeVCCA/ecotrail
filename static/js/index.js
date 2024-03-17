const video = $('#video');
const content = $('#video-content');

var videoPlaying = false;
var lastScrollTop = 0;
var time = 0;
video[0].pause();

window.addEventListener('wheel', function(e) {
    const scrollDelta = e.deltaY;
    // Map the scroll position to a time in the video
    time += scrollDelta * 0.01;
    console.log(time, video[0].duration);
    if (time >= 0 && time <= video[0].duration) {
        video[0].currentTime = time;
    }
});