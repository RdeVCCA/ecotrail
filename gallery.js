const gallery = document.querySelector("#plant-gallery");
const nextPlantButton = document.querySelector("#next-plant");
let currentPlantIndex = 0;

const images = gallery.querySelectorAll(".plant-gallery-content");

function adjustImageScale(gallery, images) {
  const center = gallery.scrollLeft + gallery.clientWidth / 2;
  images.forEach((image, index) => {
    const imageCenter = image.offsetLeft + image.clientWidth / 2;
    const distanceFromCenter = Math.abs(center - imageCenter);
    const scale = Math.max(0.7, 1 - distanceFromCenter / gallery.clientWidth);
    image.style.transform = `scale(${scale})`;

    const opacity = Math.max(0.5, 1 - distanceFromCenter / gallery.clientWidth);
    image.style.opacity = opacity;

    image.addEventListener("click", () => {
      changePlantIndex(index);
    });
  });
}

gallery.addEventListener("scroll", (event) => {
  adjustImageScale(gallery, images);
  const closestImageIndex = Math.round(
    gallery.scrollLeft / images[0].clientWidth
  );

  currentPlantIndex = closestImageIndex;

  console.log(currentPlantIndex);
});

window.addEventListener("load", () => adjustImageScale(gallery, images));

function changePlantIndex(index) {
  gallery.style.scrollSnapType = "none"; // disable snapping for smooth scrolling
  gallery.scrollTo({
    left:
      images[index].offsetLeft -
      gallery.clientWidth / 2 +
      images[index].clientWidth / 2,
    behavior: "smooth",
  });
  setTimeout(() => {
    gallery.style.scrollSnapType = "x mandatory";
  }, 500);
}

nextPlantButton.addEventListener("click", () => {
  if (currentPlantIndex >= images.length - 1) return;
  changePlantIndex(currentPlantIndex + 1);
});
