const videoA = $('#video-A')[0];
const videoB = $('#video-B')[0];
const parent = $("#Wonders-of-Eco-Trail");

const videoLength = videoA.duration;

// const content = $('#video-content');
videoA.pause();
videoB.pause();

videoA.currentTime = 0;
videoB.currentTime = videoLength;

var currentTime = 0;
var timeStep = [0, 1, 2, 3, 4, 5];
var reverse = false;
var playing = false;
var timeStepIndex = 0;
var activate = false;

function timeInReverse(time){
    return videoLength - time;
}

async function playUntil(targetTime){
    if (targetTime > currentTime){
        videoA.play();
        videoB.pause();
        playing = true;
        reverse = false;
        $(videoA).css('z-index', 3);
        while (true){
            currentTime = videoA.currentTime;
            console.log(currentTime, targetTime);
            if (currentTime >= targetTime){
                videoA.pause();
                playing = false;
                currentTime = targetTime;
                videoB.currentTime = timeInReverse(currentTime);
                break;
            }
            await new Promise(r => setTimeout(r, 100));
        }
    }else if (targetTime < currentTime){
        videoB.play();
        videoA.pause();
        playing = true;
        reverse = true;
        $(videoA).css('z-index', 1);
        while (true){
            currentTime = timeInReverse(videoB.currentTime);
            console.log(currentTime, targetTime);
            if (currentTime <= targetTime){
                videoB.pause();
                playing = false;
                currentTime = targetTime;
                videoA.currentTime = currentTime;
                break;
            }
            await new Promise(r => setTimeout(r, 100));
        }
    
    }
}

async function playVideoUntilNext(increase){
    if (playing){
        return;
    }
    var newIndex = calculateIndex(increase);
    var targetTime = timeStep[newIndex];
    if (newIndex == timeStepIndex){
        return;
    }
    await playUntil(targetTime);
    timeStepIndex = newIndex;
}

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

window.addEventListener('wheel', function(e) {
    if (activate){
        if ((timeStepIndex > 0 && timeStepIndex < timeStep.length - 1) || (e.deltaY < 0 && timeStepIndex == timeStep.length - 1)){
            e.preventDefault();
        }else{
            console.log("limit")
        }
        if (e.deltaY < 0){
            playVideoUntilNext(-1);
        }else{
            playVideoUntilNext(1);
        }
    }
}, { passive: false });

let startY;

window.addEventListener('touchstart', function(e) {
    console.log("touched");
    console.log($(e.target), parent);
    if ($(e.target).closest(parent).length > 0) {
        activate = true;
        startY = e.touches[0].clientY;
    } else {
        activate = false;
    }
}, { passive: false });

window.addEventListener('touchmove', function(e) {
    if (activate) {
        let endY = e.touches[0].clientY;
        let deltaY = startY - endY;
        if (timeStepIndex > 0 && timeStepIndex < timeStep.length - 1) {
            e.preventDefault();
        } else {
            console.log("limit")
        }
        if (deltaY > 0) {
            playVideoUntilNext(1);
        } else {
            playVideoUntilNext(-1);
        }
    }
}, { passive: false });

// reverseControl();

// async function reverseControl() {
    //     while (true) {
    //         if (reversePlay && playing) {
    //             video[0].pause();
    //             if (video[0].currentTime > targetTime) {
    //                 seeking = true;
    //                 video[0].currentTime -= 0.1;
    //             } else {
    //                 reversePlay = false;
    //             }
    //         }
    //         await new Promise(r => setTimeout(r, 100));
    //     }
    // }
    
    // async function playVideoUntilNext(increase){
    //     var newIndex = calculateIndex(increase);
    //     targetTime = timeStep[newIndex];
    
    //     if (newIndex == timeStepIndex) {
    //         return;
    //     }
    //     console.log(targetTime, video[0].currentTime)
    //     if (targetTime >= video[0].currentTime) {
    //         reversePlay = false;
    //     } else {
    //         reversePlay = true;
    //     }
    
    //     video[0].play();
    //     playing = true;
    
    //     if (!reversePlay) {
    //         console.log(video[0].currentTime, targetTime)
    //         while (true){
    //             // console.log("test forward")
    //             if (video[0].currentTime >= targetTime) {
    //                 video[0].currentTime = targetTime;
    //                 video[0].pause();
    //                 playing = false;
    //                 timeStepIndex = newIndex;
    //                 break;
    //             }else{
    //                 console.log(video[0].currentTime, targetTime)
    //             }
    //             await new Promise(r => setTimeout(r, 100));
    //         }
    //     }else{
    //         console.log(video[0].currentTime, targetTime)
    //         while (true){
    //             // console.log("test backward")
    //             if (video[0].currentTime <= targetTime) {
    //                 video[0].currentTime = targetTime;
    //                 video[0].pause();
    //                 playing = false;
    //                 timeStepIndex = newIndex;
    //                 break;
    //             }else{
    //                 console.log(video[0].currentTime, targetTime)
    //             }
    //             await new Promise(r => setTimeout(r, 100));
    //         }
    //     }
    //     time = targetTime;
    // }