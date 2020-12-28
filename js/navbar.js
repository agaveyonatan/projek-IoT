// NAVBAR ANIMATION ON SCROLL
window.addEventListener('scroll', ()=>{
    const navbar = document.querySelector('nav')

    if(window.pageYOffset > 0){
        navbar.classList.add('custom-nav')
    }else{
        navbar.classList.remove('custom-nav')
    }
})

const navToggler = document.querySelector('.navbar-toggler')
const dropdown = document.querySelector('#dropdown-menu')

dropdown.innerHTML = '<i class="fas fa-bars"></i>'

navToggler.addEventListener('click', ()=>{
    if(dropdown.innerHTML == '<i class="fas fa-bars"></i>'){
        dropdown.innerHTML = '<i class="fas fa-times"></i>'
    }else{
        dropdown.innerHTML = '<i class="fas fa-bars"></i>'
    }
})