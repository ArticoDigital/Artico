const btnMenu = document.querySelector('#Menu'),
    nav = document.querySelector('nav')

btnMenu.addEventListener('click', function () {
    nav.classList.toggle('open')
    this.classList.toggle('open')
});