const popup = document.querySelector('.popup_library');
const popupBg = document.querySelector('.popup_background');
const library = document.querySelector('.library');
const popupLabels = document.querySelectorAll('.popup_name,.popup_location');
const search = document.querySelector('#search');
var data = null
const libraryElements = []
const filters = {
    "search": "",
    "zone": null,
    "type": null
}
function restartAnimation(ele){
    ele.style.animation = 'none';
    ele.offsetHeight; /* trigger reflow */
    ele.style.animation = null; 

}
function togglePopup(open) {
    if (open){
        document.body.classList.add('no-scroll');
        popup.classList.remove('hidden');
        popupBg.classList.remove('hidden');
        for (var label of popupLabels){
            label.classList.remove('reverse');
        }
        popup.classList.remove("reverse")
        popupBg.classList.remove("reverse")
    }
    else{
        document.body.classList.remove('no-scroll');
        
        popup.classList.add("reverse")
        popupBg.classList.add("reverse")
        // retrigger animation
        restartAnimation(popup);
        restartAnimation(popupBg);

        for (var label of popupLabels){
            label.classList.add('reverse');
            restartAnimation(label);
        }
        setTimeout(() => {
            popup.classList.add('hidden');
            popupBg.classList.add('hidden');
        }
        ,900)


    }
}

function setPopupDetails(details){
    const title = popup.querySelector('.popup_name');
    const zone = popup.querySelector('.popup_location');
    const img = popup.querySelector('.popup_img');

    title.textContent = details.titleEn;
    zone.textContent = details.zone;
    img.src = details.src;

}

function createLibraryElement(details){
    const container = createEle('div',['library-element','box-shadow--primary'],null,{onclick:libraryElementClick},null);
    const img = createEle('img',['library-element-background'],null,{src:details.src},null);
    const description = createEle('p',['description','tetriary'],null,null,null);
    const name = createEle('h3',['name',"primary"],null,{innerHTML:details.titleEn},null);
    const location = createEle('p',['location',"tetriary"],null,{innerHTML:details.zone},null);
    container.appendChild(img);
    container.appendChild(description);
    container.appendChild(location);
    container.appendChild(name);
   
    
    container.dataset.id = details.id;
    library.appendChild(container);
    libraryElements.push(container);

}

async function loadLibrary(){
    const res = await fetch("static/assets/dummy_data.json")
    data = (await res.json())["imageGalleryContents"]
    for (var i = 0; i < data.length; i++){
        data[i].id = i;
        createLibraryElement(data[i]);
    }
}

function filterLibrary(filters){
    for (var element of libraryElements){
        const details = data[element.dataset.id];
        const name = details.titleEn.toLowerCase();
        const zone = details.zone.toLowerCase();
        const search = filters.search.toLowerCase();
        const type = filters.type;
        const zoneFilter = filters.zone;
        if ((name.includes(search) || zone.includes(search)) && (type == null || details.type == type) && (zoneFilter == null || zone == zoneFilter)){
            element.classList.remove('hidden');
        }
        else{
            element.classList.add('hidden');
        }
    }
}

function libraryElementClick() {

    togglePopup(true);
    setPopupDetails(data[this.dataset.id])
}

popupBg.addEventListener('click', () => {
    togglePopup(false);
})

loadLibrary()

search.addEventListener('input', (e) => {
    filters.search = e.target.value;
    filterLibrary(filters);
})