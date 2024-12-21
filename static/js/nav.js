function displayBelow(){
    var redirectBlock = document.getElementsByClassName("nav2");
    Array.from(redirectBlock).forEach((element) => {
        element.style.display = "flex";
    });
    console.log("appear")
    
}

function stopDisplay(){
    var redirectBlock = document.getElementsByClassName("nav2");
    Array.from(redirectBlock).forEach((element) => {
        element.style.display = "none";
    });
    console.log("hide")
}