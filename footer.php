<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package veropeluqueria
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="http://plantilla-web-simple.local/inicio/"><img class="imagenLogoFooter" src="http://plantilla-web-simple.local/wp-content/uploads/2019/08/Vero-Peluqueria.png" alt="Logo de la web" /></a>

			<p>®2019, DERECHOS RESERVADOS</p>

			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer',
				) );
			?>
			<div class="socialFooter">
				<a href="mailto:geser.geser51@gmail.com" target="_blank" rel="nofollow"><span class="dashicons dashicons-email-alt"></span></a>
				<a href="https://www.facebook.com/geseradvance51/" target="_blank" rel="nofollow"><span class="dashicons dashicons-facebook"></span></a>
				<a href="https://twitter.com/GAdvance51" target="_blank" rel="nofollow" ><span class="dashicons dashicons-twitter"></span></a>
			</div>	

			<div class="contactoFooter">
				<img class="imagenQRFooter" src="http://plantilla-web-simple.local/wp-content/uploads/2019/08/QR-Vero.png" alt="Código QR"/>
				<p>TLF: 647 95 40 70</p>
			</div>

			<div class="horarioFooter">
				<p class="tituloHorarioFooter">HORARIO</p>
				<p>LUNES - SABADO: 8:30 a 14:00 y 17:00 a 20:00</p>
				<p>DOMINGOS: CERRADO</p>

				<a href=""><div class="citaFooter"><span class="dashicons dashicons-calendar-alt"></span>RESERVA</div></a>
			</div>	

		</div><!-- .site-info -->
		<div class="atribuciones">
				<div>ATRIBUCIONES: Iconos diseñados por <a href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/"     title="Flaticon">www.flaticon.com</a></div><div>Iconos diseñados por <a href="https://www.flaticon.es/autores/nikita-golubev" title="Nikita Golubev">Nikita Golubev</a> from <a href="https://www.flaticon.es/"     title="Flaticon">www.flaticon.com</a></div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
