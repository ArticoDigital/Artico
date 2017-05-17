const btnMenu = document.querySelector('#Menu'),
    nav = document.querySelector('nav')

btnMenu.addEventListener('click', function () {
    nav.classList.toggle('open')
    this.classList.toggle('open')
});
document.addEventListener('DOMContentLoaded', function(){
    Typed.new('#typed', {
        strings: ["Amamos lo que hacemos y por eso nunca trabajamos", "Creativos","Creativos/Geeks"],
        typeSpeed: 50,
        backDelay: 20,
        startDelay:20,
        cursorChar: "_"
    });
});
