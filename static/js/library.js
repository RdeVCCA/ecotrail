const popup = document.querySelector('.popup_library');
const popupBg = document.querySelector('.popup_background');
const library = document.querySelector('.library');
function togglePopup(open) {
    if (open){
        document.body.classList.add('no-scroll');
        popup.classList.remove('hidden');
        popupBg.classList.remove('hidden');
    }
    else{
        document.body.classList.remove('no-scroll');
        popup.classList.add('hidden');
        popupBg.classList.add('hidden');
    }
}

function setPopupDetails(details){
    const title = popup.querySelector('.popup_title');
    const desc = popup.querySelector('.popup_desc');
    const link = popup.querySelector('.popup_link');

    title.textContent = details.title;
    desc.textContent = details.desc;
    link.href = details.link;

}

function createLibraryElement(details){
    const container = createEle('div',['library_element'],null,null,null);
    const img = createEle('img',['library-element-background'],null,{src:details.img},null);
    const description = createEle('div',['library-element-description'],null,null,null);
    const name = createEle('h3',['name'],null,{innerHTML:details.name},null);
    const location = createEle('h3',['name'],null,{innerHTML:details.location},null);
    container.appendChild(img);
    container.appendChild(description);
    description.appendChild(location);
    description.appendChild(name);
    container.dataset.id = details.id;
    library.appendChild(container);


}
function libraryElementClick() {

  togglePopup(true);
    // setPopupDetails
}

popupBg.addEventListener('click', () => {
    togglePopup(false);
})