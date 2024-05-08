const gallery = document.querySelector("#plant-gallery");
const nextPlantButton = document.querySelector("#next-plant");
let currentPlantIndex = 0;
let plantInfos = [];

let images = gallery.querySelectorAll(".plant-gallery-content");
let mouseDown = false;
let startX, scrollLeft;

const startDragging = (e) => {
  mouseDown = true;
  startX = e.pageX - gallery.offsetLeft;
  scrollLeft = gallery.scrollLeft;
};

const stopDragging = (e) => {
  mouseDown = false;
  changePlantIndex(currentPlantIndex);
};

const move = (e) => {
  e.preventDefault();
  if (!mouseDown) {
    return;
  }
  const x = e.pageX - gallery.offsetLeft;
  const scroll = x - startX;
  gallery.scrollLeft = scrollLeft - scroll;
};

gallery.addEventListener("mousemove", move, false);
gallery.addEventListener("mousedown", startDragging, false);
gallery.addEventListener("mouseup", stopDragging, false);
gallery.addEventListener("mouseleave", stopDragging, false);

function addGalleryItemFunc(image, index) {
  const center = gallery.scrollLeft + gallery.clientWidth / 2;
  const imageCenter = image.offsetLeft + image.clientWidth / 2;
  const distanceFromCenter = Math.abs(center - imageCenter);
  const scale = Math.max(0.7, 1 - distanceFromCenter / gallery.clientWidth);
  image.style.transform = `scale(${scale})`;

  const opacity = Math.max(0.5, 1 - distanceFromCenter / gallery.clientWidth);
  image.style.opacity = opacity;

  image.addEventListener("click", () => {
    changePlantIndex(index);
  });
}

function adjustImageScale(images) {
  images.forEach((item, index) => {
    addGalleryItemFunc(item, index);
  });
}

gallery.addEventListener("scroll", (event) => {
  adjustImageScale(images);
  const closestImageIndex = Math.round(
    gallery.scrollLeft / images[0].clientWidth
  );

  currentPlantIndex = closestImageIndex;
  loadPlantInfo(currentPlantIndex);
});

function changePlantIndex(index) {
  gallery.style.scrollSnapType = "none"; // disable snapping for smooth scrolling
  gallery.scrollTo({
    left:
      images[index].offsetLeft -
      gallery.clientWidth / 2 +
      images[index].clientWidth / 2,
    behavior: "smooth",
  });
  currentPlantIndex = index;

  loadPlantInfo(currentPlantIndex);
}

nextPlantButton.addEventListener("click", () => {
  if (currentPlantIndex >= images.length - 1) return;
  changePlantIndex(currentPlantIndex + 1);
});

function createGalleryImageItem(imageSrc, imageTitleEn, imageTitleZh) {
  const itemDiv = document.createElement("div");
  itemDiv.classList.add("plant-gallery-content");

  const image = document.createElement("img");
  image.src = imageSrc;
  image.alt = imageTitleEn;

  const titlesDiv = document.createElement("div");
  titlesDiv.classList.add("gallery-image-title");

  const title1 = document.createElement("p");
  title1.textContent = imageTitleEn;
  title1.classList.add("gallery-image-title-en");
  const title2 = document.createElement("p");
  title2.textContent = imageTitleZh;
  title2.classList.add("gallery-image-title-zh");
  titlesDiv.appendChild(title1);
  titlesDiv.appendChild(title2);

  itemDiv.appendChild(image);
  itemDiv.appendChild(titlesDiv);
  addGalleryItemFunc(itemDiv, gallery.children.length);

  gallery.appendChild(itemDiv);
  images = gallery.querySelectorAll(".plant-gallery-content");
}

async function loadGalleryInfo(filepath) {
  const response = await fetch(filepath);
  const obj = await response.json();
  const imageGalleryContents = obj.imageGalleryContents;
  plantInfos = obj.plantInfos;

  imageGalleryContents.forEach((content) => {
    createGalleryImageItem(content.src, content.titleEn, content.titleZh);
  });

  currentPlantIndex = 0;
  loadPlantInfo(currentPlantIndex);

  adjustImageScale(images);
}

// Load plantInfos index
const plantInfo1 = document.querySelector("#plant-info-1");
const plantInfo2 = document.querySelector("#plant-info-2");
const plantInfo3 = document.querySelector("#plant-info-3");
const plantImage1 = document.querySelector("#plant-image-1");
const plantImage2 = document.querySelector("#plant-image-2");
const plantImage3 = document.querySelector("#plant-image-3");
const learnMore = document.querySelector("#learn-more");

function loadPlantInfo(index) {
  plantInfo1.innerHTML = plantInfos[index].info1;
  plantInfo2.innerHTML = plantInfos[index].info2;
  plantInfo3.innerHTML = plantInfos[index].info3;
  plantImage1.src = plantInfos[index].imageLink1;
  plantImage2.src = plantInfos[index].imageLink2;
  plantImage3.src = plantInfos[index].imageLink3;
  learnMore.href = plantInfos[index].learnMore;
}

loadGalleryInfo("../static/assets/dummy_data.json");

window.addEventListener("load", () => adjustImageScale(images));
