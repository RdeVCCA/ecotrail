const video = $('#video');
const content = $('#video-content');
const timeList = [];
var timeIndex = 0;
var time = 0;
var targetTime = 0;
var reversePlay = false;
var reverseInterval;
video[0].pause();

video[0].currentTime = 100;

var cooldown = 0;

video[0].addEventListener('seeked', function() {
    seeking = false;
});

async function reverseControl() {
    while (true) {
        if (reversePlay && !seeking) {
            video[0].pause();
            if (video[0].currentTime > targetTime) {
                seeking = true;
                video[0].currentTime -= 0.1;
            } else {
                reversePlay = false;
            }
        }
        await new Promise(r => setTimeout(r, 50));
    }
}

function playVideoUntil(time){
    video[0].play();
    targetTime = time;
    if (targetTime > video[0].position) {
        reversePlay = false;
    } else {
        reversePlay = true;
    }
}

window.addEventListener('wheel', function(e) {
    let position = window.scrollY;
    let videoPosition = video.offset().top;
    if(position > videoPosition){
        cooldown = 0.5;
        timeIndex++;
        if (timeIndex >= timeList.length) {
            timeIndex = timeList.length - 1;
        }
        let prevTime = time;
        time = timeList[timeIndex];
    }

});

reverseControl();