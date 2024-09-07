var left = [...document.querySelectorAll(".left")]
var right = [...document.querySelectorAll(".right")]
function checkOnScreen(obj){
	const rect = obj.getBoundingClientRect();
    return (
        (rect.top >= 0 &&
		rect.top <= window.innerHeight)
		||
		(rect.bottom >= 0 &&
			rect.bottom <= window.innerHeight)
    );
}
// console.log(i)
document.onscroll = function(){
	// console.log(left)
	for (i of left){
    // console.log(checkOnScreen(i))
		if (checkOnScreen(i)){
			i.style.animation = "var(--animation)"
			left.splice(left.indexOf(i),1)
		}
	}
	for (i of right){
    // console.log(checkOnScreen(i))
		if (checkOnScreen(i)){
			i.style.animation = "var(--animation)"
			right.splice(right.indexOf(i),1)
		}
	}
}

function init(){
	// console.log(left)
	for (i of left){
    // console.log(checkOnScreen(i))
		if (checkOnScreen(i)){
			i.style.animation = "var(--animation)"
			left.splice(left.indexOf(i),1)
		}
	}
	for (i of right){
    // console.log(checkOnScreen(i))
		if (checkOnScreen(i)){
			i.style.animation = "var(--animation)"
			right.splice(right.indexOf(i),1)
		}
	}
}

function expand(element){
	$(element).css("max-height","fit-content");
	$(element).css("cursor","auto");
	$(element).find(".arrow")[0].remove();
}
