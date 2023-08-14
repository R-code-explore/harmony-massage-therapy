let menu = document.getElementById('menu_container')

function openMenuFunction(){
    menu.style.display = "block"
    menu.style.transform = "translateX(0%)"
}

function closePhoneMenu(){
    menu.style.transform = "translateX(100%)"
    menu.style.display = "none"
}