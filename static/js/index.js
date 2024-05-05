const videoA = $('#video-A')[0];
const videoB = $('#video-B')[0];
const parent = $("#Wonders-of-Eco-Trail");

// const content = $('#video-content');
const videoLength = 10; // hardcoded, need change
videoA.pause();
videoB.pause();

var currentTime = 0;
var timeStep = [0, 3, 4.5, 9];
var reverse = false;
var playing = false;
var timeStepIndex = 0;
var activate = false;

var contentArray = $('#content-storage').find('.collection').toArray();
console.log(contentArray);

videoA.currentTime = 0;
videoB.currentTime = videoLength;

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
            // console.log(currentTime, targetTime);
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
            // console.log(currentTime, targetTime);
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

async function swapContent(oldIndex,newIndex){
    var newContent = $(contentArray[newIndex]).find("span").toArray();
    var timeDifference = timeStep[newIndex] - timeStep[oldIndex];
    if (timeDifference < 0){
        timeDifference = -timeDifference;
    }
    var targetHeader = $("#wonder-header");
    var targetDescription = $("#wonder-description");
    var targetLink = $("#wonder-link");
    targetHeader.animate({opacity: 0}, (timeDifference/2)*1000, function() {
        targetHeader.html(newContent[0].innerHTML);
        $(this).animate({opacity: 1}, (timeDifference/2)*1000);
    });
    targetDescription.animate({opacity: 0}, (timeDifference/2)*1000, function() {
        targetDescription.html(newContent[1].innerHTML);
        $(this).animate({opacity: 1}, (timeDifference/2)*1000);
    });
    targetLink.animate({opacity: 0}, (timeDifference/2)*1000, function() {
        targetLink.attr("href", newContent[2].innerHTML);
        $(this).animate({opacity: 1}, (timeDifference/2)*1000);
    });

}

async function playVideoUntilNext(increase){
    if (playing){
        return;
    }
    var newIndex = calculateIndex(increase);
    console.log(newIndex, timeStepIndex);
    
    var targetTime = timeStep[newIndex];
    if (newIndex == timeStepIndex){
        return;
    }else{
        swapContent(timeStepIndex,newIndex);
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
        if ((timeStepIndex > 0 && timeStepIndex < timeStep.length - 1) || (deltaY < 0 && timeStepIndex == timeStep.length - 1)){
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

