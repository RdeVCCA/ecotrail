function isDesktop() {
    return window.innerWidth >= 768; // Checks if screen width is 768px or smaller (common for phones)
}

function displayBelow(){
    if (isDesktop()) {
        var redirectBlock = document.getElementsByClassName("nav2");
        Array.from(redirectBlock).forEach((element) => {
            element.style.display = "flex";
        });
    }
}

function stopDisplay(){
    if (isDesktop()) {
        var redirectBlock = document.getElementsByClassName("nav2");
        Array.from(redirectBlock).forEach((element) => {
            element.style.display = "none";
        });
    }
}