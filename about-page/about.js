// function checkVisible(elm, evalType) {
//     evalType = evalType || "visible";

//     var vpH = $(window).height(),
//         st = $(window).scrollTop(),
//         y = $(elm).offset().top,
//         elementHeight = $(elm).height();

//     if (evalType === "visible") return ((y < (vpH + st)) && (y > (st - elementHeight)));
//     if (evalType === "above") return ((y < (vpH + st)));
// }
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

window.addEventListener('scroll', load_if_visible);

let sections = document.getElementsByTagName("section");

Array.from(sections).forEach(section => {
    section.classList.add("fade-in");
});
let ele = sections.item(1);
let was_visible = Array(sections.length);

function load_if_visible() {
    for (let i = 0; i < sections.length; i++) {
        let section = sections.item(i)
        if (checkVisible(section)) {
            if (!was_visible[i]) {
                section.classList.add("fade-in");
                was_visible[i] = true;
            }
        }
        else {
            section.classList.remove("fade-in");
            was_visible[i] = false;
        }
    };
    console.log(checkVisible(sections.item(0)))
}