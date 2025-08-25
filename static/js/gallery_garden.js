const gallery = document.querySelector("#plant-gallery");
const nextPlantButton = document.querySelector("#next-plant");
let currentPlantIndex = 0;
let plantInfos = [];
const padding = 0.5 * gallery.clientWidth;
const center = 0.5 * gallery.clientWidth;
let images = gallery.querySelectorAll(".plant-gallery-content");
let mouseDown = false;
let startX, scrollLeft;

const startDragging = (e) => {
  mouseDown = true;
  startX = e.pageX - gallery.offsetLeft;
  scrollLeft = gallery.scrollLeft;
};

const stopDragging = (e) => {
  if (!mouseDown) {
    return;
  }
  mouseDown = false;
  const x = e.pageX - gallery.offsetLeft;
  const scroll = x - startX;
  changePlantIndex(currentPlantIndex);
  
  // console.log(scrollLeft - scroll)
  // gallery.scrollTo({ left: scrollLeft - scroll, "behavior":"instant"});
};

const move = (e) => {
  
  if (!mouseDown) {
    return;
  }
  e.preventDefault();
  const x = e.pageX - gallery.offsetLeft;
  const scroll = x - startX;
  gallery.scrollTo({ left: scrollLeft - scroll, "behavior":"instant"});
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
  // console.log(gallery.scrollLeft / images[0].clientWidth)
  const closestImageIndex = Math.round(
    (gallery.scrollLeft+center-padding+images[0].clientWidth/2)/ images[0].clientWidth
  )-1;
  // console.log(closestImageIndex)

  currentPlantIndex = closestImageIndex;
  
  loadPlantInfo(currentPlantIndex);
});

function changePlantIndex(index) {
  if (index < 0 || index >= images.length) return;
  if (mouseDown) return;
  // console.log("changing plant index to", index)
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
  if (imageSrc == undefined){
    image.src = 'static/assets/white.png';
    image.alt = 'blank'
  } else{
    image.src = imageSrc;
    image.alt = imageTitleEn;
  }

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

var plant_idx_lst = [];
async function loadGalleryInfo(filepath) {
  const response = await fetch(filepath);
  const obj = await response.json();
  const imageGalleryContents = obj.imageGalleryContents;
  plantInfos = obj.plantInfos;
  
  var idx = 0;
  imageGalleryContents.forEach((content) => {
    if (content.zone == 'Fruit Tree Garden' || content.zone == 'Rainforest Garden'){
      createGalleryImageItem(content.src, content.titleEn, content.titleZh);
      plant_idx_lst.push(idx);
    }
    idx += 1;
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

const plantdiv1 = document.querySelector(".plant-info1");
const plantdiv2 = document.querySelector(".plant-info2");
const plantdiv3 = document.querySelector(".plant-info3");

function loadPlantInfo(index) {
  index = plant_idx_lst[index];
  // console.log(index);
  if (plantInfos[index].info1 == undefined && plantInfos[index].imageLink1 == undefined){
    plantdiv1.style.display = 'none';
  } else{
    plantdiv1.style.display = 'block';
    if (plantInfos[index].info1 == undefined){
      plantInfo1.innerHTML = ''
    } else{
      plantInfo1.innerHTML = plantInfos[index].info1;
    }
    plantImage1.src = plantInfos[index].imageLink1;
  }

  if (plantInfos[index].info2 == undefined && plantInfos[index].imageLink2 == undefined){
    plantdiv2.style.display = 'none';
  } else{
    plantdiv2.style.display = 'block';
    if (plantInfos[index].info2 == undefined){
      plantInfo2.innerHTML = ''
    } else{
      plantInfo2.innerHTML = plantInfos[index].info2;
    }
    plantImage2.src = plantInfos[index].imageLink2;
  }

  if (plantInfos[index].info3 == undefined && plantInfos[index].imageLink3 == undefined){
    plantdiv3.style.display = 'none';
  } else{
    plantdiv3.style.display = 'block';
    if (plantInfos[index].info3 == undefined){
      plantInfo3.innerHTML = ''
    } else{
      plantInfo3.innerHTML = plantInfos[index].info3;
    }
    plantImage3.src = plantInfos[index].imageLink3;
  }

  learnMore.href = plantInfos[index].learnMore;

  if (plantInfo1.innerHTML.length > 400){
    plantInfo1.style.fontSize = '0.6em';
  } else if (plantInfo1.innerHTML.length > 250){
    plantInfo1.style.fontSize = '0.9em';
  }else{
    plantInfo1.style.fontSize = '1.1em'
  }

  if (plantInfo2.innerHTML.length > 400){
    plantInfo2.style.fontSize = '0.6em';
  } else if (plantInfo2.innerHTML.length > 200){
    plantInfo2.style.fontSize = '0.9em';
  }else{
    plantInfo2.style.fontSize = '1.1em'
  }

  if (plantInfo3.innerHTML.length > 400){
    plantInfo3.style.fontSize = '0.6em';
  } else if (plantInfo3.innerHTML.length > 200){
    plantInfo3.style.fontSize = '0.9em';
  }else{
    plantInfo3.style.fontSize = '1.1em'
  }
}

loadGalleryInfo("static/assets/garden_data.json");

window.addEventListener("load", () => adjustImageScale(images));
