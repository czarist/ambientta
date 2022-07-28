jQuery(document).ready(function($) {

    window.onload = function() {

        // mata load da página
        let timeout;
        const fundo = document.getElementById('loadContent');

        function timeKill() {
            timeout = setTimeout(fundo.remove(), 1500);
        }

        timeKill();

        AOS.init({
            disable: function() {
                var maxWidth = 800;
                return window.innerWidth < maxWidth;
            },
        });
    }
});