function createEle(eleTag,classList,id,attributes,styles){

    const ele = document.createElement(eleTag)
    classList = classList ?? []
    classList = typeof classList == "string" ? [classList]:classList 
    attributes = attributes ?? {}
    styles = styles ?? {}
    for (var className of classList){
        ele.classList.add(className)
    }
    for (var [attrName,attrVal] of Object.entries(attributes)){
        ele[attrName] = attrVal
    }
    for (var [styleName,styleVal] of Object.entries(styles)){
        ele.style[styleName] = styleVal
    }
    if (id) ele.id = id 
    return ele
}