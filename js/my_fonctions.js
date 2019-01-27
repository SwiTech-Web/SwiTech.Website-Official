$(document).ready(function(){
    // au clic sur un lien
    $('a').on('click', function(evt){
       // bloquer le comportement par défaut: on ne rechargera pas la page
       evt.preventDefault();
       // enregistre la valeur de l'attribut  href dans la variable target
	var target = $(this).attr('href');
       /* le sélecteur $(html, body) permet de corriger un bug sur chrome
       et safari (webkit) */
	$('html, body')
       // on arrête toutes les animations en cours
       .stop()
       /* on fait maintenant l'animation vers le haut (scrollTop) vers
        notre ancre target */
       .animate({scrollTop: $(target).offset().top}, 1000 );
    });
});

window.onscroll = function() {myFunction()};

var t = 0;

function myFunction() {
	if (document.body.scrollTop > 4000 || document.documentElement.scrollTop > 4000) {
		if (t == 0) {
			var elem = document.getElementById("myBar");
			var width = 1;
			var id = setInterval(frame, 10);
			function frame() {
				if (width >= 100) {
					clearInterval(id);
				} else {
					width++;
					elem.style.width = width + '%';
				}
				t = 1;
			}
		}
	}
}
