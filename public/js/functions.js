//BOTON DESLIZANTE
$(document).ready(function(){
		/**
		 * Esta función es llamada para crear el botón de subida
		 * Esta función es llamada desde los eventos scroll() y resize()
		 *
		 * Se ha puesto en una función aparte, ya que no todos los navegadores
		 * ejecutan el evento scroll() al cargar la pagina
		 */
		function crearBoton()
		{
			// Revisamos que el scroll este por encima de 250 píxeles para
			// mostrar el botón de subir
			if($(document).scrollTop()>250)
			{
				// Si no existe dicho div, lo añadiremos al final del body
				if($("#botonSubir").length===0)
				{
					// añadimos el div al final de la pagina
					$("body").append("<div id='botonSubir' title='Subir'><i class='fa fa-angle-up fa-3x'></i></div>");
					// Creamos el evento click para subir al inicio de la
					// página cuando se pulse nuestro botón
					$("#botonSubir").click(function(){
						// Indicamos lo que tiene que hacer la animación y el
						// tiempo que tiene que durar
						$('html,body').animate({scrollTop:0},{duration:"slow"})
					});
				}
				// mostramos el boton
				$("#botonSubir").fadeIn();
			}else{
				// escondemos el boton
				$("#botonSubir").fadeOut();
			}
		}
		// Ejecutamos la función manualmente, ya que no todos los navegadores
		// ejecutan el evento scroll al cargar una página, aunque se posicione
		// en una posición inferior con algún "ancla"
		crearBoton();

		/**
		 * Si se ejecuta el evento scroll o el evento resize, se ejecuta la
		 * función crearBoton()
		 */
		$(document).scroll(function(){
			crearBoton();
		});
		$(window).resize(function(){
			crearBoton();
		});
    });


