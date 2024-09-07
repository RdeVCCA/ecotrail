window.addEventListener("scroll", getPosition);
window.addEventListener("resize", getPosition);
window.addEventListener("scroll", fadeIn);
window.addEventListener("resize", fadeIn);

//does fading for each section upon scroll
function getPosition(){
    const htmlElement = document.documentElement;
    positions = document.getElementsByTagName('section');
    for (position of positions){
        rect = position.getBoundingClientRect();
        positionOpacity = (rect.top / htmlElement.clientHeight * 100);
        if (positionOpacity < 0){
            positionOpacity *= 0.4;
        }
        if (positionOpacity < 50){
            position.style.opacity = 100 + positionOpacity * 2 + '%';
            // console.log(positionOpacity,position.style.opacity);
        }
    }
}

//does starting fade in 
function floatIn1(){ //float in for the text
    document.getElementById('load1').style.transition = '3s'
    document.getElementById('load1').style.transform = 'translate(10vh)'
    document.getElementById('load2').style.transition = '3s'
    document.getElementById('load2').style.transform = 'translate(10vh)'
}

function floatIn2(){ //float in for the image
    document.getElementById('headerimg').style.transition = '3s'
    document.getElementById('headerimg').style.transform = 'translateY(5vh)'
}

//check if on screen
function checkOnScreen(obj) {
	const rect = obj.getBoundingClientRect();
	return (
		(rect.top >= 0 &&
			rect.top <= window.innerHeight)
		||
		(rect.bottom >= 0 &&
			rect.bottom <= window.innerHeight)
	);
}

//paragraph fade ins
function fadeIn(){
    // fadeList = document.getElementsByClassName('hidden');
    // for (i of fadeList){
    //     if (checkOnScreen(i)){
    //         console.log('yesir')
    //         i.style.opacity = '100%'
    //         i.style.transform = 'scale(1)'
    //     } else{
    //         i.style.transform = 'scale(0.8)'
    //     }
    // }

    floatLeftList = document.getElementsByClassName('floatLeft');
    for (i of floatLeftList){
        if (checkOnScreen(i)){
            i.style.opacity = '100%'
            i.style.transform = 'translate(2vw)'
        // } else{
        //     i.style.transform = 'translate(-2vw)'
        }
    }

    floatRightList = document.getElementsByClassName('floatRight');
    for (i of floatRightList){
        if (checkOnScreen(i)){
            i.style.opacity = '100%'
            i.style.transform = 'translate(-2vw)'
        // } else{
        //     i.style.transform = 'translate(2vw)'
        }
    }
}



//initialise fading onload
window.onload = setTimeout(floatIn2, 700)
window.onload = setTimeout(floatIn1, 500);

getPosition()