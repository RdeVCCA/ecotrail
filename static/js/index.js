const video = $('#video');
const content = $('#video-content');
const timeList = [];
var timeIndex = 0;
var time = 0;
var targetTime = 0;
var reversePlay = false;
var reverseInterval;
video[0].pause();

video[0].currentTime = 0;
var cooldown = 0;

var timeStep = [0, 1, 2, 3, 4, 5];
var playing = false;
var timeStepIndex = 0;

function calculateIndex(increase) {
    var bottomLimit = 0;
    var upperLimit = timeStep.length - 1;
    var nextIndex = timeStepIndex + increase;
    if (nextIndex < bottomLimit) {
        nextIndex = bottomLimit;
    } else if (nextIndex > upperLimit) {
        nextIndex = upperLimit;
    }
    return nextIndex;
}

async function reverseControl() {
    while (true) {
        if (reversePlay && playing) {
            video[0].pause();
            if (video[0].currentTime > targetTime) {
                seeking = true;
                video[0].currentTime -= 0.1;
            } else {
                reversePlay = false;
            }
        }
        await new Promise(r => setTimeout(r, 100));
    }
}

async function playVideoUntilNext(increase){
    var newIndex = calculateIndex(increase);
    targetTime = timeStep[newIndex];

    if (newIndex == timeStepIndex) {
        return;
    }
    console.log(targetTime, video[0].currentTime)
    if (targetTime >= video[0].currentTime) {
        reversePlay = false;
    } else {
        reversePlay = true;
    }

    video[0].play();
    playing = true;

    if (!reversePlay) {
        console.log(video[0].currentTime, targetTime)
        while (true){
            // console.log("test forward")
            if (video[0].currentTime >= targetTime) {
                video[0].currentTime = targetTime;
                video[0].pause();
                playing = false;
                timeStepIndex = newIndex;
                break;
            }else{
                console.log(video[0].currentTime, targetTime)
            }
            await new Promise(r => setTimeout(r, 100));
        }
    }else{
        console.log(video[0].currentTime, targetTime)
        while (true){
            // console.log("test backward")
            if (video[0].currentTime <= targetTime) {
                video[0].currentTime = targetTime;
                video[0].pause();
                playing = false;
                timeStepIndex = newIndex;
                break;
            }else{
                console.log(video[0].currentTime, targetTime)
            }
            await new Promise(r => setTimeout(r, 100));
        }
    }
    time = targetTime;
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