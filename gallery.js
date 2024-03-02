const gallerys = document.querySelectorAll(".plant-gallery");
let currentPlantIndex = 0;

gallerys.forEach((gallery) => {
  const images = gallery.querySelectorAll("img");

  function adjustImageScale(gallery, images) {
    const center = gallery.scrollLeft + gallery.clientWidth / 2;
    images.forEach((image) => {
      const imageCenter = image.offsetLeft + image.clientWidth / 2;
      const distanceFromCenter = Math.abs(center - imageCenter);
      const scale = Math.max(0.7, 1 - distanceFromCenter / gallery.clientWidth);
      image.style.transform = `scale(${scale})`;
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
});
