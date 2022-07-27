jQuery(document).ready(function($) {

    window.onload = function() {

        // mata load da página
        let timeout;
        let fundo = document.getElementById('loadContent');

        function timeKill() {
            timeout = setTimeout(deletLoadContent, 2500);
        }

        function deletLoadContent() {
            fundo.remove();
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