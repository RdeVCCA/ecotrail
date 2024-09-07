let sections = document.querySelectorAll(".paused");
// let sections = document.getElementsByTagName("section")
let was_ever_visible = Array(sections.length);
let fade_in_from = 0

was_ever_visible.fill(false);

$(document).ready(fade_in_if_visible)
window.addEventListener('scroll', fade_in_if_visible);

$(document).ready(()=>{
    let image_boxes = document.querySelectorAll('.image_box')
    let text_boxes = document.querySelectorAll('.blue_box_that_has_text')
    for (let i = 0; i < 4; i++){
        text_boxes[i].style.top = `${image_boxes[i].height/2}px`
    }
})  
fade_in()
function fade_in_if_visible() {
    for (let i = 0; i < sections.length; i++) {
        let section = sections.item(i)
        if (checkVisible(section)) {
            section.classList.remove("paused");
            // fade_in_from = fade_in(was_ever_visible, fade_in_from, section, i)
        }
    };
}

// function fade_in(was_ever_visible, fade_in_from, section, index){ 
//     if (was_ever_visible[index] == false) {
//         if (fade_in_from == 0){
//             let blue_boxes = section.querySelectorAll('.blue_box_that_has_text')
//             for (let blue_box of blue_boxes){
//                 blue_box.style.visibility = 'hidden';
//             }
//             section.classList.add("fade-in-l-r");
//             section.addEventListener('animationend', () => {
//                 for (let blue_box of blue_boxes){
//                     blue_box.style.visibility = 'visible'; 
//                     blue_box.classList.add("fade-in-l-r") 
//                 }
//             });
//             was_ever_visible[index] = true;
//             return 1
//         }
//         else if (fade_in_from == 1){
//             let blue_boxes = section.querySelectorAll('.blue_box_that_has_text')
//             for (let blue_box of blue_boxes){
//                 blue_box.style.visibility = 'hidden';
//             }
//             section.classList.add("fade-in-r-l");
//             section.addEventListener('animationend', () => {
//                 for (let blue_box of blue_boxes){
//                     blue_box.style.visibility = 'visible'; 
//                     blue_box.classList.add("fade-in-r-l") 
//                 }
//             });
//             was_ever_visible[index] = true;
//             return 0
//         }
//     }
//     return 1
// }

function fade_in(){ 

    let hidden = document.querySelectorAll('.scroll-animation')
    for (let item of hidden){
        if (!item.classList.contains('animated')){
            // item.style.visibility = 'hidden';
        }
    }
    for (let item of hidden){
        // display all classes of item
        // console.log(item.classList)
        if (!item.classList.contains('animated')){
            item.classList.add('animated');
            if (item.classList.contains('left')){
                item.classList.add('fade-in-l-r');
                item.addEventListener('animationend', () => {
                    item.style.visibility = 'visible'; 
                    item.classList.remove('scroll-animation');
                });
            }
            else if (item.classList.contains('right')){
                item.classList.add('fade-in-r-l');
                item.addEventListener('animationend', () => {
                    item.style.visibility = 'visible'; 
                    item.classList.remove('scroll-animation');
                });
            }
            else if (item.classList.contains('left-center')){
                item.classList.add('fade-in-l-r-c');
                item.addEventListener('animationend', () => {
                    item.style.visibility = 'visible'; 
                    item.classList.remove('scroll-animation');
                });
            }
            else if (item.classList.contains('right-center')){
                item.classList.add('fade-in-r-l-c');
                item.addEventListener('animationend', () => {
                    item.style.visibility = 'visible'; 
                    item.classList.remove('scroll-animation');
                });
            }
        }
    }

}

function inrange(x, lower, upper) {
    return (x > lower && x < upper)
}

function checkVisible(elm) {
    var st = $(window).scrollTop(),
        sb = $(window).scrollTop() + window.innerHeight,
        y_top = $(elm).offset().top,
        y_bottom = $(elm).height() + y_top; // y_bottom > y_top


    return (inrange(y_top, st, sb) || inrange(y_bottom, st, sb) || inrange(st, y_top, y_bottom) || inrange(sb, y_top, y_bottom));
}
