const offset = 50;
const navbar = document.getElementById("navbar")
const menuBtn = document.getElementById("header-menu")
const menuPopup = document.getElementById("popup")
const navItems = document.querySelectorAll("#nav-item")
const numbers = document.querySelectorAll(".number")
const history = document.querySelector(".history")

window.addEventListener("scroll", ()=>{
    if(pageYOffset > offset ){
        navbar.classList.add("navbar-active")
    }else{
        navbar.classList.remove("navbar-active")
    }
})


navItems.forEach(navItem => navItem.addEventListener("click", ()=>{
    menuPopup.classList.remove("navbar-menu-open")
}))

menuBtn.addEventListener("click", ()=>{
    menuPopup.classList.toggle("navbar-menu-open")
})


function numberCounter(){
    numbers.forEach((number)=>{
        let startValue = 0;
        let endValue = parseInt(number.getAttribute("data-val"))
    
        let count = setInterval(() =>{
            startValue++
            number.textContent = startValue
    
            if(startValue == endValue){
                clearInterval(count)
            }
        }, 50)
    })
    
    history.removeEventListener("mouseenter", numberCounter)
}

history.addEventListener("mouseenter", numberCounter)


