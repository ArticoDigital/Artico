const btnMenu = document.querySelector('#Menu'),
    nav = document.querySelector('nav')

btnMenu.addEventListener('click', function () {
    nav.classList.toggle('open')
    this.classList.toggle('open')
});
document.addEventListener('DOMContentLoaded', function(){
    Typed.new('.Header-message', {
        strings: ["First sen", "Second ^1000  sentence.","hola"],
        typeSpeed: 20,
        loop: true,
        cursorChar: "_"
    });
});
