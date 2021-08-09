"use strict"

//burger
window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.header-white__list'),
        menuItem = document.querySelectorAll('.header-white__link'),
        hamburger = document.querySelector('.header-white__burger');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('burger_active');
        menu.classList.toggle('menu_active');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('burger_active');
            menu.classList.toggle('menu_active');
        })
    })
});

let appAccord = new Vue({
    el: '.accordion',
    data: {
    },
    methods: {
        accordion: function (event) {

            // Раскомментировать, если нужно, чтобы закрывались остальные пункты при открытии текущего
            // var matches = document.querySelectorAll('.accordion-item-head');
            // for (var i = 0; i < matches.length; i++) {
            //     matches[i].classList.remove('active');
            // }

            event.target.classList.toggle('active');
        }
    }

});