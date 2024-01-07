const divNav = document.getElementById('navExpandida')

const abreNav = () =>{
    divNav.style.display = "flex"
    divNav.style.animation = "slideIn 0.5s linear"
}

const fechaNav = () =>{
    divNav.style.animation = "slideOut 0.5s linear"
    setTimeout(function(){
        divNav.style.display = "none"
    }, 450)
}