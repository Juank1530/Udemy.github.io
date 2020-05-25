//En esta línea se selecciona la el documento y se crea la fución anonomia o taxita 
jQuery(document).ready(function() {

    var enlace = jQuery(".hambur").attr("href");

    jQuery(".hambur").click(function(e) {

        e.preventDefault();
        abrirMenu();

    });

    jQuery("header .container nav a").click(function(e) {
        e.preventDefault();

        var enlace = jQuery(this).attr("href");
        abrirMenu();

        jQuery("html, body").animate({
            "scrollTop": jQuery(enlace).position().top
        }, 500)

    });

    /*
     console.log(enlace);
     //Con este linea se cambia el valor de elemento href por http://hola.com
     jQuery(".hambur").attr("href", "hola.com");

     jQuery(".hambur").addClass("open");
     // jQuery(".hambur").removeClass("hambur");

     if (jQuery(".hambur").hasClass("open") == true) {

         console.log("Hola");

     } else {
         console.log("Adios");
     }
     */
});



function abrirMenu() {
    jQuery("header").toggleClass("open");
    jQuery("header .container .hambur i").toggleClass("fa-times");
    jQuery("header .container nav").toggleClass("open")

}