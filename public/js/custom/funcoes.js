function openTabByGroup(evt, tabID, itemsCommonClass, linksCommonClass) {
    var i, x, tablinks;
    
    x = document.getElementsByClassName(itemsCommonClass);
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(tabID).style.display = "block";  
  
    tablinks = document.getElementsByClassName(linksCommonClass);
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }
    evt.currentTarget.classList.add("active");
}

function toggleItemActiveClass(id, itemsCommonClass){
    x = document.getElementById(id);
    links = document.getElementsByClassName(itemsCommonClass);
    for (i = 0; i < links.length; i++) {
        if(links[i] != x)
            links[i].classList.remove("active");
    }    
  
    if(!x.classList.contains('active'))
      x.classList.add('active');
    else
      x.classList.remove('active');
}