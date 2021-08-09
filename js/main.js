var app = new Vue({
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