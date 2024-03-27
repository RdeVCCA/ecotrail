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
let was_ever_visible = Array(sections.length);
was_ever_visible.fill(false);

function load_if_visible() {
    for (let i = 0; i < sections.length; i++) {
        let section = sections.item(i)
        if (checkVisible(section)) {
            if (was_ever_visible[i] != true) {
                section.classList.add("fade-in");
                was_ever_visible[i] = true;
            }
        }
        else {
            section.classList.remove("fade-in");
        }
        console.log(was_ever_visible)
    };
}